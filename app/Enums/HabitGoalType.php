<?php

namespace App\Enums;

enum HabitGoalType:string
{
    case QUIT = 'quit';
    case REDUCE = 'reduce';

    public function label(): string
    {
        return match($this) {
            self::QUIT => 'Eliminar.',
            self::REDUCE => 'Reducir',
        };
    }
}
