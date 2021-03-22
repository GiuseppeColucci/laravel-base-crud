@extends('base')
@section('home')
@section('content')

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Info</th>
            <th scope="col">Price</th>
            <th scope="col">Cover</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ( $beers as $beer )
            <tr>
              <th scope="row">{{$beer->id}}</th>
              <td><a href="{{route('beers.show',compact('beer'))}}">{{$beer->title}}</a></td>
              <td>{{$beer->info}}</td>
              <td>{{$beer->price}}</td>
              <td><img src="{{$beer->cover}}" width="150" alt=""></td>
              <td>
                <a href="{{route('beers.show',compact('beer'))}}"><i class="fas fa-eye"></i></a>
                <a href="{{route('beers.edit',compact('beer'))}}"><i class="fas fa-laptop-code"></i></a>
                <form action="{{route('beers.destroy',compact('beer'))}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success">

                        <i class="fas fa-bomb"></i>
                    </button>
                </form>
              </td>

                </tr>

            @endforeach

        </tbody>
      </table>
@endsection


