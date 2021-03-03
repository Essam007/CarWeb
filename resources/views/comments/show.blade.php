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
                        <br/>
                        <p>{{ $comment->body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="float-right pr-5">
    <form method="get" action="{{route('comments.create') }}" class="d-flex pt-5">
        <button class="btn btn-primary align-bottom">Add New Comment</button>
    </form>
</div>
<div class="pl-5">
    <form method="get" action="{{route('comments.index') }}" class="d-flex pt-5">
        <button class="btn btn-primary align-bottom">Check All Comments</button>
    </form>
</div>
@endsection
