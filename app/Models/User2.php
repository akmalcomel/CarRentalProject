<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;



class User2 extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $table = 'user2';

    // Other properties and methods of your User2 model

    protected $fillable = [

        'email',
        'password',
    ];

    public function favorites()
    {
        return $this->belongsToMany(house::class, 'favorites', 'user_id', 'house_id')->withTimestamps();
    }
}
