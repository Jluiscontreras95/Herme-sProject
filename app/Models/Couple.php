<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couple extends Model
{
    // use HasFactory;
    protected $fillable = [
        'individual_id_primary',
        'individual_id_secondary',
        'club_id'
    ];

    public function club()
    {
        return $this->hasOne(Club::class);
    }
}
