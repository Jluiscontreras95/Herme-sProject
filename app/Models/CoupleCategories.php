<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoupleCategories extends Model
{
    // use HasFactory;
    protected $fillable = [
        'couple_id',
        'category_id'
    ];
}
