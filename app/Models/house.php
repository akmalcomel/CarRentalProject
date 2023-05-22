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
    return $this->belongsToMany(User::class, 'favorites', 'house_id', 'user_id')->withTimestamps();
}

}
