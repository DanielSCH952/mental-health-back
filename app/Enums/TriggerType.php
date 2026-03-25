<?php

namespace App\Enums;

enum TriggerType: string
{
    case STRESS = 'stress';
    case ANXIETY = 'anxiety';
    case SOCIAL = 'social';
    case BOREDOM = 'boredom';
    case HABIT = 'habit';
    case OTHER = 'other';

    public function labels(): string
    {
        return match ($this) {
            self::STRESS => 'Estrés.',
            self::ANXIETY => 'Ansiedad',
            self::SOCIAL => 'Social',
            self::BOREDOM => 'Aburrimiento',
            self::HABIT => 'Habito',
            self::OTHER => 'Otro'
        };
    }
}
