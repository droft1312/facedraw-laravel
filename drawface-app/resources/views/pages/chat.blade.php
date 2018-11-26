@extends('layouts.app')
@section('content')
  <div class="container">
    <h1 class="jumbotron text-center">Our chat!</h1>
    @if(count($messages) > 0)
        <ul class="list-group">
            @foreach ($messages as $message)
              <li class="list-group-item">{{$message->message}}</li>
            @endforeach
        </ul>
    @endif
  </div>
@endsection
