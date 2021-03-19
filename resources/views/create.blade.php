@extends('base')
@section('create')
@section('content')
<form action="{{route('beers.store')}}" method="post">
    @csrf
    {{-- <input name="_method" type="hidden" value="POST"> --}}
    @method('POST')
<div class="form-group">

    <label for="title">title</label>
    <input class="form-control"type="text" name="title" placeholder="title">
</div>
<div class="form-group">

    <label for="title">info</label>
    <input class="form-control"type="text" name="info" placeholder="info">
<div class="form-group">
</div>

    <label for="title">price</label>
    <input class="form-control"type="text" name="price" placeholder="price">
</div>
<div class="form-group">

    <label for="title">cover</label>
    <input class="form-control"type="text" name="cover" placeholder="cover">
</div>
<div class="form-group">

    <input class="form-control"type="submit" value="Invia" >
</div>



</form>


@endsection

</div>
