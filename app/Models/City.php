<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;


    //relacion tabla Hotels
    public function hotels()
    {
        return $this->hasMany('App\Models\Hotel');
    }
}
