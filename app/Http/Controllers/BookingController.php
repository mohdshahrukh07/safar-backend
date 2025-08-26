<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Data\BookingData;
use App\Models\TravelPackege;
use BookingService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function show(BookingData $request) {}

    public function book(BookingData $request)
    {
        return $this->handleAction(function () use ($request) {
            $travelPackage = TravelPackege::where('id', $request->travelPackegeId);

            if (!$travelPackage || empty($travelPackage)) {
                return response()->json(['message' => "travel package not found", 'status' => false], 404);
            }
            if (!auth()->check()) {
                return response()->json(['message' => "you must be logged in to book a package", 'status' => false], 401);
            }
            if ($request->adult <= 0 || $request->adult  === null) {
                return response()->json(['message' => "At least one adult is required", 'status' => false], 400);
            }
            if ($request->startDate > Carbon::now() == false) {
                return response()->json(['message' => "Start date must be in the future", 'status' => false], 400);
            }
            $booking = new Booking;

            DB::transaction(function () use ($booking, $request, $travelPackage) {
                $booking->user_id = 1;
                $booking->travel_packege_id = $request->travelPackegeId;
                $booking->address = $request->address;
                $booking->start_date = Carbon::createFromFormat('d/m/Y', $request->startDate);
                $booking->end_date   = Carbon::createFromFormat('d/m/Y', $request->startDate)->addDays(3);
                $booking->adult = $request->adult;
                $booking->teenagers = $request->teenagers ?? 0;
                $booking->children = $request->children ?? 0;
                //unique booking code

                $bookingService = new BookingService();

                $booking->booking_code = $bookingService->generateBookingCode($travelPackage);

                if ($booking->save()) {
                    return response()->json(['message' => "Your Package successFully booked", 'status' => true], 201);
                }
            });
        });
    }

    public function bookedList(Request $request) {}
    public function destroy(Request $request) {}
}
