@extends('app')

@section('title', $post->title)

@section('content')
    <div class="container">
        <h3>{{ $post->body }}</h3>
    </div>
@stop
