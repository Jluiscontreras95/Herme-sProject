<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    // use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'birth_date'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'individual_categories','category_id',  'individual_id');
    }

    public function degrees()
    {
        return $this->belongsToMany(Degree::class, 'individual_degrees', 'degree_id', 'individual_id');
    }

    public function clubs()
    {
        return $this->belongsToMany(Club::class, 'individual_clubs', 'club_id' , 'individual_id');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'individual_teams', 'team_id', 'individual_id');
    }


}
