@extends('front.layouts.master')

@section('title')
    Home
@endsection

@section('css')
@endsection

@section('content')
    <main class="relative w-full h-full overflow-hidden ">
        <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('assets/images/section4.jpg') }}"
            alt="" srcset="">
        <div class="relative z-20 flex items-center px-4 overflow-hidden sm:px-6 customgradient lg:px-8 dark:bg-gray-800">
            <div class="container relative px-4 pt-12 mx-auto sm:px-6 lg:px-8 sm:flex">
                <div class="z-50 flex-col sm:w-2/3 lg:w-1/2 sm:flex sm:relative">
                    <span class="w-16 h-2 mb-4 bg-orange-100 dark:bg-white sm:mb-6"></span>
                    <h1
                        class="flex flex-col mb-4 text-4xl font-black leading-tight text-white uppercase font-bebas-neue sm:text-5xl md:text-6xl lg:text-7xl dark:text-white sm:mb-6">
                        Elevate Your Fitness Journey WITH events
                        <span class="text-3xl text-orange-100 sm:text-4xl md:text-5xl lg:text-6xl">
                            EasyEVENT
                        </span>
                    </h1>
                    <p class="mb-6 text-sm text-white sm:text-base dark:text-white sm:mb-8">
                        Unleash the best version of yourself at EasyEVENT events. Our state-of-the-art facilities, expert
                        trainers, and vibrant community are here to inspire and guide you on your fitness journey.
                    </p>
                    <div class="flex flex-col items-start sm:flex-row sm:items-center">
                        <a href="#"
                            class="px-4 py-2 mb-2 mr-0 text-white uppercase bg-orange-100 border-2 border-transparent rounded-lg text-md sm:mr-4 sm:mb-0 hover:bg-pink-400">
                            Get started
                        </a>
                        <a href="#"
                            class="px-4 py-2 text-orange-100 uppercase bg-transparent border-2 border-orange-100 rounded-lg dark:text-white hover:bg-pink-500 hover:text-white text-md">
                            Read more
                        </a>
                    </div>
                </div>
                <div class="relative hidden lg:block lg:w-3/5">
                    <img src="{{ asset('assets/images/hero1.png') }}" class="w-full m-auto" />
                </div>
            </div>
        </div>
    </main>


    <section class="relative w-full h-full overflow-hidden">
        <img class="absolute top-0 left-0 object-cover w-full h-full" src="{{ asset('assets/images/section3.jpg') }}"
            alt="Background Image">
        <div class="relative z-50 flex items-center justify-center h-full px-8 customgradient dark:bg-gray-800">
            <div class="container flex flex-wrap items-start mx-auto">
                <div class="w-full lg:w-2/5">
                    <img src="{{ asset('assets/images/aboutimg.png') }}" alt="Violinist" class="inset-0 w-full lg:max-w-lg"
                        style="transform: translateY(0%);">
                </div>
                <div class="w-full px-6 text-center lg:w-3/5 lg:text-left">
                    <div class="py-12">
                        <span class="inline-block w-20 h-2 mb-12 bg-orange-100 dark:bg-white"></span>
                        <h2
                            class="text-4xl font-black leading-none text-white uppercase font-bebas-neue sm:text-4xl dark:text-white">
                            About EasyEVENT events
                            <span class="text-4xl text-orange-100 sm:text-4xl">
                                EasyEVENT
                            </span>
                        </h2>
                        <p class="py-4 text-sm text-white sm:text-base dark:text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore necessitatibus ut odit
                            corrupti sint optio neque dolorum itaque quasi nisi ipsam incidunt at voluptates, possimus,
                            repellat nihil provident! Ut, officia. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Odit quia consequuntur incidunt praesentium velit neque rerum voluptatem vitae, veritatis
                            cumqueatis cumque
                            distinctio totam a iusto. Aliquam fugit eligendi nisi officia possimus?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore necessitatibus ut odit
                            corrupti sint optio neque dolorum itaque quasi nisi ipsam incidunt at voluptates, possimus,
                            repellat nihil provident! Ut, officia. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Odit quia consequuntur incidunt praesentium velit neque rerum voluptatem vitae, veritatis cumque
                            distinctio totam a iusto. Aliquam fugit eligendi nisi officia possimus?
                            distinctio totam a iusto. Aliquam fugit eligendi nisi officia possimus?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore necessitatibus ut odit
                            corrupti sint optio neque dolorum itaque quasi nisi ipsam incidunt at voluptates, possimus,
                            repellat nihil provident! Ut, officia. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Odit quia consequuntur incidunt praesentium velit neque rerum voluptatem vitae, veritatis cumque
                            distinctio totam a iusto. Aliquam fugit eligendi nisi officia possimus?

                        </p>
                        <div class="mt-8">
                            <a href="#"
                                class="px-4 py-2 text-orange-100 uppercase bg-transparent border-2 border-orange-100 rounded-lg dark:text-white hover:bg-pink-500 hover:text-white text-md">
                                About us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative w-full h-full overflow-hidden  customgradient">

        <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('assets/images/section3.jpg') }}"
            alt="" srcset="">
        <h2 class="relative z-50 flex justify-center py-5 text-4xl font-bold text-white customgradient"> UpComing Events
        </h2>
        <div class="relative z-50 flex items-center justify-center w-full h-full overflow-hidden customgradient">

            <div class="z-50 grid grid-cols-1 gap-5 lg:w-3/4 lg:grid-cols-3 lg:gap-10 ">
                @foreach ($events as $event)
                    <div class="">
                        <div class="max-w-sm my-4 overflow-hidden rounded-lg shadow-lg">
                            <img class="object-cover object-center w-full h-56"
                                src="{{ asset('storage/images/' . $event->image) }}" alt="avatar">

                            <div class="px-6 py-4">
                                <h3 class="text-2xl font-semibold text-gray-100">{{ $event->title }}</h3>
                                <h3 class="font-semibold text-gray-300 text-1xl">Organizer : <span
                                        class="py-2 font-semibold text-primary-300">{{ $event->organizer->user->firstname . ' ' . $event->organizer->user->lastname }}</span>
                                </h3>

                                <div class="flex items-center mt-4 text-gray-100">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 512 512">
                                        <path
                                            d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z" />
                                        <g>
                                            <path
                                                d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z" />
                                        </g>
                                    </svg>
                                    <h4 class="px-2 text-sm">{{ $event->availableSeats }} available Seats</h4>
                                </div>
                                <div class="flex items-center mt-4 text-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14"
                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#d9dce3"
                                            d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                    </svg>
                                    <h4 class="px-2 text-sm">{{ \Carbon\Carbon::parse($event->date)->diffForHumans() }}</h4>
                                </div>
                                <div class="flex items-center mt-4 text-gray-100">
                                    <span class="w-2 py-3 bg-orange-100">
                                    </span>
                                    <span class="px-3 font-semibold text-gray-100">{{ $event->category->name }}</span>

                                </div>
                                <div class="flex items-center justify-between mt-4 text-gray-100">
                                    <a href="{{ route('event.details',$event->id) }}" class="relative px-6 py-2 font-medium text-white group">
                                        <span
                                            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-gray-500 group-hover:bg-primary-100 group-hover:skew-x-12"></span>
                                        <span
                                            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-gray-800 group-hover:bg-primary-300 group-hover:-skew-x-12"></span>
                                        <span
                                            class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-primary-400 -rotate-12"></span>
                                        <span
                                            class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-orange-200 -rotate-12"></span>
                                        <span class="relative">View More</span>
                                    </a>
                                    <a href="{{ Route('booking.event',$event->id) }}" class="relative px-6 py-2 font-medium text-white group">
                                        <span
                                            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-primary-300 group-hover:bg-primary-100 group-hover:skew-x-12"></span>
                                        <span
                                            class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-primary-100 group-hover:bg-primary-300 group-hover:-skew-x-12"></span>
                                        <span
                                            class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-primary-400 -rotate-12"></span>
                                        <span
                                            class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-orange-200 -rotate-12"></span>
                                        <span class="relative">Get Ticket</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <div class="relative z-50 flex items-center justify-center py-8 customgradient">
            <div>
                <a href="{{ route('event.all') }}" class="relative px-8 py-2 font-medium text-white group">
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-orange-500 group-hover:bg-primary-100 group-hover:skew-x-12"></span>
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-orange-800 group-hover:bg-primary-300 group-hover:-skew-x-12"></span>
                    <span
                        class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-primary-400 -rotate-12"></span>
                    <span
                        class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-orange-200 -rotate-12"></span>
                    <span class="relative">View all</span>
                </a>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
@endsection
