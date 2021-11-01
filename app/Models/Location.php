<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsToMany(User::class,'user_location','user_id');
    }

    public function home()
    {
        return $this->belongsToMany(Home::class,'home_location','home_id');
    }
}
