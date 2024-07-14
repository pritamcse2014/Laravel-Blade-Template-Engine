<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blade Template</title>
</head>
<body>
    @if($result == 100)
        <h2>Result is 100.</h2>
    @elseif($result == 1000)
        <h2>Result is 1000.</h2>
    @elseif($result == 100000)
        <h2>Result is 100000.</h2>
    @else
        <h2>Result is not in our Range.</h2>
    @endif
</body>
</html>