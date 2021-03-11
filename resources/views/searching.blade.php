@extends('layouts.app')

@section('content')
    <div class="container">
    <div>
            <div class="card" style="margin-bottom: 10px">
                <div class="card-block">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Car Name</th>
                            <th scope="col">Car Price</th>
                            <th scope="col">Car Model</th>
                            <th scope="col">Car Details</th>
                            <th scope="col">Car Photo</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cars as $car)
                            <tr>
                                <th scope="row">{{$car->id}}</th>
                                <td>{{$car->name}}</td>
                                <td>{{$car->price}}</td>
                                <td>{{$car->model}}</td>
                                <td>{{$car->details}}</td>
                                <td>
                                    <a href="/cars/{{$car->id}}">
                                        <img style="width: 120px; height: 110px;" src="{{asset('images/cars/'.$car->photo)}}" alt="">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

<form method="get" action="{{route('home')}}" class="pt-5 pl-5">
    <button class="btn btn-primary">Home</button>
</form>

    <div class="pt-5 d-flex">
        <form method="get" action="{{route('cars.all') }}" class="d-flex pl-5">
            <button class="btn btn-primary top-right">Go Back</button>
        </form>
    </div>
@endsection
