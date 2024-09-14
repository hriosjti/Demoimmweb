<nav class="py-2 px-4 border" x-data="{ navOpen: true }">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <img src="{{ asset('assets/logo.svg') }}" alt="" class="order-1 sm:order-2">
            <img @click="navOpen =!navOpen" src="{{ asset('assets/toogle.svg') }}" alt=""
                class="order-2 sm:order-1 lg:hidden">
            <div class="order-2 hidden lg:block">
                <ul class="flex gap-16">
                    <li
                        class="{{ request()->is('/') ? 'text-black font-bold font-Circular text-sm' : 'text-gray-600 font-bold font-Circular  opacity-50  text-sm' }}">
                        <a href="/">Home</a>
                    </li>
                    <li
                        class="{{ request()->is('posts') ? 'text-black font-bold font-Circular text-sm' : 'text-gray-600 font-bold font-Circular  opacity-50  text-sm' }}">
                        <a href="{{ url('/posts') }}">Posts</a>
                    </li>
                    <li
                        class="{{ request()->is('about') ? 'text-black font-bold font-Circular text-sm' : 'text-gray-600 font-bold font-Circular  opacity-50  text-sm' }}">
                        <a href="/about">About</a>
                    </li>
                    <li
                        class="{{ request()->is('contact') ? 'text-black font-bold font-Circular text-sm' : 'text-gray-600 font-bold font-Circular  opacity-50  text-sm' }}">
                        <a href="/contact">Contact</a>
                        {{-- </li> --}}
                        {{-- <li class="text-grey font-bold font-Circular opacity-50  text-sm"><a href="">Join us</a> --}}
                        {{-- </li> --}}
                </ul>
            </div>
            {{-- tablet  --}}
            <div class="order-3 hidden sm:block">
                <a href="/admin">
                    <button class=" grow bg-white text-sm rounded-full px-8 py-4 font-bold text-grey">Login</button>
                </a>
                <button class=" grow bg-merah text-sm rounded-full px-8 py-4 font-bold text-white">Sign Up</button>
            </div>
        </div>
    </div>

    <div x-show="navOpen" x-data="{ isOpen: false }" class=" z-50 fixed bottom-0 right-0 left-0 p-4 bg-white lg:hidden"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
        <ul class="flex justify-between">
            <li>
                <a href="/">
                    <button
                        class="{{ request()->is('/') ? 'flex justify-center flex-col items-center gap-2 text-merah' : ' flex justify-center flex-col items-center gap-2 text-grey' }} ">
                        <ion-icon name="home-outline"
                            class="{{ request()->is('/') ? 'text-2xl' : 'text-grey opacity-50 text-2xl' }} "></ion-icon>
                        <span
                            class="{{ request()->is('/') ? 'text-grey text-base font-normal' : 'text-gray opacity-50 text-base font-normal' }} ">Home</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/posts">
                    <button
                        class="{{ request()->is('posts') ? 'flex justify-center flex-col items-center gap-2 text-merah' : ' flex justify-center flex-col items-center gap-2 text-grey' }}">
                        <ion-icon name="newspaper-outline"
                            class="{{ request()->is('posts') ? 'text-2xl' : 'text-grey opacity-50 text-2xl' }} "></ion-icon>
                        <span
                            class="{{ request()->is('posts') ? 'text-grey text-base font-normal' : 'text-gray opacity-50 text-base font-normal' }}">Posts</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/about">
                    <button
                        class="{{ request()->is('about') ? 'flex justify-center flex-col items-center gap-2 text-merah' : ' flex justify-center flex-col items-center gap-2 text-grey' }}">
                        <ion-icon name="partly-sunny-outline"
                            class="{{ request()->is('about') ? 'text-2xl' : 'text-grey opacity-50 text-2xl' }} "></ion-icon>
                        <span
                            class="{{ request()->is('about') ? 'text-grey text-base font-normal' : 'text-gray opacity-50 text-base font-normal' }}">About</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/contact">
                    <button
                        class="{{ request()->is('contact') ? 'flex justify-center flex-col items-center gap-2 text-merah' : ' flex justify-center flex-col items-center gap-2 text-grey' }}">
                        <ion-icon name="call-outline"
                            class="{{ request()->is('contact') ? 'text-2xl' : 'text-grey opacity-50 text-2xl' }} "></ion-icon>
                        <span
                            class="{{ request()->is('contact') ? 'text-grey text-base font-normal' : 'text-gray opacity-50 text-base font-normal' }}">Contact</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/join">
                    <button
                        class="{{ request()->is('join') ? 'flex justify-center flex-col items-center gap-2 text-merah' : ' flex justify-center flex-col items-center gap-2 text-grey' }}">
                        <ion-icon name="enter-outline"
                            class="{{ request()->is('join') ? 'text-2xl' : 'text-grey opacity-50 text-2xl' }} "></ion-icon>
                        <span
                            class="{{ request()->is('join') ? 'text-grey text-base font-normal' : 'text-gray opacity-50 text-base font-normal' }}">Join
                            us</span>
                    </button>
                </a>
            </li>
            <li>
                <button @click="isOpen= !isOpen"
                    class="{{ request()->is('/') ? 'flex justify-center flex-col items-center gap-2 text-merah' : ' flex justify-center flex-col items-center gap-2 text-grey' }} min-[640px]:hidden">
                    <ion-icon name="reorder-two-outline"
                        class="{{ request()->is('/') ? 'text-2xl' : 'text-grey opacity-50 text-2xl' }} "></ion-icon>
                    <span
                        class="{{ request()->is('/') ? 'text-grey text-base font-normal' : 'text-gray opacity-50 text-base font-normal' }}">More</span>
                </button>
            </li>
        </ul>
        <div x-show="isOpen" class="absolute bottom-24  left-1/2 -translate-x-1/2 flex gap-4 w-3/4"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
            <a href="/admin">
                <button class=" grow bg-white text-sm rounded-full px-8 py-4 font-bold text-grey">Login</button>
            </a>
            <button class=" grow bg-merah text-sm rounded-full px-8 py-4 font-bold text-white">Sign Up</button>

        </div>
    </div>
</nav>
