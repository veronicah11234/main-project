<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name', // Add first name field
        'last_name',  // Add last name field
        'avatar',     // Add avatar field
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
