<?php

namespace App\Models\enums;

trait EnumFunctions
{
    public static function  values(): array
    {
        $values = [];
        foreach (self::cases() as $case) {
            $values[] = $case->value;
        }
        return $values;
    }
}
