<header class="flex flex-wrap items-center p-4 md:py-8">

    <div class="md:w-3/12 md:ml-16">
        <!-- profile image -->
        <img class="object-cover w-20 h-20 p-1 border-2 border-pink-600 rounded-full md:w-40 md:h-40"
            src="{{ asset('/images/uploads/' . auth()->user()->organizer->profile_picture) }}" alt="profile">
    </div>

    <!-- profile meta -->
    <div class="w-8/12 ml-4 md:w-7/12">
        <div class="flex justify-between mb-4 md:flex md:flex-wrap md:items-center">
            <h2 class="inline-block mb-2 text-3xl font-light text-gray-100 md:mr-2 sm:mb-0">
                {{ auth()->user()->firstname . '_' . auth()->user()->lastname }}
            </h2>

            <!-- badge -->
            <span
                class="relative inline-block mr-6 text-xl text-gray-100 transform -translate-y-2 fas fa-certificate fa-lg"
                aria-hidden="true">
                <i class="absolute inset-x-0 mt-px ml-1 text-xs text-white fas fa-check"></i>
            </span>

            <!-- follow button -->
            <a href="{{ route('create.event') }}"
                class='flex items-center justify-center justify-end mt-3 transition-all duration-500 bg-orange-500 rounded-full cursor-pointer w-11 h-11 hover:bg-indigo-700'>
                <svg width='10' height='10' viewBox='0 0 10 10' fill='none'
                    xmlns='http://www.w3.org/2000/svg'>
                    <path d='M1.22229 5.00019H8.77785M5.00007 8.77797V1.22241' stroke='white' stroke-width='1.6'
                        stroke-linecap='round' stroke-linejoin='round'></path>
                </svg>
            </a>

        </div>

        <!-- post, following, followers list for medium screens -->
        <ul class="hidden mb-4 space-x-8 md:flex">
            <li class="font-semibold text-gray-200">
                <span class="font-semibold text-gray-200">
                    {{ auth()->user()->email }}
                </span>

            </li>


        </ul>

        <!-- user meta form medium screens -->
        <div class="hidden md:block">

            <span class="text-gray-200">Travel, Nature and Music</span>
            <p class="text-gray-200"> {{ auth()->user()->organizer->bio }}</p>
        </div>

    </div>

    <!-- user meta form small screens -->
    <div class="my-2 text-sm md:hidden">
        <h1 class="font-semibold text-gray-200">Mr Travlerrr...</h1>
        <span class="text-gray-200">Travel, Nature and Music</span>
        <p class="text-gray-200">{{ auth()->user()->organizer->bio }}</p>
    </div>

</header>
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
        <div class="text-center">
            <div
                class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor"
                    viewBox="0 0 52 52">
                    <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                        points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
            </div>
            <h6 class="text-4xl font-bold text-gray-100 text-deep-purple-accent-400">{{ $statistics['total_events'] }}
            </h6>
            <p class="mb-2 font-bold text-gray-200 text-md">Total Events</p>
            <p class="text-gray-400">
                Total published Events : {{ $statistics['total_approved_events'] }}
            </p>
        </div>
        <div class="text-center">
            <div
                class="flex items-center justify-center w-10 h-10 mx-auto mb-3 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                <svg class="w-8 h-8 text-deep-purple-accent-400 sm:w-10 sm:h-10" stroke="currentColor"
                    viewBox="0 0 52 52">
                    <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                        points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
            </div>
            <h6 class="text-4xl font-bold text-gray-100 text-deep-purple-accent-400">
                {{ $statistics['total_reservations'] }}
            </h6>
            <p class="mb-2 font-bold text-gray-200 text-md">All time reservations</p>
            <p class="text-gray-400">
                the Percentage Of reservation Is <br> {{ $statistics['PercentageOfReservations'] . '%' }}
            </p>
        </div>

    </div>
</div>


<!-- posts -->
<div class="px-px md:px-3">

    <!-- user following for mobile only -->
    <ul class="flex justify-around p-2 space-x-8 text-sm leading-snug text-center text-gray-600 border-t md:hidden">
        <li>
            <span class="block font-semibold text-gray-200">136</span>
            posts
        </li>

        <li>
            <span class="block font-semibold text-gray-200">40.5k</span>
            followers
        </li>
        <li>
            <span class="block font-semibold text-gray-200">302</span>
            following
        </li>
    </ul>

    <!-- insta freatures -->
    <ul
        class="flex items-center justify-around space-x-12 text-xs font-semibold tracking-widest text-gray-200 uppercase border-t md:justify-center">
        <!-- posts tab is active -->
        <li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-400">
            <a class="inline-block p-3" href="#">
                <i class="text-xl fas fa-th-text-gray-200 large md:text-xs"></i>
                <span class="hidden text-gray-200 md:inline">Pending</span>
            </a>
        </li>
        <li>
            <a class="inline-block p-3" href="#">
                <i class="text-xl text-white far fa-square md:text-xs"></i>
                <span class="hidden text-green-500 md:inline">accepted</span>
            </a>
        </li>

    </ul>

    <!-- column -->
    <div class="grid grid-cols-1 gap-6 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-4 max-md:max-w-lg">

        @foreach ($events as $event)
            <div
                class="bg-gray-500 mb-6 mx-2 cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
                <a href="{{ route('event.details', $event->id) }}">
                    <img src="{{ asset('storage/images/' . $event->image) }}" alt="Blog Post 1"
                        class="object-cover w-full h-96" />
                </a>

                @if ($event->status == 'pending')
                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-white opacity-90">
                        <span
                            class="block mb-2 text-sm text-gray-600">{{ \Carbon\Carbon::parse($event->date)->diffForHumans() }}
                            | BY
                            {{ $event->organizer->user->firstname . ' ' . $event->organizer->user->lastname }}</span>
                        <h3 class="text-xl font-bold text-[#333]">{{ $event->title }}</h3>
                        <div class="h-0 overflow-hidden transition-all duration-300 group-hover:h-16 group-hover:mt-4">
                            <p class="text-sm text-gray-600">{{ $event->description }}</p>
                        </div>
                        <div>
                            <a href="{{ route('edit.event', $event->id) }}"
                                class="inline-flex items-end px-1  py-1  text-orange-200 border rounded mr border-orang-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>

                            <a href="{{ route('event.delete', $event->id) }}"
                                class="inline-flex items-center px-1 py-1  text-orange-200 border rounded border-orang-100">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </a>


                        </div>
                    </div>
                @elseif ($event->status == 'active')
                    <div class="absolute bottom-0 left-0 right-0 p-6 bg-green-600 opacity-90">
                        <span
                            class="block mb-2 text-sm text-gray-100">{{ \Carbon\Carbon::parse($event->date)->diffForHumans() }}
                            | BY
                            {{ $event->organizer->user->firstname . ' ' . $event->organizer->user->lastname }}</span>
                        <h3 class="text-xl font-bold text-gray-100">{{ $event->title }}</h3>
                        <div class="h-0 overflow-hidden transition-all duration-300 group-hover:h-16 group-hover:mt-4">
                            <p class="text-sm text-gray-300">{{ $event->description }}</p>
                        </div>
                        <span class="block mb-2 text-sm text-gray-300"> | Total Reservations :
                            {{ $event->reservations_count }}
                        </span>
                        <span class="block mb-2 text-sm text-gray-300">
                            | Avaliable Seats :
                            {{ $event->availableSeats }}
                        </span>
                        <div class="flex items-center justify-between ">
                            <a href="{{ route('orangizer.reservations', $event->id) }}"
                                class="inline-flex items-center  px-1 py-1  text-gray-200 border border-indigo-100 rounded">
                                reservation
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    class="w-6 h-2 ml-2">
                                    <path d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                            <div>
                                <a href="{{ route('edit.event', $event->id) }}"
                                    class="inline-flex items-end px-1  py-1  text-orange-200 border rounded mr border-orang-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>

                                <a href="{{ route('event.delete', $event->id) }}"
                                    class="inline-flex items-center px-1 py-1  text-orange-200 border rounded border-orang-100">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                </a>


                            </div>
                        </div>

                    </div>
                @endif

            </div>
        @endforeach

    </div>


</div>
<div class="p-4 m-4">
    {{ $events->links() }}
</div>
