<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    // Define the relationship with counties
    public function counties()
    {
        return $this->hasMany(County::class, 'country_id');
    }
}
