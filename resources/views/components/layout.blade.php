<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" href="https://picsum.photos/48" />
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
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
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({})
                })
                .then(response => {
                    if (response.status === 401) {
                        throw new Error('Kamu harus login dulu untuk menambahkan ke keranjang.');
                    }
                    if (!response.ok) {
                        throw new Error('Gagal tambah ke cart.');
                    }
                    return response.json();
                })
                .then(data => {
                    alert('Buku berhasil ditambahkan ke keranjang!');
                })
                .catch(error => {
                    alert(error.message);
                });
        }
    </script>

</body>

</html>
