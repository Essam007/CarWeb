@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 justify-content-center">
                <form method="get" action="{{route('cars.add') }}">
                    <h1 class="font-weight-bold ">Welcome To Our Cars Dealership</h1>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-primary">Add New Car</button>
                </form>
                <form method="get" action="{{route('cars.all')}}" class="d-flex pt-5">
                    <button class="btn btn-primary" >Check The Cars</button>
                </form>

                <form method="get" action="{{route('search')}}" role="search" class="pt-5 justify-content-center">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search For The Car you want">
                        <span class="input-group-btn">
                    <button class="btn btn-default-sm" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
