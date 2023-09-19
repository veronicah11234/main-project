<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'avatar',
        'bio',
    ];

    public function user()
    {
        return $this->hasOne(Profile::class);
    }
}
