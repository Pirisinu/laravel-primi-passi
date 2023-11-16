<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primo Laravel</title>
</head>
<body>
    <h1>Prima pagina</h1>
    <h2>{{$titlo_Num}}</h2>
    <ul>

        @for($i = 1; $i <= $limit; $i++)
        @if ($i % 2)
        <li style="color:red">{{$i}}</li>

        @else
            <li>{{$i}}</li>
        @endif
        @endfor
    </ul>
    <a href="/second_page">Second page</a>
</body>
</html>
