@extends('app')

@section('title', 'Login')

@section('content')
    <div class="container">
        @include('templates.error_alert')
        <div class="col-md-6 col-md-offset-3">
            <form name="login_form" action="{{ url('auth/login') }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" class="form-control input-lg" id="username" name="username" placeholder="Username" />
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" />
                </div>
                <button class="btn btn-primary btn-lg" type="submit">Login</button>
                <a href="{{ route('register') }}" class="btn btn-info btn-lg">Register</a>
            </form>
        </div>
    </div>
@stop
