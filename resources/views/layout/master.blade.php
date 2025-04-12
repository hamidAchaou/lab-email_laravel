<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Task Management')</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1>@yield('header', 'Task Management')</h1>

    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.1/knockout-latest.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>