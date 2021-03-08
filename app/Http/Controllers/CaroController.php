<?php

namespace App\Http\Controllers;

use App\Models\Bransh;
use App\Models\Car;
use App\Models\City;
use App\Models\Comment;
use App\Models\Maneger;
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
            'photo' => $file_name ,
            'name' => $request -> name ,
            'price' => $request -> price ,
            'model' => $request -> model ,
            'details' => $request -> details ,
        ]);
        return redirect()->back()->with(['success' => 'The Car Has Been Added Successfully']);
    }
    protected function getRules()
    {
        return $rules = [
            'name' => 'required|max:100' ,
            'price' => 'required|numeric' ,
            'model' => 'required|numeric' ,
            'details' => 'required' ,
            'photo' => 'required' ,
        ];
    }

    protected function getMessages()
    {
        return $messages = [
            'name.required' => 'Write the name' ,
            'name.max:100' => 'Type Shorter name' ,
            'price.numeric' => 'The price must be numbers' ,
            'price.required' => 'Write The price' ,
            'model.numeric' => 'The Model must be numbers' ,
            'model.required' => 'Write Model' ,
            'details.required' => 'U must right some details' ,
            'photo.required' => 'U have to Insert a Photo' ,
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

    #############################

//    public function getCityBranshes()
//    {
//        $citys = City::with('branshes')->find(1);
//
//        $branshes= $citys->branshes;
//        foreach ($branshes as $bransh) {
//            echo ($bransh->name) . '<br>';
//            echo ($bransh->adress) . '<br>';
//        }
//    }

    public function citis()
    {
        $citys = City::select('id' , 'name')->get();
        return view('branshis.cityis' , compact('citys'));
    }

    public function branshis($city_id)
    {
        $city = City::find($city_id);
        $branshes= $city->branshes;
        return view('branshis.branshies' , compact('branshes'));
    }

    public function deletecity($city_id)
    {
        $citys = City::find($city_id);
        if (!$citys)
            return redirect()->back()->with(['error' => __('messages.car not exist')]);

        $citys->delete();
        return redirect()
            ->route('branshis.cityis');
    }

    public function deletebransh($bransh_id)
    {
        $branshs = Bransh::find($bransh_id);
        if (!$branshs)
            return redirect()->back()->with(['error' => __('messages.car not exist')]);

        $branshs->delete();
        return redirect()
            ->route('branshis.branshies');
    }

    ############
//    public function mang()
//    {
//        $manga = Maneger::select('id','name')->get();
//        return view('',compact('manga'));
//    }

    public function man($bransh_id)
    {
        $bran = Bransh::find($bransh_id);
        $cman = $bran->cman;
        return view('branshis.mangers', compact('cman'));
    }

    public function deleteMang($maneger_id)
    {
        $manegers = Maneger::find($maneger_id);
        if (!$manegers)
            return redirect()->back()->with(['error' => __('messages.car not exist')]);

        $manegers->delete();
        return redirect()
            ->route('maneger.delete');
    }

}
