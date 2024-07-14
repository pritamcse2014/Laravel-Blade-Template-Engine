<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blade Template</title>
</head>
<body>
    @switch($result)
        @case(100)
            <h1>Result is 100.</h1>
            @break
        @case(1000)
            <h1>Result is 1000.</h1>
            @break
        @case(100000)
            <h1>Result is 100000.</h1>
            @break
        @default
            <h1>Result is not in our Range.</h1>
    @endswitch
</body>
</html>