<?php

namespace App\Models;
// namespace App;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'image', 'user_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
