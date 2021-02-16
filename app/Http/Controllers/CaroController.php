<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $rules = $this->getRules();
        $messages = $this->getMessages();
        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        Car::create([
            'name'=> $request -> name ,
            'price'=> $request -> price ,
            'model'=> $request -> model ,
            'details'=> $request -> details ,
        ]);
        return redirect()->back()->with(['success' => 'The Car Has Been Added Successfully']);
    }
    protected function getRules()
    {
        return $rules = [
            'name'=> 'required|max:100',
            'price'=> 'required|numeric',
            'model'=> 'required|numeric',
            'details'=> 'required',
        ];
    }

    protected function getMessages()
    {
        return $messages = [
            'name.required'=>'Write the name',
            'name.max:100'=>'Type Shorter name',
            'price.numeric'=>'The price must be numbers',
            'price.required'=>'Write The price',
            'model.numeric'=>'The Model must be numbers',
            'model.required'=>'Write Model',
            'details.required'=>'U must right some details',
        ];
    }

    public function getAllCars()
    {
        $cars = Car::select('id','name','price','model','details')->get();
        return view('cars.all',compact('cars'));
    }

    public function editCar($car_id)
    {

        $car = Car::find($car_id);
        if (!$car)
            return redirect()->back();

        $car = Car::select('id','name','model','price','details')->find($car_id);

        return view('cars.edit', compact('car'));
    }

    public function updateCar(Request $request, $car_id)
    {

        $car = Car::find($car_id);
        if (!$car)
            return redirect()->back();

        $car->update($request->all());

        return redirect()->back()->with(['success' => ' Updated Successfully ']);
    }

}
