<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelPackege extends Model
{
    //
    protected $fillable = [
        "tourCode",
        "title",
        "location",
        "discount",
        "cutprice",
        "price",
        "discription1",
        "discription2",
        "day1",
        "day2",
        "day3",
        "urlToImage",
        "image",
        "img1",
        "img2",
        "img3",
        "img4",
        "img5",
        "destination",
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'travel_packege_id');
    }
}
