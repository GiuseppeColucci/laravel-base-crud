@extends('base')
@section('show')
@section('content')
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$Beer->cover}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$Beer->title}}</h5>
      <p class="card-text">{{$Beer->info}}</p>
      <p class="card-text">{{$Beer->price}}</p>

      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endsection

