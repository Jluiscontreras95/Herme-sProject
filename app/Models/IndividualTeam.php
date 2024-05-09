<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualTeam extends Model
{
    // use HasFactory;
    protected $fillable = [
        'individual_id',
        'team_id'
    ];
}
