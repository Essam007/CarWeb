@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="{{asset('images/cars/'.$car->photo)}}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <h3>Car Name : {{$car->name}}</h3>

            <div><h3>Car Model : {{$car->model}}</h3></div>

            <div><h3>Car Price : {{$car->price}}</h3></div>

            <div><h3>Car Details : {{$car->details}}</h3></div>
            <div>
                <form method="get" action="{{route('cars.all') }}" class="d-flex pt-5">
                    <button class="btn btn-primary align-bottom">BACK TO THE CARS</button>
                </form>
                <form method="get" action="{{route('home') }}" class="d-flex pt-5">
                    <button class="btn btn-primary align-bottom">HOME</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="justify-content-center pl-5 pt-5">
<h2>Comments</h2>
<form onsubmit="addComment(event);">
    <input type="text" placeholder="Add a comment" name="text" id="text" required class="justify-content-center">
    <input type="text" placeholder="Your name" name="username" id="username" required>
    <button id="addCommentBtn">Comment</button>
</form>
<div class="alert" id="alert" style="display: none;"></div>
<br>
{{--<div id="comments">--}}
{{--    @foreach($comments as $comment)--}}
{{--        <div>--}}
{{--            <small>{{ $comment->username }}</small>--}}
{{--            <br>--}}
{{--            {{ $comment->text }}--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--</div>--}}
</div>

@endsection
