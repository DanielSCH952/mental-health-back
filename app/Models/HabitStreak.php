<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitStreak extends Model
{
    /** @use HasFactory<\Database\Factories\HabitStreakFactory> */
    use HasFactory;

    public const UPDATED_AT = null;

    protected $fillable = [
        'habit_id',
        'current_streak',
        'longest_streak',
        'last_calculated_at',
        'created_at',
    ];

    public function habit()
    {
        return $this->belongsTo(Habit::class);
    }
}
