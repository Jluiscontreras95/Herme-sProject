<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];


    public function individuals()
    {
        return $this->belongsToMany(Individual::class, 'individual_categories', 'individual_id', 'categories_id');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_categories', 'categories_id', 'team_id');
    }
    

}
