<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Giftify Bloom — Bouquet & Personalized Gift</title>
        @fonts
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>
    <body class="bg-white antialiased min-h-screen w-full overflow-x-hidden">

        {{-- =========================================================
             SECTION 1 — HERO (Background padang rumput + koala)
             ========================================================= --}}
        <section class="relative w-full min-h-[100vh] overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/landing/bg_utama.png') }}" alt="Hero background" class="w-full h-full object-cover" />
            </div>

            <div class="absolute top-0 left-0 w-32 sm:w-48 lg:w-64 z-10 pointer-events-none">
                <img src="{{ asset('images/landing/bunga_atas_1.png') }}" alt="" class="w-full h-auto opacity-90" />
            </div>
            <div class="absolute top-0 right-0 w-28 sm:w-40 lg:w-56 z-10 pointer-events-none">
                <img src="{{ asset('images/landing/bunga_atas_2.png') }}" alt="" class="w-full h-auto opacity-90" />
            </div>

            <div class="relative z-20">
                <x-navbar />
            </div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 pb-16 sm:pb-24 lg:pb-32 pt-6 sm:pt-10">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-16">

                    <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left pt-4 sm:pt-8">
                        <a href="#categories" class="mt-8 sm:mt-10 inline-flex items-center justify-center px-10 sm:px-14 py-3 sm:py-4 rounded-full text-sm sm:text-base font-semibold text-[#6d2857] bg-[#ede9fe] hover:bg-[#ddd6fe] border-2 border-[#6d2857] shadow-lg hover:shadow-xl transition-all duration-200 tracking-widest">
                            CREATE BOUQUET
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- =========================================================
             SECTION 2 — CATEGORIES / PRODUCTS GRID
             ========================================================= --}}
        <section id="categories" class="relative w-full bg-gradient-to-b from-white via-[#faf8ff] to-[#f1ebff] py-16 sm:py-20 lg:py-28 overflow-hidden">
            <div class="absolute -left-6 top-0 sm:-left-4 sm:top-10 lg:left-0 w-40 sm:w-56 lg:w-72 opacity-90 pointer-events-none z-0">
                <img src="{{ asset('images/landing/daun_1.png') }}" alt="" class="w-full h-auto" />
            </div>
            <div class="absolute right-2 top-24 sm:right-6 sm:top-20 lg:right-10 w-28 sm:w-36 lg:w-44 opacity-90 pointer-events-none z-0">
                <img src="{{ asset('images/landing/kupu.png') }}" alt="Butterfly decoration" class="w-full h-auto" />
            </div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
                <div class="w-full flex flex-col items-center text-center mb-10 sm:mb-14 lg:mb-20">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#6d2857]" style="font-family: 'Brush Script MT', 'Segoe Script', cursive; font-style: italic;">
                        Categories
                    </h2>
                    <p class="mt-4 max-w-2xl text-sm sm:text-base text-gray-600 leading-relaxed">
                        Explore our curated selection of flowers and personalized gifts for your special occasion. From fresh blooms to custom gift boxes, find the perfect way to make every moment memorable.
                    </p>

                    <div class="mt-8 sm:mt-10 flex flex-wrap items-center justify-center gap-4 sm:gap-6 lg:gap-10">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full border-2 border-[#7A3B60] bg-[#EFEDC0] shadow-md"></div>
                        <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full border-2 border-[#7A3B60] shadow-md flex items-center justify-center bg-[#EFEDC0]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#7A3B60]" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                            </svg>
                        </div>
                        <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full border-2 border-[#7A3B60] shadow-md flex items-center justify-center bg-[#EFEDC0]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#7A3B60]" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 003-3h-12a3 3 0 003 3zm9 0v-7.5h-15v7.5M12 9.75h.008v.008H12V9.75zM9.534 8.475c.585 0 1.059-.474 1.059-1.06S10.119 6.356 9.534 6.356 8.475 6.83 8.475 7.415s.474 1.06 1.059 1.06zm4.932 0c.585 0 1.059-.474 1.059-1.06s-.474-1.059-1.059-1.059-1.06.474-1.06 1.06.475 1.06 1.06 1.06zm-5.42-3.973l3.993-3.992" />
                            </svg>
                        </div>
                        <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full border-2 border-[#7A3B60] bg-[#EFEDC0] shadow-md"></div> 
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-10 lg:gap-12 mb-16 sm:mb-20 lg:mb-24">
                    @foreach ([
                        ['img' => 'buket_1.png', 'name' => 'Hand Bouquet', 'tag' => 'Best Seller'],
                        ['img' => 'buket_2.png', 'name' => 'Money Bouquet', 'tag' => 'Hot Promo'],
                        ['img' => 'buket_3.png', 'name' => 'Doll Bouquet', 'tag' => 'Limited'],
                        ['img' => 'buket_4.png', 'name' => 'Snack Bouquet', 'tag' => 'New Arrival'],
                    ] as $product)
                        <div class="group flex flex-col items-center text-center cursor-pointer">
                            <div class="relative w-64 h-64 sm:w-72 sm:h-72 mx-auto flex items-center justify-center">

                                <!-- Background glow -->
                                <div class="absolute inset-8 rounded-full bg-[#d9c5ff]/50 blur-3xl"></div>

                                <!-- Product -->
                                <img
                                    src="{{ asset('images/landing/'.$product['img']) }}"
                                    alt="{{ $product['name'] }}"
                                    class="relative z-10 w-full h-full object-contain group-hover:scale-105 transition-transform duration-300"
                                />

                            </div>
                            <h3 class="mt-5 text-lg font-bold text-[#7A3B60]">{{ $product['name'] }}</h3>
                            <p class="text-sm text-[#7A3B60] font-medium">{{ $product['tag'] }}</p>
                            <p class="mt-1 text-sm text-[#7A3B60]">IDR xxx.xxx</p>
                        </div>
                    @endforeach
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 lg:gap-12">
                    @foreach ([
                        ['img' => 'buket_5.png', 'name' => 'Fresh Flowers', 'tag' => 'Premium'],
                        ['img' => 'buket_6.png', 'name' => 'Gift Box', 'tag' => 'Custom'],
                        ['img' => 'buket_3.png', 'name' => 'Graduation', 'tag' => 'Special'],
                        ['img' => 'buket_1.png', 'name' => 'Wedding', 'tag' => 'Packages'],
                    ] as $product)
                        <div class="group flex flex-col items-center text-center cursor-pointer">
                            <div class="relative w-64 h-64 sm:w-72 sm:h-72 mx-auto flex items-center justify-center">

                                <!-- Background glow -->
                                <div class="absolute inset-8 rounded-full bg-[#d9c5ff]/50 blur-3xl"></div>

                                <!-- Product -->
                                <img
                                    src="{{ asset('images/landing/'.$product['img']) }}"
                                    alt="{{ $product['name'] }}"
                                    class="relative z-10 w-full h-full object-contain group-hover:scale-105 transition-transform duration-300"
                                />

                            </div>
                            <h3 class="mt-5 text-lg font-bold text-[#7A3B60]">{{ $product['name'] }}</h3>
                            <p class="text-sm text-[#7A3B60] font-medium">{{ $product['tag'] }}</p>
                            <p class="mt-1 text-sm text-[#7A3B60]">IDR xxx.xxx</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- =========================================================
             SECTION 3 — ABOUT / FEATURE + KOALA & BUKET
             ========================================================= --}}
        <section class="relative w-full bg-[#f1ebff] py-16 sm:py-20 lg:py-28 overflow-hidden">
            <div class="absolute -left-8 sm:-left-4 lg:top-100 sm:bottom-16 w-44 sm:w-60 lg:w-80 opacity-90 pointer-events-none z-0">
                <img src="{{ asset('images/landing/daun_2.png') }}" alt="" class="w-full h-auto" />
            </div>
            <div class="absolute right-6 sm:right-10 lg:right-16 lg:-top-15 sm:top-8 w-32 sm:w-40 lg:w-52 opacity-95 pointer-events-none z-0">
                <img src="{{ asset('images/landing/matahari_hiasan.png') }}" alt="" class="w-full h-auto" />
            </div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-20">

                    <div class="w-full lg:w-1/2 text-center lg:text-left">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-4 sm:mb-6">
                            Why choose Giftify Bloom?
                        </h2>
                        <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-4 sm:mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-4 sm:mb-5">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="inline-flex mt-3 sm:mt-5 items-center justify-center px-8 py-3 rounded-full text-sm font-semibold text-white bg-[#8b5cf6] hover:bg-[#7c3aed] shadow-md hover:shadow-xl transition-all duration-200">
                            Our Story →
                        </a>
                    </div>

                    <div class="w-full lg:w-1/2 relative">
                        <div class="relative w-full max-w-lg mx-auto">
                            <div class="relative w-[80%] ml-auto aspect-square rounded-3xl border-4 border-[#f0e7b6] bg-white shadow-2xl p-4 sm:p-6 z-10">
                                <img src="{{ asset('images/landing/buket_2.png') }}" alt="Lavender bouquet" class="w-full h-full object-contain" />
                            </div>
                            <div class="absolute left-80 lg:top-60 sm:top-10 w-[55%] aspect-[4/3] rounded-2xl border-4 border-[#7A3B60] bg-white shadow-xl p-3 sm:p-5 z-20">
                                <img src="{{ asset('images/landing/buket_5.png') }}" alt="Yellow bouquet" class="w-full h-full object-contain" />
                            </div>
                            <div class="absolute lg:top-80 sm:top-10 lg:left-55 sm:-bottom-8 sm:left-6 w-28 sm:w-36 lg:w-40 h-auto z-30">
                                <img src="{{ asset('images/landing/koala.png') }}" alt="Koala mascot" class="w-full h-auto drop-shadow-xl" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- =========================================================
             SECTION 4 — CATEGORIES FLOWERS (8 jenis bunga)
             ========================================================= --}}
        <section class="relative w-full bg-[#f1ebff] py-16 sm:py-20 lg:py-8">
            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
                <div class="w-full flex flex-col items-center text-center mb-12 sm:mb-16 lg:mb-20">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#6d2857]" style="font-family: 'Brush Script MT', 'Segoe Script', cursive; font-style: italic;">
                        Categories
                    </h2>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-10 mb-10 sm:mb-12">
                    @foreach ([
                        ['img' => 'mawar.png',    'name' => 'Mawar',    'desc' => 'A symbol of love, perfect for romantic and special occasions.'],
                        ['img' => 'lily.png',     'name' => 'Lily',     'desc' => 'Elegant white lily symbolizes purity, beauty and new beginnings.'],
                        ['img' => 'tulip.png',    'name' => 'Tulip',    'desc' => 'Soft tulips with various colors to cheer up your special moment.'],
                        ['img' => 'matahari.png', 'name' => 'Matahari', 'desc' => 'Bright sunflowers to bring joy, warmth and happiness.'],
                    ] as $f)
                        <div class="group flex flex-col items-center text-center rounded-2xl border-2 border-[#e9d5ff] bg-white p-5 sm:p-6 hover:shadow-2xl hover:border-[#c4b5fd] transition-all duration-300 cursor-pointer">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28 mb-4 sm:mb-5 flex items-center justify-center">
                                <img src="{{ asset('images/landing/'.$f['img']) }}" alt="{{ $f['name'] }}" class="w-full h-full object-contain drop-shadow-md group-hover:scale-110 transition-transform duration-300" />
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-2">{{ $f['name'] }}</h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">{{ $f['desc'] }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-10">
                    @foreach ([
                        ['img' => 'anyelir.png',  'name' => 'Anyelir',  'desc' => 'Carnation flower for appreciation, admiration and gentle love.'],
                        ['img' => 'hydrangea.png','name' => 'Hydrangea','desc' => 'Beautiful pastel hydrangeas for a sweet and elegant look.'],
                        ['img' => 'orchid.png',   'name' => 'Orchid',   'desc' => 'Luxurious orchids symbolize beauty, luxury and refinement.'],
                        ['img' => 'daisy.png',    'name' => 'Daisy',    'desc' => 'Cheerful daisies to bring innocence and pure happiness.'],
                    ] as $f)
                        <div class="group flex flex-col items-center text-center rounded-2xl border-2 border-[#e9d5ff] bg-white p-5 sm:p-6 hover:shadow-2xl hover:border-[#c4b5fd] transition-all duration-300 cursor-pointer">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28 mb-4 sm:mb-5 flex items-center justify-center">
                                <img src="{{ asset('images/landing/'.$f['img']) }}" alt="{{ $f['name'] }}" class="w-full h-full object-contain drop-shadow-md group-hover:scale-110 transition-transform duration-300" />
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-2">{{ $f['name'] }}</h3>
                            <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">{{ $f['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- =========================================================
             SECTION 5 — HOW IT WORKS (3 kolom steps)
             ========================================================= --}}
        <section class="relative w-full bg-gradient-to-b from-[#f1ebff] to-white py-16 sm:py-20 lg:py-28">
            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-10 lg:gap-12">
                    @foreach ([
                        ['step' => '1', 'title' => 'Pick Your Flowers',
                         'text' => 'Choose from our collection of fresh flowers and gifts — roses, lilies, tulips and more.'],
                        ['step' => '2', 'title' => 'Customize Your Gift',
                         'text' => 'Personalize your bouquet with add-ons, greeting card, wrapping, and delivery date.'],
                        ['step' => '3', 'title' => 'We Deliver with Love',
                         'text' => 'We handcraft your gift with care and deliver it straight to your special one.'],
                    ] as $step)
                        <div class="relative flex flex-col items-center text-center rounded-[2rem] bg-[#f5efff] border-2 border-[#e9d5ff] p-8 sm:p-10 hover:shadow-xl transition-all duration-300">
                            <div class="absolute -top-6 w-12 h-12 rounded-full bg-[#f0e7b6] shadow-md flex items-center justify-center border-4 border-white">
                                <span class="text-lg font-bold text-[#6d2857]">{{ $step['step'] }}</span>
                            </div>
                            <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-[#ede9fe] mb-5 sm:mb-6 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-[#8b5cf6]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-[#6d2857] mb-3">{{ $step['title'] }}</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ $step['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Footer akan dibuat nanti --}}

    </body>
</html>
