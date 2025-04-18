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

        <main>

            <!-- Your content -->
            {{ $slot }}
        </main>

        <x-footer></x-footer>
    </div>
</body>

</html>
