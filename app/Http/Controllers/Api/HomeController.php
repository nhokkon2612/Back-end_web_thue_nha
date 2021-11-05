<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bathroom;
use App\Models\Bedroom;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\Home;
use App\Models\HomeStatus;
use App\Models\LevelPrice;
use App\Models\LevelSquared;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $homes = Home::with('bedroom', 'bathroom', 'category', 'levelprice', 'levelsquared', 'homestatus', 'city', 'district', 'media', 'user')->get();
        return response()->json($homes);
    }

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


    public function create(Request $request)
    {
        $homes = Home::with('bedroom', 'bathroom', 'category', 'levelprice', 'levelsquared', 'homestatus', 'city', 'district', 'media', 'user')->insert($request->all());
        return response()->json($homes);
    }

    public function updateHomeStatus(Request $request)
    {
        $home = Home::where('id', '=', $request->id)->first();
        if (Auth::user()->id != $request->user_id) {
            $data = [
                'status' => 'error',
                'message' => 'Bạn không có quyền với tác vụ này !',
                'data' => ''
            ];
        } else {
            $home->status_id = $request->status_id;
            $home->save();
            $data = [
                'status' => 'success',
                'message' => 'Cập nhật trang thái nhà thành công',
                'data' => ''
            ];
        }
        return response()->json($data);
    }
}
