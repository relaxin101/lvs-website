<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teilnehmer extends Model
{
    use HasFactory;
    protected $table = 'teilnehmer';

    public function couleurstudent(): BelongsTo
    {
        return $this->belongsTo(Couleurstudent::class);
    }

    public function schulung(): BelongsToMany
    {
        return $this->belongsToMany(Schulung::class, 'teilnehmer_schulungen');
    }
}
