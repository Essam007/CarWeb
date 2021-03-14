@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Add Comment</h2></div>
                    <div class="card-body">
                        <form method="post" action="{{route('comments.store')}}">
                            <div class="form-group">
                                @csrf
                                <label class="label"><h4>User Name :</h4> </label>
                                <input type="text" name="username" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label"><h4>Comment Body :</h4></label>
                                <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
