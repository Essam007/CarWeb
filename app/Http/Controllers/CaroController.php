<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CaroController extends Controller
{
    public function __construct()
    {

    }

    public function getCars()
    {
        return Car::get();
    }

    public function add()
    {
        return view('cars.add');
    }

    public function store(Request $request)
    {
        Car::create([
            'name'=> $request-> name ,
            'price'=> $request-> price ,
            'model'=> $request-> model ,
            'details'=> $request-> details ,
        ]);
        return 'CarsSavedSuccess';
    }

}
