<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            'Matematika',
            'Bahasa Indonesia',
            'Fisika',
            'Bahasa Arab',
            'Bahasa Inggris',
            'Biologi',
            'Sejarah',
            'Informatika',
            'Kimia',
            'Ekonomi',
            'Fiqih',
            'PPKn',
            'Al-Quran Hadis',
            'PJOK',
            'Sosiologi',
            'Seni Budaya',
            'Akidah Akhlak',
        ];

        foreach ($subjects as $name) {
            Subject::create(['name' => $name]);
        }
    }
}
