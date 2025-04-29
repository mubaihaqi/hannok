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
    </script>

</body>

</html>
