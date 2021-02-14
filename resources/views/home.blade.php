@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 align-items-center">
                <h3 class="font-weight-bold ">Welcome To Our Cars Dealership</h3>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            <button class="btn btn-primary">Check The Cars</button>
        </div>
    </div>
</div>
@endsection
