<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plazas</title>
</head>
<body>

    <ul style="list-style-type: none;">
        @foreach ($plazas as $plaza)
        <li>{{ $plaza->id }} -. {{ $plaza->nombreplaza }}</li>
        @endforeach
    </ul>

</body>
</html>