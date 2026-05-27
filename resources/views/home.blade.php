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
    Ciao
    @foreach ($movies as $movie)
        <div class="card text-bg-light mb-3">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
        </div>
    @endforeach
</body>
</html>