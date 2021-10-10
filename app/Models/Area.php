<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ["name", "level_id", "code", "latitude", "longitude"];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function city_places()
    {
        return $this->hasMany(Place::class, "city_id", "id");
    }

    public function district_places()
    {
        return $this->hasMany(Place::class, "district_id", "id");
    }
}
