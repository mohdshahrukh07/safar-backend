<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\str;
use Illuminate\Support\Carbon;
class Booking extends Model
{
    //
    protected $fillable = [
        'uuid',
        'user_id',
        'travel_packege_id',
        'booking_code',
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
 // Mutator for start_date (before saving to DB)
    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = Carbon::parse($value);
    }

    // Accessor for start_date (after retrieving from DB)
    public function getStartDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    // Mutator for end_date
    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = Carbon::parse($value);
    }

    // Accessor for end_date
    public function getEndDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
 
}
