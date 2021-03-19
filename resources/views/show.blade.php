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
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$Beer->cover}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$Beer->title}}</h5>
      <p class="card-text">{{$Beer->info}}</p>
      <p class="card-text">{{$Beer->price}}</p>

      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</body>
</html>
