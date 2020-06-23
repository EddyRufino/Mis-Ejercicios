@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <h3>{{ $post->title }}</h3>
        <p>{!! $post->content !!}</p>
    @endforeach
@endsection