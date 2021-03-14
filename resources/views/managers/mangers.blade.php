@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Managers
                </div>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">employees</th>
                        <th scope="col">operation</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($mango) && $mango -> count() > 0 )
                        @foreach($mango as $manager)
                            <tr>
                                <th scope="row">{{$manager->id}}</th>
                                <td>{{$manager->name}}</td>
                                <td>
                                    <a href="{{route('managers.employees',$manager->id)}}" class="btn btn-success">Show Employees</a>
                                </td>
                                <td>
                                    <a href="{{route('manager.delete', $manager->id)}}" class="btn btn-danger">Delete</a>
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
