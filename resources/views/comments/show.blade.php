@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center text-success">{{__('message.Comment')}}</h1>
                        <br/>
                        <h3>{{$comment->users->name}}</h3>
                        <br/>
                        <p>{{$comment->body}}</p>
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
        <button class="btn btn-primary align-bottom">Check The Comments</button>
    </form>
</div>
@endsection
