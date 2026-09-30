<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            'senin' => [
                ['07:00', '08:30', 'Matematika'],
                ['08:30', '10:00', 'Bahasa Indonesia'],
                ['10:15', '11:45', 'Fisika'],
                ['12:30', '14:00', 'Bahasa Arab'],
            ],
            'selasa' => [
                ['07:00', '08:30', 'Bahasa Inggris'],
                ['08:30', '10:00', 'Biologi'],
                ['10:15', '11:45', 'Sejarah'],
                ['12:30', '14:00', 'Informatika'],
            ],
            'rabu' => [
                ['07:00', '08:30', 'Kimia'],
                ['08:30', '10:00', 'Ekonomi'],
                ['10:15', '11:45', 'Fiqih'],
                ['12:30', '14:00', 'Bahasa Indonesia'],
            ],
            'kamis' => [
                ['07:00', '08:30', 'Matematika'],
                ['08:30', '10:00', 'PPKn'],
                ['10:15', '11:45', 'Bahasa Inggris'],
                ['12:30', '14:00', 'Al-Quran Hadis'],
            ],
            'jumat' => [
                ['07:00', '08:00', 'PJOK'],
                ['08:00', '09:00', 'Sosiologi'],
                ['09:30', '10:30', 'Seni Budaya'],
                ['10:30', '11:30', 'Akidah Akhlak'],
            ],
        ];

        foreach ($schedules as $day => $items) {
            foreach ($items as [$startTime, $endTime, $subjectName]) {
                $subject = Subject::where('name', $subjectName)->firstOrFail();

                Schedule::create([
                    'subject_id' => $subject->id,
                    'day' => $day,
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                ]);
            }
        }
    }
}
