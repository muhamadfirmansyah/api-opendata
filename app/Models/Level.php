<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $hidden = [
        "created_at",
        "updated_at"
    ];

    protected $fillable = ["name"];

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
