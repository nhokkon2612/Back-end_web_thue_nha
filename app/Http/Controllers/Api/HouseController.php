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
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Exceptions\JWTException;

class HouseController extends Controller
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
        DB::beginTransaction();
        try {
            $home = new Home();
            $home->title = $request->title;
            $home->squared_id = $request->squared_id;
            $home->detail_address = $request->detail_address;
            $home->bedroom_id = $request->bedroom_id;
            $home->bathroom_id = $request->bathroom_id;
            $home->price_id = $request->price_id;
            $home->price = $request->price;
            $home->category_id = $request->category_id;
            $home->status_id = 1;
            $home->description = $request->description;
            $home->user_id = $request->user_id;
            $home->city_id = $request->city_id;
            $home->district_id = $request->district_id;
            $home->image = $request->image;
            $home->save();
            DB::commit();
            $data = [
                'status' => 'success',
                'message' => 'Thêm mới thành công'
            ];
            return response()->json($data);
        } catch (JWTException $e) {
            DB::rollBack();
            $data = [
                'status' => 'error',
                'message' => 'Thêm mới thất bại'
            ];
            return response()->json($data);
        }
    }

    public function updateHouseStatus(Request $request)
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

    public function detail($id)
    {
        $home = Home::with('bedroom', 'bathroom', 'category', 'levelprice', 'levelsquared', 'homestatus', 'city', 'district', 'media', 'user')->where('id', '=', $id)->first();
        return response()->json($home);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $home = Home::findOrFail($id);
            $home->title = $request->title;
            $home->squared_id = $request->squared_id;
            $home->detail_address = $request->detail_address;
            $home->bedroom_id = $request->bedroom_id;
            $home->bathroom_id = $request->bathroom_id;
            $home->price_id = $request->price_id;
            $home->price = $request->price;
            $home->category_id = $request->category_id;
            $home->status_id = $request->status_id;
            $home->description = $request->description;
            $home->user_id = $request->user_id;
            $home->city_id = $request->city_id;
            $home->district_id = $request->district_id;
            $home->image = $request->image;
            $home->save();
            DB::commit();
            $data = [
                'status' => 'success',
                'message' => 'Cập nhật thành công'
            ];
            return response()->json($data);
        } catch (JWTException $e) {
            DB::rollBack();
            $data = [
                'status' => 'error',
                'message' => 'Cập nhật thất bại'
            ];
            return response()->json($data);
        }
    }

    public function delete($id)
    {
        $home = Home::find($id);
        $home->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Xóa thành công'
        ]);
    }
}
