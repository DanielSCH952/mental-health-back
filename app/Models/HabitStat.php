<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitStat extends Model
{
    /** @use HasFactory<\Database\Factories\HabitStatFactory> */
    use HasFactory;

    public const UPDATED_AT = null;

    protected $fillable = [
        'habit_id',
        'total_clean_days',
        'total_consumption_days',
        'total_quantity_consumed',
        'money_saved',
        'created_at',
    ];

    public function habit()
    {
        return $this->belongsTo(Habit::class);
    }
}
