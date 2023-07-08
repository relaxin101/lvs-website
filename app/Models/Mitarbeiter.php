<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitarbeiter extends Model
{
    use HasFactory;

    //Mitglieds-status
    public const RBE_AKTIVER = 'Aktiver';
    public const RBE_ASSI = 'Assi';
    public const RBE_ALTSCHEISSER= 'Altscheißer';
    public const RBE_EHRENMITGLIED = 'Ehrenmitglied';

    //Funktionen
    public const RBE_VERWALTUNG = 'Verwaltung';
    public const RBE_PRAETOR = 'Prätor';
    public const RBE_SEMLEI = 'Seminarleiter';

}
