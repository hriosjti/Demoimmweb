<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>



    {{-- hero section --}}
    <section>
        <div class="container mx-auto px-4 py-20">
            <div class="grid grid-cols-12 ">
                <div class="col-span-12 lg:col-span-4 order-2 lg:order-1">
                    <div>
                        <button
                            class="px-8 py-4 bg-white text-oren flex gap-2 text-sm font-bold drop-shadow-sm hover:drop-shadow-xl rounded-full mx-auto lg:mx-0">
                            Explore the world!
                            <img src="{{ asset('assets/icon/work 1.svg') }}" alt="">
                        </button>
                        <h1
                            class="mt-4 mb-6 md:mb-[43px] md:mt-[43px] font-bold text-[40px] md:text[52px] lg:text-[60px] text-grey leading-tight lg:text-start text-center ">
                            Ikatan <span class="text-merah">Mahasiswa Muhammadiyah</span> Fakultas Ilmu Komputer</h1>
                        <p
                            class="mb-6 md:mb-[43px] text-center text-grey lg:text-start opacity-50 texy-base md:text[18px] font-inter md:w-3/4 lg:w-full mx-auto">
                            IMM, pelopor perubahan,
                            Membangun semangat persatuan,
                            Menciptakan kader berintegritas,
                            Untuk masa depan yang gemilang dan penuh makna.Bergerak
                            Bersama, Membangun
                            Peradaban
                            Bismillah, Fastabikul
                            Khairat...</p>
                        <div class="flex flex-col md:flex-row justify-center gap-6 mt-2">
                            <button onclick="window.location.href='/join';"
                                class="py-6 px-8 bg-merah drop-shadow-sm hover:drop-shadow-xl lg:rounded-3xl rounded-full text-white text-sm font-bold">
                                Join right now
                            </button>
                            <button
                                onclick="window.location.href='https://www.instagram.com/tv/CjLRRUtJVFF/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==';"
                                class="flex gap-2 py-6 px-8 bg-white border border-[#EEEEEE] drop-shadow-sm hover:drop-shadow-xl lg:rounded-3xl rounded-full text-sm font-bold justify-center">
                                <img src="{{ asset('assets/icon/play-circle.svg') }}" alt="">
                                introduction
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8 order-1 lg:ms-12">
                    <div>
                        <img src="{{ asset('assets/hero.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg font-semibold leading-8 text-red-900">Trusted by the world’s most
                innovative
                teams</h2>
            <div
                class="opacity-50 mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal"
                    width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                    width="158" height="48">
            </div>
        </div>
        </div>
    </section>

</x-layout>
