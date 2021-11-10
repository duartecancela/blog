<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles Index</title>
</head>
<body>
<h1>Articles Index</h1>
    @foreach ($articles as $item)
        <h3>{{$item['id']}}</h3>
        <h3>{{$item['title']}}</h3>
        <h3>{{$item['description']}}</h3>
        <hr>
    @endforeach
</body>
</html>
