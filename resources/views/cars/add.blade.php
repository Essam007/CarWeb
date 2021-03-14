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
            background-color: #e5caea;
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
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form method="get" action="{{route('home') }}" class="d-flex pb-5">
            <button class="btn btn-primary top-right">Home</button>
        </form>

        <form method="get" action="{{route('cars.all') }}" class="d-flex">
            <button class="btn btn-primary align-bottom">all cars</button>
        </form>

    </div>
</nav>

<div class="flex-center">
    <div class="content">
        <div class="title m-b-md">
            ADD CAR
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <br>
        <form method="Post" action="{{route('cars.store') }}" enctype="multipart/form-data">
             @csrf

            <div class="form-group">
                <label for="exampleInputEmail">UPLOAD IMAGE</label>
                <input type="file" class="form-control" name="photo">
                @error('photo')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">THE NAME</label>
                <input type="text" class="form-control" name="name" placeholder="name of the car">
                @error('name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">THE MODEL</label>
                <select class="browser-default custom-select" name="model" id="model">
                    <option selected>Select Model</option>
                    <option value="{{Form::selectYear('year', 1900, 2021)}}"></option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">THE PRICE</label>
                <input type="text" class="form-control" name="price" placeholder="price of the car">
                @error('price')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">THE DETAILS</label>
                <input type="text" class="form-control" name="details" placeholder="details of the car">
                @error('details')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">SAVE CAR</button>
        </form>


    </div>
</div>
</body>
</html>
