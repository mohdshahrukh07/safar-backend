<?php

namespace App\Http\Controllers;

use App\Models\TravelPackege;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function homeList()
    {
        try {
    // Get the first package (or use ->find($id) if needed)
    $package = TravelPackege::first(); // or use find($id) if ID is known

    if (!$package) {
        return response()->json(['error' => 'No package found'], 404);
    }

    $selectedPackage = [
        "id" => $package->id,
        "title" => $package->title,
        "location" => $package->location,
        "discount" => $package->discount,
        "cutprice" => $package->cutprice,
        "price" => $package->price,
        "urlToImage" => $package->urlToImage,
        "destination" => $package->destination,
        "packageLink" => "/bookpage/" . $package->id,
    ];

    // Get 6 random packages for slides
    $slidePackages = TravelPackege::inRandomOrder()->limit(6)->get();

    // Map each package to a clean array
    $selectedSlides = $slidePackages->map(function ($item) {
        return [
            "id" => $item->id,
            "title" => $item->title,
            "location" => $item->location,
            "discount" => $item->discount,
            "cutprice" => $item->cutprice,
            "price" => $item->price,
            "urlToImage" => $item->urlToImage,
            "destination" => $item->destination,
        ];
    });

    return response()->json([
        'package' => $selectedPackage,
        'slidePackages' => $selectedSlides
    ], 200);

} catch (\Exception $e) {
    return response()->json(['error' => $e->getMessage()], 500);
}
    }
    public function tourList(Request $request)
    {

        try {
            $packeges = TravelPackege::get();

            if ($request->has('destination') && $request->destination != "") {
                $packeges = $packeges->where('destination', $request->destination);
            }
            if ($request->has('sort') && $request->sort != "") {
                switch ($request->sort) {
                    case 'az':
                        $packeges = $packeges->orderBy('title', 'orderBy');
                        break;
                    case 'za':
                        $packeges = $packeges->orderBy('title', 'orderBy');
                        break;
                    case 'low_high':
                        $packeges = $packeges->orderBy('price', 'orderBy');
                        break;
                    case 'low_high':
                        $packeges = $packeges->orderBy('price', 'orderBy');
                        break;
                }
            }

            $packeges = $packeges->pagination(6);

            return response()->json(['data' => $packeges], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
    }
}
