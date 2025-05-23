<x-layout>
    <section x-data="{ visibleCount: 8, selectedBook: null, showModal: false }" class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <x-navigate>
                    <x-slot:title>{{ $title = 'Books' }}</x-slot:title>
                    <x-slot:href>{{ $href = '/books' }}</x-slot:href>
                    <x-slot:href2>{{ $href = '' }}</x-slot:href2>
                    <x-slot:title2>{{ $title2 }}</x-slot:title2>
                    <x-slot:gaketok>{{ $gaketok = '' }}</x-slot:gaketok>
                    <x-slot:gaketok2>{{ $gaketok2 }}</x-slot:gaketok2>
                </x-navigate>

                {{-- Buttons --}}
                <div class="relative flex items-center space-x-4" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" data-modal-target="filterModal" type="button" id="filterDropdownButton1"
                        class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                        <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                        </svg>
                        Filters
                        <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" x-transition id="dropdownFilter1"
                        class="z-50 w-[620px] h-auto divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700 !absolute -right-[30px] top-12"
                        data-popper-placement="bottom">
                        <div class="p-3">
                            <label for="input-group-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="text" id="input-group-search" placeholder="Search Author or Genre..."
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    autocomplete="off">
                            </div>
                            <div class="inline-flex w-full mt-3 h-auto gap-1">
                                <div class="w-1/2 h-full">
                                    <p class="pl-3 pb-2 font-semibold text-base">
                                        Genres
                                    </p>
                                    <ul class="h-[475px] px-3 mr-[20px] overflow-y-auto scrollbar-thin text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownSearchButton">
                                        @foreach ($allGenres as $allGenre)
                                            <li class="genre-item">
                                                <a href="/books?genre={{ $allGenre->slug }}"
                                                    class="flex items-center group p-2 pr-0 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <div class="inline-flex justify-evenly w-full">
                                                        <p
                                                            class="ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300 group-hover:underline w-[140px]">
                                                            {{ $allGenre->nama }}
                                                        </p>
                                                        <p
                                                            class="text-xs font-normal text-slate-700 w-auto group-hover:scale-110 duration-300 transition ease-in-out">
                                                            ({{ $allGenre->books->count() }} Books)
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="w-1/2 h-full">
                                    <p class="pl-3 pb-2 font-semibold text-base">
                                        Authors
                                    </p>
                                    <ul class="h-[475px] px-3 mr-[20px] overflow-y-auto scrollbar-thin text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownSearchButton">
                                        @foreach ($allAuthors as $allAuthor)
                                            <li class="author-item">
                                                <a href="/books?author={{ $allAuthor->username }}"
                                                    class="flex items-center p-2 pr-0 group rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <p
                                                        class="ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300 group-hover:underline w-[160px]">
                                                        {{ $allAuthor->name }}
                                                    </p>
                                                    <p
                                                        class="text-xs font-normal text-slate-700 w-auto group-hover:scale-110 duration-300 transition ease-in-out">
                                                        ({{ $allAuthor->books->count() }} Books)
                                                    </p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const searchInput = document.getElementById('input-group-search');
                            const genreItems = document.querySelectorAll('.genre-item');
                            const authorItems = document.querySelectorAll('.author-item');

                            searchInput.addEventListener('keyup', function() {
                                const keyword = this.value.toLowerCase();

                                genreItems.forEach(item => {
                                    const text = item.textContent.toLowerCase();
                                    item.style.display = text.includes(keyword) ? 'block' : 'none';
                                });

                                authorItems.forEach(item => {
                                    const text = item.textContent.toLowerCase();
                                    item.style.display = text.includes(keyword) ? 'block' : 'none';
                                });
                            });
                        });
                    </script>

                    {{-- Sort --}}
                    <button id="sortDropdownButton1" data-dropdown-toggle="dropdownSort1" type="button"
                        class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                        <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 4v16M7 4l3 3M7 4 4 7m9-3h6l-6 6h6m-6.5 10 3.5-7 3.5 7M14 18h4" />
                        </svg>
                        Sort
                        <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="dropdownSort1"
                        class="z-50 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700"
                        data-popper-placement="bottom">
                        <ul class="p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400"
                            aria-labelledby="sortDropdownButton">
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    The most popular </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Newest </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Increasing price </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Decreasing price </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    No. reviews </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Discount % </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Ini the Main nya --}}
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                {{-- Cards --}}
                @foreach ($allBooks as $index => $allBook)
                    <template x-if="visibleCount > {{ $index }}">
                        <div
                            class="relative rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 group hover:scale-105 transition duration-300 ease-in-out hover:shadow-sky-200 hover:shadow-lg">
                            <div @click="selectedBook = @js($allBook), showModal = true"
                                class="h-56 w-full cursor-pointer">
                                <a href="/book/{{ $allBook['slug'] }}">
                                    <img src="https://picsum.photos/500?random={{ $allBook->id }}" alt=""
                                        class="mx-auto w-full h-full rounded-md object-cover group-hover:scale-110 transition duration-300 ease-in-out" />
                                </a>
                            </div>

                            <div class="pt-4">
                                <div class="mb-0 flex items-center justify-between gap-1">
                                    <div class="inline-flex items-center justify-start gap-1">
                                        <a href="/books?author={{ $allBook->author->username }}">
                                            <span
                                                class="rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                                {{ $allBook->author->name }}</span>
                                        </a>

                                        <p
                                            class="rounded bg-primary-100 px-2.5 py-[1px] text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                            {{ $allBook->stock }}
                                        </p>
                                    </div>

                                    <div class="flex items-center justify-end gap-1">
                                        <button type="button" data-tooltip-target="tooltip-quick-look"
                                            class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only"> Quick look </span>
                                            <svg class="h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-width="2"
                                                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                                <path stroke="currentColor" stroke-width="2"
                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </button>
                                        {{-- <div id="tooltip-quick-look" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Quick look
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div> --}}

                                        {{-- Add to Favorite Button --}}
                                        <form action="{{ route('favorite.add', $allBook->id) }}" method="POST">
                                            @csrf
                                            <button onclick="addToFavorite({{ $allBook->id }})" type="button"
                                                data-tooltip-target="tooltip-add-to-favorites"
                                                class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                <span class="sr-only"> Add to Favorites </span>
                                                <svg class="h-5 w-5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                                </svg>
                                            </button>
                                        </form>
                                        {{-- <div id="tooltip-add-to-favorites" role="tooltip"
                                            class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                            data-popper-placement="top">
                                            Add to favorites
                                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                                        </div> --}}
                                    </div>
                                </div>

                                <a href="/book/{{ $allBook['slug'] }}"
                                    class="block text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white h-[70px] line-clamp-3">{{ $allBook->title }}</a>

                                <div class="pl-1 mt-2 flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="ms-2 text-sm font-bold text-gray-900 dark:text-white">
                                        {{ $allBook->rating }}</p>

                                    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                    <a href="#"
                                        class="text-sm font-medium text-gray-900 hover:underline dark:text-white"><span>73</span>
                                        reviews</a>
                                </div>

                                <ul class="mt-2 flex items-center gap-4">
                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                        </svg>
                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fast Delivery
                                        </p>
                                    </li>

                                    <li class="flex items-center gap-2">
                                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                        </svg>
                                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Best Price</p>
                                    </li>
                                </ul>

                                <div class="mt-3 flex items-center justify-between">
                                    @php
                                        $diskon = 0.25;
                                        $hargaDiskon = $allBook->harga_buku * $diskon;
                                        $hargaPascaDiskon = $allBook->harga_buku - $hargaDiskon;
                                    @endphp
                                    <div class="block gap-1 items-center">
                                        <p
                                            class="text-xl font-extrabold leading-tight text-gray-900 dark:text-white mb-1">
                                            Rp<span>{{ number_format($hargaPascaDiskon, 0, ',', '.') }}</span></p>

                                        <div class="flex gap-2 justify-start w-auto">
                                            <span
                                                class="text-xs font-medium text-red-700 bg-red-300 rounded-md pl-2 pr-1">
                                                {{ $diskon * 100 }}%
                                            </span>
                                            <p class="font-normal text-xs line-through text-slate-400">
                                                Rp{{ number_format($allBook->harga_buku, 0, ',', '.') }}</p>
                                        </div>
                                    </div>

                                    {{-- Add to Cart Button --}}
                                    <form action="{{ route('cart.add', $allBook->id) }}" method="POST">
                                        @csrf
                                        <button type="button" onclick="addToCart({{ $allBook->id }})"
                                            class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                            </svg>
                                            Add to cart
                                        </button>
                                    </form>
                                </div>
                            </div>

                            {{-- Floating Genre --}}
                            <a href="/books?genre={{ $allBook->genre->slug }}">
                                <div
                                    class="absolute text-xs font-medium -top-1 right-[7%] z-10 border-dotted border-2 border-sky-200 rounded-md bg-sky-200 px-2 text">
                                    {{ $allBook->genre->nama }}
                                </div>
                            </a>
                        </div>
                    </template>
                @endforeach
            </div>

            {{-- Show More Button --}}
            <div class="w-full text-center mt-6">
                <button x-show="visibleCount < {{ count($allBooks) }}" @click="visibleCount += 8"
                    class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r from-teal-300 to-sky-300 group-hover:from-teal-300 group-hover:to-sky-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-sky-200 dark:focus:ring-sky-800 hover:scale-105 transition-all duration-300 ease-in-out">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent font-semibold inline-flex items-center gap-1 group-hover:text-white">
                        Show More
                    </span>
                </button>
            </div>
        </div>
    </section>
</x-layout>
