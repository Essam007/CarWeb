@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 justify-content-center">
            <form method="get" action="{{route('cars.add') }}">
                <h3 class="font-weight-bold ">Welcome To Our Cars Dealership</h3>
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
        </div>
    </div>
</div>
@endsection
