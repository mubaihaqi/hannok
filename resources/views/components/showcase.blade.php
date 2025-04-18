<div class="mt-10 w-full">
    <div class="flex items-center justify-between">
        <h2 class="text-3xl font-bold text-sky-800 w-auto">
            Book Showcase</h2>
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

    <div class="mt-4 bg-gradient-to-b from-sky-100 via-sky-100 to-teal-100 rounded-xl">
        <div class="p-4 flex gap-4">
            {{-- Card Book --}}
            @for ($a = 1; $a <= 5; $a++)
                <div
                    class="w-1/5 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 hover:scale-105 hover:shadow-sky-200 hover:shadow-lg transition duration-300 ease-in-out">
                    <a href="#">
                        <img class="rounded-t-lg"
                            src="https://picsum.photos/480?grayscale&blur=1&?random={{ $a }}"
                            class="object-cover h-full w-full" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-3">
                                Lorem, ipsum
                                dolor sit amet consectetur adipisicing elit. Quo, voluptas.</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-5">Lorem ipsum dolor sit
                            amet
                            consectetur
                            adipisicing elit. Voluptate, asperiores excepturi eveniet delectus placeat odio ea dolorum
                            ducimus laborum veniam ex repellendus repudiandae enim harum assumenda rem explicabo beatae.
                            Saepe odit laboriosam eaque reprehenderit cum!</p>
                        <div class="flex items-center gap-3">
                            <img src="https://picsum.photos/36?random={{ $a }}"
                                class="rounded-full w-10 h-10 border-2 border-sky-200 shadow-md" alt="Avatar of Author">
                            <div class="flex-col">
                                <p class="text-xs font-medium text-slate-500">Tianquan</p>
                                <p class="font-bold">John Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>
</div>
