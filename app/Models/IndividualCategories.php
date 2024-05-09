<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualCategories extends Model
{
    // use HasFactory;
    protected $fillable = [
        'individual_id',
        'category_id',
    ];
    
}
