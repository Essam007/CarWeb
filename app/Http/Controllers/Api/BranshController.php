<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bransh;
use Illuminate\Http\Request;

class BranshController extends Controller
{
    public function branch()
    {
        return response()->json(Bransh::get(),200);
    }

    public function branbyid($id)
    {
        return response()->json(Bransh::find($id),200);
    }

}
