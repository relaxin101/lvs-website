<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Couleurstudent extends Model
{
    use HasFactory;

    protected $table = 'couleurstudenten';

    public function verbindungen(): BelongsToMany
    {
        return $this->belongsToMany(Verbindung::class);
    }
}
