@props(['latestBooks'])

<div class="mt-10 w-full">
    <div class="flex items-center justify-between mb-3">
        <h2 class="text-3xl font-bold text-sky-800 w-auto">
            Buku Terbaru</h2>
        <x-filler></x-filler>
        <a href="/books">
            <button
                class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r from-teal-300 to-sky-300 group-hover:from-teal-300 group-hover:to-sky-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800 hover:scale-105 transition-all duration-300 ease-in-out">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent font-semibold inline-flex items-center gap-1 group-hover:text-white">
                    View All <div class="text-2xl flex items-center h-auto "> <svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </span>
            </button></a>
    </div>
    <div class="flex gap-4">
        {{-- Card Book --}}
        @foreach ($latestBooks as $latestBook)
            <div
                class="rounded-xl border border-gray-200 bg-white p-3 shadow-sm dark:border-gray-700 dark:bg-gray-800 w-1/5 group hover:scale-105 transition duration-300 ease-in-out hover:shadow-sky-200 hover:shadow-lg">
                <div class="h-56 w-full">
                    <a href="/book/{{ $latestBook['slug'] }}">
                        <img class="mx-auto h-full dark:hidden rounded-xl group-hover:scale-105"
                            src="https://picsum.photos/500?random={{ $latestBook->id }}" alt="" />
                    </a>
                </div>
                <div class="pt-2">
                    <div class="mb-2 flex items-center justify-between gap-1">
                        <div class="inline-flex items-center justify-start gap-1">
                            <a href="/books?author={{ $latestBook->author->username }}">
                                <span
                                    class="rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                    {{ $latestBook->author->name }}</span>
                            </a>

                            <p
                                class="rounded bg-primary-100 px-2.5 py-[1px] text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                {{ $latestBook->stock }}
                            </p>
                        </div>

                        <div class="flex items-center justify-end gap-1">
                            <button type="button" data-tooltip-target="tooltip-quick-look"
                                class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only"> Quick look </span>
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                            <div id="tooltip-quick-look" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Quick look
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>

                            <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only"> Add to Favorites </span>
                                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                </svg>
                            </button>
                            <div id="tooltip-add-to-favorites" role="tooltip"
                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                data-popper-placement="top">
                                Add to favorites
                                <div class="tooltip-arrow" data-popper-arrow=""></div>
                            </div>
                        </div>
                    </div>

                    <a href="/book/{{ $latestBook['slug'] }}"
                        class="block text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white h-[70px] line-clamp-3">{{ $latestBook->title }}</a>

                    <div class="pl-1 mt-2 flex items-center">
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <p class="ms-2 text-sm font-bold text-gray-900 dark:text-white">{{ $latestBook->rating }}</p>
                        <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                        <a href="#"
                            class="text-sm font-medium text-gray-900 hover:underline dark:text-white"><span>73</span>
                            reviews</a>
                    </div>


                    <ul class="mt-2 flex items-center gap-2">
                        <li class="flex items-center gap-1">
                            <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>
                            <p class="text-xs font-base text-gray-500 dark:text-gray-400">Fast Delivery</p>
                        </li>

                        <li class="flex items-center gap-1">
                            <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
                            <p class="text-xs font-base text-gray-500 dark:text-gray-400">Best Price</p>
                        </li>
                    </ul>

                    <div class="mt-3 flex items-center justify-between">
                        @php
                            $diskon = 0.25;
                            $hargaDiskon = $latestBook->harga_buku * $diskon;
                            $hargaPascaDiskon = $latestBook->harga_buku - $hargaDiskon;
                        @endphp
                        <div class="inline-flex gap-1 items-center">
                            <p class="text-xl font-extrabold leading-tight text-gray-900 dark:text-white">
                                Rp<span>{{ number_format($hargaPascaDiskon, 0, ',', '.') }}</span></p>

                            <div class="flex flex-col gap-1 justify-start w-auto">
                                <p class="font-normal text-xs line-through text-slate-400">
                                    Rp{{ number_format($latestBook->harga_buku, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <button type="button"
                            class="inline-flex items-center rounded-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
