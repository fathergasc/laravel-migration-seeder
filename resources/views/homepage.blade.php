<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Tabellone Treni</title>
</head>
<body>
    <h1>Treni in partenza oggi</h1>
    <div class="cards-wrapper">
        @foreach ($trains as $train)
        <div class="card">
            <h2>Treno: {{$train->train_code}}</h2>
            <span>Da: {{$train->departure_station}}</span>
            <span>A: {{$train->arrival_station}}</span>
            <span>Partenza: {{substr($train->departure_time, 11, 5)}}</span>
            <span>Arrivo: {{substr($train->arrival_time, 11, 5)}}</span>
        </div>
        @endforeach
    </div>
</body>
</html>
