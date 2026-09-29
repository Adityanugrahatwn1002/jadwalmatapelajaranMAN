<?php

namespace App\Livewire;

use App\Models\Schedule;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ScheduleViewer extends Component
{
    public string $selectedDay = 'senin';

    public array $validDays = [
        'senin',
        'selasa',
        'rabu',
        'kamis',
        'jumat',
    ];

    public ?string $errorMessage = null;

    public function selectDay(string $day): void
    {
        if (! in_array($day, $this->validDays, true)) {
            $this->errorMessage = 'Hari yang dipilih tidak valid.';
            return;
        }

        $this->errorMessage = null;
        $this->selectedDay = $day;
    }

    #[Computed]
    public function schedules()
    {
        return Schedule::with('subject')
            ->forDay($this->selectedDay)
            ->orderBy('start_time')
            ->get();
    }

    public function render()
    {
        return view('livewire.schedule-viewer')
            ->layout('components.layouts.app');
    }
}
