@props(['latestBlogs'])
<div class="mt-10 w-full">
    <div class="flex items-center justify-between">
        <h2 class="text-3xl font-bold text-sky-800 w-auto">
            Blogs</h2>
        <x-filler></x-filler>
        <a href="/blogs">
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

    <div class="flex w-full gap-4">
        @foreach ($latestBlogs as $latestBlog)
            <a href="/blogs">
                <div
                    class="w-full mt-6 gap-4 bg-sky-50 rounded-lg shadow-lg overflow-hidden group hover:scale-105 transition-all duration-300 ease-in-out hover:shadow-sky-200 hover:shadow-lg">
                    <img src="https://picsum.photos/720/360?random={{ $latestBlog->id }}&?blur=2" alt=""
                        class="object-cover group-hover:scaleto-110 bottom-0 transition-all aspect-[3/1] duration-1000 ease-in-out"
                        alt="Blog Image" />
                    <div class="px-4 py-2">
                        <h3 class="font-semibold text-lg line-clamp-1">{{ $latestBlog->title }}</h3>
                        <div class="flex gap-2 items-center text-base font-medium text-slate-600">
                            <p>{{ $latestBlog->author->name }}</p>
                            <p>.</p>
                            <p>{{ $latestBlog->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach

    </div>
</div>
