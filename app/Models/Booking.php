<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\house;

class Booking extends Model
{
    use HasFactory;
    use Notifiable;

    public function car()
    {
        return $this->belongsTo(house::class, 'car_id');
    }

    public function renter()
    {
        return $this->belongsTo(User2::class, 'renter_id');
    }
}
