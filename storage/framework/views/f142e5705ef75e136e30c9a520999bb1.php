<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($product['name']); ?> — Giftify Bloom</title>
    <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php else: ?>
        <script src="https://cdn.tailwindcss.com"></script>
    <?php endif; ?>
</head>
<body class="bg-gradient-to-br from-[#f7efff] via-[#fbf6ff] to-[#fff5f0] antialiased min-h-screen w-full overflow-x-hidden">

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

    <style>
        .thumb-active { border: 2px solid #8b5cf6; }
        .star-filled  { color: #f59e0b; }
        .star-empty   { color: #d1d5db; }
    </style>

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

    
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 py-3">
        <nav class="flex items-center gap-1.5 text-xs sm:text-sm text-gray-500">
            <a href="<?php echo e(url('/')); ?>" class="hover:text-[#8b5cf6] transition-colors">Home</a>
            <span>/</span>
            <a href="<?php echo e(route('shop')); ?>" class="hover:text-[#8b5cf6] transition-colors">Shop</a>
            <span>/</span>
            <span class="text-gray-800 font-medium truncate max-w-[200px]"><?php echo e($product['name']); ?></span>
        </nav>
    </div>

    
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 pb-12 sm:pb-16">
        <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-14 items-start">

            
            <div class="w-full flex flex-col gap-4">
                
                <div class="w-full aspect-square rounded-3xl overflow-hidden bg-white border border-[#ede9fe] shadow-[0_16px_48px_rgba(139,92,246,0.10)]">
                    <img
                        id="main-img"
                        src="<?php echo e(asset('images/landing/' . $product['img'])); ?>"
                        alt="<?php echo e($product['name']); ?>"
                        class="w-full h-full object-cover transition-all duration-300"
                    />
                </div>

                
                <div class="flex items-center gap-3 overflow-x-auto pb-1 scrollbar-none" style="-webkit-overflow-scrolling:touch; scrollbar-width:none;"  >
                    <?php $__currentLoopData = $product['gallery']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button
                            type="button"
                            onclick="setMainImg('<?php echo e(asset('images/landing/' . $g)); ?>', this)"
                            class="thumb w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 rounded-2xl overflow-hidden border-2 border-transparent
                                   hover:border-[#8b5cf6] transition-all duration-200 bg-white shadow-sm shrink-0
                                   <?php echo e($i === 0 ? 'thumb-active' : ''); ?>"
                        >
                            <img
                                src="<?php echo e(asset('images/landing/' . $g)); ?>"
                                alt="Thumbnail <?php echo e($i + 1); ?>"
                                class="w-full h-full object-cover"
                            />
                        </button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div class="w-full flex flex-col gap-4 pt-2">

                
                <div class="flex items-center gap-2">
                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-[#f3e9ff] text-[#6d2857] text-xs font-bold tracking-wide">
                        ✦ Bestseller
                    </span>
                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-[#dcfce7] text-[#16a34a] text-xs font-bold tracking-wide">
                        New Arrival
                    </span>
                </div>

                
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#6d2857] tracking-tight leading-tight">
                    <?php echo e($product['name']); ?>

                </h1>

                
                <div class="flex items-center gap-3">
                    <span class="text-2xl sm:text-3xl font-extrabold text-[#6d2857]">
                        Rp <?php echo e(number_format($product['price'], 0, ',', '.')); ?>

                    </span>
                    <?php if(isset($product['original_price'])): ?>
                        <span class="text-base sm:text-lg text-gray-400 line-through font-medium">
                            Rp <?php echo e(number_format($product['original_price'], 0, ',', '.')); ?>

                        </span>
                        <span class="px-2 py-0.5 rounded-full bg-[#fef3c7] text-[#d97706] text-xs font-bold">
                            Save <?php echo e(round((1 - $product['price'] / $product['original_price']) * 100)); ?>%
                        </span>
                    <?php endif; ?>
                </div>

                
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-0.5">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-4 w-4 <?php echo e($i <= round($product['rating']) ? 'text-[#f59e0b]' : 'text-gray-300'); ?>"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <span class="text-sm text-gray-600 font-medium">
                        <?php echo e($product['rating']); ?> (<?php echo e($product['review_count']); ?> reviews)
                    </span>
                    <span class="text-sm font-semibold <?php echo e($product['stock'] > 0 ? 'text-[#16a34a]' : 'text-red-500'); ?>">
                        · <?php echo e($product['stock'] > 0 ? $product['stock'] . ' in stock' : 'Out of stock'); ?>

                    </span>
                </div>

                
                <p class="text-sm sm:text-base text-gray-600 leading-relaxed border-t border-[#ede9fe] pt-4">
                    <?php echo e($product['description']); ?>

                </p>

                
                <div class="flex flex-col gap-2 pt-1">
                    <span class="text-sm font-bold text-gray-800 tracking-wide">Quantity</span>
                    <div class="flex items-center">
                        <div class="flex items-center border-2 border-[#d9c7ee] rounded-full overflow-hidden bg-white shadow-sm">
                            <button
                                id="detail-minus"
                                type="button"
                                onclick="changeQty(-1)"
                                disabled
                                class="w-10 h-10 sm:w-11 sm:h-11 inline-flex items-center justify-center text-[#8b5cf6]
                                       hover:bg-[#f5edff] transition-colors text-xl font-bold
                                       disabled:opacity-40 disabled:cursor-not-allowed"
                                aria-label="Decrease"
                            >&minus;</button>
                            <span
                                id="detail-qty"
                                class="w-10 sm:w-12 h-10 sm:h-11 inline-flex items-center justify-center text-base font-bold text-gray-900 tabular-nums select-none"
                            >1</span>
                            <button
                                id="detail-plus"
                                type="button"
                                onclick="changeQty(1)"
                                class="w-10 h-10 sm:w-11 sm:h-11 inline-flex items-center justify-center text-[#8b5cf6]
                                       hover:bg-[#f5edff] transition-colors text-xl font-bold"
                                aria-label="Increase"
                            >+</button>
                        </div>
                    </div>
                </div>

                
                <div class="flex flex-col gap-3 pt-2">

                    
                    <form method="POST" action="<?php echo e(route('cart.add')); ?>" id="form-add-cart">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="product_id"    value="<?php echo e($product['id']); ?>">
                        <input type="hidden" name="product_name"  value="<?php echo e($product['name']); ?>">
                        <input type="hidden" name="product_img"   value="<?php echo e($product['img']); ?>">
                        <input type="hidden" name="product_tag"   value="<?php echo e($product['tag']); ?>">
                        <input type="hidden" name="product_price" value="<?php echo e($product['price']); ?>">
                        <input type="hidden" name="qty" id="hidden-qty" value="1">
                        <button
                            type="submit"
                            id="btn-add-cart"
                            class="w-full inline-flex items-center justify-center gap-2 rounded-full
                                   bg-gradient-to-r from-[#9f7aea] via-[#8b5cf6] to-[#6d2857]
                                   hover:from-[#8b5cf6] hover:via-[#7c3aed] hover:to-[#55234a]
                                   text-white font-bold text-base sm:text-lg tracking-wide
                                   py-4 px-8 shadow-[0_8px_24px_rgba(139,92,246,0.35)]
                                   hover:shadow-[0_12px_30px_rgba(109,40,87,0.45)]
                                   hover:-translate-y-0.5 active:translate-y-0
                                   transition-all duration-200"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            Add to Cart
                        </button>
                    </form>

                    
                    <form method="POST" action="<?php echo e(route('cart.buy-now')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="product_id"    value="<?php echo e($product['id']); ?>">
                        <input type="hidden" name="product_name"  value="<?php echo e($product['name']); ?>">
                        <input type="hidden" name="product_img"   value="<?php echo e($product['img']); ?>">
                        <input type="hidden" name="product_tag"   value="<?php echo e($product['tag']); ?>">
                        <input type="hidden" name="product_price" value="<?php echo e($product['price']); ?>">
                        <input type="hidden" name="qty" id="hidden-qty-buy" value="1">
                        <button
                            type="submit"
                            class="w-full inline-flex items-center justify-center gap-2 rounded-full
                                   bg-[#f59e0b] hover:bg-[#d97706]
                                   text-white font-bold text-base sm:text-lg tracking-wide
                                   py-4 px-8 shadow-[0_8px_24px_rgba(245,158,11,0.30)]
                                   hover:-translate-y-0.5 active:translate-y-0
                                   transition-all duration-200"
                        >
                            Buy It Now
                        </button>
                    </form>

                    <button
                        type="button"
                        class="flex items-center justify-center gap-1.5 text-sm text-gray-500 hover:text-[#8b5cf6] transition-colors mx-auto"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        Add to wishlist
                    </button>
                </div>

            </div>
        </div>
    </section>

    
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 pb-12 sm:pb-16">
        <div class="w-full grid grid-cols-1 sm:grid-cols-3 gap-5">
            <?php
                $features = [
                    [
                        'icon' => '🎁',
                        'title' => 'Gift Wrapping',
                        'desc'  => 'Every order comes beautifully wrapped with love and a handwritten note.',
                    ],
                    [
                        'icon' => '🚚',
                        'title' => 'Fast Delivery',
                        'desc'  => 'We deliver fresh to your door within 1–3 days, with real-time tracking.',
                    ],
                    [
                        'icon' => '💚',
                        'title' => 'Customer Love',
                        'desc'  => 'Our customers give us a 4.9 rating with 1,000+ happy customers.',
                    ],
                ];
            ?>
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col items-center text-center bg-white/80 rounded-3xl border border-[#ede9fe] shadow-sm px-6 py-7">
                    <span class="text-3xl mb-3"><?php echo e($f['icon']); ?></span>
                    <h3 class="text-sm sm:text-base font-extrabold text-gray-800 mb-2"><?php echo e($f['title']); ?></h3>
                    <p class="text-xs sm:text-sm text-gray-500 leading-relaxed"><?php echo e($f['desc']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 pb-14 sm:pb-20">
        <h2 class="text-xl sm:text-2xl font-extrabold text-[#6d2857] mb-6 flex items-center gap-2">
            About This Bloom
            <span>🌹</span>
        </h2>

        <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-6">
            
            <div class="bg-white/80 rounded-3xl border border-[#ede9fe] shadow-sm px-6 sm:px-8 py-7">
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-4">
                    Our Blooming bouquet gift box is crafted with the finest seasonal flowers, carefully selected
                    to create a stunning arrangement that speaks from the heart. 🌸
                </p>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-4">
                    Each box includes: fresh hand-picked blooms 🌼, Signature satin ribbon 🎀, Handwritten
                    greeting card 💌, Premium long-stem for freshness 🌿, Friendly gift box packaging 🎁
                </p>
                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                    Perfect for birthdays 🎂, anniversaries 💕, graduations 🎓, or just because you care. Our
                    flowers stay fresh for 5–7 days with proper care.
                </p>
            </div>

            
            <div class="bg-[#f0fdf4] rounded-3xl border border-[#bbf7d0] shadow-sm px-6 sm:px-8 py-7">
                <h3 class="text-base sm:text-lg font-extrabold text-[#16a34a] mb-5 flex items-center gap-2">
                    🌿 Flower Care Tips
                </h3>
                <?php
                    $tips = [
                        ['color' => '#f59e0b', 'text' => 'Change water every 2 days'],
                        ['color' => '#f59e0b', 'text' => 'Keep in indirect sunlight'],
                        ['color' => '#f59e0b', 'text' => 'Trim stems at an angle every 3 days'],
                        ['color' => '#f59e0b', 'text' => 'Store in a cool, ventilated area'],
                        ['color' => '#f59e0b', 'text' => 'Clean vase regularly to prevent bacteria'],
                    ];
                ?>
                <ul class="flex flex-col gap-3">
                    <?php $__currentLoopData = $tips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="flex items-start gap-3">
                            <span class="mt-0.5 w-5 h-5 rounded-full flex items-center justify-center shrink-0"
                                  style="background: <?php echo e($tip['color']); ?>22;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="<?php echo e($tip['color']); ?>" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span class="text-sm text-gray-700"><?php echo e($tip['text']); ?></span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </section>

    
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16 pb-16 sm:pb-24">
        <div class="flex items-end justify-between mb-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#6d2857] flex items-center gap-2">
                    You May Also Like
                    <span>🌹</span>
                </h2>
                <p class="text-sm text-gray-500 mt-1">Handpicked just for you with love</p>
            </div>
            <a href="<?php echo e(route('shop')); ?>"
               class="hidden sm:inline-flex items-center gap-1.5 text-sm font-bold text-[#8b5cf6] hover:text-[#6d2857]
                      border border-[#8b5cf6] rounded-full px-4 py-2 hover:bg-[#f5edff] transition-colors">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>

        <div class="w-full grid grid-cols-2 sm:grid-cols-4 gap-5 sm:gap-6">
            <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('product.detail', ['id' => $r['id']])); ?>"
                   class="group flex flex-col items-center text-center hover:-translate-y-1 transition-transform duration-300">
                    <div class="w-full aspect-square rounded-2xl overflow-hidden bg-white border border-[#ede9fe]
                                shadow-[0_8px_24px_rgba(139,92,246,0.08)]
                                group-hover:shadow-[0_12px_32px_rgba(139,92,246,0.16)] transition-all">
                        <img
                            src="<?php echo e(asset('images/landing/' . $r['img'])); ?>"
                            alt="<?php echo e($r['name']); ?>"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                    </div>
                    <h3 class="mt-3 text-sm sm:text-base font-bold text-gray-800 leading-tight"><?php echo e($r['name']); ?></h3>
                    <p class="text-xs text-gray-500 mt-0.5"><?php echo e($r['tag']); ?></p>
                    <p class="text-sm font-extrabold text-[#6d2857] mt-1">
                        Rp <?php echo e(number_format($r['price'], 0, ',', '.')); ?>

                    </p>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <script>
        function setMainImg(src, btn) {
            document.getElementById('main-img').src = src;
            document.querySelectorAll('.thumb').forEach(function(t) {
                t.classList.remove('thumb-active');
            });
            btn.classList.add('thumb-active');
        }

        function changeQty(delta) {
            var el    = document.getElementById('detail-qty');
            var minus = document.getElementById('detail-minus');
            var qty   = parseInt(el.textContent, 10) + delta;
            if (qty < 1) qty = 1;
            el.textContent = qty;
            minus.disabled = qty <= 1;

            // Sync qty to both form hidden inputs
            var hq = document.getElementById('hidden-qty');
            var hqb = document.getElementById('hidden-qty-buy');
            if (hq)  hq.value  = qty;
            if (hqb) hqb.value = qty;
        }

        // Add to Cart: show green feedback, then submit
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('form-add-cart');
            var btn  = document.getElementById('btn-add-cart');

            if (!form || !btn) return;

            var cartIconSvg = '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>';

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                // Green state
                btn.disabled = true;
                btn.style.background = '#16a34a';
                btn.style.boxShadow  = '0 8px 24px rgba(22,163,74,0.35)';
                btn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg> Added!';

                // Submit after 1.5s
                setTimeout(function () {
                    form.submit();
                }, 1500);
            });
        });
    </script>

</body>
</html>
<?php /**PATH C:\laragon\www\giftifybloom\resources\views\product-detail.blade.php ENDPATH**/ ?>