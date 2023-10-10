<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins'; // Set the table name if it's different from the model name.

    protected $fillable = [
        'name', 'email', 'password', // Define the fillable columns.
    ];

    // Add any relationships, custom methods, or additional configuration here.
}
