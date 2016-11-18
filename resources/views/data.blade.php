@extends('layout')

@section('content')
        
    <div class="container">
        <h1>All Users</h1>

        <ul>
            @foreach ($myUsers as $myUser)
                <li>Email: <b>{{ $myUser->email }}</b> Username: <b>{{ $myUser->username }}</b> Password: <b>{{ $myUser->password }}</b></li>
            @endforeach
        </ul>
    </div>

@stop
