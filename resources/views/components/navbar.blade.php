<nav class="bg-white dark:bg-gray-800 fixed top-0 left-0 w-full z-50 shadow-md">
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

                {{-- Page Navigator --}}
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

                {{-- Cart Navigator --}}
                <a href="/cart" class="flex">
                    <button id="iniCart" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 h-12 pr-[10px] hover:bg-sky-50 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white transition-all duration-[600ms] ease-in-out group">
                        {{-- <span class="sr-only">
                            Cart
                        </span> --}}
                        <div id="carticon-lottie" class="w-7 h-7 mr-1"></div>
                        <span class="hidden sm:flex group-hover:font-semibold">My Cart</span>
                    </button>
                </a>

                {{-- Menu User --}}
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                    class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-sky-50 dark:hover:bg-gray-700 text-sm font-medium leading-none text-gray-900 dark:text-white group transition-all duration-[600ms] ease-in-out"
                    type="button">
                    {{-- <span class="sr-only">Open user menu</span> --}}
                    <img class="w-8 h-8 me-2 rounded-full" src="https://picsum.photos/48" alt="user photo">
                    <span
                        class="group-hover:font-semibold group-hover:text-sky-700 transition-all duration-[600ms] ease-in-out">{{ Auth::check() ? Auth::user()->username : 'Jawaaaaa' }}</span>
                    <div id="arrow-lottie" class="w-6 h-6 ml-1 -rotate-90"></div>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName"
                    class="hidden px-2 z-10 w-56 divide-y divide-gray-100 overflow-hidden overflow-y-auto rounded-lg bg-white antialiased shadow dark:divide-gray-600 dark:bg-gray-700 group">
                    <div
                        class="px-4 py-3 text-start text-sm font-medium text-gray-900 dark:text-white hover:bg-sky-50 rounded-md  transition-all duration-[500ms] ease-in-out hover:scale-105 hover:text-gray-800 group">
                        <div class="font-semibold group-hover:scale-105 transition-all duration-300 ease-in-out">
                            {{ Auth::check() ? Auth::user()->name : 'Jawa Absolute' }}</div>
                        <div
                            class="truncate font-medium group-hover:scale-105 transition-all duration-1000 ease-in-out">
                            {{ Auth::check() ? Auth::user()->email : 'jawa@gmail.com' }}
                        </div>
                    </div>

                    <ul class="py-2 text-start text-sm font-medium text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li><a href="/profil" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-sky-50 dark:hover:bg-gray-600  transition-all duration-[500ms] ease-in-out hover:scale-105 hover:font-semibold hover:text-gray-800">
                                My Account </a></li>
                        <li><a href="#" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-sky-50 dark:hover:bg-gray-600  transition-all duration-[500ms] ease-in-out hover:scale-105 hover:font-semibold hover:text-gray-800">
                                My Orders </a></li>
                        <li><a href="/favorite" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-sky-50 dark:hover:bg-gray-600  transition-all duration-[500ms] ease-in-out hover:scale-105 hover:font-semibold hover:text-gray-800">
                                Favourites </a></li>
                    </ul>

                    <div class="py-2">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                @method('POST') <!-- atau DELETE -->
                                <button type="submit"
                                    class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-sky-50 dark:hover:bg-gray-600  transition-all duration-[500ms] ease-in-out hover:scale-105 hover:font-semibold hover:text-gray-800">
                                    Logout
                                </button>
                            </form>
                        @endauth

                        @guest
                            <a href="{{ route('login') }}"
                                class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-sky-50 dark:hover:bg-gray-600  transition-all duration-[500ms] ease-in-out hover:scale-105 hover:font-semibold hover:text-gray-800">
                                Login
                            </a>
                        @endguest
                    </div>
                </div>

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
