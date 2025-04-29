<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">

    <div id="lottie-404" class="w-80 h-80"></div>

    <h1 class="text-3xl font-bold mt-6 text-gray-700">Oops! Page Not Found</h1>
    <p class="text-gray-500 mt-2">The page you're looking for doesn't exist.</p>

    <a href="{{ url('/') }}"
        class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
        Back to Home
    </a>

    <script>
        var animation = lottie.loadAnimation({
            container: document.getElementById('lottie-404'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('lottie/404.json') }}'
        });
    </script>

</body>

</html>
