<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    /** @use HasFactory<\Database\Factories\AchievementFactory> */
    use HasFactory;

    public const UPDATED_AT = null;

    protected $fillable = [
        'name',
        'description',
        'days_required',
        'icon',
        'motivational_message',
        'created_at',
    ];
}
