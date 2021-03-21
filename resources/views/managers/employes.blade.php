@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h2 class="title m-b-md">
                    Employees
                </h2>
                <form method="get" action="{{route('employee.add') }}" class="d-flex pt-2">
                    <button class="btn btn-primary align-bottom">{{__('messages.Add New Employee')}}</button>
                </form>
                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('messages.name')}}</th>
                        <th scope="col">{{__('messages.Position')}}</th>
                        <th scope="col">{{__('messages.Procedures')}}</th>
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
                                    <a href="{{route('employee.delete',$employee->id)}}" class="btn btn-danger">{{__('messages.Delete')}}</a>
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
