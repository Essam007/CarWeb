@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>{{__('messages.Manage Comments')}}</h1>
                <a href="{{ route('comments.create') }}" class="btn btn-success" style="float: right">{{__('messages.Write New Comment')}}</a>
                <table class="table table-bordered">
                    <thead>
                    <th width="80px">Id</th>
                    <th>{{__('messages.The commenter Name')}}</th>
                    <th width="150px">{{__('messages.Action')}}</th>
                    <th>{{__('messages.Delete Comment')}}</th>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->users->name }}</td>
                            <td>
                                <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-primary">{{__('messages.View Comment')}}</a>
                            </td>
                            <td>
                                <form method="get" action="{{route('$comments.delete',$comment->id)}}">
                                    <button class="btn btn-danger">{{'delete'}}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
