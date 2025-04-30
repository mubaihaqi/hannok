<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <style>
        #lottie-bgGradient svg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* opsional, biar proporsional */
        }
    </style>
</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100 relative">
    <div id="lottie-bgGradient" class="fixed inset-0 -z-10 pointer-events-none w-full h-full"></div>
    <!-- Background Lottie -->

    <div
        class="flex flex-col items-center justify-center bg-white/30 backdrop-blur-md border border-white/20 rounded-xl shadow-lg p-6 w-1/3 mx-auto">
        <div id="lottie-404" class="w-80 h-80"></div>

        <h1 class="text-3xl font-bold mt-6 text-gray-700">Oops! Page Not Found</h1>
        <p class="text-gray-500 mt-2">The page you're looking for doesn't exist.</p>

        <a href="{{ url('/') }}"
            class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
            Back to Home
        </a>
    </div>

    <script>
        // Animasi Lottie untuk 404
        var animation = lottie.loadAnimation({
            container: document.getElementById('lottie-404'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('lottie/404.json') }}'
        });

        // Animasi Lottie untuk Background
        var bgAnimation = lottie.loadAnimation({
            container: document.getElementById('lottie-bgGradient'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('lottie/gradient-background.json') }}'
        });

        bgAnimation.addEventListener('DOMLoaded', function() {
            const svg = document.querySelector('#lottie-bgGradient svg');
            if (svg) {
                // Atur agar SVG-nya stretch full
                svg.setAttribute("preserveAspectRatio", "none");
                svg.style.width = "100%";
                svg.style.height = "100%";
                svg.style.position = "absolute"; // penting buat force full fill
                svg.style.top = 0;
                svg.style.left = 0;
            }
        });
    </script>

</body>

</html>
