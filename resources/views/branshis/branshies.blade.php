@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Branshes

                </div>

                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Address</th>
                        <th scope="col">operation</th>
                        <th scope="col">Bransh Cars</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($branshes) && $branshes -> count() > 0 )
                        @foreach($branshes as $bransh)
                            <tr>
                                <th scope="row">{{$bransh->id}}</th>
                                <td>{{$bransh->name}}</td>
                                <td>{{$bransh->adress}}</td>
                                <td>
                                    <a href="{{route('bransh.delete',$bransh->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <form method="get" action="{{route('cars.all')}}" class="d-flex">
                                        <button class="btn btn-primary">Check</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <form method="get" action="{{route('home')}}" class="pt-5 pl-5">
        <button class="btn btn-primary" >Home</button>
    </form>
@stop
