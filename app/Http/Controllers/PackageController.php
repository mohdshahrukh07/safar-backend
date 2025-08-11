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
            $packages = TravelPackege::query(); // or use find($id) if ID is known

            if (!$packages) {
                return response()->json(['error' => 'No package found'], 404);
            }
            $selectedPackage = [];
            foreach ($packages as $package) {
                $selectedPackage[] = [
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
            }


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
            $packeges = TravelPackege::query();

            if ($request->has('destination') && $request->destination != "") {
                $packeges = $packeges->where('destination', $request->destination);
            }
            if ($request->filled('sort') && $request->sort != "") {
                switch ($request->sort) {
                    case 'az':
                        $packeges->orderBy('title', 'asc');
                        break;
                    case 'za':
                        $packeges->orderBy('title', 'desc');
                        break;
                    case 'low_high':
                        $packeges->orderBy('price', 'asc');
                        break;
                    case 'high_low':
                        $packeges->orderBy('price', 'desc');
                        break;
                }
            }

            $packeges = $packeges->paginate(6);

            return response()->json(['data' => $packeges], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);

        }
    }
}
