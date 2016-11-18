@extends('layout')

@section('content')
        
    <div class="container">

        <br>

        <form method="POST" action="users">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="email" id="email" placeholder="Email" class="form-control" >
            </div>
            <div class="form-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" >
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add User</button>
            </div>
        </form>

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <hr>

        <br>
        <a href="{{ url('/data') }}">List of users</a>
    </div>
@stop
