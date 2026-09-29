<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'day',
        'start_time',
        'end_time',
    ];

    /**
     * Get the subject that owns this schedule.
     *
     * @return BelongsTo<Subject, $this>
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Scope to filter schedules by day.
     *
     * @param  Builder<Schedule>  $query
     * @return Builder<Schedule>
     */
    public function scopeForDay(Builder $query, string $day): Builder
    {
        return $query->where('day', $day);
    }
}
