<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <div class="container">
            <h1 class="my-3 text-center">Film</h1>
            <div class="row g-3">
                @foreach ($moviesList as $movie)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <h6 class="card-subtitle">{{$movie->original_title}}</h6>
                            <span class="d-block card-text">{{$movie->nationality}}</span>
                            <span class="d-block card-text">{{$movie->date}}</span>
                            <span class="d-block card-text">{{$movie->vote}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>

