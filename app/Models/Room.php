<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=['roomID','roomType','roomStudent','rentPrice','dormName','status'];

    public function roomtoRent(){
        return $this->hasMany('App\Models\myRent');
    }

    public function roomtoUser(){
        return $this->hasMany('App\Models\User');
    }
}
