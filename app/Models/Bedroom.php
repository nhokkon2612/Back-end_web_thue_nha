<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    use HasFactory;

    public function home()
    {
        return $this->hasMany(Home::class,'home_id');
    }
}
