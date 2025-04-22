<x-layout>
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <x-navigate>
                    <x-slot:title>{{ $title = 'Blogs' }}</x-slot:title>
                    <x-slot:href>{{ $href = '/blogs' }}</x-slot:href>
                    <x-slot:href2>{{ $href = '' }}</x-slot:href2>
                    <x-slot:title2>{{ $title2 }}</x-slot:title2>
                    <x-slot:gaketok>{{ $gaketok = 'hidden' }}</x-slot:gaketok>
                    <x-slot:gaketok2>{{ $gaketok2 }}</x-slot:gaketok2>
                </x-navigate>

                {{-- Buttons --}}
                <div class="relative flex items-center space-x-4" x-data="{ open: false }" @click.away="open = false">
                    <form class="w-64" action="/blogs/search" method="GET">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search" name="query"
                                class="block w-full p-3 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500 placeholder-slate-400"
                                placeholder="Cari Blogs..." autocomplete="off" required />
                        </div>
                    </form>

                    <button @click="open = !open" data-modal-target="filterModal" type="button"
                        id="filterDropdownButton1"
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
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                                                <a href="/blogs?genre={{ $allGenre->slug }}"
                                                    class="flex items-center group p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <div class="inline-flex justify-evenly w-full">
                                                        <p
                                                            class="ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300 group-hover:underline w-[160px]">
                                                            {{ $allGenre->nama }}
                                                        </p>
                                                        <p
                                                            class="text-xs font-normal text-slate-700 w-auto group-hover:scale-110 duration-300 transition ease-in-out">
                                                            ({{ $allGenre->blogs->count() }} Blogs)
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
                                                <a href="/blogs?author={{ $allAuthor->username }}"
                                                    class="flex items-center p-2 group rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <p
                                                        class="ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300 group-hover:underline w-[160px]">
                                                        {{ $allAuthor->name }}
                                                    </p>
                                                    <p
                                                        class="text-xs font-normal text-slate-700 w-auto group-hover:scale-110 duration-300 transition ease-in-out">
                                                        ({{ $allAuthor->blogs->count() }} Blogs)
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
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
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-3">
                {{-- Cards --}}
                @foreach ($allBlogs as $allBlog)
                    <article
                        class="relative h-[260px] group flex bg-white hover:shadow-xl hover:shadow-sky-100 dark:bg-gray-900 dark:shadow-gray-800/25 border-sky-200 border-2 border-dotted hover:scale-105 transition-all duration-400 ease-in-out">
                        <div class="rotate-180 p-2 [writing-mode:_vertical-lr] bg-white-100">
                            <time datetime="{{ $allBlog->created_at->format('Y-m-d') }}"
                                class="flex items-center justify-between gap-4 text-xs font-bold text-gray-900 uppercase dark:text-white">
                                <span>{{ $allBlog->created_at->format('d-m-Y') }}</span>
                                <span class="w-px flex-1 bg-sky-800 dark:bg-white/10"></span>
                                <span>{{ $allBlog->id }}</span>
                            </time>
                        </div>

                        <div class="hidden sm:block xl:w-[200px]">
                            <img alt=""
                                src="https://picsum.photos/2000/500?grayscale&?random={{ $allBlog->id }}&?blur=1"
                                class="aspect-square h-full w-full object-cover" />
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div
                                class="border-s border-gray-900/10 p-4 sm:!border-l-transparent sm:p-6 dark:border-white/10">
                                <a href="/blog/{{ $allBlog['slug'] }}">
                                    <h3
                                        class="font-bold
                                    text-gray-900 uppercase dark:text-white line-clamp-3 hover:underline">
                                        {{ $allBlog->title }}
                                    </h3>
                                </a>

                                <p class="mt-2 line-clamp-4 text-sm/relaxed text-gray-700 dark:text-gray-200">
                                    {{ $allBlog->body }}
                                </p>
                            </div>
                            <div class="sm:flex sm:items-end sm:justify-end">
                                <a href="/blog/{{ $allBlog['slug'] }}"
                                    class="block bg-sky-300 px-5 py-3 text-center text-xs font-bold text-gray-900 uppercase transition hover:bg-sky-400">
                                    Read Blog
                                </a>
                            </div>
                        </div>

                        {{-- Floating Author --}}
                        <div
                            class="absolute top-0 group-hover:!-top-5 !left-8 -z-10 transition-all duration-300 ease-in-out">
                            <a href="/blogs?author={{ $allBlog->author->username }}"
                                class="bg-sky-300 px-2  py-1 text-center text-xs font-bold text-gray-900 uppercase transition hover:bg-sky-400 rounded-t-lg">
                                {{ $allBlog->author->name }}
                            </a>
                        </div>


                        {{-- <div
                            class="absolute -rotate-90 top-6 group-hover:!-top-5 !left-6 -z-10 transition-all duration-300 ease-in-out flex flex-col">
                            @foreach ($allBlog->genres as $genre)
                                @php
                                    $topValue = '-top-' . $loop->iteration * 5; // -top-5, -top-10, -top-15
                                    $colors = [
                                        'bg-sky-300',
                                        'bg-pink-300',
                                        'bg-yellow-300',
                                        'bg-green-300',
                                        'bg-purple-300',
                                    ];
                                    $hoverColors = [
                                        'hover:bg-sky-400',
                                        'hover:bg-pink-400',
                                        'hover:bg-yellow-400',
                                        'hover:bg-green-400',
                                        'hover:bg-purple-400',
                                    ];
                                    $bgClass = $colors[($loop->iteration - 1) % count($colors)];
                                    $hoverClass = $hoverColors[($loop->iteration - 1) % count($hoverColors)];
                                @endphp

                                <a href="/blogs?genre={{ $genre->slug }}"
                                    class="{{ $topValue }} {{ $bgClass }} {{ $hoverClass }} px-2 py-1 text-xs font-bold text-gray-900 uppercase transition rounded-r-lg mb-1 text-end">
                                    {{ $genre->nama }}
                                </a>
                            @endforeach
                        </div> --}}
                    </article>
                @endforeach
            </div>

            <div id="pagination">
                {{ $allBlogs->links() }}
            </div>

        </div>
    </section>
</x-layout>
