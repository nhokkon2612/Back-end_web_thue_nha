<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bathroom;
use App\Models\Bedroom;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\HomeStatus;
use App\Models\LevelPrice;
use App\Models\LevelSquared;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getInfoForFormCreateAndUpdate()
    {
        $categories = Category::all();
        $levelPrices = LevelPrice::all();
        $levelSquareds = LevelSquared::all();
        $bedrooms = Bedroom::all();
        $bathrooms = Bathroom::all();
        $allStatus = HomeStatus::all();
        $cites = City::all();
        $districts = District::all();
        $data = [
            'categories' => $categories,
            'levelPrices' => $levelPrices,
            'levelSquareds' => $levelSquareds,
            'bedrooms' => $bedrooms,
            'bathrooms' => $bathrooms,
            'allStatus' => $allStatus,
            'cites' => $cites,
            'districts' => $districts
        ];
        return response()->json($data);
    }
}
