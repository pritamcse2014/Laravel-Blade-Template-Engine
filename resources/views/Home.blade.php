<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blade Template</title>
</head>
<body>
    <ul>
        @foreach ($data as $eachData)
            <li> User Name is : {{ $eachData['name'] }} and City is : {{ $eachData['city'] }} </li>
        @endforeach
    </ul>
</body>
</html>