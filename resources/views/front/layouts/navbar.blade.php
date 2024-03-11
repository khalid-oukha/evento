    <!---navbar --->

    <nav class="relative flex items-center justify-between px-4 py-4 navbargradient">
        <a class="text-3xl font-bold leading-none" href="#">
            <img src="{{ URL::asset('assets/images/logo2.png') }}" style="width: 7rem" alt="">
        </a>
        <div class="lg:hidden">
            <button class="flex items-center p-3 text-orange-100 navbar-burger">
                <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul
            class="absolute hidden transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-sm text-gray-200 hover:text-gray-100" href="{{ route('home') }}">Home</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm font-bold text-orange-100" href="{{ route('event.all') }}">Events</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            @auth

                <li><a class="text-sm text-gray-200 hover:text-gray-500" href="{{ route('profile.index') }}">My Events</a>
                </li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
            @endauth
            <li><a class="text-sm text-gray-200 hover:text-gray-500" href="#">Pricing</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                    class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>

            <li>
                <a class="text-sm text-gray-200 hover:text-gray-500" href="#">Contact</a>
            </li>

        </ul>
        @auth

            <form class="mr-4 mt-1.5" action="{{ Route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="mr-4 text-white hover:text-neutral-700 focus:text-neutral-7 "
                    href="{{ Route('loginform') }}">
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                        </svg>
                    </span>
                </button>
            </form>
        @else
            <a class="hidden px-6 py-2 text-sm font-bold text-white transition duration-200 lg:inline-block lg:ml-auto lg:mr-3 hover:bg-orange-400 rounded-xl"
                href="{{ Route('registerform') }}">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 512 512">
                    <path
                        d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z" />
                    <g>
                        <path
                            d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z" />
                    </g>
                </svg>
            </a>
            <!--Profile-->

            <!--Profile-->

            <a class="hidden mr-4 text-white lg:inline-block hover:text-neutral-700 focus:text-neutral-7 " href="{{ Route('loginform') }}">
                <span class="[&>svg]:w-5">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ffffff"
                            d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z" />
                    </svg>
                </span>
            </a>

        @endauth

    </nav>
    <div class="relative z-50 hidden navbar-menu">
        <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
        <nav
            class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm px-6 py-6 overflow-y-auto bg-white border-r">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <img src="{{ URL::asset('assets/images/logo1-01.png') }}" style="width: 7rem" alt="">
                </a>
                <button class="navbar-close">
                    <svg class="w-6 h-6 text-gray-200 cursor-pointer hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 rounded hover:bg-orange-400 hover:text-primary-400"
                            href="#">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 rounded hover:bg-orange-400 hover:text-primary-400"
                            href="#">About Us</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 rounded hover:bg-orange-400 hover:text-primary-400"
                            href="#">Services</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 rounded hover:bg-orange-400 hover:text-primary-400"
                            href="#">Pricing</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 rounded hover:bg-orange-400 hover:text-primary-400"
                            href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6">
                    <a class="block px-4 py-3 mb-3 text-xs font-semibold leading-none text-center bg-gray-100 hover:bg-gray-100 rounded-xl"
                        href="{{ Route('loginform') }}">Sign in</a>
                    <a class="block px-4 py-3 mb-2 text-xs font-semibold leading-loose text-center text-white bg-orange-100 hover:bg-blue-700 rounded-xl"
                        href="{{ Route('registerform') }}">Sign Up</a>
                    <form action="{{ Route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="block px-4 py-3 mb-2 text-xs font-semibold leading-loose text-center text-white bg-orange-100 hover:bg-blue-700 rounded-xl">logout</button>
                    </form>
                </div>
                <p class="my-4 text-xs text-center text-gray-200">
                    <span>Copyright © 2021</span>
                </p>
            </div>
        </nav>
    </div>
