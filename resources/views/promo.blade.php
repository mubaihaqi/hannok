@props(['allPromos'])

<x-layout>
    <section x-data="{ visibleCount: 6, selectedPromo: null, showModal: false }" class="bg-gray-50 py-8 antialiased dark:bg-gray-900 ">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading -->
            <div class="mb-3 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <x-navigate>
                    <x-slot:title>{{ $title = 'Promo' }}</x-slot:title>
                    <x-slot:href>{{ $href = '' }}</x-slot:href>
                    <x-slot:href2>{{ $href = '' }}</x-slot:href2>
                    <x-slot:title2>{{ $title2 = '' }}</x-slot:title2>
                    <x-slot:gaketok>{{ $gaketok = '' }}</x-slot:gaketok>
                    <x-slot:gaketok2>{{ $gaketok2 = 'hidden' }}</x-slot:gaketok2>
                </x-navigate>
            </div>

            <!-- Grid Promo Cards -->
            <div class="mb-4 grid gap-8 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-3">
                @foreach ($allPromos as $index => $allPromo)
                    <template x-if="{{ $index }} < visibleCount">
                        <div @click="selectedPromo = @js($allPromo), showModal = true"
                            class="cursor-pointer">
                            <div
                                class="w-full aspect-[3/2] mt-2 gap-4 bg-sky-50 rounded-lg shadow-lg overflow-hidden group hover:scale-105 transition-all duration-300 ease-in-out hover:shadow-sky-200 hover:shadow-lg">
                                <img src="https://picsum.photos/720/360?random={{ $allPromo->id }}&?blur=2"
                                    alt=""
                                    class="object-cover group-hover:scaleto-110 bottom-0 transition-all aspect-[8/4] duration-1000 ease-in-out" />
                                <div class="px-4 py-2 mt-2">
                                    <h3 class="font-medium text-base line-clamp-1 tracking-tight">
                                        {{ $allPromo->title }}
                                    </h3>
                                    <div
                                        class="flex gap-2 items-center text-sm font-medium text-slate-600 tracking-tight">
                                        <p>{{ \Carbon\Carbon::parse($allPromo->start_date)->format('d') }} -
                                            {{ \Carbon\Carbon::parse($allPromo->end_date)->format('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                @endforeach
            </div>

            <!-- Show More Button -->
            <div class="w-full text-center mt-6">
                <button x-show="visibleCount < {{ count($allPromos) }}" @click="visibleCount += 6"
                    class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r from-teal-300 to-sky-300 group-hover:from-teal-300 group-hover:to-sky-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-sky-200 dark:focus:ring-sky-800 hover:scale-105 transition-all duration-300 ease-in-out">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent font-semibold inline-flex items-center gap-1 group-hover:text-white">
                        Show More
                    </span>
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div x-show="showModal" x-transition @keydown.escape.window="showModal = false"
            class="fixed inset-0 z-50 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="group bg-white p-6 rounded-lg w-full max-w-2xl" @click.away="showModal = false">
                {{-- <img :src="selectedPromo?.image" alt="Promo Image"
                    class="object-cover bottom-0 shadow-lg transition-all aspect-[8/4] duration-1000 ease-in-out rounded-md group-hover:scale-105 group-hover:scale-y-110" /> --}}
                <img src="https://picsum.photos/720/360?random={{ $allPromo->id }}&?blur=2" alt=""
                    class="object-cover bottom-0 shadow-lg transition-all aspect-[8/4] duration-1000 ease-in-out rounded-md group-hover:scale-105 group-hover:scale-y-110" />
                <h3 class="text-xl font-semibold mt-4 group-hover:mt-6 transition-all duration-1000 ease-in-out"
                    x-text="selectedPromo?.title"></h3>
                <p class="mt-4 text-gray-600" x-text="selectedPromo?.body"></p>
                {{-- <button class="mt-6 bg-blue-600 text-white px-4 py-2 rounded" @click="showModal = false">Close</button> --}}
            </div>
        </div>
    </section>
</x-layout>
