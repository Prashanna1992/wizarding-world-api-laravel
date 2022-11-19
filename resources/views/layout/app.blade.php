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
        }
    </style>
    @stack('after-styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('content')

    @stack('before-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @stack('after-scripts')
</body>
</html>
