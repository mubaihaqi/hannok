<x-layout>
    <section class="py-8 bg-white dark:bg-gray-900 antialiased">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading -->
            <div class="mb-6 items-end justify-between space-y-4 sm:flex sm:space-y-0">
                <x-navigate>
                    <x-slot:title>{{ $title = 'Authors' }}</x-slot:title>
                    <x-slot:href>{{ $href = '/authors' }}</x-slot:href>
                    <x-slot:href2>{{ $href = '' }}</x-slot:href2>
                    <x-slot:title2>{{ $author->name }}</x-slot:title2>
                    <x-slot:gaketok>{{ $gaketok = 'hidden' }}</x-slot:gaketok>
                    <x-slot:gaketok2>{{ $gaketok = '' }}</x-slot:gaketok2>
                </x-navigate>
            </div>

            <div class="antialiased bg-gray-50 dark:bg-gray-900 h-[900vh]">
                <!-- Sidebar -->

                <aside
                    class="fixed top-0 left-0 z-40 w-1/5 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700 overflow-auto scrollbar-hide"
                    aria-label="Sidenav" id="drawer-navigation">
                    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800 flex-col justify-between">
                        <ul class="space-y-2 mt-4">
                            <div class="flex flex-col items-center">
                                <img src="https://picsum.photos/360?random={{ $author->id }}&?blur=1" alt=""
                                    class="w-24 aspect-[1/1] rounded-full border-2 border-sky-200 shadow-md mb-2 mt-3">

                                <h2 class="font-semibold text-lg tracking-tight">
                                    @<span>{{ $author->username }}</span>
                                </h2>

                                @php
                                    $educationParts = explode(' - ', $author->education);
                                @endphp
                                <p class="text-gray-400 text-sm leading-tight mt-1 text-center mb-2">
                                    <span class="block font-semibold mb-1">{{ $educationParts[0] ?? '' }}</span>
                                    <span class="block">{{ $educationParts[1] ?? '' }}</span>
                                </p>

                                <p class="px-3 text-center">
                                    {{ $author->bio }}
                                </p>
                            </div>
                        </ul>
                        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap">ekhem</span>
                                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div id="dropdown-sales" class="hidden py-2 space-y-2">
                                    <p>
                                        {{ $author->name }}
                                    </p>
                                    <p>{{ $author->email }}</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </aside>

                <main class="p-4 md:ml-64 h-auto pt-20">
                    <h2>
                        ini content author
                    </h2>
                </main>
            </div>
        </div>
</x-layout>
