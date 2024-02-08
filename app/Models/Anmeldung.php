<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anmeldung extends Model
{
    protected $table = 'anmeldungen';
    protected $guarded = [];

    public function teilnehmer(): BelongsTo
    {
        return $this->belongsTo(Teilnehmer::class);
    }

    public function schulung(): BelongsTo
    {
        return $this->belongsTo(Schulung::class);
    }
}
