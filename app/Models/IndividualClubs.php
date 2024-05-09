<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualClubs extends Model
{
    // use HasFactory;
    protected $fillable = [
        'individual_id',
        'club_id'
    ];
}
