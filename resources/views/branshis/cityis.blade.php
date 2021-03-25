@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="flex-center position-ref full-height">
            <div class="content">
                <h2 class="title m-b-md">
                    {{__('messages.Citys')}}
                </h2>
                <form method="get" action="{{route('city.add') }}" class="d-flex pt-2">
                    <button class="btn btn-primary align-bottom">{{__('messages.Add New City')}}</button>
                </form>

                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('messages.name')}}</th>
                        <th scope="col">{{__('messages.Branches')}}</th>
                        <th scope="col">{{__('messages.Procedures')}}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($citys) && $citys -> count() > 0)
                        @foreach($citys as $city)
                            <tr>
                                <th scope="row">{{$city -> id}}</th>
                                <td>{{$city -> name}}</td>
                                <td>
                                    <a href="{{route('branches',$city->id)}}" class="btn btn-success">{{__('messages.Show Branches')}}</a>
                                </td>
                                <td>
                                    <a href="{{route('citys.delete',$city->id)}}" class="btn btn-danger">{{__('messages.Delete')}}</a>
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
