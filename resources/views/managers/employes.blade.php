@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Employees
                </div>
                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Position</th>
                        <th scope="col">operation</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($employes) && $employes -> count() > 0 )
                        @foreach($employes as $employee)
                            <tr>
                                <th scope="row">{{$employee -> id}}</th>
                                <td>{{$employee-> name}}</td>
                                <td>{{$employee-> position}}</td>
                                <td>
                                    <a href="{{route('employee.delete',$employee->id)}}" class="btn btn-danger">Delete</a>
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
