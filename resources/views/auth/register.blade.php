@extends('app')

@section('title', 'Register')

@section('content')
    <div class="container">
        @include('templates.error_alert')
        <div class="col-md-6 col-md-offset-3">
            <form name="login_form" action="{{ url('auth/register') }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" class="form-control input-lg" id="username" name="username" placeholder="Username" />
                </div>
                <div class="form-group">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Name" />
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" class="form-control input-lg" id="email" name="email" placeholder="Email" />
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" />
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="sr-only">Confirmation</label>
                    <input type="password" class="form-control input-lg" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" />
                </div>
                <button class="btn btn-primary btn-lg" type="submit">Register</button>
                <a href="{{ route('login') }}" class="btn btn-info btn-lg">Login</a>
            </form>
        </div>
    </div>
@stop
