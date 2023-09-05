<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'email', 'phone', 'date', 'time', 'message'];
}

//       public function destination()
//     {
//         return $this->belongsTo(Destination::class);
//     }
// }
