<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    public function home()
    {
        return $this->belongsToMany(Home::class,'home_media','media_id');
    }
}
