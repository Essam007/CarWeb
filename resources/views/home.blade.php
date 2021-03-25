@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 justify-content-center">
                <form method="get" action="{{route('cars.add') }}">
                    <h1 class="font-weight-bold ">{{__('messages.Welcome To Our Cars Dealership')}}</h1>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-primary">Add Car</button>
                </form>

                <form method="get" action="{{route('cars.all')}}" class="d-flex pt-5">
                    <button class="btn btn-primary">Check Cars</button>
                </form>

                <form method="get" action="{{route('comments.index')}}" class="d-flex pt-5">
                    <button class="btn btn-primary">Check Comments</button>
                </form>

                <form method="get" action="{{route('branshis.cityis')}}" class="d-flex pt-5">
                    <button class="btn btn-primary">Cities</button>
                </form>

                <form method="get" action="{{route('managers.mangers')}}" class="d-flex pt-5">
                    <button class="btn btn-primary">Managers</button>
                </form>

            </div>
        </div>
    </div>
@endsection
