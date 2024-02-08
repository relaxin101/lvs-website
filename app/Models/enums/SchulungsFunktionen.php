<?php

namespace App\Models\enums;

enum SchulungsFunktionen : string
{
    use EnumFunctions;
    case Schulungsleiter = 'Schulungsleiter';
    case Praefekt = 'Präfekt';
    case Verwaltungsleiter = 'Verwaltungsleiter';
    case Verwaltung = 'Verwaltung';
    case Medien = 'Medien';
    case Seminarleiter = 'Seminarleiter';
    case Praetoren = 'Prätoren';
}
