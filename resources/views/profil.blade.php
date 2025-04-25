<x-layout>
    <div class="relative group w-64 h-40">
        <!-- Child -->
        <div class="absolute top-20 left-0 right-0 h-20 bg-pink-400 z-0 group-hover:top-0 transition-all duration-500">
            Muncul dari belakang
        </div>

        <!-- Back Layer (semacam background) -->
        <div class="absolute inset-0 bg-blue-300 z-10 pointer-events-none"></div>

        <!-- Foreground content -->
        <div class="relative z-20 p-4 text-white">
            Ini isi parent
        </div>
    </div>

</x-layout>
