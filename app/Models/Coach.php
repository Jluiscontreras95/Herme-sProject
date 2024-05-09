<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    // use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'club_id'
    ];

    public function club()
    {
        return $this->hasOne(Club::class);
    }
}
