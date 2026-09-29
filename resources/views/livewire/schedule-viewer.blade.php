<div>
    <h1 class="mb-4">Jadwal Mata Pelajaran</h1>

    @if ($errorMessage)
        <div class="alert alert-danger">{{ $errorMessage }}</div>
    @endif

    <ul class="nav nav-tabs mb-3">
        @foreach ($validDays as $day)
            <li class="nav-item">
                <button
                    class="nav-link @if($selectedDay === $day) active @endif"
                    wire:click="selectDay('{{ $day }}')"
                >
                    {{ ucfirst($day) }}
                </button>
            </li>
        @endforeach
    </ul>

    @if ($this->schedules->isEmpty())
        <div class="alert alert-info">Tidak ada jadwal untuk hari {{ ucfirst($selectedDay) }}.</div>
    @else
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jam</th>
                    <th>Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->schedules as $index => $schedule)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ \Carbon\Carbon::parse($schedule->start_time)->format('H:i') }} - {{ \Carbon\Carbon::parse($schedule->end_time)->format('H:i') }}</td>
                        <td>{{ $schedule->subject->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
