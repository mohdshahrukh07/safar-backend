<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\TravelPackege;

class BookingService
{
    public function generateBookingCode(TravelPackege $travelPackege): string
    {
        $user = Auth::guard('sanctum')->user();
        $bookingData = Booking::withTrashed()->where(['user_id' => $user->id, 'travel_packege_id' => $travelPackege->id])->get();

        $bookingCount = $bookingData->count() + 1;

        $bookingCode = "$user->username-$travelPackege->tourCode-$bookingCount";
        return $bookingCode;
    }
    public function prepareTotalBookingPrice($booking, $packagePrice)
    {
        $total = 0;
        if ($booking) {
            $total += $packagePrice * $booking->adults;
            $total += $packagePrice * $booking->teenagers * 0.4;
            $total += $packagePrice * $booking->children * 0.2;
        }

        return $total;
    }
}
