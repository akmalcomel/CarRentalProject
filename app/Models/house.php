<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class house extends Model
{
    use HasFactory;
    public $table="houses";
    public $timestamps=false;

    public function users()
{
    return $this->belongsToMany(User2::class, 'favorites', 'house_id', 'user_id')->withTimestamps();
}

public function bookings()
{
    return $this->hasMany(Booking::class, 'car_id');
}

public function owners()
{
    return $this->belongsTo(User::class, 'ownerID');
}

public function averageRating()
{
    return $this->bookings()->whereNotNull('rate')->avg('rate');
}



}
