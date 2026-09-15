<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Giftify Bloom — Bouquet & Personalized Gift</title>
        <?php echo app('Illuminate\Foundation\Vite')->fonts(); ?>
        <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <?php else: ?>
            <script src="https://cdn.tailwindcss.com"></script>
        <?php endif; ?>
    </head>
    <body class="bg-white antialiased min-h-screen w-full overflow-x-hidden">

    <?php if (isset($component)) { $__componentOriginal21f8ac65befe3e3dae514985f0957285 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal21f8ac65befe3e3dae514985f0957285 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.marquee-ticker','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('marquee-ticker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal21f8ac65befe3e3dae514985f0957285)): ?>
<?php $attributes = $__attributesOriginal21f8ac65befe3e3dae514985f0957285; ?>
<?php unset($__attributesOriginal21f8ac65befe3e3dae514985f0957285); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal21f8ac65befe3e3dae514985f0957285)): ?>
<?php $component = $__componentOriginal21f8ac65befe3e3dae514985f0957285; ?>
<?php unset($__componentOriginal21f8ac65befe3e3dae514985f0957285); ?>
<?php endif; ?>

        
        <section class="relative w-full min-h-[100vh] overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="<?php echo e(asset('images/landing/bg_utama.png')); ?>" alt="Hero background" class="w-full h-full object-cover" />
            </div>

            <div class="relative z-20">
                <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
            </div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 pb-16 sm:pb-24 lg:pb-32 pt-6 sm:pt-10">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-16">

                    <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left pt-4 sm:pt-8">
                        <div class="mt-96 sm:mt-96 lg:mt-[26rem] ml-0 sm:ml-12 lg:ml-20">
                            <a href="<?php echo e(route('pick.flowers')); ?>" class="inline-flex items-center justify-center px-10 sm:px-14 py-3 sm:py-4 rounded-full text-sm sm:text-base font-semibold text-[#6d2857] bg-[#ede9fe] hover:bg-[#ddd6fe] border-2 border-[#6d2857] shadow-lg hover:shadow-xl transition-all duration-200 tracking-widest">
                                CREATE BOUQUET
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section id="categories" class="relative w-full bg-gradient-to-b from-white via-[#faf8ff] to-[#f1ebff] py-16 sm:py-20 lg:py-28 overflow-hidden">
            <div class="absolute -left-6 top-0 sm:-left-4 sm:top-10 lg:left-0 w-40 sm:w-56 lg:w-72 opacity-90 pointer-events-none z-0">
                <img src="<?php echo e(asset('images/landing/daun_1.png')); ?>" alt="" class="w-full h-auto" />
            </div>
            <div class="absolute right-2 top-24 sm:right-6 sm:top-20 lg:right-10 w-28 sm:w-36 lg:w-44 opacity-90 pointer-events-none z-0">
                <img src="<?php echo e(asset('images/landing/kupu.png')); ?>" alt="Butterfly decoration" class="w-full h-auto" />
            </div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
                <div class="w-full flex flex-col items-center text-center mb-10 sm:mb-14 lg:mb-20">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#6d2857]" style="font-family: 'Brush Script MT', 'Segoe Script', cursive; font-style: italic;">
                        Categories
                    </h2>
                    <p class="mt-4 max-w-2xl text-sm sm:text-base text-gray-600 leading-relaxed">
                        Explore our curated selection of flowers and personalized gifts for your special occasion. From fresh blooms to custom gift boxes, find the perfect way to make every moment memorable.
                    </p>

                    <div class="mt-8 sm:mt-10 flex flex-wrap items-center justify-center gap-6 sm:gap-8 lg:gap-12">
                        <?php
                            $topCats = [
                                [
                                    'name'       => 'Birthday',
                                    'color'      => '#fef3c7', 'border' => '#fcd34d', 'icon_color' => '#d97706',
                                    'svg'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 2c0 1.5-2 3-2 3h4s-2-1.5-2-3zm0 3v1M8 6h8a2 2 0 012 2v9a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2zm4 5v4m-2-2h4"/>',
                                ],
                                [
                                    'name'       => 'Anniversary',
                                    'color'      => '#ffe4e6', 'border' => '#fda4af', 'icon_color' => '#e11d48',
                                    'svg'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>',
                                ],
                                [
                                    'name'       => 'Graduation',
                                    'color'      => '#d1fae5', 'border' => '#6ee7b7', 'icon_color' => '#059669',
                                    'svg'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 00-.491 6.347A48.63 48.63 0 0112 20.904a48.63 48.63 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.636 50.636 0 00-2.658-.813A59.906 59.906 0 0112 3.493a59.903 59.903 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>',
                                ],
                                [
                                    'name'       => 'Valentine',
                                    'color'      => '#ffe4e6', 'border' => '#fb7185', 'icon_color' => '#be123c',
                                    'svg'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9.5l1.2 1.2L12 11.9l-1.2-1.2z"/>',
                                ],
                            ];
                        ?>
                        <?php $__currentLoopData = $topCats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="group flex flex-col items-center gap-2 cursor-pointer">
                                <div class="w-16 h-16 sm:w-[72px] sm:h-[72px] rounded-full flex items-center justify-center
                                            border-2 shadow-md transition-all duration-200 group-hover:scale-110 group-hover:shadow-lg"
                                     style="background-color: <?php echo e($tc['color']); ?>; border-color: <?php echo e($tc['border']); ?>;">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8"
                                         fill="none" stroke="<?php echo e($tc['icon_color']); ?>" stroke-width="1.6" viewBox="0 0 24 24">
                                        <?php echo $tc['svg']; ?>

                                    </svg>
                                </div>
                                <span class="text-xs sm:text-sm font-bold text-[#6d2857]"><?php echo e($tc['name']); ?></span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-10 lg:gap-12 mb-16 sm:mb-20 lg:mb-24">
                    <?php $__currentLoopData = [
                        ['img' => 'buket_1.png', 'name' => 'Hand Bouquet', 'tag' => 'Best Seller'],
                        ['img' => 'buket_2.png', 'name' => 'Money Bouquet', 'tag' => 'Hot Promo'],
                        ['img' => 'buket_3.png', 'name' => 'Doll Bouquet', 'tag' => 'Limited'],
                        ['img' => 'buket_4.png', 'name' => 'Snack Bouquet', 'tag' => 'New Arrival'],
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group flex flex-col items-center text-center cursor-pointer transition-transform duration-300 ease-out hover:scale-105">
                            <div class="relative w-full max-w-[224px] sm:max-w-[256px] aspect-square mx-auto flex items-center justify-center">
                                <!-- Radial gradient blob -->
                                <div class="absolute inset-0 rounded-full" style="background: radial-gradient(ellipse at center, rgba(196,168,255,0.55) 0%, rgba(220,200,255,0.3) 55%, transparent 75%);"></div>
                                <img
                                    src="<?php echo e(asset('images/landing/'.$product['img'])); ?>"
                                    alt="<?php echo e($product['name']); ?>"
                                    class="relative z-10 w-[85%] h-[85%] object-contain drop-shadow-lg"
                                />
                            </div>
                            <h3 class="mt-4 text-base sm:text-lg font-extrabold text-[#3b1a4a] tracking-tight"><?php echo e($product['name']); ?></h3>
                            <p class="text-sm text-[#8b5cf6] font-medium mt-0.5"><?php echo e($product['tag']); ?></p>
                            <p class="text-sm text-[#3b1a4a] mt-0.5">Rp 150.000</p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 lg:gap-12">
                    <?php $__currentLoopData = [
                        ['img' => 'buket_5.png', 'name' => 'Fresh Flowers', 'tag' => 'Premium'],
                        ['img' => 'buket_6.png', 'name' => 'Gift Box', 'tag' => 'Custom'],
                        ['img' => 'buket_3.png', 'name' => 'Graduation', 'tag' => 'Special'],
                        ['img' => 'buket_1.png', 'name' => 'Wedding', 'tag' => 'Packages'],
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group flex flex-col items-center text-center cursor-pointer transition-transform duration-300 ease-out hover:scale-105">
                            <div class="relative w-full max-w-[224px] sm:max-w-[256px] aspect-square mx-auto flex items-center justify-center">
                                <!-- Radial gradient blob -->
                                <div class="absolute inset-0 rounded-full" style="background: radial-gradient(ellipse at center, rgba(196,168,255,0.55) 0%, rgba(220,200,255,0.3) 55%, transparent 75%);"></div>
                                <img
                                    src="<?php echo e(asset('images/landing/'.$product['img'])); ?>"
                                    alt="<?php echo e($product['name']); ?>"
                                    class="relative z-10 w-[85%] h-[85%] object-contain drop-shadow-lg"
                                />
                            </div>
                            <h3 class="mt-4 text-base sm:text-lg font-extrabold text-[#3b1a4a] tracking-tight"><?php echo e($product['name']); ?></h3>
                            <p class="text-sm text-[#8b5cf6] font-medium mt-0.5"><?php echo e($product['tag']); ?></p>
                            <p class="text-sm text-[#3b1a4a] mt-0.5">Rp 150.000</p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        
        <section class="relative w-full bg-[#f1ebff] py-16 sm:py-20 lg:py-28 overflow-hidden">
            <div class="absolute -left-8 sm:-left-4 lg:top-100 sm:bottom-16 w-44 sm:w-60 lg:w-80 opacity-90 pointer-events-none z-0">
                <img src="<?php echo e(asset('images/landing/daun_2.png')); ?>" alt="" class="w-full h-auto" />
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
                    </div>

                    <div class="w-full lg:w-1/2 relative">
                        <div class="relative w-full max-w-[420px] mx-auto" style="min-height: 460px;">

                            
                            <div class="absolute top-0 left-0 w-[68%] aspect-square rounded-3xl border-4 border-[#f0e7b6] bg-white shadow-2xl p-5 sm:p-7 z-10">
                                <img src="<?php echo e(asset('images/landing/buket_2.png')); ?>"
                                     alt="Lavender bouquet"
                                     class="w-full h-full object-contain drop-shadow-md" />
                            </div>

                            
                            <div class="absolute top-0 right-0 w-28 sm:w-36 z-10 pointer-events-none"
                                 style="transform: translate(10%, -15%);">
                                <img src="<?php echo e(asset('images/landing/matahari_hiasan.png')); ?>"
                                     alt="Sun decoration" class="w-full h-auto" />
                            </div>

                            
                            <div class="absolute bottom-0 right-0 w-[54%] aspect-square rounded-3xl border-4 border-[#c4b5fd] bg-white shadow-xl p-4 sm:p-6 z-20">
                                <img src="<?php echo e(asset('images/landing/buket_5.png')); ?>"
                                     alt="Yellow bouquet"
                                     class="w-full h-full object-contain drop-shadow-md" />
                            </div>

                            
                            <div class="absolute z-30" style="bottom: 12%; left: 34%;">
                                <img src="<?php echo e(asset('images/landing/koala.png')); ?>"
                                     alt="Koala mascot"
                                     class="w-28 sm:w-36 lg:w-44 h-auto drop-shadow-xl" />
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        
        <section class="relative w-full bg-[#f1ebff] py-16 sm:py-20 lg:py-24 overflow-hidden">
            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
                <div class="w-full flex flex-col items-center text-center mb-12 sm:mb-16">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#6d2857]"
                        style="font-family: 'Brush Script MT', 'Segoe Script', cursive; font-style: italic;">
                        Categories
                    </h2>
                    <p class="mt-3 text-sm sm:text-base text-gray-600 max-w-xl leading-relaxed">
                        Pilih bunga favoritmu untuk setiap momen istimewa.
                    </p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-8 lg:gap-10 mb-8">
                    <?php $__currentLoopData = [
                        ['img' => 'mawar.png',     'name' => 'Mawar',     'desc' => 'Simbol cinta yang abadi'],
                        ['img' => 'lily.png',      'name' => 'Lily',      'desc' => 'Elegan & penuh keanggunan'],
                        ['img' => 'tulip.png',     'name' => 'Tulip',     'desc' => 'Warna-warni momen bahagia'],
                        ['img' => 'matahari.png',  'name' => 'Matahari',  'desc' => 'Cerah & penuh semangat'],
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('shop')); ?>"
                           class="group flex flex-col items-center text-center rounded-2xl border-2 border-[#e9d5ff] bg-white
                                  p-5 sm:p-6 hover:shadow-xl hover:border-[#c4b5fd] hover:-translate-y-1 transition-all duration-300">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28 mb-4 flex items-center justify-center">
                                <img src="<?php echo e(asset('images/landing/'.$f['img'])); ?>" alt="<?php echo e($f['name']); ?>"
                                     class="w-full h-full object-contain drop-shadow-md group-hover:scale-110 transition-transform duration-300"/>
                            </div>
                            <h3 class="text-sm sm:text-base font-bold text-[#6d2857] mb-1"><?php echo e($f['name']); ?></h3>
                            <p class="text-[10px] sm:text-xs text-gray-500 leading-relaxed"><?php echo e($f['desc']); ?></p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-8 lg:gap-10">
                    <?php $__currentLoopData = [
                        ['img' => 'anyelir.png',   'name' => 'Anyelir',   'desc' => 'Kagum & kasih sayang tulus'],
                        ['img' => 'hydrangea.png', 'name' => 'Hydrangea', 'desc' => 'Pastel manis & mewah'],
                        ['img' => 'orchid.png',    'name' => 'Orchid',    'desc' => 'Kemewahan yang memukau'],
                        ['img' => 'daisy.png',     'name' => 'Daisy',     'desc' => 'Keceriaan yang murni'],
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('shop')); ?>"
                           class="group flex flex-col items-center text-center rounded-2xl border-2 border-[#e9d5ff] bg-white
                                  p-5 sm:p-6 hover:shadow-xl hover:border-[#c4b5fd] hover:-translate-y-1 transition-all duration-300">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28 mb-4 flex items-center justify-center">
                                <img src="<?php echo e(asset('images/pickflower/'.$f['img'])); ?>" alt="<?php echo e($f['name']); ?>"
                                     class="w-full h-full object-contain drop-shadow-md group-hover:scale-110 transition-transform duration-300"/>
                            </div>
                            <h3 class="text-sm sm:text-base font-bold text-[#6d2857] mb-1"><?php echo e($f['name']); ?></h3>
                            <p class="text-[10px] sm:text-xs text-gray-500 leading-relaxed"><?php echo e($f['desc']); ?></p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        
        <section class="relative w-full bg-gradient-to-b from-[#f1ebff] to-white py-16 sm:py-20 lg:py-28">
            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-10 lg:gap-12">
                    <?php
                        $steps = [
                            [
                                'step'  => '1',
                                'title' => 'Pick Your Flowers',
                                'text'  => 'Choose from eight beautiful flowers including roses, peonies, tulips, daisies, lilies, orchids, camellias, and lotus. Select your favorites to build a unique arrangement.',
                                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3c0 1.5-1.5 3-1.5 3S9 4.5 9 3a3 3 0 016 0zm0 0c0 1.5 1.5 3 1.5 3M12 3v9m-4.5-4.5C6 8.5 4.5 10 4.5 12S6 15.5 7.5 15.5M16.5 7.5C18 8.5 19.5 10 19.5 12s-1.5 3.5-3 3.5M12 12c-1.5 1.5-1.5 3.5 0 5s3.5 1.5 5 0M12 12c1.5 1.5 1.5 3.5 0 5s-3.5 1.5-5 0"/>',
                            ],
                            [
                                'step'  => '2',
                                'title' => 'Write Your Card',
                                'text'  => 'Pick a card style that suits the occasion, then write a personal message. Choose from elegant, vintage, midnight, botanical, and more card designs.',
                                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>',
                            ],
                            [
                                'step'  => '3',
                                'title' => 'Share the Link',
                                'text'  => 'Get a unique link to your bouquet and send it through any messaging app, email, or social media. Your recipient opens it to a beautiful reveal experience.',
                                'svg'   => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>',
                            ],
                        ];
                    ?>
                    <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="relative flex flex-col items-center text-center rounded-[2rem] bg-[#f5efff] border-2 border-[#e9d5ff] p-8 sm:p-10 hover:shadow-xl transition-all duration-300">
                            
                            <div class="absolute -top-5 w-10 h-10 rounded-full bg-[#f0e7b6] shadow-md flex items-center justify-center border-4 border-white">
                                <span class="text-sm font-bold text-[#6d2857]"><?php echo e($step['step']); ?></span>
                            </div>
                            
                            <div class="w-16 h-16 sm:w-[72px] sm:h-[72px] rounded-full bg-[#f0e7b6] mb-5 sm:mb-6
                                        flex items-center justify-center shadow-sm border border-[#e8d9a0]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8 text-[#6d2857]"
                                     fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24">
                                    <?php echo $step['svg']; ?>

                                </svg>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-[#6d2857] mb-3"><?php echo e($step['title']); ?></h3>
                            <p class="text-sm text-gray-600 leading-relaxed"><?php echo e($step['text']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

    </body>
</html>
<?php /**PATH C:\laragon\www\giftifybloom\resources\views\welcome.blade.php ENDPATH**/ ?>