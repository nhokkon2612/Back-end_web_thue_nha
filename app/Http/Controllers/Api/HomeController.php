<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Home;

class HomeController extends Controller
{
    public function index(){
        $homes = Home::with('bedroom', 'bathroom', 'category', 'levelprice', 'levelsquared', 'homestatus', 'city', 'district', 'media')->get();
        return response()->json($homes);
    }
}
