<nav class="w-full px-4 sm:px-8 lg:px-16 py-4 sm:py-6">
    <div class="w-full max-w-7xl mx-auto">
        <div class="w-full bg-white rounded-full shadow-lg border border-gray-100 px-6 sm:px-10 lg:px-16 py-4 sm:py-5 flex items-center justify-between gap-6">

            <div class="hidden md:flex items-center gap-5 lg:gap-6">
                <a href="#" class="text-lg font-medium text-gray-800 hover:text-[#8b5cf6] transition-colors duration-200">
                    Shop all
                </a>
                <a href="#" class="text-lg font-medium text-gray-800 hover:text-[#8b5cf6] transition-colors duration-200">
                    Digital Bouquet
                </a>
                <a href="#" class="text-lg font-medium text-gray-800 hover:text-[#8b5cf6] transition-colors duration-200">
                    About
                </a>
            </div>

            <div class="flex md:hidden items-center">
                <button type="button" aria-label="Open menu" class="p-2 text-gray-700 hover:text-[#8b5cf6] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center flex-shrink-0">
                <a href="{{ url('/') }}" class="flex items-center gap-2 sm:gap-3">
                    <img 
                        src="{{ asset('images/logo.png') }}" 
                        alt="Giftify Bloom Logo" 
                        class="h-12 w-12 sm:h-12 sm:w-12 lg:h-14 lg:w-14 object-contain scale-350" 
                    />
                    <!-- <span style="font-family: 'Brush Script MT', 'Segoe Script', cursive; font-style: italic; letter-spacing: 0.5px;">
                        <span class="text-2xl sm:text-3xl lg:text-4xl" style="color: #8b5cf6;">Giftify</span>
                        <span class="text-2xl sm:text-3xl lg:text-4xl" style="color: #d4a574;">&nbsp;Bloom</span>
                    </span> -->
                </a>
            </div>

                <div class="flex items-center gap-1 sm:gap-1 lg:gap-1">
                <button type="button" aria-label="Account" class="p-1 sm:p-2 text-gray-700 hover:text-[#8b5cf6] transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                        <circle cx="12" cy="8" r="4" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0" />
                    </svg>
                </button>

                <button type="button" aria-label="Cart" class="relative p-1 sm:p-2 text-gray-700 hover:text-[#8b5cf6] transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </button>

                <div class="hidden sm:flex items-center gap-2 pl-2 sm:pl-4 border-l border-gray-200 cursor-pointer hover:bg-gray-50 px-2 py-1.5 rounded-full transition-colors" role="button" aria-label="Language selector">
                    <div class="w-8 h-6 rounded-sm overflow-hidden flex-shrink-0 border border-gray-200" aria-hidden="true">
                        <div class="w-full h-1/2 bg-red-600"></div>
                        <div class="w-full h-1/2 bg-white"></div>
                    </div>
                    <span class="text-sm font-semibold text-gray-800 tracking-wide">IND</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>

        </div>
    </div>
</nav>
