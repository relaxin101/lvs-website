<?php

namespace App\Models\enums;

enum RossiStatus : string
{
    use EnumFunctions;
    case Assistent = 'Assistent';
    case Bursch = 'Bursch';
    case Altscheisser = 'Altscheisser';
}
