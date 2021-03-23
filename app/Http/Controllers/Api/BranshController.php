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
}
