<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\University;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            // ---------- St. Petersburg State University ----------
            [
                'slug'        => 'spbu-py-prog',
                'univ_slug'   => 'spbu',
                'title'       => 'Intro to Python & Software Principles',
                'thumbnail'   => 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Computer Science',
                'sub_subject' => 'Programming Fundamentals',
                'language'    => 'English',
                'type'        => 'Free Audit',
                'status'      => 'Active',
                'start_date'  => '2026-07-25',
                'end_date'    => '2026-12-31',
                'desc'        => 'Understand variables, logic loops, basic classes, and modular software paradigms in Python. Designed for student exchanges.',
            ],
            [
                'slug'        => 'spbu-ds-algo',
                'univ_slug'   => 'spbu',
                'title'       => 'Algorithms and Complex Data Structures',
                'thumbnail'   => 'https://images.unsplash.com/photo-1516116211223-5c359a36298a?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Computer Science',
                'sub_subject' => 'Algorithms & Data Structures',
                'language'    => 'English',
                'type'        => 'Verified Certificate',
                'status'      => 'Active',
                'start_date'  => '2026-08-15',
                'end_date'    => '2026-12-15',
                'desc'        => 'Examine tree traversals, search complexities, sorting matrices, graph networks, and algorithmic dynamic programming paths.',
            ],
            [
                'slug'        => 'spbu-gen-ai',
                'univ_slug'   => 'spbu',
                'title'       => 'Generative AI Foundations & Transformer Architectures',
                'thumbnail'   => 'https://images.unsplash.com/photo-1677442136019-21780efad99a?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Artificial Intelligence',
                'sub_subject' => 'Generative AI',
                'language'    => 'English',
                'type'        => 'Professional Specialization',
                'status'      => 'Active',
                'start_date'  => '2026-09-01',
                'end_date'    => '2027-01-15',
                'desc'        => 'Study natural language generation, Large Language Models (LLMs), attention mechanisms, and prompt tuning frameworks.',
            ],
            [
                'slug'        => 'spbu-deep-ln',
                'univ_slug'   => 'spbu',
                'title'       => 'Neural Networks and Deep Learning',
                'thumbnail'   => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Machine Learning',
                'sub_subject' => 'Deep Learning',
                'language'    => 'Russian',
                'type'        => 'Verified Certificate',
                'status'      => 'Active',
                'start_date'  => '2026-10-05',
                'end_date'    => '2026-12-30',
                'desc'        => 'Examine multi-layer perceptrons, backpropagation networks, convolutional layers (CNNs), and recurrent cells (RNNs).',
            ],
            [
                'slug'        => 'spbu-web-dev',
                'univ_slug'   => 'spbu',
                'title'       => 'Full-Stack Web Development & API Design',
                'thumbnail'   => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Software Development',
                'sub_subject' => 'Web Development',
                'language'    => 'English',
                'type'        => 'Free Audit',
                'status'      => 'Active',
                'start_date'  => '2026-07-10',
                'end_date'    => '2026-11-30',
                'desc'        => 'Build scalable backends using Node.js and Express. Connect relational database structures and construct clean RESTful interfaces.',
            ],

            // ---------- Moscow Aviation Institute (MAI) ----------
            [
                'slug'        => 'mai-robo-ai',
                'univ_slug'   => 'mai',
                'title'       => 'Robotics Control Systems & AI Navigation',
                'thumbnail'   => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Artificial Intelligence',
                'sub_subject' => 'Robotics AI',
                'language'    => 'English',
                'type'        => 'Professional Specialization',
                'status'      => 'Active',
                'start_date'  => '2026-02-10',
                'end_date'    => '2026-06-30',
                'desc'        => 'Study drone autonomy, Kalman filtering, localized SLAM, spatial coordinate transforms, and kinematics loops.',
            ],
            [
                'slug'        => 'mai-net-sec',
                'univ_slug'   => 'mai',
                'title'       => 'Aerospace Communication Systems & Network Security',
                'thumbnail'   => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Cyber Security',
                'sub_subject' => 'Network Security',
                'language'    => 'English',
                'type'        => 'Verified Certificate',
                'status'      => 'Active',
                'start_date'  => '2026-03-20',
                'end_date'    => '2026-08-25',
                'desc'        => 'Secure telemetry lines, encrypt satellite packets, block jamming attempts, and design firewalled communication layers.',
            ],

            // ---------- Guru Nanak College (Autonomous) ----------
            [
                'slug'        => 'gnc-ai-ethics',
                'univ_slug'   => 'gnc',
                'title'       => 'Legal Frameworks and Ethical Guidelines in AI',
                'thumbnail'   => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Artificial Intelligence',
                'sub_subject' => 'AI Ethics',
                'language'    => 'English',
                'type'        => 'Verified Certificate',
                'status'      => 'Active',
                'start_date'  => '2026-05-05',
                'end_date'    => '2026-10-12',
                'desc'        => 'Analyze biases, privacy rights, copyright parameters of Generative models, and regulatory guidelines (e.g. EU AI Act).',
            ],
            [
                'slug'        => 'gnc-data-vis',
                'univ_slug'   => 'gnc',
                'title'       => 'Business Analytics & Advanced Data Visualization',
                'thumbnail'   => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Data Science',
                'sub_subject' => 'Data Visualization',
                'language'    => 'English',
                'type'        => 'Verified Certificate',
                'status'      => 'Active',
                'start_date'  => '2026-06-01',
                'end_date'    => '2026-10-15',
                'desc'        => 'Construct executive dashboards using Tableau and Python frameworks (Plotly, Seaborn). Focus on data-driven storytelling.',
            ],

            // ---------- Chitkara University ----------
            [
                'slug'        => 'chitkara-deep-ml',
                'univ_slug'   => 'chitkara',
                'title'       => 'Neural Networks and Practical Reinforcement Learning',
                'thumbnail'   => 'https://images.unsplash.com/photo-1527474305487-b87b222841cc?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Machine Learning',
                'sub_subject' => 'Reinforcement Learning',
                'language'    => 'English',
                'type'        => 'Professional Specialization',
                'status'      => 'Upcoming',
                'start_date'  => '2026-11-01',
                'end_date'    => '2027-03-15',
                'desc'        => 'Implement Q-learning tables, policy gradients, Markov decision frameworks, and deep Q-networks (DQNs) using PyTorch.',
            ],
            [
                'slug'        => 'chitkara-devops',
                'univ_slug'   => 'chitkara',
                'title'       => 'DevOps Integration: Docker, Kubernetes & CI/CD',
                'thumbnail'   => 'https://images.unsplash.com/photo-1618401471353-b98aedd07871?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Software Development',
                'sub_subject' => 'DevOps',
                'language'    => 'English',
                'type'        => 'Verified Certificate',
                'status'      => 'Upcoming',
                'start_date'  => '2026-12-01',
                'end_date'    => '2027-04-10',
                'desc'        => 'Build continuous build loops, coordinate containers using Kubernetes pod structures, and monitor cluster services.',
            ],
            [
                'slug'        => 'chitkara-hack',
                'univ_slug'   => 'chitkara',
                'title'       => 'Ethical Hacking & Advanced Penetration Testing',
                'thumbnail'   => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=400',
                'category'    => 'Cyber Security',
                'sub_subject' => 'Ethical Hacking',
                'language'    => 'English',
                'type'        => 'Professional Specialization',
                'status'      => 'Active',
                'start_date'  => '2026-09-15',
                'end_date'    => '2027-01-20',
                'desc'        => 'Master network reconnaissance, SQL injections, privilege escalations, buffer overflows, and legal penetration methodologies.',
            ],
        ];

        foreach ($courses as $data) {
            $univ = University::where('slug', $data['univ_slug'])->firstOrFail();

            Course::updateOrCreate(
                ['slug' => $data['slug']],
                [
                    'university_id' => $univ->id,
                    'univ_name'     => $univ->name,
                    'univ_logo'     => $univ->logo,
                    'title'         => $data['title'],
                    'thumbnail'     => $data['thumbnail'],
                    'category'      => $data['category'],
                    'sub_subject'   => $data['sub_subject'],
                    'language'      => $data['language'],
                    'type'          => $data['type'],
                    'status'        => $data['status'],
                    'start_date'    => $data['start_date'],
                    'end_date'      => $data['end_date'],
                    'desc'          => $data['desc'],
                ]
            );
        }
    }
}
