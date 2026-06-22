<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\University;

class UniversitySeeder extends Seeder
{
    public function run(): void
    {
        $universities = [
            [
                'slug'      => 'spbu',
                'country'   => 'RU',
                'abbr'      => 'SP',
                'name'      => 'St. Petersburg State University',
                'url'       => 'spbu',
                'url_label' => 'english.spbu.ru',
                'logo'      => 'image/logo/St. Petersburg State University logo.png',
                'founded'   => 1724,
                'location'  => 'St. Petersburg, Russia',
                'email'     => 'admission@spbu.ru',
                'phone'     => '+7 (812) 328-97-01',
                'desc'      => 'Established in 1724 by Peter the Great, St. Petersburg State University is the oldest institution of higher education in Russia. It is a world-class center for science, education, and culture, offering highly sought-after programs.',
            ],
            [
                'slug'      => 'mai',
                'country'   => 'RU',
                'abbr'      => 'MA',
                'name'      => 'Moscow Aviation Institute (MAI)',
                'url'       => 'unistry?univ=mai',
                'url_label' => 'en.mai.ru',
                'logo'      => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Emblem_of_Moscow_Aviation_Institute.svg/120px-Emblem_of_Moscow_Aviation_Institute.svg.png',
                'founded'   => 1930,
                'location'  => 'Moscow, Russia',
                'email'     => 'int@mai.ru',
                'phone'     => '+7 (499) 158-40-43',
                'desc'      => 'Moscow Aviation Institute is one of the world\'s leading engineering universities for aerospace technology. MAI offers high-tech education, cutting-edge labs, and strong international partnerships.',
            ],
            [
                'slug'      => 'gnc',
                'country'   => 'IN',
                'abbr'      => 'GN',
                'name'      => 'Guru Nanak College (Autonomous)',
                'url'       => 'gnc',
                'url_label' => 'gurunanakcollege.edu.in',
                'logo'      => 'https://gurunanakcollege.edu.in/images-gnc/logo/gnc-logo.png',
                'founded'   => 1971,
                'location'  => 'Chennai, Tamil Nadu, India',
                'email'     => 'principal@gurunanakcollege.edu.in',
                'phone'     => '+91-44-22451746',
                'desc'      => 'Guru Nanak College (Autonomous) is a premier multi-disciplinary institution in Chennai, committed to offering quality higher education and fostering excellence.',
            ],
            [
                'slug'      => 'chitkara',
                'country'   => 'IN',
                'abbr'      => 'CU',
                'name'      => 'Chitkara University',
                'url'       => 'unistry?univ=chitkara',
                'url_label' => 'chitkara.edu.in',
                'logo'      => 'https://upload.wikimedia.org/wikipedia/commons/e/ec/Chitkara_University%2C_Punjab_logo.png',
                'founded'   => 2002,
                'location'  => 'Rajpura, Punjab, India',
                'email'     => 'admissions@chitkara.edu.in',
                'phone'     => '+91-95011-05714',
                'desc'      => 'Chitkara University is a premier, NAAC A+ accredited institution. It has established itself as an education powerhouse offering industry-linked programs.',
            ],
        ];

        foreach ($universities as $data) {
            University::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
