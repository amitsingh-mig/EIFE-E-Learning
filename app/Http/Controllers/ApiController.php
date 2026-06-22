<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Event;
use App\Models\Comment;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    // Get Course Curriculum (Modules and Lessons)
    public function getCurriculum($id)
    {
        $course = Course::with(['modules.lessons'])->find($id);
        
        if (!$course) {
            return response()->json(['error' => 'Course not found'], 404);
        }

        $user = Auth::user();
        $completedIds = [];

        if ($user) {
            $completedIds = $user->completedLessons()->pluck('string_id')->toArray();
        }

        $modulesData = $course->modules->map(function ($module) use ($completedIds) {
            return [
                'id' => $module->id,
                'title' => $module->title,
                'lessons' => $module->lessons->map(function ($lesson) use ($completedIds) {
                    return [
                        'id' => $lesson->string_id, // L1, L2 etc
                        'title' => $lesson->title,
                        'duration' => $lesson->duration,
                        'videoUrl' => $lesson->video_url,
                        'type' => $lesson->video_type,
                        'isCompleted' => in_array($lesson->string_id, $completedIds),
                    ];
                })
            ];
        });

        return response()->json([
            'title' => $course->title,
            'instructor' => 'Dr. Ramesh Sharma', // hardcoded for demo
            'university' => $course->university->name ?? 'Guru Nanak College',
            'modules' => $modulesData
        ]);
    }

    // Get Dashboard Events
    public function getEvents()
    {
        $events = Event::all()->map(function ($e) {
            return [
                'id' => 'evt-' . $e->id,
                'title' => $e->title,
                'time' => $e->time,
                'desc' => $e->desc,
                'linkText' => $e->linkText,
                'linkUrl' => $e->linkUrl,
            ];
        });

        return response()->json($events);
    }

    // Toggle Lesson Completion
    public function toggleLessonProgress(Request $request)
    {
        $user = Auth::user();
        if (!$user) return response()->json(['error' => 'Unauthenticated'], 401);

        $lessonStringId = $request->input('lesson_id');
        $isCompleted = $request->input('is_completed'); // boolean

        $lesson = \App\Models\Lesson::where('string_id', $lessonStringId)->first();
        if (!$lesson) return response()->json(['error' => 'Lesson not found'], 404);

        if ($isCompleted) {
            $user->completedLessons()->syncWithoutDetaching([$lesson->id => ['is_completed' => true]]);
        } else {
            $user->completedLessons()->detach($lesson->id);
        }

        return response()->json(['success' => true]);
    }

    // Get Comments
    public function getComments($lesson_id)
    {
        $comments = Comment::with(['user', 'replies.user'])
            ->where('lesson_string_id', $lesson_id)
            ->whereNull('parent_id')
            ->orderBy('created_at', 'desc')
            ->get();

        $formatted = $comments->map(function ($c) {
            return [
                'id' => $c->id,
                'author' => $c->user->name,
                'avatar' => 'https://ui-avatars.com/api/?name='.urlencode($c->user->name).'&background=random',
                'role' => 'student', // simplified
                'time' => $c->created_at->diffForHumans(),
                'text' => $c->text,
                'likes' => $c->likes,
                'hasLiked' => false,
                'replies' => $c->replies->map(function ($r) {
                    return [
                        'id' => $r->id,
                        'author' => $r->user->name,
                        'avatar' => 'https://ui-avatars.com/api/?name='.urlencode($r->user->name).'&background=random',
                        'role' => 'student',
                        'time' => $r->created_at->diffForHumans(),
                        'text' => $r->text,
                    ];
                })
            ];
        });

        return response()->json($formatted);
    }

    // Post Comment
    public function postComment(Request $request)
    {
        $user = Auth::user();
        if (!$user) return response()->json(['error' => 'Unauthenticated'], 401);

        $comment = Comment::create([
            'user_id' => $user->id,
            'lesson_string_id' => $request->input('lesson_id'),
            'text' => $request->input('text'),
            'parent_id' => $request->input('parent_id'), // null for root comments
        ]);

        return response()->json(['success' => true, 'comment_id' => $comment->id]);
    }

    // Like Comment
    public function likeComment(Request $request, $id)
    {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->increment('likes');
            return response()->json(['success' => true, 'likes' => $comment->likes]);
        }
        return response()->json(['error' => 'Not found'], 404);
    }
}
