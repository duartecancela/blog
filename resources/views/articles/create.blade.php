<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Article</title>
</head>
<body>
<h1>Add Article</h1>
<form action="store" method="POST">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description"><br>
    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
