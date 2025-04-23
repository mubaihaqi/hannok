<x-layout>
    <div x-data="{ open: false }" class="relative w-full">
        <button @click="open = !open" class="bg-blue-500 text-white px-4 py-2 w-full">
            Toggle Accordion
        </button>

        <div x-show="open" class="absolute top-full left-0 w-full bg-white border mt-2 z-10">
            <p class="p-4">Isi Accordion di sini...</p>
        </div>
    </div>


</x-layout>
