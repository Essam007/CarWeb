<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Comment;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function added()
    {

        return view('branshis.addc');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required' ,
        ]);

        City::create($request->all());
        return redirect()->back()->with(['success' => 'The City Has Been Added Successfully']);
    }

}
