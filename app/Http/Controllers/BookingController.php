<?php

namespace App\Http\Controllers;

use App\Data\BookingData;
use App\Models\TravelPackege;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show(BookingData $request) {}

    public function book(Request $request)
    {
        $travelPackage = TravelPackege::where('id', $request->id);

        if(!$travelPackage || empty($travelPackage)){
            return response()->json(['message'=>"travel package not found"],404);
        }
        
    }

    public function bookedList(Request $request) {}
    public function destroy(Request $request) {}
}
