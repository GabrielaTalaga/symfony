<?php

namespace App\Entity\Enum;

enum TaskStatus: int
{
    case ACTIVE = 1;
    case DONE = 2;

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'Aktywne',
            self::DONE => 'Zakończone',
        };
    }
}
