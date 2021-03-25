<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function city()
    {
        return response()->json(City::get(),200);
    }

    public function citybyid($id)
    {
        return response()->json(City::find($id),200);
    }
}
