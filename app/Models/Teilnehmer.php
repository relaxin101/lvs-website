<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Teilnehmer extends Model
{
    use HasFactory;
    protected $table = 'teilnehmer';

    public function couleurstudent(): BelongsTo
    {
        return $this->belongsTo(Couleurstudent::class);
    }

    public function anmeldungen(): HasMany
    {
        return $this->hasMany(Anmeldung::class);
    }
    public function schulungen(): HasManyThrough
    {
        return $this->hasManyThrough(Schulung::class, Anmeldung::class);
    }
}
