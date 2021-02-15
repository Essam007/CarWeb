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
            'name'=> $request-> name ,
            'price'=> $request-> price ,
            'model'=> $request-> model ,
            'details'=> $request-> details ,
        ]);
        return redirect()->back()->with(['success' => 'The car has been added successfully']);
    }
    protected function getRules()
    {
        return $rules = [
            'name'=> 'required|max:100|unique:cars,name',
            'price'=> 'required|numeric',
            'model'=> 'required|numeric',
            'details'=> 'required',
        ];
    }

    protected function getMessages()
    {
        return $messages = [
            'name.required'=>'Write the name',
            'name.unique'=>'The Car name exist',
            'name.max:100'=>'Type shorter name',
            'price.numeric'=>'The price must be numbers',
            'price.required'=>'Write price',
            'model.numeric'=>'The Model must be numbers',
            'model.required'=>'Write Model',
            'details.required'=>'U must right some details',
        ];
    }

}
