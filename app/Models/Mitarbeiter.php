<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mitarbeiter extends Model
{
    use HasFactory;

    protected $table = 'mitarbeiter';
    protected $guarded = [];

    public function couleurstudent(): BelongsTo
    {
        return $this->belongsTo(Couleurstudent::class, 'id');
    }
    public function schulungen(): BelongsToMany
    {
        return $this
            ->belongsToMany(Schulung::class, 'mitarbeiter_schulungen')
            ->withPivot('funktion');
    }

}
