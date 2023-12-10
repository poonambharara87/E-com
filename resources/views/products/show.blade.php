<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="{{route('search', ['location'])}}" method="get">
            {{$location}}
        <input type="text" name="location">
        <input type="text" name="sponsor_name">
        {{$sponsor_name}}
        <input type="text" name="expiry">
        {{$expiry}}
        <input type="submit" value="Submit">
        </form>
</body>
</html>