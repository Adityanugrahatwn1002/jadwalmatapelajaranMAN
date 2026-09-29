<div>
    <div class="card schedule-card">
        <div class="card-header">
            <h5>Jadwal Mata Pelajaran</h5>
            <p class="text-muted mb-0 mt-1">Pilih hari untuk melihat jadwal pelajaran</p>
        </div>
        <div class="card-body">
            @if ($errorMessage)
                <div class="alert alert-danger">{{ $errorMessage }}</div>
            @endif

            <div class="day-tabs">
                @foreach ($validDays as $day)
                    <button
                        class="day-tab @if($selectedDay === $day) active @endif"
                        wire:click="selectDay('{{ $day }}')"
                    >
                        {{ ucfirst($day) }}
                    </button>
                @endforeach
            </div>

            @if ($this->schedules->isEmpty())
                <div class="empty-state">
                    <div class="empty-icon">&#128197;</div>
                    <p class="mb-0">Tidak ada jadwal untuk hari {{ ucfirst($selectedDay) }}.</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped schedule-table">
                        <thead>
                            <tr>
                                <th style="width: 60px;">No</th>
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
                </div>
            @endif
        </div>
    </div>
</div>
