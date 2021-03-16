<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {

        return view('managers.adde');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'maneger_id'=>'required',
        ]);

        Employee::create($request->all());
        return redirect()->back()->with(['success' => 'The employee Has Been Added Successfully']);
    }
}
