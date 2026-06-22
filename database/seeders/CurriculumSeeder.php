<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Module;
use App\Models\Lesson;

class CurriculumSeeder extends Seeder
{
    public function run(): void
    {
        $course = Course::where('title', 'like', '%Full-Stack%')->first();
        if (!$course) {
            $course = Course::first(); // fallback
        }

        if (!$course) return;

        // Module 1
        $mod1 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 1: Introduction to Web Architectures'
        ]);

        Lesson::create([
            'module_id' => $mod1->id,
            'string_id' => 'L1',
            'title' => 'Internet Protocols & Web Handshakes',
            'duration' => '10:42',
            'video_url' => 'https://test-streams.mux.dev/x36xhq/x36xhq.m3u8',
            'video_type' => 'application/x-mpegURL'
        ]);

        Lesson::create([
            'module_id' => $mod1->id,
            'string_id' => 'L2',
            'title' => 'Client-Server Paradigms & HTTP/2',
            'duration' => '14:15',
            'video_url' => 'https://playertest.longtailvideo.com/adaptive/oceans/oceans.m3u8',
            'video_type' => 'application/x-mpegURL'
        ]);

        // Module 2
        $mod2 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 2: Front-End Development Stack'
        ]);

        Lesson::create([
            'module_id' => $mod2->id,
            'string_id' => 'L3',
            'title' => 'Advanced CSS Layouts: Grid & Flexbox',
            'duration' => '18:22',
            'video_url' => 'https://vjs.zencdn.net/v/oceans.mp4',
            'video_type' => 'video/mp4'
        ]);

        Lesson::create([
            'module_id' => $mod2->id,
            'string_id' => 'L4',
            'title' => 'JavaScript DOM Operations & Event Loops',
            'duration' => '22:10',
            'video_url' => 'https://vjs.zencdn.net/v/oceans.mp4',
            'video_type' => 'video/mp4'
        ]);

        // Module 3
        $mod3 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 3: APIs & Back-End Normalization'
        ]);

        Lesson::create([
            'module_id' => $mod3->id,
            'string_id' => 'L5',
            'title' => 'Creating RESTful Handlers with Node.js',
            'duration' => '25:15',
            'video_url' => 'https://vjs.zencdn.net/v/oceans.mp4',
            'video_type' => 'video/mp4'
        ]);

        Lesson::create([
            'module_id' => $mod3->id,
            'string_id' => 'L6',
            'title' => 'Database Schema Design & SQL Transactions',
            'duration' => '19:40',
            'video_url' => 'https://vjs.zencdn.net/v/oceans.mp4',
            'video_type' => 'video/mp4'
        ]);
    }
}
