<x-layout>
    <section x-data="{ visibleCount: 6, selectedPromo: null, showModal: false, hoveredIndex: null }" class="bg-gray-50 py-8 antialiased dark:bg-gray-900 ">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading -->
            <div class="mb-3 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <x-navigate>
                    <x-slot:title>{{ $title = 'Authors' }}</x-slot:title>
                    <x-slot:href>{{ $href = '' }}</x-slot:href>
                    <x-slot:href2>{{ $href = '' }}</x-slot:href2>
                    <x-slot:title2>{{ $title2 = '' }}</x-slot:title2>
                    <x-slot:gaketok>{{ $gaketok = '' }}</x-slot:gaketok>
                    <x-slot:gaketok2>{{ $gaketok2 = 'hidden' }}</x-slot:gaketok2>
                </x-navigate>


                {{-- Buttons --}}
                <div class="relative flex items-center space-x-4">
                    <form class="w-64" action="/authors/search" method="GET">
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
                                placeholder="Cari Authors..." autocomplete="off" required />
                        </div>
                    </form>

                </div>
            </div>

            {{-- Ini the Main nya --}}
            <div class="mb-4 grid gap-4 grid-cols-3">
                {{-- Cards --}}
                @foreach ($allAuthors as $index => $allAuthor)
                    <template x-if="visibleCount > {{ $index }}">

                        <div @mouseenter="hoveredIndex = {{ $index }}" @mouseleave="hoveredIndex = null"
                            id="iniparentbeb"
                            :class="hoveredIndex !== null && hoveredIndex !== {{ $index }} ? 'blur-sm opacity-50' : ''"
                            class="max-w-md mx-auto bg-white rounded-xl shadow-md p-6 hover:shadow-sky-200 hover:scale-110 hover:shadow-xl transition duration-500 ease-in-out h-[227px] relative group">

                            <!-- Content -->
                            <a href="/author/{{ $allAuthor->username }}">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img alt="" class="w-16 h-16 rounded-full border-2 border-sky-600"
                                            height="64"
                                            src="https://picsum.photos/360?random={{ $allAuthor->id }}&?blur=1"
                                            width="64" />
                                    </div>
                                    <div class="flex-1 block">
                                        <p class="font-extrabold text-black text-lg leading-none">
                                            @<span>{{ $allAuthor->username }}</span>
                                        </p>
                                        @php
                                            $educationParts = explode(' - ', $allAuthor->education);
                                        @endphp
                                        <p class="text-gray-400 text-sm leading-tight mt-1">
                                            <span class="block font-semibold">{{ $educationParts[0] ?? '' }}</span>
                                            <span class="block">{{ $educationParts[1] ?? '' }}</span>
                                        </p>
                                    </div>
                                </div>
                                <p class="text-gray-600 mt-4 text-sm leading-relaxed line-clamp-4">
                                    {{ $allAuthor->bio }}
                                </p>
                            </a>

                            <a href="{{ $allAuthor->linkedin }}"
                                class="absolute -top-1 -left-1 h-0 w-0 group-hover:top-4 group-hover:-left-9 transition-all duration-500 ease-in-out flex items-center justify-center bg-blue-600 rounded-full group-hover:h-8 group-hover:w-8 aspect-[1/1] shadow-md shadow-blue-200 group-hover:shadow-2xl text-white z-0 group-hover:z-10 group-hover:scale-105 group-hover:-rotate-45 opacity-0 group-hover:opacity-100">
                                <svg class="w-6 h-6 text-blue-50 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                        clip-rule="evenodd" />
                                    <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                </svg>
                            </a>
                            <a href="{{ $allAuthor->instagram }}"
                                class="absolute -top-1 -left-1 h-0 w-0 group-hover:-top-6 group-hover:-left-8 transition-all duration-500 ease-in-out flex items-center justify-center bg-orange-600 rounded-full group-hover:h-8 group-hover:w-8 aspect-[1/1] shadow-md shadow-orange-200 group-hover:shadow-2xl text-white z-0 group-hover:z-10 group-hover:scale-105 group-hover:-rotate-45 opacity-0 group-hover:opacity-100">
                                <svg class="w-6 h-6 text-orange-50 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ $allAuthor->twitter }}"
                                class="absolute -top-1 -left-1 h-0 w-0 group-hover:-top-9 group-hover:left-[10px] transition-all duration-500 ease-in-out flex items-center justify-center bg-sky-600 rounded-full group-hover:h-8 group-hover:w-8 aspect-[1/1] shadow-xl shadow-sky-200 group-hover:shadow-2xl text-white z-0 group-hover:z-10 group-hover:scale-105 group-hover:-rotate-45 opacity-0 group-hover:opacity-100">
                                <svg class="w-6 h-6 text-sky-50 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <!-- Hidden Element -->
                            <div id="iniyabeb"
                                class="absolute -top-1 right-0 z-[-1] group-hover:z-20 group-hover:-top-5 opacity-0 group-hover:opacity-100 transform translate-y-5 group-hover:translate-y-[-10px] transition-all duration-500 ease-in-out ">
                                <a href=""
                                    class="font-medium text-xs bg-white shadow-md rounded-lg shadow-sky-200 py-1 px-3 overflow-hidden group-hover:px-2 group-hover:py-1 text-center mr-1">
                                    <span class="font-bold text-sm">{{ $allAuthor->books->count() }}</span> Books
                                </a>
                                <a href=""
                                    class="font-medium text-xs bg-white shadow-md rounded-lg shadow-sky-200 py-1 px-3 overflow-hidden group-hover:px-2 group-hover:py-1 text-center">
                                    <span class="font-bold text-sm">{{ $allAuthor->blogs->count() }}</span> Blogs
                                </a>
                            </div>
                        </div>

                    </template>
                @endforeach
            </div>

            {{-- Show More Button --}}
            <div class="w-full text-center mt-6">
                <button x-show="visibleCount < {{ count($allAuthors) }}" @click="visibleCount += 9"
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
