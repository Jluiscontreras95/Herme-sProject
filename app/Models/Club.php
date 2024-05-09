<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name',
        'direction',
        'phone',
        'email'
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    public function couple()
    {
        return $this->belongsTo(Couple::class);
    }

    public function individuals()
    {
        return $this->belongsToMany(Individual::class, 'individual_clubs', 'individual_id', 'club_id');
    }

}
