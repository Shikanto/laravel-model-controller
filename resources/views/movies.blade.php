<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @include('partials/the_header')
    
    <div class="container d-flex flex-wrap my-5 p-5">
    @foreach ($movie as $info_movie)
        <div class="card text-center">
            <div class="card-body">
                <h6>titolo</h6>
                <h1 class="card-title">{{$info_movie['title']}}</h1>
                <h6>titolo originale</h6>
                <h2 class="card-title">{{$info_movie['original_title']}}</h2>
                <p class="card-text"><span class="small-title">Film Nationality:</span> {{$info_movie['nationality']}} <br>
                <span class="small-title">Data di rilascio:</span> {{$info_movie['date']}} <br>
                <span class="small-title">Voto FIlm:</span> {{$info_movie['vote']}}
                </p>
                <a href="https://it.wikipedia.org/wiki/{{$info_movie['title']}}" class="btn btn-info">Check the full info Film</a>
            </div>
        </div>       
    @endforeach
    </div>
    
</body>
</html>