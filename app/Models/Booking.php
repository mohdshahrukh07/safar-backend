<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\str;

class Booking extends Model
{
    //
    protected $fillable = [
        'uuid',
        'user_id',
        'travel_packege_id',
        'address',
        'start_date',
        'end_date',
        'adult',
        'teenagers',
        'children',

    ];


    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = (string) Str::uuid();
            }
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function booking(){
        $this->belongsTo(TravelPackege::class);
    }
}
