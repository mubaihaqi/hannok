<nav class="bg-white dark:bg-gray-800 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
        <div class="flex items-center justify-between">

            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="/" class="flex">
                        <h4
                            class="text-2xl font-bold tracking-tighter text-transparent bg-gradient-to-r from-sky-500 to-teal-500 bg-clip-text">
                            Hannok.com</h4>
                    </a>
                </div>

                <ul class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3 sm:justify-center">
                    <li>
                        <a href="/promo" title=""
                            class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                            Promo
                        </a>
                    </li>
                    <li class="shrink-0">
                        <a href="/toko" title=""
                            class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                            Toko Kami
                        </a>
                    </li>
                    <li class="shrink-0">
                        <a href="/contact" title=""
                            class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">
                            Hubungi Kami
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex items-center lg:space-x-2">
                <a href="/" class="flex">
                    <button id="myCartDropdownButton1" data-dropdown-toggle="myCartDropdown1" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 pr-[10px] hover:bg-sky-50 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                        <span class="sr-only">
                            Cart
                        </span>
                        <svg class="w-5 h-5 lg:me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                        </svg>
                        <span class="hidden sm:flex">My Cart</span>
                    </button>
                </a>

                <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button"
                    class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-sky-50 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white">
                    <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2"
                            d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    Account
                    <svg class="w-4 h-4 text-gray-900 dark:text-white ms-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <div id="userDropdown1"
                    class="hidden z-10 w-56 divide-y divide-gray-100 overflow-hidden overflow-y-auto rounded-lg bg-white antialiased shadow dark:divide-gray-600 dark:bg-gray-700">
                    <ul class="p-2 text-start text-sm font-medium text-gray-900 dark:text-white">
                        <li><a href="#" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                My Account </a></li>
                        <li><a href="#" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                My Orders </a></li>
                        <li><a href="#" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                Settings </a></li>
                        <li><a href="#" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                Favourites </a></li>
                        <li><a href="#" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                Delivery Addresses </a></li>
                        <li><a href="#" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                Billing Data </a></li>
                    </ul>

                    <div class="p-2 text-sm font-medium text-gray-900 dark:text-white">
                        <a href="#" title=""
                            class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                            Sign Out </a>
                    </div>
                </div>

                <button type="button" data-collapse-toggle="ecommerce-navbar-menu-1"
                    aria-controls="ecommerce-navbar-menu-1" aria-expanded="false"
                    class="inline-flex lg:hidden items-center justify-center hover:bg-gray-100 rounded-md dark:hover:bg-gray-700 p-2 text-gray-900 dark:text-white">
                    <span class="sr-only">
                        Open Menu
                    </span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="ecommerce-navbar-menu-1"
            class="bg-gray-50 dark:bg-gray-700 dark:border-gray-600 border border-gray-200 rounded-lg py-3 hidden px-4 mt-4">
            <ul class="text-gray-900 dark:text-white text-sm font-medium space-y-3">
                <li>
                    <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Promo</a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Toko Kami</a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Hubungi
                        Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
