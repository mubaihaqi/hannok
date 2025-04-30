<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <link rel="icon" href="https://picsum.photos/48" />
    <style>
        #lottie-bgGradient svg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* opsional, biar proporsional */
        }
    </style>
    <title>Hannok.com</title>
</head>

<body class="h-auto">
    <div class="min-h-full">
        <x-navbar></x-navbar>

        <main class="pt-16">

            <!-- Your content -->
            {{ $slot }}
        </main>

        @isset($footer)
            {{ $footer }}
        @else
            <x-secondary-footer></x-secondary-footer>
        @endisset
        {{-- <x-footer></x-footer> --}}
    </div>

    <script>
        function addToCart(bookId) {
            fetch(`/cart/add/${bookId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({})
                })
                .then(response => {
                    if (response.status === 401) {
                        throw new Error('Anda harus login untuk menambahkan ke keranjang.');
                    }
                    if (!response.ok) {
                        throw new Error('Gagal menambahkan ke keranjang.');
                    }
                    return response.json();
                })
                .then(data => {
                    Toast.fire({
                        icon: 'success',
                        title: data.message
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    Toast.fire({
                        icon: 'warning',
                        title: error.message
                    });
                });
        }

        function removeFromCart(cartId) {
            fetch(`/cart/remove/${cartId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({})
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal menghapus item dari keranjang.');
                    }
                    return response.json();
                })
                .then(data => {
                    Toast.fire({
                        title: "Deleted!",
                        text: data.message,
                        icon: "success"
                    }).then(() => {
                        location.reload(); // Reload halaman untuk memperbarui daftar keranjang
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    Toast.fire({
                        title: "Error!",
                        text: error.message,
                        icon: "error"
                    });
                });
        }

        var animation = lottie.loadAnimation({
            container: document.getElementById('emptycart-lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('lottie/emptycart.json') }}'
        });

        var cartAnimation = lottie.loadAnimation({
            container: document.getElementById('carticon-lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: false,
            path: '{{ asset('lottie/carticon.json') }}'
        });

        // Mulai animasi saat di-hover
        document.getElementById('iniCart').addEventListener('mouseenter', function() {
            cartAnimation.play();
        });

        // Hentikan animasi saat hover dilepas
        document.getElementById('iniCart').addEventListener('mouseleave', function() {
            cartAnimation.stop();
        });

        var menuAnimation = lottie.loadAnimation({
            container: document.getElementById('arrow-lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: false,
            path: '{{ asset('lottie/arrow.json') }}'
        });

        // Mulai animasi saat di-hover
        document.getElementById('dropdownAvatarNameButton').addEventListener('mouseenter', function() {
            menuAnimation.play();
        });

        // Hentikan animasi saat hover dilepas
        document.getElementById('dropdownAvatarNameButton').addEventListener('mouseleave', function() {
            menuAnimation.stop();
        });

        function addToFavorite(bookId) {
            fetch(`/favorite/add/${bookId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({})
                })
                .then(response => {
                    if (response.status === 401) {
                        throw new Error('Anda harus login untuk menambahkan ke favorite.');
                    }
                    if (!response.ok) {
                        throw new Error('Gagal menambahkan ke daftar favorit.');
                    }
                    return response.json();
                })
                .then(data => {
                    Toast.fire({
                        icon: 'success',
                        title: data.message
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    Toast.fire({
                        icon: 'warning',
                        title: error.message
                    });
                });
        }

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

        // Animasi Socmed di login dan registration
        var igAnimation = lottie.loadAnimation({
            container: document.getElementById('instagram-lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('lottie/socmed/instagram.json') }}'
        });

        var twAnimation = lottie.loadAnimation({
            container: document.getElementById('twitter-lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('lottie/socmed/twitter.json') }}'
        });

        var liAnimation = lottie.loadAnimation({
            container: document.getElementById('linkedin-lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('lottie/socmed/linkedin.json') }}'
        });

        var ytAnimation = lottie.loadAnimation({
            container: document.getElementById('youtube-lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('lottie/socmed/youtube.json') }}'
        });

        var gtAnimation = lottie.loadAnimation({
            container: document.getElementById('github-lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: false,
            path: '{{ asset('lottie/login/github.json') }}'
        });

        document.getElementById('github-login').addEventListener('mouseenter', function() {
            gtAnimation.play();
        });

        document.getElementById('github-login').addEventListener('mouseleave', function() {
            gtAnimation.stop();
        });

        var ggAnimation = lottie.loadAnimation({
            container: document.getElementById('google-lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: false,
            path: '{{ asset('lottie/login/google.json') }}'
        });

        document.getElementById('google-login').addEventListener('mouseenter', function() {
            ggAnimation.play();
        });

        document.getElementById('google-login').addEventListener('mouseleave', function() {
            ggAnimation.stop();
        });

        document.addEventListener("DOMContentLoaded", function() {
            const video = document.getElementById("sceneVideo");
            video.playbackRate = 0.4; // ubah jadi 0.5 untuk lambat, 2 untuk cepat
        });
    </script>

</body>

</html>
