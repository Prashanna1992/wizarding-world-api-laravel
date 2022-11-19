<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    @stack('before-styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Rubik+Mono+One&family=Work+Sans:wght@300&family=Yusei+Magic&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            color: #000;
            font-family: "Montserrat", sans-serif;
            background-color: #ffffff;
            background-image: url('images/hogwarts_dining_alhcerezo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    @stack('after-styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="background-overlay">
        @yield('content')
    </div>

    @stack('before-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @stack('after-scripts')
</body>
</html>
