@props(['latestBooks'])

<div class="mt-12 pt-5 w-full bg-gradient-to-b from-sky-100 via-sky-100 to-teal-100 rounded-xl">
    <a href="/books" class="mx-4 flex items-center justify-between">
        <h2
            class="text-3xl font-bold text-transparent bg-gradient-to-r from-sky-600 via-teal-500 to-teal-400 w-[190px] bg-clip-text">
            Buku Terbaru</h2>
        <div class="h-[2px] rounded-full bg-gradient-to-r from-sky-600 via-teal-500 to-teal-400 w-[820px]"></div>
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
    <div class="px-4 py-2 pb-4 flex gap-4">
        {{-- Card Book --}}
        @foreach ($latestBooks as $latestBook)
            <a href="/book" class="w-1/6 group">
                <div
                    class="h-[330px] bg-sky-50 rounded-xl pt-1 group-hover:relative bottom-0 top-0 group-hover:bg-gradient-to-t hover:from-sky-100 hover:via-sky-100 hover:to-teal-100 transition-all duration-300 ease-in-out hover:scale-105">
                    <div class="flex items-center justify-center rounded-md mt-2 group-hover:relative bottom-0 top-0">
                        <div
                            class="overflow-hidden h-[150px] w-1/2 rounded-md shadow-md group-hover:absolute transition-all duration-500 group-hover:scale-105 bottom-0 top-0">
                            <img src="https://picsum.photos/120?random={{ $latestBook->id }}" alt=""
                                class="object-fill h-full w-full">
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 px-4 pt-2 py-4 group-hover:absolute -bottom-1">
                        <p class="text-xs font-medium ">{{ $latestBook->author->name }}</p>
                        <h5 class="h-auto font-bold text-sky-800 line-clamp-2 bottom-2">
                            {{ $latestBook->title }}</h5>
                        </h5>
                        <div class="inline-flex ">
                            @for ($star = 1; $star <= $latestBook->rating; $star++)
                                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="h-4 w-4 text-amber-400">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @endfor
                        </div>
                        @php
                            $diskon = 0.25;
                            $hargaDiskon = $latestBook->harga_buku * $diskon;
                            $hargaPascaDiskon = $latestBook->harga_buku - $hargaDiskon;
                        @endphp

                        <p class="font-bold text-lg">
                            Rp<span>{{ number_format($hargaPascaDiskon, 0, ',', '.') }}</span>
                        </p>

                        <div class="inline-flex gap-1 items-center">
                            <p class="bg-red-300 text-red-700 px-2 font-semibold rounded-md">{{ $diskon * 100 }}%</p>
                            <p class="font-semibold text-base line-through text-slate-400">
                                Rp{{ number_format($latestBook->harga_buku, 0, ',', '.') }}</p>
                        </div>
                    </div>

                </div>
            </a>
        @endforeach

    </div>
</div>
