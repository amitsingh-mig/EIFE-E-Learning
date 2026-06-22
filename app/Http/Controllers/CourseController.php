<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function show(string $id)
    {
        $course = Course::with('university')->where('slug', $id)->firstOrFail();

        // --- Level ---
        $titleLower = strtolower($course->title);
        $subLower   = strtolower($course->sub_subject ?? '');
        $level = 'Intermediate';
        if (str_contains($titleLower, 'intro') || str_contains($titleLower, 'principles') || str_contains($subLower, 'fundamental')) {
            $level = 'Beginner';
        } elseif (str_contains($titleLower, 'advanced') || str_contains($titleLower, 'deep') || str_contains($titleLower, 'neural') || str_contains($titleLower, 'transformer')) {
            $level = 'Advanced';
        }

        // --- Duration ---
        $weeks    = (int) round($course->start_date->diffInDays($course->end_date) / 7);
        $duration = $weeks > 0 ? "{$weeks} Weeks" : '12 Weeks';

        // --- Credits ---
        $credits = '3 Credits (5 ECTS equivalent)';
        if ($level === 'Advanced' || str_contains($course->type, 'Specialization')) {
            $credits = '4 Credits (6 ECTS equivalent)';
        } elseif (str_contains($course->type, 'Audit')) {
            $credits = '2 Credits (Audit Certificate)';
        }

        // --- Takeaways ---
        $takeaways = $this->getTakeaways($course->category);

        // --- Syllabus ---
        $syllabus = $this->getSyllabus($course->sub_subject);

        // --- Instructor ---
        $instructor = $this->getInstructor($course->university->slug);

        // --- Full description ---
        $fullDesc = "This professional educational unit has been established under the direct guidelines of the bilateral India-Russia Higher Education MoU. "
            . "Participants in \"{$course->title}\" will cover core theoretical frameworks, complete hands-on practical software models, and validate their credit points upon passing evaluations. "
            . "{$course->desc} "
            . "By enrolling in this course, you will join an active cohort of international exchange students, interact with professors from leading global institutions, and gain real-world implementation capabilities.";

        return view('pages.view_course', compact(
            'course', 'level', 'duration', 'credits',
            'takeaways', 'syllabus', 'instructor', 'fullDesc'
        ));
    }

    private function getTakeaways(string $category): array
    {
        if (in_array($category, ['Artificial Intelligence', 'Machine Learning'])) {
            return [
                'Deploy models using industry-standard machine learning pipelines.',
                'Understand theoretical mathematics underlying modern Neural Networks.',
                'Address biases and safety guidelines using current AI Ethics rules.',
                'Design and evaluate neural models against benchmark data matrices.',
            ];
        }
        if (in_array($category, ['Computer Science', 'Software Development'])) {
            return [
                'Write optimized, clean code matching clean software architecture.',
                'Construct modular components utilizing advanced algorithms.',
                'Identify runtime memory leaks and solve complex logic loops.',
                'Coordinate software releases with solid testing guidelines.',
            ];
        }
        if ($category === 'Cyber Security') {
            return [
                'Secure communication networks against system vulnerabilities.',
                'Implement cryptographic protocols for data transmission safety.',
                'Execute penetration tests in simulated academic environments.',
                'Analyze telemetry lines and satellite security modules.',
            ];
        }
        return [
            'Master foundational principles and related structures.',
            'Build professional projects to demonstrate learning competencies.',
            'Earn academic credits transferable through the bilateral MoU framework.',
            'Gain international peer networking opportunities across partner programs.',
        ];
    }

    private function getSyllabus(?string $subSubject): array
    {
        return [
            [
                'title'   => 'Course Onboarding & Theoretical Foundations',
                'details' => "Understand the historical background, core mathematical or systemic principles, and the development timeline of {$subSubject}. Familiarize yourself with the laboratory environments and software requirements.",
                'hours'   => 6,
            ],
            [
                'title'   => 'Intermediate Practical Implementations',
                'details' => 'Transition from abstract design concepts into practical algorithms. Build modules, configure libraries, and construct sample programs. Address core issues regarding database configurations or local environment states.',
                'hours'   => 10,
            ],
            [
                'title'   => 'Advanced Architectures & Optimization Systems',
                'details' => 'Explore complex patterns (e.g. attention blocks, server clusters, network parameters, or multi-threaded executions). Analyze structural limits, load factors, and debug complex stack errors.',
                'hours'   => 12,
            ],
            [
                'title'   => 'Bilateral Group Project & Transcript Evaluation',
                'details' => 'Collaborate in international cohorts to implement a capstone project solving a real-world MoU problem statement. Pass the final theoretical examination and complete credit validation transfer logs.',
                'hours'   => 14,
            ],
        ];
    }

    private function getInstructor(string $univSlug): array
    {
        $profiles = [
            'spbu'     => [
                'name'        => 'Dr. Elena Petrova',
                'credentials' => 'Professor of Computational Mathematics & Software Architectures, SPbSU',
                'bio'         => 'Dr. Elena Petrova has over 15 years of academic research experience in algorithmic sciences and bilateral curriculum developments between Russia and European universities.',
                'avatar'      => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=300',
            ],
            'gnc'      => [
                'name'        => 'Dr. Ramesh Sharma',
                'credentials' => 'Course Instructor & Department Chair, Guru Nanak College',
                'bio'         => 'Dr. Ramesh Sharma is an expert in computational systems and AI ethics. He coordinates international research cohorts and supervises transfer credits validations.',
                'avatar'      => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=300',
            ],
            'mai'      => [
                'name'        => 'Dr. Yuri Gagarin (Associate)',
                'credentials' => 'Chief Aero-Engineering Advisor, Moscow Aviation Institute',
                'bio'         => 'Dr. Yuri Gagarin (Associate) lectures on autonomous drone controls and telemetry security, specializing in high-performance computing designs.',
                'avatar'      => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=300',
            ],
            'chitkara' => [
                'name'        => 'Dr. Amit Verma',
                'credentials' => 'Director, School of Engineering, Chitkara University',
                'bio'         => 'Dr. Amit Verma holds a PhD in computer networks and specializes in DevOps pipelines, cloud integrations, and robust network infrastructures.',
                'avatar'      => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=300',
            ],
        ];

        return $profiles[$univSlug] ?? $profiles['spbu'];
    }
}
