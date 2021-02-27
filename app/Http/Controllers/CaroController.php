<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CaroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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

        $file_extension =$request->photo->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path='images/cars';
        $request->photo->move($path,$file_name);

        Car::create([
            'photo'=> $file_name,
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
            'photo'=> 'required',
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
            'photo.required'=>'U have to Insert a Photo',
        ];
    }

    public function getAllCars()
    {
        $cars = Car::select('id','photo','name','price','model','details')->get();
        return view('cars.all',compact('cars'));
    }

    public function editCar($car_id)
    {
        $car = Car::find($car_id);
        if (!$car)
            return redirect()->back();

        $car = Car::select('id','name','model','price','details','photo')->find($car_id);
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

    public function deleteCar($car_id)
    {
        $car = Car::find($car_id);
        if (!$car)
            return redirect()->back()->with(['error' => __('messages.car not exist')]);

        $car->delete();
        return redirect()
            ->route('cars.all');
    }

    public function showCar($car_id)
    {
        $car = Car::find($car_id);
        if (!$car)
            return redirect()->back();

        $car = Car::select('id','name','model','price','details','photo')->find($car_id);
        return view('cars.show' , compact('car'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $cars = Car::search($search)->get();
        return view('searching', compact('cars', 'search'));
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

}
