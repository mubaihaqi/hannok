<x-layout>
    <section x-data="{ visibleCount: 8, selectedBook: null, showModal: false }" class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <x-navigate>
                    <x-slot:title>{{ $title = 'My Favorite Books' }}</x-slot:title>
                    <x-slot:href>{{ $href = '/favorite' }}</x-slot:href>
                    <x-slot:href2>{{ $href = '' }}</x-slot:href2>
                    <x-slot:title2>{{ $title2 = '' }}</x-slot:title2>
                    <x-slot:gaketok>{{ $gaketok = '' }}</x-slot:gaketok>
                    <x-slot:gaketok2>{{ $gaketok2 = 'hidden' }}</x-slot:gaketok2>
                </x-navigate>
            </div>

            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl" x-data="{ favorite: {{ $favoriteItems }} }">
                    @if ($favoriteItems->isEmpty())
                        <div class="flex justify-center items-center mt-12">
                            <div id="emptycart-lottie" class="w-80 h-80"></div>
                        </div>
                    @else
                        <div class="space-y-6">
                            @foreach ($favoriteItems as $item)
                                <div
                                    class="relative rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 group hover:scale-105 transition duration-300 ease-in-out hover:shadow-sky-200 hover:shadow-lg">
                                    <div @click="selectedBook = @js($item), showModal = true"
                                        class="h-56 w-full cursor-pointer">
                                        <a href="/book/{{ $item->book['slug'] }}">
                                            <img src="https://picsum.photos/500?random={{ $item->book->id }}"
                                                alt=""
                                                class="mx-auto w-full h-full rounded-md object-cover group-hover:scale-110 transition duration-300 ease-in-out" />
                                        </a>
                                    </div>

                                    <div class="pt-6">
                                        <div class="mb-4 flex items-center justify-between gap-4">
                                            @if ($item->book->author)
                                                <a href="/books?author={{ $item->book->author->username }}">
                                                    <span
                                                        class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                                        {{ $item->book->author->name }}
                                                    </span>
                                                </a>
                                            @else
                                                <span
                                                    class="me-2 rounded bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 dark:bg-gray-900 dark:text-gray-300">
                                                    Unknown Author
                                                </span>
                                            @endif

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
                                                <div id="tooltip-quick-look" role="tooltip"
                                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                                    data-popper-placement="top">
                                                    Quick look
                                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                                </div>

                                                <button type="button" data-tooltip-target="tooltip-add-to-favorites"
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
                                                <div id="tooltip-add-to-favorites" role="tooltip"
                                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                                    data-popper-placement="top">
                                                    Add to favorites
                                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="/book/{{ $item->book['slug'] }}"
                                            class="block text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white h-[70px] line-clamp-3">{{ $item->book->title }}</a>

                                        <div class="pl-1 mt-2 flex items-center">
                                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <p class="ms-2 text-sm font-bold text-gray-900 dark:text-white">
                                                {{ $item->book->rating }}</p>

                                            <span
                                                class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
                                            <a href="#"
                                                class="text-sm font-medium text-gray-900 hover:underline dark:text-white"><span>73</span>
                                                reviews</a>
                                        </div>

                                        <ul class="mt-2 flex items-center gap-4">
                                            <li class="flex items-center gap-2">
                                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                                </svg>
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fast
                                                    Delivery
                                                </p>
                                            </li>

                                            <li class="flex items-center gap-2">
                                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                        d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                                </svg>
                                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Best
                                                    Price</p>
                                            </li>
                                        </ul>

                                        <div class="mt-3 flex items-center justify-between">
                                            @php
                                                $diskon = 0.25;
                                                $hargaDiskon = $item->book->harga_buku * $diskon;
                                                $hargaPascaDiskon = $item->book->harga_buku - $hargaDiskon;
                                            @endphp
                                            <div class="block gap-1 items-center">
                                                <p
                                                    class="text-xl font-extrabold leading-tight text-gray-900 dark:text-white mb-1">
                                                    Rp<span>{{ number_format($hargaPascaDiskon, 0, ',', '.') }}</span>
                                                </p>

                                                <div class="flex gap-2 justify-start w-auto">
                                                    <span
                                                        class="text-xs font-medium text-red-700 bg-red-300 rounded-md pl-2 pr-1">
                                                        {{ $diskon * 100 }}%
                                                    </span>
                                                    <p class="font-normal text-xs line-through text-slate-400">
                                                        Rp{{ number_format($item->book->harga_buku, 0, ',', '.') }}
                                                    </p>
                                                </div>
                                            </div>

                                            {{-- Add to Cart Button --}}
                                            <form action="{{ route('cart.add', $item->book->id) }}" method="POST">
                                                @csrf
                                                <button type="button" onclick="addToCart({{ $item->book->id }})"
                                                    class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                    <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
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
                                    @if ($item->book->genre)
                                        <a href="/books?genre={{ $item->book->genre->slug }}">
                                            <div
                                                class="absolute text-xs font-medium -top-1 right-[7%] z-10 border-dotted border-2 border-sky-200 rounded-md bg-sky-200 px-2 text">
                                                {{ $item->book->genre->nama }}
                                            </div>
                                        </a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </section>
</x-layout>
