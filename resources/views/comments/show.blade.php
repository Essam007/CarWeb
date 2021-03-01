@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-success">Comments</h3>
                        <br/>
                        <h2>{{ $comment->username }}</h2>
                        <p>
                            {{ $comment->body }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
