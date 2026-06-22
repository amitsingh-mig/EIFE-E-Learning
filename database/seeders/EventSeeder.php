<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Course;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $course = Course::where('title', 'like', '%Full-Stack%')->first() ?? Course::first();
        $courseId = $course ? $course->id : null;

        Event::create([
            'title' => 'Module-1 API Design & TCP Handshakes Webinar Q&A',
            'time' => 'June 12, 15:00 - 16:30 IST',
            'desc' => 'Join Dr. Ramesh Sharma for a live review of HTTP/2 multiplexing, headers compression, and binary framing layers. Attendance is mandatory for bilateral credits validation.',
            'linkText' => 'Enter Zoom Webinar',
            'linkUrl' => 'https://zoom.us/mock-webinar-gnc',
            'course_id' => $courseId,
        ]);

        Event::create([
            'title' => 'Introduction to AI Ethics & Bias Normalization',
            'time' => 'June 15, 10:00 - 11:30 IST',
            'desc' => 'A live broadcast lecture streaming from the main auditorium of Guru Nanak College campus. Speaker: Guest Lecturer Dr. S. K. Subramanian.',
            'linkText' => 'Enter Stream Room',
            'linkUrl' => 'https://youtube.com/mock-eife-stream',
            'course_id' => $courseId,
        ]);

        Event::create([
            'title' => 'Python Scope Variables Online Quiz',
            'time' => 'June 18, 23:59 IST Deadline',
            'desc' => 'Online portal multiple-choice evaluation covering variables scope, logic arrays, class polymorphism, and software modules in Python.',
            'linkText' => 'Open Exam Portal',
            'linkUrl' => 'unistry.html',
            'course_id' => $courseId,
        ]);

        Event::create([
            'title' => 'Project: JSON Parser Structure Submission',
            'time' => 'June 19, 23:59 IST Deadline',
            'desc' => 'Zip file upload containing client JavaScript parser utilities and connection handshake log validators. Needs to follow code guidelines.',
            'linkText' => 'Open Assignments Page',
            'linkUrl' => '#',
            'course_id' => $courseId,
        ]);
    }
}
