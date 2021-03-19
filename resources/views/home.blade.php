<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Info</th>
            <th scope="col">Price</th>
            <th scope="col">Cover</th>
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

            </tr>

            @endforeach

        </tbody>
      </table>


</body>
</html>
