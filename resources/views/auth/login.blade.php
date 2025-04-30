<x-layout>
    <section class="pt-8 pb-0 antialiased dark:bg-gray-900 block h-[760px] relative overflow-hidden">
        <div id="lottie-bgGradient" class="fixed inset-0 -z-10 pointer-events-none w-full h-full"></div>
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0 mt-8 flex flex-col justify-center">
            <div
                class="rounded-lg shadow dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700 backdrop-blur-md border-4 border-white/30 p-6 w-full inline-flex gap-0 mx-auto h-auto">

                {{-- Daleman 2 --}}
                <div class="py-0 pl-0 w-1/2 bg-white rounded-md flex flex-col justify-start gap-2 h-auto">
                    <a href="/" class="flex justify-center">
                        <h4
                            class="text-[32px] my-4 font-bold tracking-tighter text-transparent bg-gradient-to-r from-sky-500 to-teal-500 bg-clip-text">
                            Hannok.com
                        </h4>
                    </a>

                    <video id="sceneVideo" src="{{ asset('video/Scene.mp4') }}" class="rounded-md h-[400px]" autoplay
                        loop muted></video>
                    <div class="flex flex-col justify-center items-center gap-1 mb-4">
                        <div class="inline-flex gap-4 justify-center items-center mb-2">
                            <a href="https://www.instagram.com/haq_xgi"
                                class="bg-orange-600 w-8 aspect-[1/1] items-center flex justify-center rounded-full shadow-md border-2 pt-0.5">
                                <div id="instagram-lottie" class="w-6 aspect-[1/1]"></div>
                            </a>
                            <a href="https://twitter.com/skyrthym"
                                class="bg-sky-600 w-8 aspect-[1/1] items-center flex justify-center rounded-full shadow-md border-2 pt-0.5">
                                <div id="twitter-lottie" class="w-6 aspect-[1/1]"></div>
                            </a>
                            <a href="https://www.linkedin.com/in/umarbaihaqi"
                                class="bg-blue-600 w-8 aspect-[1/1] items-center flex justify-center rounded-full shadow-md border-2">
                                <div id="linkedin-lottie" class="w-4 aspect-[1/1]"></div>
                            </a>
                            <a href="https://www.youtube.com/qingyu_qing"
                                class="bg-red-600 w-8 aspect-[1/1] items-center flex justify-center rounded-full shadow-md border-2 pl-0.5">
                                <div id="youtube-lottie" class="w-6 aspect-[1/1]"></div>
                            </a>
                        </div>
                        <a href=""
                            class="font-medium text-base text-slate-500 hover:text-slate-700">customercare@hannok.com</a>
                        <p class="font-medium text-base text-slate-500 hover:text-slate-700">© 2025 Hannok Book Store
                        </p>
                    </div>
                </div>

                {{-- Daleman 1 --}}
                <div
                    class="px-20 py-8 space-y-4 md:space-y-6 w-1/2 bg-white/50 backdrop-blur-md h-auto flex-col justify-between">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>

                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                class="bg-white/10 backdrop-blur-sm border border-gray-300 text-gray-900 rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-gray-400"
                                placeholder="name@company.com" required autofocus autocomplete="off" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input id="password" type="password" name="password" placeholder="••••••••"
                                class="bg-white/10 backdrop-blur-sm border border-gray-300 text-gray-900 rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-gray-400"
                                required autocomplete="off" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" name="remember"
                                        class="w-4 h-4 border text-sky-600 border-gray-300 rounded bg-white/10 backdrop-blur-sm focus:ring-3 focus:ring-sky-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-sky-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-sm font-medium text-sky-600 hover:underline dark:text-sky-500">Forgot
                                    password?</a>
                            @endif
                        </div>

                        <!-- Login Button -->
                        <button type="submit"
                            class="w-full text-white bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                            Log in
                        </button>

                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400 w-full text-center">Atau</p>

                        <button type="button" id="google-login"
                            class="relative overflow-hidden group w-full text-slate-500 bg-white hover:ring-2 hover:ring-slate-300 focus:ring-4 focus:outline-none focus:ring-sky-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-500 dark:hover:bg-sky-600 dark:focus:ring-sky-800 transition-all duration-1000 ease-in-out btn-hover-effect">
                            <a href="/auth/google/redirect"
                                class="flex justify-center items-center gap-2 relative z-10 group-hover:text-white transition duration-300">
                                <div id="google-lottie" class="w-8 aspect-[1/1]"></div>
                                Sign in with Google
                            </a>
                        </button>

                        <button type="button" id="github-login"
                            class="relative overflow-hidden group w-full text-slate-500 bg-white hover:ring-2 hover:ring-slate-300 focus:ring-4 focus:outline-none focus:ring-sky-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-500 dark:hover:bg-sky-600 dark:focus:ring-sky-800 transition-all duration-1000 ease-in-out btn-hover-effect">
                            <a href="/auth/github/redirect"
                                class="flex justify-center items-center gap-2 relative z-10 group-hover:text-white transition duration-300">
                                <div id="github-lottie" class="w-6 aspect-[1/1]"></div>
                                Sign in with Github
                            </a>
                        </button>

                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="/register"
                                class="font-medium text-sky-600 hover:underline dark:text-sky-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- <x-slot:footer></x-slot:footer> --}}
</x-layout>
