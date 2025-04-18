@props(['topGenres'])

<div class="mt-10 w-full">
    <a href="/authors" class="flex items-center justify-between">
        <h2
            class="text-3xl font-bold text-transparent bg-gradient-to-r from-sky-600 via-teal-500 to-teal-400 w-[270px] bg-clip-text">
            Authors by Genres</h2>
        <div class="h-[2px] rounded-full bg-gradient-to-r from-sky-600 via-teal-500 to-teal-400 w-[760px]"></div>
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

    <div class="mt-4 w-full h-full flex gap-4">
        @foreach ($topGenres as $topGenre)
            <a href="/genres/{{ $topGenre->slug }}"
                class="w-1/6 aspect-[2/1] rounded-xl overflow-hidden relative shadow-lg mix-blend-luminosity group transition-transform duration-500 ease-in-out hover:scale-110"
                style="background-image: url('https://picsum.photos/220/110?grayscale&blur=1&?random={{ $topGenre->id }}')">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-end justify-start gap-5 pl-3 pb-2 group-hover:pb-4 transition-all duration-500 ease-in-out">
                    <div class="flex-col text-sky-100 gap-1">
                        <h2 class="font-bold text-center text-xl">{{ $topGenre->nama }}</h2>
                        <p class="text-sm font-medium"> <span>{{ $topGenre->books_count }}</span> Books</p>
                    </div>
                </div>
            </a>
        @endforeach

    </div>
</div>
