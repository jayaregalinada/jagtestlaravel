@extends('app')

@section('title', 'Create Post')

@section('content')
    <div class="container">
        @include('templates.error_alert')
        @include('post.form')
    </div>
@stop
