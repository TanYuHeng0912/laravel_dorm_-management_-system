<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myRent extends Model
{
    use HasFactory;
    protected $fillable=['roomId','userId'];

    public function myRent(){
        return $this->belongsTo('App\Models\Room');
    }
   
    public function User(){
        return $this->belongsTo('App\Models\User');
    }

}