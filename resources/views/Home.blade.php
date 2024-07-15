<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <title>Laravel Blade Template</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <button class="btn btn-success">Button</button>
                <img class="w-50" src={{ asset('images/laravel.png') }} alt="Laravel" />
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</html>