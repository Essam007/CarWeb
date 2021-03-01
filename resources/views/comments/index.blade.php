@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Manage Comment</h1>
                <a href="{{ route('comments.create') }}" class="btn btn-success" style="float: right">Create Comment</a>
                <table class="table table-bordered">
                    <thead>
                    <th width="80px">Id</th>
                    <th>UserName</th>
                    <th width="150px">Action</th>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->username }}</td>
                            <td>
                                <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-primary">View Comment</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
