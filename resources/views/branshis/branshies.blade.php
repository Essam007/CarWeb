@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h2 class="title m-b-md">
                    {{__('messages.Branches')}}
                </h2>
                <form method="get" action="{{route('branch.add') }}" class="d-flex pt-2">
                    <button class="btn btn-primary align-bottom">{{__('messages.Add New Branch')}}</button>
                </form>
                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('messages.name')}}</th>
                        <th scope="col">{{__('messages.Address')}}</th>
                        <th scope="col">{{__('messages.operation')}}</th>
                        <th scope="col">{{__('messages.Bransh Cars')}}</th>
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
