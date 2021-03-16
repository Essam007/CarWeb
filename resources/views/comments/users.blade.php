@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <th width="80px">Id</th>
                    <th>User_Id</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td scope="row">{{$user -> id}}</td>
                                <td scope="row">{{$user -> name}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
