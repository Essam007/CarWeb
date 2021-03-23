<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Maneger;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function manager()
    {
        return response()->json(Maneger::get(),200);
    }
}
