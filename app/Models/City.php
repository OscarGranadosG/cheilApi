<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class City extends Model
{
    use HasFactory;

    protected $table = "cities";

    protected $primaryKey = "id";

    protected $fillable = [
        "name"
    ];


    public static function getCities()
    {
        return DB::table('cities')->get();
    }

    //relacion tabla Hotels
    public function hotels()
    {
        return $this->hasMany('App\Models\Hotel');
    }
}
