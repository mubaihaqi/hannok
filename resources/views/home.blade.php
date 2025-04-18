<x-layout>
    <div class="mx-auto max-w-7xl pt-12 h-full">
        <x-hero></x-hero>
        <x-menu></x-menu>
        <x-topauthors :topAuthors="$topAuthors"></x-topauthors>
        <x-bukuterbaru :latestBooks="$latestBooks"></x-bukuterbaru>
        <x-authorsgenre :topGenres="$topGenres"></x-authorsgenre>
        <x-showcase></x-showcase>
        <x-blog :latestBlogs="$latestBlogs"></x-blog>
    </div>
</x-layout>
