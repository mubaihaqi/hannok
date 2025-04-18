@props(['topAuthors'])

<div class="mt-10 w-full">
    <a href="/authors" class="flex items-center justify-between">
        <h2
            class="text-3xl font-bold text-transparent bg-gradient-to-r from-sky-600 via-teal-500 to-teal-400 w-[120px] bg-clip-text">
            Authors</h2>
        <div class="h-[2px] rounded-full bg-gradient-to-r from-sky-600 via-teal-500 to-teal-400 w-[900px]"></div>
        <div
            class="flex items-center rounded-full bg-gradient-to-r from-sky-600 via-teal-500 to-teal-400 px-10 py-2 text-sky-100 font-semibold h-10 gap-1">
            View All <div class="text-2xl flex items-center h-auto "> <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </a>

    @php
        $juduls = ['Most Popular', 'New Voices', 'Editors Pick', 'Trending Now'];
    @endphp



    <div class="mt-4 w-full h-full flex gap-4">
        {{-- Card Author --}}
        @foreach ($topAuthors as $topAuthor)
            <a href="/authors"
                class="w-1/4 aspect-[2/1] rounded-xl overflow-hidden relative shadow-lg hover:scale-105 transition-all duration-300 ease-in-out"
                style="background-image: url('https://picsum.photos/320/160?blur=5')">
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
