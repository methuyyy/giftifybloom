<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Write Your Card — Giftify Bloom</title>
    <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php else: ?>
        <script src="https://cdn.tailwindcss.com"></script>
    <?php endif; ?>
</head>
<body class="bg-gradient-to-b from-[#f0e6ff] via-[#f6f0fb] to-[#f0e6ff] antialiased min-h-screen w-full overflow-x-hidden">

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.step-indicator','data' => ['current' => 4]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('step-indicator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['current' => 4]); ?>
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

            <div class="w-full flex flex-col items-center text-center mb-10 sm:mb-12 lg:mb-14">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#6d2857] mb-3"
                    style="font-family: 'Brush Script MT', 'Segoe Script', cursive; font-style: italic;">
                    Write Your Card
                </h2>
                <p class="text-sm sm:text-base lg:text-lg text-[#6d2857] font-medium">
                    Add a personal message to your bouquet
                </p>
            </div>

            <div class="w-full max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-[auto_1fr] gap-10 lg:gap-16 items-start">

                <div class="w-full flex justify-center lg:justify-start lg:sticky lg:top-6">
                    <div
                        id="card-preview"
                        class="w-full max-w-[320px] sm:max-w-[360px] aspect-[3/4] rounded-2xl border-[6px] border-[#f5f0c0]
                               bg-white shadow-[0_20px_50px_rgba(109,40,87,0.18)] relative overflow-hidden"
                    >
                        <div class="w-full h-full flex flex-col p-6 sm:p-8">

                            <div class="flex flex-col items-start justify-start mb-4">
                                <span
                                    class="text-[#6d2857] text-xl sm:text-2xl italic"
                                    style="font-family: 'Brush Script MT', 'Segoe Script', cursive;"
                                >
                                    To
                                </span>
                                <p
                                    id="preview-to"
                                    class="mt-1 text-lg sm:text-xl font-semibold text-[#6d2857] break-words
                                           w-full min-h-[28px]"
                                >&nbsp;</p>
                            </div>

                            <div class="flex-1 flex items-center justify-center w-full">
                                <p
                                    id="preview-message"
                                    class="w-full text-center text-base sm:text-lg text-gray-400 italic leading-relaxed break-words whitespace-pre-wrap"
                                >
                                    Your Message...
                                </p>
                            </div>

                            <div class="flex flex-col items-end justify-end mt-4">
                                <p
                                    id="preview-from"
                                    class="text-[#c08565] text-xl sm:text-2xl italic min-h-[32px]"
                                    style="font-family: 'Brush Script MT', 'Segoe Script', cursive;"
                                >
                                    My Love
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="w-full flex flex-col gap-6 sm:gap-7">

                    <div class="w-full flex flex-col gap-2">
                        <label for="recipient" class="text-sm sm:text-[15px] font-semibold text-[#6d2857] pl-1">
                            Recipient's Name
                        </label>
                        <input
                            id="recipient"
                            type="text"
                            placeholder="Who is This for?"
                            maxlength="60"
                            class="w-full px-5 py-3.5 sm:px-6 sm:py-4 rounded-2xl border-2 border-[#6d2857] text-[#2d1532]
                                   placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/60
                                   focus:border-[#8b5cf6] transition-all shadow-sm text-sm sm:text-base"
                        />
                    </div>

                    <div class="w-full flex flex-col gap-2">
                        <label for="message" class="text-sm sm:text-[15px] font-semibold text-[#6d2857] pl-1">
                            Your Message
                        </label>
                        <textarea
                            id="message"
                            rows="5"
                            maxlength="500"
                            placeholder="Write Something sweet.."
                            class="w-full px-5 py-3.5 sm:px-6 sm:py-4 rounded-2xl border-2 border-[#6d2857] text-[#2d1532]
                                   placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/60
                                   focus:border-[#8b5cf6] transition-all shadow-sm resize-y text-sm sm:text-base leading-relaxed"
                        ></textarea>
                    </div>

                    <div class="w-full flex flex-col gap-2">
                        <label for="sender" class="text-sm sm:text-[15px] font-semibold text-[#6d2857] pl-1">
                            Your Name
                        </label>
                        <input
                            id="sender"
                            type="text"
                            placeholder="From.."
                            maxlength="60"
                            class="w-full px-5 py-3.5 sm:px-6 sm:py-4 rounded-2xl border-2 border-[#6d2857] text-[#2d1532]
                                   placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/60
                                   focus:border-[#8b5cf6] transition-all shadow-sm text-sm sm:text-base"
                        />
                    </div>

                    <div class="w-full flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-8 mt-4 sm:mt-6">
                        <a
                            href="<?php echo e(route('pick.card')); ?>"
                            class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-10 sm:px-12 py-3 sm:py-[14px]
                                   rounded-full text-sm sm:text-base font-semibold text-[#6d2857]
                                   bg-white border-2 border-[#8b5cf6] hover:bg-[#ede9fe]
                                   shadow-md hover:shadow-xl transition-all duration-200 tracking-wide"
                        >
                            &larr; Back
                        </a>
                        <button
                            id="btn-next"
                            type="button"
                            class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-10 sm:px-12 py-3 sm:py-[14px]
                                   rounded-full text-sm sm:text-base font-semibold text-[#6d2857]
                                   bg-white border-2 border-[#8b5cf6] hover:bg-[#ede9fe]
                                   shadow-md hover:shadow-xl transition-all duration-200 tracking-wide"
                        >
                            Next &rarr;
                        </button>
                    </div>

                </div>

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
            const recipientInput = document.getElementById('recipient');
            const messageInput   = document.getElementById('message');
            const senderInput    = document.getElementById('sender');

            const previewTo      = document.getElementById('preview-to');
            const previewMessage = document.getElementById('preview-message');
            const previewFrom    = document.getElementById('preview-from');

            const DEFAULT_MESSAGE = 'Your Message...';
            const DEFAULT_FROM    = 'My Love';

            function updatePreview() {
                const toVal = recipientInput.value.trim();
                previewTo.innerHTML = toVal === '' ? '&nbsp;' : toVal;

                const msgVal = messageInput.value;
                if (msgVal.trim() === '') {
                    previewMessage.textContent = DEFAULT_MESSAGE;
                    previewMessage.classList.add('text-gray-400', 'italic');
                    previewMessage.classList.remove('text-[#2d1532]');
                } else {
                    previewMessage.textContent = msgVal;
                    previewMessage.classList.remove('text-gray-400', 'italic');
                    previewMessage.classList.add('text-[#2d1532]');
                }

                const fromVal = senderInput.value.trim();
                previewFrom.textContent = fromVal === '' ? DEFAULT_FROM : fromVal;
            }

            [recipientInput, messageInput, senderInput].forEach(function (el) {
                el.addEventListener('input', updatePreview);
            });

            updatePreview();

            const btnNext = document.getElementById('btn-next');
            const nextUrl = "<?php echo e(route('pick.theme')); ?>";

            btnNext.addEventListener('click', function () {
                window.location.href = nextUrl;
            });
        });
    </script>

</body>
</html>
<?php /**PATH C:\laragon\www\giftifybloom\resources\views\pick-message.blade.php ENDPATH**/ ?>