@extends('app')

@section('title', 'Not Found')

@section('content')
    <div class="container">
        <div class="alert alert-warning">
            No such post found, create instead.
        </div>

        @include('templates.error_alert')
        @include('post.form')
    </div>
@stop
