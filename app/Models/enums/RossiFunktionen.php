<?php

namespace App\Models\enums;

enum RossiFunktionen: string
{
    use EnumFunctions;
    case RossMama = 'Ross-Mama';
    case RossPapa = 'Ross-Papa';
    case JUBEL = 'Jubel';
    case Wunderlich = 'Wunderlich';
    case Normal = 'Normal';
}
