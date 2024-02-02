<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function schulungsleiter(): HasOne
    {
        return $this->hasOne(Couleurstudent::class);
    }
}
