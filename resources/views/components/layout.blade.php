<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>

    @vite(['resources/css/app.css','resources/js/app.js',])

</head>
<body class="anitaliased">
    @session('message')
    <div class="success-message">
        {{session('message')}}
    </div>
    @endsession
    {{ $slot }}
</body>
</html>