<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Data\BookingData;
use App\Models\TravelPackege;
use App\Services\BookingService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function show(Request $request)
    {
        $request->validate([
            'travel_id' => 'required|string'
        ]);
        return $this->handleAction(function () use ($request) {
            $user  = auth()->user() ?? null;

            //check travel package should be exist
            $travelPackage = TravelPackege::where('id', $request->travel_id)->first();
            if (!$travelPackage || empty($travelPackage)) {
                return response()->json(['message' => "Travel package not found", 'status' => false], 404);
            }
            // to check user have active bookings
            $activeBookings = false;
            if (isset($user) && ! empty($user)) {
                $nowDate = Carbon::now();
                $bookings = Booking::where(['user_id' => $user->id, 'travel_packege_id' => $travelPackage->id])->where('start_date', '<=', $nowDate)->get();
                $activeBookings = ($bookings && $bookings->count() > 0) ? true : false;
            }

            $result = [
                'travelPackage' => $travelPackage,
                'activeBooking' => $activeBookings,
                'allowToBook' => auth()->user() ? true : false
            ];

            return response(['data' => array(...$result), 'status' => true], 200);
        });
    }

    public function book(BookingData $request)
    {
        return $this->handleAction(function () use ($request) {
            $travelPackage = TravelPackege::where('id', $request->travelPackegeId)->first();
            if (!$travelPackage || empty($travelPackage)) {
                return response()->json(['message' => "travel package not found", 'status' => false], 404);
            }
            if (!Auth::guard('sanctum')->check()) {
                return response()->json(['message' => "you must be logged in to book a package", 'status' => false], 401);
            }
            if ($request->adults <= 0 || $request->adults  === null) {
                return response()->json(['message' => "At least one adult is required", 'status' => false], 400);
            }
            if ($request->startDate > Carbon::now() == false) {
                return response()->json(['message' => "Start date must be in the future", 'status' => false], 400);
            }
            $booking = new Booking;
            $result = [];
            DB::transaction(function () use (&$result, $request, $travelPackage, &$booking) {
                $booking->user_id = 1;
                $booking->travel_packege_id = $request->travelPackegeId;
                $booking->address = $request->address;
                $booking->start_date = Carbon::createFromFormat('Y-m-d', $request->startDate);
                $booking->end_date   = Carbon::createFromFormat('Y-m-d', $request->startDate)->addDays(3);
                $booking->adults = $request->adults;
                $booking->teenagers = $request->teenagers ?? 0;
                $booking->children = $request->children ?? 0;

                $bookingService = new BookingService();
                $booking->total_price = $bookingService->prepareTotalBookingPrice($booking, $travelPackage->price);
                $booking->booking_code = $bookingService->generateBookingCode($travelPackage);
                if ($booking->save()) {
                    $result = ['message' => "Your Package successFully booked", 'status' => true, 'statusCode' => 201];
                } else {
                    $result = ['message' => "failed to book your package", 'status' => false, 'statusCode' => 500];
                }
            });
            return Response($result, $result['statusCode']);
        });
    }

    public function bookedList()
    {
        return $this->handleAction(function () {
            $authUser = Auth::guard('sanctum');
            $user = $authUser->user();
            if (!isset($user) && empty($user)) {
                return response(['message' => 'you are not logged in', 'status' => false], 403);
            }

            $bookings = Booking::with('travelPackage')->where('user_id', $user->id)->get();
            $nowDate = Carbon::now();

            $result = [];
            if (isset($bookings) && $bookings->count() > 0) {
                foreach ($bookings as $booking) {

                    $showDeleteBtn  = $showCancelBtn = $booking->start < $nowDate  ? true : false;
                    $inProgress = ($booking->start >= $nowDate &&  $booking->end_date <= $nowDate) ? true : false;

                    $result[] = [
                        'uuid' => $booking->uuid,
                        'booking_code' => $booking->booking_code,
                        'title' => $booking->travelPackage->title,
                        'image' => $booking->travelPackage->urlToImage,
                        'start_date' => $booking->start_date,
                        'created_date' => $booking->created_at->format('d/m/Y'),
                        'showDeleteBtn' => $showDeleteBtn || !$inProgress,
                        'inProgress' => $inProgress,
                        'showCancelBtn' => $showCancelBtn,

                    ];
                }
            }
            return response()->json(['data' => $result, 'status' => true,], 200);
        });
    }
    public function fetch(Request $request) {}

    public function update(BookingData $request) {}

    public function destroy(Request $request) {}
}
