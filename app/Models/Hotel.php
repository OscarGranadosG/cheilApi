<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hotel extends Model
{
    use HasFactory;

    protected $table = "hotels";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",
        "phone",
        "address",
        "description",
        "city_id"
    ];

    public static function getHotels() {
        return DB::table('hotels')->get();
    }

    public static function saveHotel( $request ) {
        $hotel = new Hotel;
        $hotel->name = $request['name'];
        $hotel->phone = $request['phone'];
        $hotel->address = $request['address'];
        $hotel->description = $request['description'];
        $hotel->city_id = $request['city_id'];

        return $hotel->save();
    }

    public static function deleteHotel( $id ) {
        return DB::table('hotels')->where('id', $id)->delete();
    }

    public static function getHotel( $id ) {
        return DB::table('hotels')->where('id', $id)->get();
    }

    //relacion City
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
