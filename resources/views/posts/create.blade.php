{{-- @extends('layouts.app')

@section('style')
  @trixassets
@endsection

@section('content')
<form method="POST" action="{{ route('posts.store') }}">
  @csrf

    <input name="title" type="text">
    
    <div class="">
      <label for="content"></label>

      <input id="content" type="hidden" name="content" />
      <trix-editor  input="content"></trix-editor>
      
    </div>


    <input type="submit">

  </form>  
@endsection --}}

<html>
    <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
      @trixassets

      <style>
        pre: {
          backbround-color: red;
        }
      </style>

    </head>

    <body>
      <form method="POST" action="{{ route('posts.store') }}">
      @csrf

        <input name="title" type="text">
        
        <div class="">
          <label for="content"></label>

          <input id="content" type="hidden" name="content" />
          <trix-editor  input="content"></trix-editor>
        </div>


        <input type="submit">

      </form>  
    </body>
</html>

<br>

@foreach ($posts as $post)
  <h3>{{ $post->title }}</h3>
  <p>{!! $post->content !!}</p>
@endforeach