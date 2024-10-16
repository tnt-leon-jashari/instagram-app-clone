<div class="w-full h-full">

    <!-- main -->
    <header class="md:hidden sticky top-0 bg-white">
        <div class="grid grid-cols-12 gap-2 items-center">
            <div class="col-span-3">

                <img src="{{ asset('assets/logo.png') }}" class="h-12 max-w-lg w-full" alt="logo">

            </div>

            <div class="col-span-8 flex justify-center px-2">
                <x:search/>
            </div>

            <div class="col-span-1 flex justify-center">

                <a href="#">
                    <span>
                        <x:icons.heart/>
                    </span>
                </a>

            </div>
        </div>

    </header>

    <!-- main -->

    <main class="grid lg:grid-cols-12 gap-8 md:mt-10">
        <aside class="lg:col-span-8 overflow-hidden">

            <section>
                <ul class="flex overflow-x-auto items-center gap-2">
                    @for ($i = 0; $i<20; $i++)
                        <ul class="flex overflow-x-auto scrollbar-hide items-center gap-2">
                            @for ($i = 0; $i < 20; $i++)
                                <li class="flex flex-col justify-center w-20 gap-1 p-2">
                                    <x-avatar story src="https://randomuser.me/api/portraits/men/{{ $i }}.jpg"
                                              class="h-14 w-14"/>
                                    <div class="text-xs font-medium truncate">{{ fake()->name }}</div>
                                </li>
                            @endfor
                        </ul>
                    @endfor
                </ul>
            </section>
        </aside>


        <!-- sugestion -->
        <aside class="lg:col-span-4 w-80 hidden lg:block p-4">

            <div class="flex items-center gap-2">
                <x-avatar story src="{{ asset('assets/profile_pic.jpg') }}" class="h-12 w-12"/>
                <div class="flex flex-col">
                    <h4 class="font-medium">{{ 'leon__jashari' }}</h4>
                    <h2 class="font-medium text-sm text-gray-600">{{ 'Leon Jashari' }}</h2>
                </div>
            </div>
            <section class="mt-4">
                <h4 class="font-bold text-sm text-gray-500">Suggested for you</h4>
                <ul class="my-2 space-y-3">
                    <li class="li flex items-center gap-3">
                        <x-avatar story src="https://randomuser.me/api/portraits/men/{{ $i }}.jpg" class="h-12 w-12"/>
                        <div class="div grid grid-col-7 w-full gap-2">
                            <div class="col-span-5">
                                <h5 class="h5 font-semibold truncate text-sm">
                                    {{fake()->name}}
                                </h5>
                                <p class="text-xs truncate">Followed by {{fake()->name}}</p>
                            </div>
                        </div>
                        <div class="col-span-2 flex text-right justify-end">
                            <button class="font-bold text-blue-500 ml-auto text-sm">Follow</button>
                        </div>
                    </li>
                </ul>
                <ul class="flex flex-wrap text-gray-400 gap-2 text-xs font-medium mt-6">
                    <li><a href="" class="hover:underline">About•</a></li>
                    <li><a href="" class="hover:underline">Help•</a></li>
                    <li><a href="" class="hover:underline">Press•</a></li>
                    <li><a href="" class="hover:underline">Api•</a></li>
                    <li><a href="" class="hover:underline">Jobs•</a></li>
                    <li><a href="" class="hover:underline">Privacy•</a></li>
                    <li><a href="" class="hover:underline">Terms•</a></li>
                    <li><a href="" class="hover:underline">Locations•</a></li>
                    <li><a href="" class="hover:underline">Language•</a></li>
                    <li><a href="" class="hover:underline">Meta Verified•</a></li>
                </ul>

            </section>

        </aside>


    </main>


</div>
