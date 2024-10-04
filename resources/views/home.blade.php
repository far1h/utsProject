<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    This is the home page!
    @foreach ($clothes as $c)
        <h1>{{$c->id}}</h1>
        <h1>{{$c->name}}</h1>
        <h1>{{$c->price}}</h1>
    @endforeach
</body>

</html>
