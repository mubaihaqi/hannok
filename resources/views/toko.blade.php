@props(['allTokos'])

<x-layout>
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 ">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading -->
            <div class="mb-6 items-end justify-between space-y-4 sm:flex sm:space-y-0">
                <x-navigate>
                    <x-slot:title>{{ $title = 'Toko Kami' }}</x-slot:title>
                    <x-slot:href>{{ $href = '' }}</x-slot:href>
                    <x-slot:gaketok>{{ $gaketok = 'hidden' }}</x-slot:gaketok>
                </x-navigate>
            </div>
        </div>

        <div id="default-carousel" class="relative w-full" data-carousel="slide" data-carousel-interval="5000">

            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=1&?blur=1"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=2&?blur=1"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=3&?blur=1"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=4&?blur=1"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=5&?blur=1"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-3 left-1/2 space-x-2 rtl:space-x-reverse">
                <button type="button" class="w-5 h-1 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-5 h-1 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-5 h-1 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-5 h-1 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-5 h-1 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
        </div>

        <div class="px-[155px] w-full mt-6 inline-flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">
                Toko Kami</h2>

            <form class="w-64">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-3 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500 placeholder-slate-400"
                        placeholder="Cari Toko atau Lokasi..." required />
                </div>
            </form>
        </div>

        <div class="px-[155px] w-full mt-6 mb-6 grid gap-8 sm:grid-cols-2 md:mb-8 lg:grid-cols-2 xl:grid-cols-2">
            @foreach ($allTokos as $allToko)
                <article
                    class="flex bg-white h-[146px] transition hover:cursor-pointer hover:shadow-xl hover:shadow-sky-100 dark:bg-gray-900 dark:shadow-gray-800/25 border-sky-200 border-2 border-dotted">
                    <div class="rotate-180 p-2 [writing-mode:_vertical-lr] bg-sky-100">
                        <time datetime="2022-10-10"
                            class="flex items-center justify-between gap-4 text-xs font-bold text-gray-900 uppercase dark:text-white">
                            <span>{{ $allToko->created_at->format('d-m-Y') }}</span>
                            <span class="w-px flex-1 bg-gray-900/10 dark:bg-white/10"></span>
                            <span>{{ $allToko->id }}</span>
                        </time>
                    </div>

                    <div class="hidden sm:block sm:basis-56">
                        <img alt="" src="https://picsum.photos/2000/500?random={{ $allToko->id }}&?blur=1"
                            class="aspect-square h-full w-full object-cover" />
                    </div>

                    <div class="flex flex-1 flex-col justify-between">
                        <div
                            class="border-s border-gray-900/10 p-4 sm:!border-l-transparent sm:p-6 dark:border-white/10">
                            <a href="#">
                                <h3 class="font-bold text-gray-900 uppercase dark:text-white">
                                    {{ $allToko->nama_toko }}
                                </h3>
                            </a>

                            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 dark:text-gray-200">
                                {{ $allToko->alamat }}
                            </p>

                            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 dark:text-gray-200">
                                {{ $allToko->waktu_buka }}
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach

        </div>

    </section>
</x-layout>
