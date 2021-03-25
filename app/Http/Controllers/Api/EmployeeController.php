<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee()
    {
        return response()->json(Employee::get(),200);
    }

    public function empbyid($id)
    {
        return response()->json(Employee::find($id),200);
    }
}
