<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop All — Giftify Bloom</title>
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

    <?php

        $pages = [
            1 => [
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Bunga Mawar', 'tag' => 'Anniversary', 'price' => 'Rp 150.000', 'img' => 'buket_4.png'],
            ],
            2 => [
                ['title' => 'Buket Bunga Lily', 'tag' => 'Graduation', 'price' => 'Rp 175.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Bunga Lily', 'tag' => 'Graduation', 'price' => 'Rp 175.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Bunga Lily', 'tag' => 'Graduation', 'price' => 'Rp 175.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Bunga Lily', 'tag' => 'Graduation', 'price' => 'Rp 175.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Matahari', 'tag' => 'Birthday', 'price' => 'Rp 180.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Matahari', 'tag' => 'Birthday', 'price' => 'Rp 180.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Matahari', 'tag' => 'Birthday', 'price' => 'Rp 180.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Matahari', 'tag' => 'Birthday', 'price' => 'Rp 180.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Tulip', 'tag' => 'Wedding', 'price' => 'Rp 220.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Tulip', 'tag' => 'Wedding', 'price' => 'Rp 220.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Tulip', 'tag' => 'Wedding', 'price' => 'Rp 220.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Tulip', 'tag' => 'Wedding', 'price' => 'Rp 220.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Hydrangea', 'tag' => 'Baby Shower', 'price' => 'Rp 250.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Hydrangea', 'tag' => 'Baby Shower', 'price' => 'Rp 250.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Hydrangea', 'tag' => 'Baby Shower', 'price' => 'Rp 250.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Hydrangea', 'tag' => 'Baby Shower', 'price' => 'Rp 250.000', 'img' => 'buket_2.png'],
            ],
            3 => [
                ['title' => 'Buket Orchid Premium', 'tag' => 'Luxury', 'price' => 'Rp 350.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Orchid Premium', 'tag' => 'Luxury', 'price' => 'Rp 350.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Orchid Premium', 'tag' => 'Luxury', 'price' => 'Rp 350.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Orchid Premium', 'tag' => 'Luxury', 'price' => 'Rp 350.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Daisy Mix', 'tag' => 'Friendship', 'price' => 'Rp 130.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Daisy Mix', 'tag' => 'Friendship', 'price' => 'Rp 130.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Daisy Mix', 'tag' => 'Friendship', 'price' => 'Rp 130.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Daisy Mix', 'tag' => 'Friendship', 'price' => 'Rp 130.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Anyelir', 'tag' => 'Mother Day', 'price' => 'Rp 160.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Anyelir', 'tag' => 'Mother Day', 'price' => 'Rp 160.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Anyelir', 'tag' => 'Mother Day', 'price' => 'Rp 160.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Anyelir', 'tag' => 'Mother Day', 'price' => 'Rp 160.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Mix Spesial', 'tag' => 'Valentine', 'price' => 'Rp 280.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Mix Spesial', 'tag' => 'Valentine', 'price' => 'Rp 280.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Mix Spesial', 'tag' => 'Valentine', 'price' => 'Rp 280.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Mix Spesial', 'tag' => 'Valentine', 'price' => 'Rp 280.000', 'img' => 'buket_6.png'],
            ],
            4 => [
                ['title' => 'Buket Birthday Pink', 'tag' => 'Birthday', 'price' => 'Rp 195.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Birthday Pink', 'tag' => 'Birthday', 'price' => 'Rp 195.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Birthday Pink', 'tag' => 'Birthday', 'price' => 'Rp 195.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Birthday Pink', 'tag' => 'Birthday', 'price' => 'Rp 195.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Romantis Ungu', 'tag' => 'Anniversary', 'price' => 'Rp 235.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Romantis Ungu', 'tag' => 'Anniversary', 'price' => 'Rp 235.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Romantis Ungu', 'tag' => 'Anniversary', 'price' => 'Rp 235.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Romantis Ungu', 'tag' => 'Anniversary', 'price' => 'Rp 235.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Congratulations', 'tag' => 'Graduation', 'price' => 'Rp 210.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Congratulations', 'tag' => 'Graduation', 'price' => 'Rp 210.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Congratulations', 'tag' => 'Graduation', 'price' => 'Rp 210.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Congratulations', 'tag' => 'Graduation', 'price' => 'Rp 210.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Get Well Soon', 'tag' => 'Wellness', 'price' => 'Rp 185.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Get Well Soon', 'tag' => 'Wellness', 'price' => 'Rp 185.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Get Well Soon', 'tag' => 'Wellness', 'price' => 'Rp 185.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Get Well Soon', 'tag' => 'Wellness', 'price' => 'Rp 185.000', 'img' => 'buket_4.png'],
            ],
            5 => [
                ['title' => 'Buket Premium Sunflower', 'tag' => 'Birthday', 'price' => 'Rp 265.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Premium Sunflower', 'tag' => 'Birthday', 'price' => 'Rp 265.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Premium Sunflower', 'tag' => 'Birthday', 'price' => 'Rp 265.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Premium Sunflower', 'tag' => 'Birthday', 'price' => 'Rp 265.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Bridal Shower', 'tag' => 'Wedding', 'price' => 'Rp 320.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Bridal Shower', 'tag' => 'Wedding', 'price' => 'Rp 320.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Bridal Shower', 'tag' => 'Wedding', 'price' => 'Rp 320.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Bridal Shower', 'tag' => 'Wedding', 'price' => 'Rp 320.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Housewarming', 'tag' => 'Celebration', 'price' => 'Rp 245.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Housewarming', 'tag' => 'Celebration', 'price' => 'Rp 245.000', 'img' => 'buket_2.png'],
                ['title' => 'Buket Housewarming', 'tag' => 'Celebration', 'price' => 'Rp 245.000', 'img' => 'buket_3.png'],
                ['title' => 'Buket Housewarming', 'tag' => 'Celebration', 'price' => 'Rp 245.000', 'img' => 'buket_4.png'],
                ['title' => 'Buket Thank You', 'tag' => 'Appreciation', 'price' => 'Rp 170.000', 'img' => 'buket_5.png'],
                ['title' => 'Buket Thank You', 'tag' => 'Appreciation', 'price' => 'Rp 170.000', 'img' => 'buket_6.png'],
                ['title' => 'Buket Thank You', 'tag' => 'Appreciation', 'price' => 'Rp 170.000', 'img' => 'buket_1.png'],
                ['title' => 'Buket Thank You', 'tag' => 'Appreciation', 'price' => 'Rp 170.000', 'img' => 'buket_2.png'],
            ],
        ];

        $currentPage = (int) request()->query('page', 1);
        if (!isset($pages[$currentPage])) {
            $currentPage = 1;
        }
        // Assign a global sequential ID to each product across all pages
        $globalId = 0;
        foreach ($pages as $pageNum => &$pageItems) {
            foreach ($pageItems as &$item) {
                $item['id'] = ++$globalId;
            }
        }
        unset($pageItems, $item);

        $products = $pages[$currentPage];
        $totalPages = count($pages);

        $catsBottom = [
            ['key' => 'mawar',     'name' => 'Mawar',        'img' => 'mawar.png',     'desc' => "A familiar romantic cut whose meaning still depends on color, contact"],
            ['key' => 'lily',      'name' => 'Lily',         'img' => 'lily.png',      'desc' => "A familiar romantic cut whose meaning still depends on color, contact"],
            ['key' => 'tulip',     'name' => 'Tulip',        'img' => 'tulip.png',     'desc' => "A familiar romantic cut whose meaning still depends on color, contact"],
            ['key' => 'matahari',  'name' => 'Matahari',     'img' => 'matahari.png',  'desc' => "A familiar romantic cut whose meaning still depends on color, contact"],
            ['key' => 'anyelir',   'name' => 'Anyelir',      'img' => 'anyelir.png',   'desc' => "A familiar romantic cut whose meaning still depends on color, contact"],
            ['key' => 'hydrangea', 'name' => 'Hydragea',     'img' => 'hydrangea.png', 'desc' => "A familiar romantic cut whose meaning still depends on color, contact"],
            ['key' => 'babysbreath','name' => "Baby's Great", 'img' => 'daisy.png',     'desc' => "A familiar romantic cut whose meaning still depends on color, contact"],
            ['key' => 'daisy',     'name' => 'Daisy',        'img' => 'daisy.png',     'desc' => "A familiar romantic cut whose meaning still depends on color, contact"],
        ];
    ?>

    <section class="w-full relative">
        <div class="relative bg-gradient-to-b from-[#fff5c0] via-[#ffedb0] to-[#f7dfb5] overflow-hidden min-h-[580px] sm:min-h-[680px] lg:min-h-[780px]">

            <!-- Hero image fills the full container behind navbar -->
            <img
                src="<?php echo e(asset('images/shopall/ai hari ini nga sehat 1 (1).png')); ?>"
                alt="Bloom Your Happy Moments Hero"
                class="absolute inset-0 w-full h-full object-cover object-top"
            />

            <!-- Navbar overlaid on top -->
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
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
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

            <!-- Wave at the bottom of hero -->
            <div class="absolute bottom-0 left-0 right-0 z-10 overflow-hidden leading-none" aria-hidden="true">
                <svg class="w-full h-10 sm:h-14 lg:h-16 block" viewBox="0 0 1440 120" preserveAspectRatio="none">
                    <path
                        fill="#ffffff"
                        d="M0,120 L0,60
                           C60,60 60,0 120,0 C180,0 180,60 240,60
                           C300,60 300,0 360,0 C420,0 420,60 480,60
                           C540,60 540,0 600,0 C660,0 660,60 720,60
                           C780,60 780,0 840,0 C900,0 900,60 960,60
                           C1020,60 1020,0 1080,0 C1140,0 1140,60 1200,60
                           C1260,60 1260,0 1320,0 C1380,0 1380,60 1440,60
                           L1440,120 Z"
                    ></path>
                </svg>
            </div>
        </div>
    </section>

    <section class="w-full bg-white relative pt-14 sm:pt-20 pb-10 sm:pb-14">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">

            <div class="w-full flex flex-col items-center text-center mb-8 sm:mb-10">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#6d2857] mb-2 tracking-tight">
                    Categories
                </h2>
                <p class="text-xs sm:text-sm lg:text-base text-gray-600 max-w-2xl leading-relaxed">
                    Explore our curated selection of flowers and personalized gifts for every special occasion.
                    From fresh blooms to custom gift boxes, find the perfect way to make every moment memorable.
                </p>
            </div>

            
            <?php
                $occasions = [
                    [
                        'name'   => 'Birthday',
                        'color'  => '#fef3c7', 'border' => '#fcd34d', 'icon_color' => '#d97706',
                        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3c.53 0 1.04.211 1.414.586l.293.293a1 1 0 001.414-1.414l-.293-.293A3 3 0 0012 1a3 3 0 00-2.828 1.172l-.293.293a1 1 0 001.414 1.414l.293-.293A2 2 0 0112 3zm-5 5h10a2 2 0 012 2v9a2 2 0 01-2 2H7a2 2 0 01-2-2v-9a2 2 0 012-2zm2-2v2m6-2v2M9 13h6m-3-3v6"/>',
                    ],
                    [
                        'name'   => 'Anniversary',
                        'color'  => '#ffe4e6', 'border' => '#fda4af', 'icon_color' => '#e11d48',
                        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>',
                    ],
                    [
                        'name'   => 'Graduation',
                        'color'  => '#d1fae5', 'border' => '#6ee7b7', 'icon_color' => '#059669',
                        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 00-.491 6.347A48.63 48.63 0 0112 20.904a48.63 48.63 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.636 50.636 0 00-2.658-.813A59.906 59.906 0 0112 3.493a59.903 59.903 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>',
                    ],
                    [
                        'name'   => 'Valentine',
                        'color'  => '#ffe4e6', 'border' => '#fb7185', 'icon_color' => '#be123c',
                        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.433 5.861a5.5 5.5 0 00-7.778 0L12 7.516l-1.655-1.655a5.5 5.5 0 00-7.778 7.778L12 22.728l9.433-9.089a5.5 5.5 0 000-7.778zM8.25 9.75L12 13.5l3.75-3.75"/>',
                    ],
                    [
                        'name'   => 'Wedding',
                        'color'  => '#fce7f3', 'border' => '#f9a8d4', 'icon_color' => '#be185d',
                        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1M4.22 4.22l.707.707m12.02 12.02l.707.707M1 12h1m18 0h1M4.22 19.78l.707-.707M18.364 5.636l.707-.707M12 6a6 6 0 100 12A6 6 0 0012 6zm0 0V3m0 15v3M6.343 6.343L4.929 4.929m13.435 13.435l-1.414-1.414"/>',
                    ],
                    [
                        'name'   => "Mother's Day",
                        'color'  => '#fdf4ff', 'border' => '#e879f9', 'icon_color' => '#a21caf',
                        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z"/>',
                    ],
                    [
                        'name'   => 'Friendship',
                        'color'  => '#f0fdf4', 'border' => '#86efac', 'icon_color' => '#16a34a',
                        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>',
                    ],
                    [
                        'name'   => 'Just Because',
                        'color'  => '#f5f3ff', 'border' => '#c4b5fd', 'icon_color' => '#7c3aed',
                        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V2.75a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.909M14.25 9h2.25M5.909 18.006c.383.023.768.032 1.152.026a11.57 11.57 0 003.348-1.001m-3.5-8.531V9.75A2.25 2.25 0 007.157 12"/>',
                    ],
                ];
            ?>
            <div class="w-full overflow-x-auto pb-2 mb-12 sm:mb-16" style="-webkit-overflow-scrolling:touch; scrollbar-width:none;">
                <div class="flex items-start justify-center gap-5 sm:gap-8 min-w-max mx-auto px-2">
                    <?php $__currentLoopData = $occasions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group flex flex-col items-center gap-2 cursor-pointer">
                            <div class="w-16 h-16 sm:h-[72px] sm:w-[72px] rounded-full flex items-center justify-center
                                        shadow-sm border-2 transition-all duration-200 group-hover:scale-110 group-hover:shadow-md"
                                 style="background-color: <?php echo e($oc['color']); ?>; border-color: <?php echo e($oc['border']); ?>;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8"
                                     fill="none" stroke="<?php echo e($oc['icon_color']); ?>" stroke-width="1.6" viewBox="0 0 24 24">
                                    <?php echo $oc['svg']; ?>

                                </svg>
                            </div>
                            <span class="text-[10px] sm:text-xs font-semibold text-[#6d2857] text-center leading-tight max-w-[72px]">
                                <?php echo e($oc['name']); ?>

                            </span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div
                id="products-grid"
                class="w-full grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-10 mb-12 sm:mb-16"
            >
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('product.detail', ['id' => $p['id']])); ?>"
                       class="group w-full flex flex-col items-center text-center cursor-pointer transition-transform duration-300 ease-out hover:scale-105">
                        <!-- Radial gradient bg behind image -->
                        <div class="w-full aspect-square relative flex items-center justify-center">
                            <!-- Gradient blob -->
                            <div class="absolute inset-0 rounded-full"
                                 style="background: radial-gradient(ellipse at center, rgba(196,168,255,0.45) 0%, rgba(232,214,255,0.25) 50%, transparent 75%);"></div>
                            <img
                                src="<?php echo e(asset('images/landing/' . $p['img'])); ?>"
                                alt="<?php echo e($p['title']); ?>"
                                class="relative z-10 w-[85%] h-[85%] object-contain drop-shadow-lg"
                            />
                        </div>
                        <h3 class="mt-3 text-sm sm:text-base lg:text-[17px] font-extrabold text-[#3b1a4a] tracking-tight leading-snug">
                            <?php echo e($p['title']); ?>

                        </h3>
                        <p class="text-[12px] sm:text-sm text-[#8b5cf6] mt-0.5 font-medium">
                            <?php echo e($p['tag']); ?>

                        </p>
                        <p class="text-[12px] sm:text-sm text-[#3b1a4a] mt-0.5 font-medium">
                            <?php echo e($p['price']); ?>

                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="w-full flex items-center justify-center gap-3 sm:gap-5">
                <?php
                    $prevPage = $currentPage > 1 ? $currentPage - 1 : null;
                    $nextPage = $currentPage < $totalPages ? $currentPage + 1 : null;
                    $shopBase = route('shop');
                ?>

                <a
                    href="<?php echo e($prevPage ? $shopBase . '?page=' . $prevPage : '#'); ?>"
                    class="w-10 h-10 sm:w-11 sm:h-11 rounded-full border-2 border-[#8b5cf6] text-[#6d2857] bg-white
                           flex items-center justify-center hover:bg-[#ede9fe] transition-colors disabled:opacity-40 disabled:cursor-not-allowed"
                    aria-label="Previous page"
                    <?php echo $prevPage ? '' : 'aria-disabled="true" tabindex="-1" style="pointer-events:none;opacity:.4;"'; ?>

                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </a>

                <?php for($i = 1; $i <= $totalPages; $i++): ?>
                    <?php
                        $isActive = $i === $currentPage;
                    ?>
                    <a
                        href="<?php echo e($shopBase . '?page=' . $i); ?>"
                            class="w-10 h-10 sm:w-11 sm:h-11 inline-flex items-center justify-center rounded-full text-sm sm:text-base font-bold transition-all tracking-wide <?php echo e($isActive ? 'bg-[#6d2857] text-white shadow-lg shadow-[#6d2857]/30 scale-105' : 'bg-white text-[#6d2857] hover:bg-[#ede9fe]'); ?>"
                    >
                        <?php echo e($i); ?>

                    </a>
                <?php endfor; ?>

                <a
                    href="<?php echo e($nextPage ? $shopBase . '?page=' . $nextPage : '#'); ?>"
                    class="w-10 h-10 sm:w-11 sm:h-11 rounded-full border-2 border-[#8b5cf6] text-[#6d2857] bg-white
                           flex items-center justify-center hover:bg-[#ede9fe] transition-colors"
                    aria-label="Next page"
                    <?php echo $nextPage ? '' : 'aria-disabled="true" tabindex="-1" style="pointer-events:none;opacity:.4;"'; ?>

                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <section class="w-full relative py-16 sm:py-24 pb-16 sm:pb-28 lg:pb-40 mb-10 sm:mb-20 overflow-hidden"
             style="background: linear-gradient(to bottom, #ffffff 0%, #EFE5FF 20%, #EFE5FF 80%, #ffffff 100%);">

        <!-- Daun kiri atas: besar, turun, masuk ke dalam halaman -->
        <div class="absolute left-0 top-0 w-48 sm:w-64 lg:w-80 pointer-events-none" aria-hidden="true">
            <img src="<?php echo e(asset('images/landing/daun_2.png')); ?>"
                 alt="Leaf decoration" class="w-full h-auto object-contain opacity-95 drop-shadow-lg"/>
        </div>

        <!-- Bear kanan bawah -->
        <div class="absolute right-3 bottom-4 w-14 sm:w-16 lg:w-20 pointer-events-none opacity-70" aria-hidden="true">
            <img src="<?php echo e(asset('images/landing/kupu.png')); ?>"
                 alt="Bear decoration" class="w-full h-auto object-contain drop-shadow-md"/>
        </div>

        <div class="w-full max-w-6xl mx-auto px-4 sm:px-8 lg:px-16 relative z-10">

            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#6d2857] mb-10 sm:mb-14 tracking-tight text-center">
                Categories
            </h2>

            <div class="w-full grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5 sm:gap-7 lg:gap-8">
                <?php $__currentLoopData = $catsBottom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="group w-full bg-white rounded-2xl border-2 border-[#d4e157]
                                    flex flex-col items-center text-center aspect-square justify-center p-4 sm:p-5
                                    transition-transform duration-300 hover:scale-105">
                        <img
                            src="<?php echo e(asset('images/pickflower/' . $c['img'])); ?>"
                            alt="<?php echo e($c['name']); ?>"
                            class="w-3/4 max-w-[128px] h-auto aspect-square object-contain drop-shadow-md mb-3"
                        />
                        <h3 class="text-sm sm:text-base font-extrabold text-[#4a1a5c] tracking-tight">
                            <?php echo e($c['name']); ?>

                        </h3>
                        <p class="mt-1 text-[10px] sm:text-xs text-gray-500 leading-relaxed">
                            <?php echo e($c['desc']); ?>

                        </p>    
                    </article>
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
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
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
<?php /**PATH C:\laragon\www\giftifybloom\resources\views\shop.blade.php ENDPATH**/ ?>