<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Nikita APP</title>
</head>

<body>

    @include('components.header')
    <div class="container mt-5">
        @yield('content')
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
