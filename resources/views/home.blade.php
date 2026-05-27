<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
    <title>Document</title>
</head>
<body>
    {{-- @php
        dd($movies)
    @endphp --}}
    <div class="container p-4">
        <div class="row row-cols-3 g-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card text-bg-light mb-3 border border-dark">
                        <div class="card-header">{{$movie['title']}}</div>
                        <div class="card-body">
                            <h5 class="card-title">{{$movie['original_title']}}</h5>
                            <p class="card-text">{{$movie['date']}}</p>
                               <p class="card-text">{{$movie['vote']}}</p>
                            <p class="card-text">{!! $movie->getStars($movie['vote'], 10) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>