<?php

namespace App\Models;

use App\Models\enums\SchulungsFunktionen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Schulung extends Model
{
    use HasFactory;

    protected $table = 'schulungen';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'schulungsleiter',
        'landessenior',
        'landesphilstersenior',
        'landesvorsitzender',
        'jahr',
    ];

    public function schulungsleiter(): BelongsToMany
    {
        return $this
            ->belongsToMany(Mitarbeiter::class, 'mitarbeiter_schulungen')
            ->wherePivot('funktion', SchulungsFunktionen::Schulungsleiter->value);
    }

    public function praefekt(): BelongsToMany
    {
        return $this
            ->belongsToMany(Mitarbeiter::class, 'mitarbeiter_schulungen')
            ->wherePivot('funktion', SchulungsFunktionen::Praefekt->value);
    }

    public function verwaltungsleiter(): BelongsToMany
    {
        return $this
            ->belongsToMany(Mitarbeiter::class, 'mitarbeiter_schulungen')
            ->wherePivot('funktion', SchulungsFunktionen::Verwaltungsleiter->value);
    }

    public function seminarleiter(): BelongsToMany
    {
        return $this
            ->belongsToMany(Mitarbeiter::class, 'mitarbeiter_schulungen')
            ->wherePivot('funktion', SchulungsFunktionen::Seminarleiter->value);
    }

    public function praetoren(): BelongsToMany
    {
        return $this
            ->belongsToMany(Mitarbeiter::class, 'mitarbeiter_schulungen')
            ->wherePivot('funktion', SchulungsFunktionen::Praetoren->value);
    }

    public function verwalter(): BelongsToMany
    {
        return $this
            ->belongsToMany(Mitarbeiter::class, 'mitarbeiter_schulungen')
            ->wherePivot('funktion', SchulungsFunktionen::Verwaltung->value);
    }
}
