<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurantPicture()
    {
        return $this->hasMany(RestaurantPircture::class);
    }

    public function reservedTable()
    {
        return $this->hasMany(ReservedTable::class);
    }
}
