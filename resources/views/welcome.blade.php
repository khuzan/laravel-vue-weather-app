<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather app</title>

        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="{{ asset('css/autocomplete.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="/js/app.js" defer></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </head>
    <body class="bg-blue-200">
        <div id="app" class="flex justify-center pt-16">
            <weather-app></weather-app>

        </div>
    </body>
</html>