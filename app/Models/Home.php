<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public function bedroom()
    {
        return $this->belongsTo(Bedroom::class,'bedroom_id');
    }

    public function bathroom()
    {
        return $this->belongsTo(Bathroom::class,'bathroom_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function levelprice()
    {
        return $this->belongsTo(LevelPrice::class,'price_id');
    }

    public function levelsquared()
    {
        return $this->belongsTo(LevelSquared::class,'squared_id');
    }

    public function roomstatus()
    {
        return $this->belongsTo(RoomStatus::class,'status_id');
    }

    public function location()
    {
        return $this->belongsToMany(Home::class,'home_location','location_id');
    }
}
