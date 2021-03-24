<?php

namespace App\Http\Controllers;

use App\Models\Maneger;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function added()
    {

        return view('managers.addm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required' ,
        ]);

        Maneger::create($request->all());
        return redirect()->back()->with(['success' => 'The manager Has Been Added Successfully']);
    }
}
