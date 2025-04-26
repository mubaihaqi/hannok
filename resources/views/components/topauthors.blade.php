@props(['topAuthors'])

<div class="mt-10 w-full">
    <div class="flex items-center justify-between">
        <h2 class="text-3xl font-bold text-sky-800 w-auto">
            Top Authors</h2>
        <x-filler></x-filler>
        <a href="/authors">
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

    @php
        $juduls = ['Most Popular', 'New Voices', 'Editors Pick', 'Trending Now'];
    @endphp



    <div class="mt-4 w-full h-full flex gap-4">
        {{-- Card Author --}}
        @foreach (collect($topAuthors)->filter() as $topAuthor)
            <a href="/author/{{ $topAuthor->username }}"
                class="w-1/4 aspect-[2/1] rounded-xl overflow-hidden relative shadow-lg hover:scale-105 transition-all duration-300 ease-in-out group hover:shadow-sky-200 hover:shadow-lg"
                style="background-image: url('https://picsum.photos/320/160?blur=5&?random{{ $topAuthor->id }}')">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-between px-8 gap-2">
                    <div class="block text-sky-100">

                        <h2 class="font-bold text-start mb-1 text-3xl w-30">
                            {{ $juduls[$loop->index] ?? 'Top Author' }}
                        </h2>

                        <p class="text-base font-medium w-[130px]">{{ $topAuthor->name }}</p>
                    </div>
                    <img src="{{ asset('images/jessica.png') }}" alt="" class="rounded-full h-44 items-end">
                </div>
            </a>
        @endforeach

    </div>
</div>
