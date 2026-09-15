<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pick Your Greenery — Giftify Bloom</title>
    <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php else: ?>
        <script src="https://cdn.tailwindcss.com"></script>
    <?php endif; ?>
</head>
<body class="bg-gradient-to-b from-[#f5eefc] via-[#f8f4ef] to-[#f5eefc] antialiased min-h-screen w-full overflow-x-hidden">

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

    <?php if (isset($component)) { $__componentOriginal0ad9e9fabd478bb72d410d6a9b21b8bd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ad9e9fabd478bb72d410d6a9b21b8bd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.step-indicator','data' => ['current' => 2]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('step-indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['current' => 2]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ad9e9fabd478bb72d410d6a9b21b8bd)): ?>
<?php $attributes = $__attributesOriginal0ad9e9fabd478bb72d410d6a9b21b8bd; ?>
<?php unset($__attributesOriginal0ad9e9fabd478bb72d410d6a9b21b8bd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ad9e9fabd478bb72d410d6a9b21b8bd)): ?>
<?php $component = $__componentOriginal0ad9e9fabd478bb72d410d6a9b21b8bd; ?>
<?php unset($__componentOriginal0ad9e9fabd478bb72d410d6a9b21b8bd); ?>
<?php endif; ?>

    <section class="relative w-full py-6 sm:py-8 lg:py-10">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">

            <div class="w-full flex flex-col items-center text-center mb-10 sm:mb-12 lg:mb-16">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#6d2857] mb-3"
                    style="font-family: 'Brush Script MT', 'Segoe Script', cursive; font-style: italic;">
                    Pick Your Greenery
                </h2>
                <p class="text-sm sm:text-base lg:text-lg text-[#6d2857] font-medium">
                    Select the greenery for your bouquet (pick at least 1)
                </p>
            </div>

            <div id="flower-grid"
                 class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-10 mb-12 sm:mb-14 lg:mb-16 max-w-6xl mx-auto">
                <?php $__currentLoopData = [
                    ['key' => 'leafy',     'label' => 'Leafy',     'img' => 'leafy.png'],
                    ['key' => 'ferm',     'label' => 'Fermata',     'img' => 'ferm.png'],
                    ['key' => 'eucalyptus',    'label' => 'Eucalyptus',    'img' => 'eucalyptus.png'],
                    ['key' => 'willow', 'label' => 'Willow', 'img' => 'willow.png'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div
                        class="flower-card group relative w-full aspect-[4/3] sm:aspect-[5/4] rounded-2xl border-2 border-[#f5f0c0] bg-white cursor-pointer
                               flex flex-col items-center justify-center p-4 sm:p-5
                               hover:shadow-[0_8px_24px_rgba(109,40,87,0.18)] transition-all duration-300"
                        data-greenery="<?php echo e($f['key']); ?>"
                        role="button"
                        tabindex="0"
                        aria-label="Pilih greenery <?php echo e($f['label']); ?>"
                    >
                        <div
                            class="check-badge absolute top-2 right-2 w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-[#8b5cf6]
                                   items-center justify-center shadow-md hidden z-20"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-[22px] sm:w-[22px] text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.704 5.29a1 1 0 010 1.42l-7.5 7.5a1 1 0 01-1.42 0l-3.5-3.5a1 1 0 111.42-1.42L8.5 12.08l6.79-6.79a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>

                        <div class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28 mb-3 sm:mb-4 flex items-center justify-center">
                            <img
                                src="<?php echo e(asset('images/grocery/' . $f['img'])); ?>"
                                alt="<?php echo e($f['label']); ?>"
                                class="w-full h-full object-contain drop-shadow-md group-hover:scale-110 transition-transform duration-300"
                            />
                        </div>

                        <h3 class="text-base sm:text-lg font-bold text-[#6d2857]">
                            <?php echo e($f['label']); ?>

                        </h3>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="w-full flex justify-center">
                <button
                    id="btn-back"
                    type="button"
                    class="inline-flex items-center justify-center gap-2 px-10 sm:px-12 py-3 sm:py-[14px] rounded-full
                           text-sm sm:text-base font-semibold text-[#6d2857]
                           bg-white border-2 border-[#8b5cf6] hover:bg-[#ede9fe]
                           shadow-md hover:shadow-xl transition-all duration-200 tracking-wide"
                >
                    Back
                </button>
                <button
                    id="btn-next"
                    type="button"
                    class="inline-flex items-center justify-center gap-2 px-10 sm:px-12 py-3 sm:py-[14px] rounded-full
                           text-sm sm:text-base font-semibold text-[#6d2857]
                           bg-white border-2 border-[#8b5cf6] hover:bg-[#ede9fe]
                           shadow-md hover:shadow-xl transition-all duration-200 tracking-wide"
                >
                    Next →
                </button>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.flower-card');
            const btnNext = document.getElementById('btn-next');
            const btnBack = document.getElementById('btn-back');
            const selected = new Set();
            const nextUrl = "<?php echo e(route('pick.card')); ?>";
            const backUrl = "<?php echo e(route('pick.flowers')); ?>";

            function applySelection(card, isSelected) {
                const badge = card.querySelector('.check-badge');
                if (isSelected) {
                    card.classList.remove('border-[#f5f0c0]');
                    card.classList.add('border-[#8b5cf6]', 'bg-[#faf5ff]', 'shadow-[0_10px_28px_rgba(139,92,246,0.28)]');
                    badge.classList.remove('hidden');
                    badge.classList.add('flex');
                } else {
                    card.classList.add('border-[#f5f0c0]');
                    card.classList.remove('border-[#8b5cf6]', 'bg-[#faf5ff]', 'shadow-[0_10px_28px_rgba(139,92,246,0.28)]');
                    badge.classList.add('hidden');
                    badge.classList.remove('flex');
                }
            }

            function toggleCard(card) {
                const key = card.getAttribute('data-greenery');
                if (selected.has(key)) {
                    selected.delete(key);
                    applySelection(card, false);
                } else {
                    selected.add(key);
                    applySelection(card, true);
                }
                console.log('Selected greenery:', Array.from(selected));
            }

            cards.forEach(function (card) {
                card.addEventListener('click', function () {
                    toggleCard(card);
                });
                card.addEventListener('keydown', function (e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        toggleCard(card);
                    }
                });
            });

            btnNext.addEventListener('click', function () {
                if (selected.size < 1) {
                    alert('Please pick at least 1 greenery!');
                    return;
                }
                window.location.href = nextUrl;
            });
        });
    </script>

</body>
</html>
<?php /**PATH C:\laragon\www\giftifybloom\resources\views\pick-grocery.blade.php ENDPATH**/ ?>