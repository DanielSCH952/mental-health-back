<?php

namespace App\Models;

use App\Enums\HabitGoalType;
use App\Enums\HabitType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    /** @use HasFactory<\Database\Factories\HabitFactory> */
    use HasFactory;

    public const UPDATED_AT = null;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'type',
        'goal_type',
    ];

    protected function casts()
    {
        return [
            'type' => HabitType::class,
            'goal_type' => HabitGoalType::class
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
