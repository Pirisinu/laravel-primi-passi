<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seconda pagina Laravel</title>
</head>
<body>
    <h1>Ciao seconda pagina Laravel</h1>
    <h2>{{$salutoSecondaPagina}}</h2>
    <ul>
        @foreach ($fruits as $fruit)
        <li>{{$fruit}}</li>
        @endforeach
    </ul>
    <a href="/">home</a>
</body>
</html>
