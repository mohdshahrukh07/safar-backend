<?php

use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\TravelPackege;

class BookingService
{
    public function generateBookingCode(TravelPackege $travelPackege): string
    {
        $user = Auth::user();
        $bookingData = Booking::withTrashed()->where(['user_id' => $user->id, 'travel_packege_id' => $travelPackege->id])->get();

        $bookingCount = $bookingData ? $bookingData->count() + 1 : 1;

        $bookingCode = "$user->username-$travelPackege->code-$bookingCount";

        return $bookingCode;
    }
}
