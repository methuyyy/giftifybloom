<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<nav class="w-full px-4 sm:px-8 lg:px-16 pt-3 sm:pt-4 pb-1 " x-data="{ mobileOpen: false }">
    <div class="w-full max-w-7xl mx-auto">
        <div class="w-full bg-white rounded-full shadow-lg border border-gray-100 px-6 sm:px-10 lg:px-16 py-1 sm:py-1.5 flex items-center justify-between gap-6">

            
            <div class="hidden md:flex items-center gap-5 lg:gap-6">
                <a href="<?php echo e(route('shop')); ?>" class="text-base lg:text-lg font-medium text-gray-800 hover:text-[#8b5cf6] transition-colors duration-200">Shop all</a>
                <a href="<?php echo e(route('pick.flowers')); ?>" class="text-base lg:text-lg font-medium text-gray-800 hover:text-[#8b5cf6] transition-colors duration-200">Digital Bouquet</a>
                <a href="<?php echo e(route('about')); ?>" class="text-base lg:text-lg font-medium text-gray-800 hover:text-[#8b5cf6] transition-colors duration-200">About</a>
            </div>

            
            <div class="flex md:hidden items-center">
                <button type="button" @click="mobileOpen = true" aria-label="Open menu"
                        class="p-2 text-gray-700 hover:text-[#8b5cf6] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
            </div>

            
            <div class="flex items-center justify-center flex-shrink-0">
                <a href="<?php echo e(url('/')); ?>" class="flex items-center">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Giftify Bloom Logo"
                         class="h-12 w-auto sm:h-16 lg:h-20 max-w-[120px] sm:max-w-[160px] object-contain"
                         />
                </a>
            </div>

            
            <div class="flex items-center gap-1">

                
                <?php if(auth()->guard()->check()): ?>
                    <div class="relative" x-data="{ open: false }" @click.outside="open = false">
                        <button @click="open = !open" aria-label="Account menu"
                                class="p-1 sm:p-2 text-[#8b5cf6] hover:text-[#6d2857] transition-colors flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="4"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0"/>
                            </svg>
                            <span class="hidden sm:inline text-sm font-semibold text-gray-800 max-w-[80px] truncate"><?php echo e(auth()->user()->nama); ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-gray-500 hidden sm:inline" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                            </svg>
                        </button>
                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-1"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="opacity-0 scale-95 -translate-y-1"
                             class="absolute right-0 mt-2 w-44 bg-white rounded-2xl shadow-xl border border-gray-100 py-2 z-50"
                             style="display:none;">
                            <a href="<?php echo e(route('account')); ?>" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-[#f5f3ff] hover:text-[#6d2857] transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <circle cx="12" cy="8" r="4"/><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0"/>
                                </svg>
                                My Account
                            </a>
                            <div class="my-1 border-t border-gray-100"></div>
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-500 hover:bg-red-50 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M18 12H9m0 0l3-3m-3 3l3 3"/>
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" aria-label="Login" class="p-1 sm:p-2 text-gray-700 hover:text-[#8b5cf6] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0"/>
                        </svg>
                    </a>
                <?php endif; ?>

                
                <?php $cartCount = session('cart') ? array_sum(array_column(session('cart'), 'qty')) : 0; ?>
                <a href="<?php echo e(route('cart')); ?>" aria-label="Cart" class="relative p-1 sm:p-2 text-gray-700 hover:text-[#8b5cf6] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                    </svg>
                    <?php if($cartCount > 0): ?>
                        <span class="absolute -top-0.5 -right-0 sm:-top-1 sm:-right-0.5 inline-flex items-center justify-center min-w-[18px] h-[18px] sm:min-w-[20px] sm:h-[20px] px-1 rounded-full bg-[#8b5cf6] text-white text-[11px] sm:text-xs font-bold leading-none shadow border border-white">
                            <?php echo e($cartCount > 99 ? '99+' : $cartCount); ?>

                        </span>
                    <?php endif; ?>
                </a>

                
                <div class="hidden sm:flex items-center gap-2 pl-2 sm:pl-4 border-l border-gray-200 cursor-pointer hover:bg-gray-50 px-2 py-1.5 rounded-full transition-colors">
                    <div class="w-8 h-6 rounded-sm overflow-hidden flex-shrink-0 border border-gray-200">
                        <div class="w-full h-1/2 bg-red-600"></div>
                        <div class="w-full h-1/2 bg-white"></div>
                    </div>
                    <span class="text-sm font-semibold text-gray-800">IND</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </div>

        </div>
    </div>

    
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex md:hidden"
         style="display:none;"
         @click.self="mobileOpen = false">

        
        <div class="absolute inset-0 bg-black/40"></div>

        
        <div x-show="mobileOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="relative w-72 max-w-[85vw] bg-white h-full flex flex-col shadow-2xl z-10">

            
            <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
                <span class="text-xl font-bold text-[#6d2857]"
                      style="font-family:'Brush Script MT','Segoe Script',cursive; font-style:italic;">
                    Giftify Bloom
                </span>
                <button @click="mobileOpen = false" aria-label="Close menu"
                        class="w-9 h-9 inline-flex items-center justify-center rounded-full text-gray-500 hover:text-[#6d2857] hover:bg-gray-100 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            
            <nav class="flex flex-col gap-1 px-4 py-4 flex-1">
                <a href="<?php echo e(url('/')); ?>" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-800 hover:bg-[#f5f3ff] hover:text-[#6d2857] font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#8b5cf6]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                    </svg>
                    Home
                </a>
                <a href="<?php echo e(route('shop')); ?>" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-800 hover:bg-[#f5f3ff] hover:text-[#6d2857] font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#8b5cf6]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.375 21V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v5.25c0 .414.336.75.75.75z"/>
                    </svg>
                    Shop All
                </a>
                <a href="<?php echo e(route('pick.flowers')); ?>" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-800 hover:bg-[#f5f3ff] hover:text-[#6d2857] font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#8b5cf6]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>
                    </svg>
                    Digital Bouquet
                </a>
                <a href="<?php echo e(route('about')); ?>" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-800 hover:bg-[#f5f3ff] hover:text-[#6d2857] font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#8b5cf6]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>
                    About
                </a>
                <a href="<?php echo e(route('cart')); ?>" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-800 hover:bg-[#f5f3ff] hover:text-[#6d2857] font-medium transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#8b5cf6]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                    </svg>
                    Keranjang
                    <?php if($cartCount > 0): ?>
                        <span class="ml-auto inline-flex items-center justify-center min-w-[20px] h-5 px-1 rounded-full bg-[#8b5cf6] text-white text-xs font-bold"><?php echo e($cartCount); ?></span>
                    <?php endif; ?>
                </a>

                <div class="border-t border-gray-100 mt-2 pt-2">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('account')); ?>" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-800 hover:bg-[#f5f3ff] hover:text-[#6d2857] font-medium transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#8b5cf6]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="4"/><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0"/>
                            </svg>
                            My Account
                        </a>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-red-500 hover:bg-red-50 font-medium transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M18 12H9m0 0l3-3m-3 3l3 3"/>
                                </svg>
                                Logout
                            </button>
                        </form>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-gray-800 hover:bg-[#f5f3ff] hover:text-[#6d2857] font-medium transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#8b5cf6]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="4"/><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0"/>
                            </svg>
                            Login / Register
                        </a>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\giftifybloom\resources\views\components\navbar.blade.php ENDPATH**/ ?>