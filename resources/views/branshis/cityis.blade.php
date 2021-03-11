@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Citys

                </div>

                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Branches</th>
                        <th scope="col">Procedures</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($citys) && $citys -> count() > 0)
                        @foreach($citys as $city)
                            <tr>
                                <th scope="row">{{$city -> id}}</th>
                                <td>{{$city -> name}}</td>
                                <td>
                                    <a href="{{route('city.branshs',$city->id)}}" class="btn btn-success">Show Branches</a>
                                </td>
                                <td>
                                    <a href="{{route('citys.delete',$city->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
