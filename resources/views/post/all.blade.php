@extends('app')

@section('title', 'Posts')

@section('content')
    <div class="container">
        @include('templates.error_alert')
        @include('templates.success_alert')
        @if ($posts->isEmpty())
            <div class="text-center alert alert-warning">No posts as of the moment</div>
        @else
        <div class="list-group">
        @foreach ($posts as $p)
            <a href="{{ route('post.show', $p->id) }}" class="list-group-item">{{ $p->title }}</a>
        @endforeach
        </div>
        @endif
    </div>
@stop
