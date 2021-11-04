<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public function bedroom()
    {
        return $this->belongsTo(Bedroom::class, 'bedroom_id');
    }

    public function bathroom()
    {
        return $this->belongsTo(Bathroom::class, 'bathroom_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function levelprice()
    {
        return $this->belongsTo(LevelPrice::class, 'price_id');
    }

    public function levelsquared()
    {
        return $this->belongsTo(LevelSquared::class, 'squared_id');
    }

    public function homestatus()
    {
        return $this->belongsTo(HomeStatus::class, 'status_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function media()
    {
        return $this->belongsToMany(Media::class, 'home_media', 'home_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
