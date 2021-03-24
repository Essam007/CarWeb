<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function car()
    {
        return response()->json(Car::get(),200);

//        return response()->json([
//            'status_code' => 200,
//            'status' => 'success',
//            'message' => '',
//        ]);

    }
    public function carbyid($id)
    {
        return response()->json(Car::find($id),200);
    }
}
