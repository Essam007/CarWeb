<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,600" rel="stylesheet">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #bfe3c4;
            color: #0a0a0a;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .error {
            color: #ae1c17;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">List Off All The Cars</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <form method="get" action="{{route('home') }}" class="d-flex pb-5">
            <button class="btn btn-primary top-right">Home</button>
        </form>

    </div>
</nav>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Car Name</th>
        <th scope="col">Car Price</th>
        <th scope="col">Car Model</th>
        <th scope="col">Car Details</th>
        <th scope="col">Car Photo</th>
        <th scope="col">Edit Info</th>
        <th scope="col">Delete Car</th>
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
        <td><img style="width: 120px; height: 110px;" src="{{asset('images/cars/'.$car->photo)}}"></td>
        <td>
            <form method="get" action="{{route('cars.edit',$car->id)}}">
                <button class="btn btn-success">{{'update'}}</button>
            </form>
        </td>
        <td>
            <form method="get" action="{{route('cars.delete',$car->id)}}">
                <button class="btn btn-danger">{{'delete'}}</button>
            </form>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
</html>
