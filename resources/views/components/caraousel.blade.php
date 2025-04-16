<div class="w-full mx-auto relative group" x-data="{
    activeSlide: 1,
    slides: [
        { id: 1, image: 'https://picsum.photos/902/320?random=1' },
        { id: 2, image: 'https://picsum.photos/902/320?random=2' },
        { id: 3, image: 'https://picsum.photos/902/320?random=3' },
        { id: 4, image: 'https://picsum.photos/902/320?random=4' },
        { id: 5, image: 'https://picsum.photos/902/320?random=5' },
    ],
    loop() {
        setInterval(() => {
            this.activeSlide = this.activeSlide === 5 ? 1 : this.activeSlide + 1
        }, 5000);
    }
}" x-init="loop">

    {{-- Data Loop --}}
    <template x-for="slide in slides" :key="slide.id">
        <div x-show="activeSlide === slide.id" class=" h-80 flex items-center rounded-lg overflow-hidden">
            <img :src="slide.image" alt="Slide Active" class="object-fit h-full w-full">
        </div>
    </template>

    {{-- Back/Next Button --}}
    <div class="absolute inset-0 group-hover:flex hidden transition-all duration-300 ease-in-out">
        <div class="flex items-center justify-start w-1/2 ">
            <button x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1"
                class="bg-slate-100 text-slate-900 hover:bg-sky-300 hover:text-blue-800 transition font-extrabold rounded-full w-9 h-9 shadow flex justify-center items-center -ml-[19px] backdrop-blur-md bg-white/30 border border-white/20 p-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>

            </button>
        </div>
        <div class="flex items-center justify-end w-1/2 group">
            <button x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
                class="bg-slate-100 text-slate-900 hover:bg-sky-300 hover:text-blue-800 transition font-extrabold rounded-full w-9 h-9 shadow flex justify-center items-center -mr-[19px] backdrop-blur-md bg-white/30 border border-white/20 p-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Buttons --}}
    <div class="absolute w-full flex justify-center px-4 bottom-3 left-1/2 -translate-x-1/2 space-x-1 z-20">
        <template x-for="slide in slides" :key="slide.id">
            <button class="w-6 h-1 rounded-full transition-colors duration-200 ease-out hover:bg-slate-600"
                :class="{ 'bg-sky-300': activeSlide === slide.id, 'bg-slate-300': activeSlide !== slide.id }"
                x-on:click="activeSlide = slide.id"></button>
        </template>
    </div>
</div>
