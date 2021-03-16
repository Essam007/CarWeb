@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Manage Comments</h1>
                <a href="{{ route('comments.create') }}" class="btn btn-success" style="float: right">Write New Comment</a>
                <table class="table table-bordered">
                    <thead>
                    <th width="80px">Id</th>
{{--                    <th>User_Id</th>--}}
                    <th width="150px">Action</th>
                    <th>Delete Comment</th>
                    </thead>
                    <tbody>
                    @if(isset($commenter) && $commenter -> count() > 0 )
                        @foreach($commenter as $comment)
                            <tr>
                                <th scope="row">{{$comment -> id}}</th>
{{--                                <td>{{$comment->user_id}}</td>--}}
                                <td>
                                    <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-primary">View Comment</a>
                                </td>
                                <td>
                                    <form method="get" action="{{route('$comments.delete',$comment->id)}}">
                                        <button class="btn btn-danger">{{'delete'}}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
{{--                    @foreach($comments as $comment)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $comment->id }}</td>--}}
{{--                            <td>--}}
{{--                                <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-primary">View Comment</a>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <form method="get" action="{{route('$comments.delete',$comment->id)}}">--}}
{{--                                    <button class="btn btn-danger">{{'delete'}}</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
