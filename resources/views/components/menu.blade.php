<div class="mt-4 inline-flex w-full relative">
    <div
        class="bg-transparent w-full rounded-full h-auto flex items-center gap-2 focus:outline-sky-200 focus:border-spacing-4">
        <form class="w-[902px]" id="search-form">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" name="q"
                    class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                    placeholder="Search..." autocomplete="off" />
            </div>
        </form>
    </div>

    {{-- Buttons --}}
    <div
        class="w-[361px] h-auto bg-transparent rounded-lg flex items-center justify-end gap-9 pr-6 font-medium text-sky-800">
        <a href="/books"
            class="hover:text-transparent hover:bg-gradient-to-r hover:from-sky-500 hover:to-teal-500 hover:bg-clip-text transition ease-in-out">Books</a>
        <a href="/authors"
            class="hover:text-transparent hover:bg-gradient-to-r hover:from-sky-500 hover:to-teal-500 hover:bg-clip-text transition ease-in-out">Authors</a>
        <a href="/genres"
            class="hover:text-transparent hover:bg-gradient-to-r hover:from-sky-500 hover:to-teal-500 hover:bg-clip-text transition ease-in-out">Genres</a>
        <a href="/blogs"
            class="hover:text-transparent hover:bg-gradient-to-r hover:from-sky-500 hover:to-teal-500 hover:bg-clip-text transition ease-in-out">Blogs</a>
    </div>

    <!-- Floating Search Results -->
    <div id="search-results"
        class="absolute top-full left-0 w-[902px] max-h-[300px] bg-white shadow-lg rounded-lg mt-2 hidden z-50 scrollbar-hide overflow-auto backdrop-blur-xl bg-sky-100/80 border border-sky-300/80">
        <div class="p-4">
            <p class="text-gray-500">Type to search...</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('default-search');
            const searchResults = document.getElementById('search-results');
            let currentFetchId = 0; // <- tracking fetch id

            searchInput.addEventListener('input', function() {
                const query = searchInput.value.trim();

                if (query.length < 2) {
                    searchResults.innerHTML = '';
                    searchResults.classList.add('hidden');
                    currentFetchId++; // invalidate all previous fetch
                    return;
                }

                const fetchId = ++currentFetchId; // each new fetch gets new id

                fetch(`{{ route('search.ajax') }}?q=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (fetchId !== currentFetchId) {
                            // this response is outdated, don't process
                            return;
                        }

                        let resultsHTML = '';

                        if (data.authors.length > 0) {
                            resultsHTML += '<h3 class="font-semibold text-lg mb-2">Authors</h3><ul>';
                            data.authors.forEach(author => {
                                resultsHTML += `
                            <li class="inline-flex gap-2 items-center justify-start group transition-all duration-300 ease-in-out hover:cursor-pointer w-full px-2 py-1 bg-sky-50 rounded-lg mb-1">
                                <img src="https://picsum.photos/40?grayscale&?random=${author.id}" alt="" class="rounded-full border-2 border-sky-200 shadow-md ">
                                <div class="flex-col justify-start items-stretch">
                                    <a href="/author/${author.username}">
                                        <p class="text-sky-300 group-hover:text-sky-800">@${author.username}</p>
                                        <p class="text-sky-500 group-hover:text-sky-800 group-hover:underline group-hover:font-medium">${author.name}</p>
                                    </a>
                                </div>
                            </li>`;
                            });
                            resultsHTML += '</ul>';
                        }

                        if (data.books.length > 0) {
                            resultsHTML +=
                                '<h3 class="font-semibold text-lg mt-4 mb-2">Books</h3><ul><div class="grid grid-cols-2 gap-2">';
                            data.books.forEach(book => {
                                const author = book.author || {
                                    username: 'unknown',
                                    name: 'Unknown Author'
                                };
                                resultsHTML += `
                            <li class="bg-sky-50 rounded-lg mb-1 py-3 px-2 inline-flex justify-between group hover:cursor-pointer hover:bg-slate-100">
                                <a href="/book/${book.slug}" class="text-sky-500 truncate w-3/5  group-hover:text-sky-700">${book.title}</a>
                                <a href="/author/${author.username}" class="text-sky-200 group-hover:text-sky-700 group-hover:underline">${author.name}</a>
                            </li>`;
                            });
                            resultsHTML += '</div></ul>';
                        }

                        if (data.blogs.length > 0) {
                            resultsHTML +=
                                '<h3 class="font-semibold text-lg mt-4 mb-2">Blogs</h3><ul><div class="grid grid-cols-2 gap-2">';
                            data.blogs.forEach(blog => {
                                const author = blog.author || {
                                    username: 'unknown',
                                    name: 'Unknown Author'
                                };
                                resultsHTML +=
                                    `<li class="bg-sky-50 rounded-lg mb-1 py-3 px-2 inline-flex justify-between group hover:cursor-pointer hover:bg-slate-100">
                                <a href="/blog/${blog.slug}" class="text-sky-500 truncate w-3/5  group-hover:text-sky-700">${blog.title}</a>
                                <a href="/author/${author.username}" class="text-sky-200 group-hover:text-sky-700 group-hover:underline">${author.name}</a>
                                </li>`;
                            });
                            resultsHTML += '</div></ul>';
                        }

                        if (data.genres.length > 0) {
                            resultsHTML +=
                                '<h3 class="font-semibold text-lg mt-4 mb-2">Genres</h3><ul><div class="grid grid-cols-2 gap-2">';
                            data.genres.forEach(genre => {
                                resultsHTML +=
                                    `<li class="bg-sky-50 rounded-lg mb-1 py-3 px-2 inline-flex justify-between group hover:cursor-pointer hover:bg-slate-100">
                                    <a href="/genres?name=${genre.nama}" class="text-sky-500 group-hover:text-sky-700 group-hover:underline">${genre.nama}</a>
                                    </li>`;
                            });
                            resultsHTML += '</div></ul>';
                        }


                        if (!resultsHTML) {
                            resultsHTML = '<p class="text-gray-500">No results found.</p>';
                        }

                        searchResults.innerHTML = `<div class="p-4">${resultsHTML}</div>`;
                        searchResults.classList.remove('hidden');
                    });
            });

            document.addEventListener('click', function(e) {
                if (!searchResults.contains(e.target) && e.target !== searchInput) {
                    searchResults.classList.add('hidden');
                }
            });
        });
    </script>
</div>
