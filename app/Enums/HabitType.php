<?php

namespace App\Enums;

enum HabitType:string
{
    case BINARY = 'binary';
    case QUANTITATIVE = 'quantitative';

    public function label(): string
    {
        return match($this) {
            self::BINARY => 'Hábitos donde solo importa si lo hiciste o no.',
            self::QUANTITATIVE => 'hábitos donde importa cuánto hiciste.',
        };
    }
}
