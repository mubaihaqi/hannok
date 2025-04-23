<x-layout>
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <x-navigate>
                    <x-slot:title>{{ $title = 'Genres' }}</x-slot:title>
                    <x-slot:href>{{ $href = '/genres' }}</x-slot:href>
                    <x-slot:href2>{{ $href = '' }}</x-slot:href2>
                    <x-slot:title2>{{ $title2 }}</x-slot:title2>
                    <x-slot:gaketok>{{ $gaketok = 'hidden' }}</x-slot:gaketok>
                    <x-slot:gaketok2>{{ $gaketok2 }}</x-slot:gaketok2>
                </x-navigate>
            </div>
        </div>

        {{-- Caraousel --}}
        <div id="default-carousel" class="relative w-full" data-carousel="slide" data-carousel-interval="5000">

            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=1&?blur=17"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=2&?blur=18"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=3&?blur=19"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=4&?blur=20"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://picsum.photos/2000/500?random=5&?blur=21"
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

        {{-- Tagline & SearchBar --}}
        <div class="px-[155px] w-full mt-6 inline-flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">
                Genres</h2>

            <form class="w-64" action="/genres/search" method="GET">
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
                    <input type="search" id="default-search" name="query"
                        class="block w-full p-3 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500 placeholder-slate-400"
                        autocomplete="off" placeholder="Cari Genre..." required />
                </div>
            </form>
        </div>

        {{-- Main Cards --}}
        <div x-data="{ openIndex: null }" @click.away="openIndex = null"
            class="px-[155px] w-full mt-6 mb-6 gap-3 inline-flex flex-wrap relative">
            @foreach ($allGenres as $index => $allGenre)
                <div @click="openIndex === {{ $index }} ? openIndex = null : openIndex = {{ $index }}"
                    :class="openIndex === {{ $index }} ?
                        'w-[628px]' :
                        'basis-[calc(25%-0.75rem)]'"
                    class="relative bg-gray-200 h-[242px] rounded-lg overflow-hidden transition-all duration-300 ease-in-out cursor-pointer inline-flex items-center">
                    <img src="https://picsum.photos/300?blur=1&?random={{ $allGenre->id }}"
                        :class="openIndex === {{ $index }} ? 'w-1/2 rounded-r-lg shadow-2xl shadow-sky-300' : 'w-full'"
                        class="h-full object-cover transition-all duration-300 ease-in-out" alt="">

                    <div x-show="openIndex === {{ $index }}" x-transition class="w-1/2 p-4">
                        <p class="pb-2 font-bold text-lg">{{ $allGenre->nama }}</p>
                        <p class="font-medium text-base">
                            {{ $allGenre->deskripsi }}
                        </p>
                        <div class="h-[2px] rounded-full m-2 my-4 bg-sky-300"></div>

                        <div class="inline-flex gap-1">
                            <a href="/blogs?genre={{ $allGenre->slug }}"
                                class="inline-flex w-1/2 justify-start items-center gap-2 group">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z" />
                                </svg>
                                <p class="text-base font-normal group-hover:underline">
                                    <span>{{ $allGenre->blogs->count() }}</span> Blogs
                                </p>
                            </a>

                            <a href="/books?genre={{ $allGenre->slug }}"
                                class="inline-flex w-1/2 justify-start items-center gap-2 group">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
                                </svg>

                                <p class="text-base font-normal w-[100px] group-hover:underline">
                                    <span>{{ $allGenre->books->count() }}</span> Books
                                </p>
                            </a>

                        </div>

                        <p class="group w-auto mt-1 font-medium">
                            Top Author:
                            <a href="" class="group-hover:underline hover:italic font-normal text-base">
                                Hannah Abigail</a>
                        </p>
                    </div>

                    <p x-show="openIndex !== {{ $index }}" x-transition
                        class="absolute z-10 bottom-3 left-3 font-bold text-xl text-slate-100 text-shadow-xl">
                        {{ $allGenre->nama }}
                    </p>
                </div>
            @endforeach
        </div>

    </section>
</x-layout>
