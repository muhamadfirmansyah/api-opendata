<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = ["name", "category_id", "city_id", "district_id", "latitude", "longitude"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(Area::class, "city_id", "id");
    }

    public function district()
    {
        return $this->belongsTo(Area::class, "district_id", "id");
    }
}
