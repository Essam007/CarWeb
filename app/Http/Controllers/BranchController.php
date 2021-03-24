<?php

namespace App\Http\Controllers;

use App\Models\Bransh;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function added()
    {

        return view('branshis.addb');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'adress' => 'required' ,
            'city_id' => 'required',
        ]);

        Bransh::create($request->all());
        return redirect()->back()->with(['success' => 'The branch Has Been Added Successfully']);
    }
}
