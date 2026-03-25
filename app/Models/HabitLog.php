<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitLog extends Model
{
    /** @use HasFactory<\Database\Factories\HabitLogFactory> */
    use HasFactory;

    public const UPDATED_AT = null;

    protected $fillable = [
        'habit_id',
        'date',
        'consumed',
        'quantity',
        'note',
    ];

    public function habit()
    {
        return $this->belongsTo(Habit::class);
    }
}
