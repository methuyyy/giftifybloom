<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout — Giftify Bloom</title>
    <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php else: ?>
        <script src="https://cdn.tailwindcss.com"></script>
    <?php endif; ?>
    <style>
        .step-done   .step-num { background:#6d2857; color:#fff; border-color:#6d2857; }
        .step-active .step-num { background:#6d2857; color:#fff; border-color:#6d2857; box-shadow:0 6px 16px rgba(109,40,87,.30); }
        .step-inactive .step-num { background:#fff; color:#a18bb5; border-color:#d9c7ee; }
        .step-line-done { background:#6d2857 !important; }
        .panel { display:none; }
        .panel.active { display:block; }
        .ship-card.selected { border-color:#c4b5fd; background:#efe4ff; }
        .pay-method.selected { border-color:#c4b5fd; background:#f8f0ff; }
    </style>
</head>
<body class="bg-[#f5efff] antialiased min-h-screen w-full overflow-x-hidden">

    <?php
        $cart    = array_values(session()->get('cart', []));
        $ongkir  = 15000;
        $subtotal = array_sum(array_map(fn($i) => $i['price'] * $i['qty'], $cart));
        $total    = $subtotal + $ongkir;
    ?>

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

    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-6 sm:py-10">

        
        <div class="flex items-center gap-4 mb-8">
            <a href="<?php echo e(route('cart')); ?>"
               class="w-10 h-10 inline-flex items-center justify-center rounded-full text-[#6d2857] hover:bg-white/70 transition-colors shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                </svg>
            </a>
            <div>
                <h1 class="text-2xl sm:text-4xl font-semibold italic text-[#6d2857] leading-tight"
                    style="font-family:'Brush Script MT','Segoe Script',cursive;">Checkout</h1>
                <p class="text-sm text-[#8b5cf6] font-medium mt-1">Lengkapi informasi pengiriman dan lakukan pembayaran.</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#c084fc] ml-auto shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
            </svg>
        </div>

        <div class="w-full grid grid-cols-1 lg:grid-cols-[1.45fr_0.95fr] gap-6 lg:gap-10 items-start">

            
            <div class="w-full flex flex-col gap-5">

                
                <div class="w-full bg-white/80 backdrop-blur-sm rounded-3xl border border-[#ecdfff] shadow-sm px-5 sm:px-7 py-5">
                    <ol class="flex items-center gap-2">
                        <?php
                            $steps = ['Informasi Pengiriman', 'Metode Pembayaran', 'Konfirmasi'];
                        ?>
                        <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $si => $sname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $sn = $si + 1; ?>
                            <li class="flex items-center gap-2 step-item <?php echo e($sn === 1 ? 'step-active' : 'step-inactive'); ?>" data-for="<?php echo e($sn); ?>">
                                <span class="step-num w-8 h-8 sm:w-9 sm:h-9 inline-flex items-center justify-center rounded-full font-bold text-sm border-2 shrink-0 transition-all"><?php echo e($sn); ?></span>
                                <span class="text-[10px] sm:text-sm font-bold text-[#6d2857] whitespace-nowrap step-lbl"><?php echo e($sname); ?></span>
                            </li>
                            <?php if(!$loop->last): ?>
                                <li class="step-line flex-1 h-0.5 bg-[#d9c7ee] rounded-full mx-1 transition-all" data-line="<?php echo e($sn); ?>"></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>

                
                <div class="panel active w-full bg-white/85 backdrop-blur-sm rounded-3xl border border-[#ecdfff] shadow-[0_14px_36px_rgba(109,40,87,0.08)] p-5 sm:p-7" data-panel="1">

                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[#f0e8ff]">
                        <div class="w-9 h-9 inline-flex items-center justify-center rounded-xl bg-[#f0e8ff] text-[#6d2857] shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                        <h2 class="text-base sm:text-lg font-extrabold text-[#6d2857]">Informasi Pengiriman</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-bold text-[#504068]">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" id="inp-name" placeholder="Masukkan nama lengkap"
                                   class="w-full px-4 py-3 rounded-2xl bg-white border border-[#d9c7ee] text-sm text-[#2d1532] placeholder:text-[#b3a7c2]
                                          focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] transition-all shadow-sm"/>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-bold text-[#504068]">Nomor Telepon <span class="text-red-500">*</span></label>
                            <input type="tel" id="inp-phone" placeholder="08xxxxxxxxx"
                                   class="w-full px-4 py-3 rounded-2xl bg-white border border-[#d9c7ee] text-sm text-[#2d1532] placeholder:text-[#b3a7c2]
                                          focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] transition-all shadow-sm"/>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5 mb-4">
                        <label class="text-xs font-bold text-[#504068]">Alamat Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" id="inp-address" placeholder="Jl. Contoh No. 123, Kota Malang"
                               class="w-full px-4 py-3 rounded-2xl bg-white border border-[#d9c7ee] text-sm text-[#2d1532] placeholder:text-[#b3a7c2]
                                      focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] transition-all shadow-sm"/>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-7">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-bold text-[#504068]">Provinsi <span class="text-red-500">*</span></label>
                            <select id="inp-provinsi"
                                    class="w-full px-4 py-3 rounded-2xl bg-white border border-[#d9c7ee] text-sm text-[#2d1532]
                                           focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] transition-all shadow-sm appearance-none">
                                <option value="">Pilih Provinsi</option>
                                <option>Jawa Timur</option>
                                <option>Jawa Barat</option>
                                <option>Jawa Tengah</option>
                                <option>DKI Jakarta</option>
                                <option>Bali</option>
                                <option>Sumatera Utara</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-bold text-[#504068]">Kota/Kabupaten <span class="text-red-500">*</span></label>
                            <select id="inp-kota"
                                    class="w-full px-4 py-3 rounded-2xl bg-white border border-[#d9c7ee] text-sm text-[#2d1532]
                                           focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] transition-all shadow-sm appearance-none">
                                <option value="">Pilih Kota/Kabupaten</option>
                                <option>Kota Malang</option>
                                <option>Kota Surabaya</option>
                                <option>Kab. Malang</option>
                                <option>Kota Bandung</option>
                                <option>Kota Denpasar</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-bold text-[#504068]">Kode Pos <span class="text-red-500">*</span></label>
                            <input type="text" id="inp-kodepos" placeholder="Kode Pos"
                                   class="w-full px-4 py-3 rounded-2xl bg-white border border-[#d9c7ee] text-sm text-[#2d1532] placeholder:text-[#b3a7c2]
                                          focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] transition-all shadow-sm"/>
                        </div>
                    </div>

                    
                    <div class="flex items-center gap-3 mb-4 pb-3 border-b border-[#f0e8ff]">
                        <div class="w-9 h-9 inline-flex items-center justify-center rounded-xl bg-[#f0e8ff] text-[#6d2857] shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                            </svg>
                        </div>
                        <h2 class="text-base sm:text-lg font-extrabold text-[#6d2857]">Metode Pengiriman</h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-7">
                        <label class="ship-card selected flex items-center gap-3 rounded-2xl border-2 px-4 py-4 cursor-pointer transition-all" data-price="15000" data-label="GoSend (Delivery)">
                            <input type="radio" name="shipping" value="delivery" checked class="sr-only">
                            <span class="ship-dot w-5 h-5 rounded-full border-2 border-[#8b5cf6] flex items-center justify-center shrink-0">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#6d2857]"></span>
                            </span>
                            <div class="w-9 h-9 rounded-xl bg-white flex items-center justify-center text-[#6d2857] shadow-sm shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-extrabold text-[#6d2857]">GoSend (Delivery)</p>
                                <p class="text-xs text-[#8b7aa0]">Tiba dalam 1–2 hari</p>
                            </div>
                            <p class="text-sm font-extrabold text-[#6d2857] tabular-nums shrink-0">Rp 15.000</p>
                        </label>

                        <label class="ship-card flex items-center gap-3 rounded-2xl border-2 border-[#e8dff5] bg-white/70 px-4 py-4 cursor-pointer transition-all hover:bg-[#f5edff]" data-price="0" data-label="Ambil di Toko">
                            <input type="radio" name="shipping" value="pickup" class="sr-only">
                            <span class="ship-dot w-5 h-5 rounded-full border-2 border-[#c6b6e1] flex items-center justify-center shrink-0">
                                <span class="w-2.5 h-2.5 rounded-full bg-transparent"></span>
                            </span>
                            <div class="w-9 h-9 rounded-xl bg-white flex items-center justify-center text-[#8b7aa0] shadow-sm shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v5.25c0 .414.336.75.75.75z"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-bold text-[#504068]">Ambil di Toko (Pickup)</p>
                                <p class="text-xs text-[#8b7aa0]">Kayutangan / Rumah Admin</p>
                            </div>
                            <p class="text-sm font-extrabold text-[#6d2857] tabular-nums shrink-0">Gratis</p>
                        </label>
                    </div>

                    
                    <div class="flex items-center justify-between gap-4">
                        <a href="<?php echo e(route('cart')); ?>"
                           class="inline-flex items-center gap-2 rounded-full border-2 border-[#d9c7ee] bg-white hover:bg-[#f5edff]
                                  text-[#6d2857] font-bold text-sm px-6 py-3 transition-all shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                            </svg>
                            Kembali
                        </a>
                        <button type="button" id="btn-to-step2"
                                class="inline-flex items-center gap-2 rounded-full
                                       bg-gradient-to-r from-[#9f7aea] via-[#8b5cf6] to-[#6d2857]
                                       hover:from-[#8b5cf6] hover:via-[#7c3aed] hover:to-[#55234a]
                                       text-white font-bold text-sm sm:text-base
                                       py-3.5 px-8 shadow-[0_12px_28px_rgba(109,40,87,0.30)]
                                       hover:-translate-y-0.5 transition-all duration-200">
                            Lanjut ke Pembayaran
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                            </svg>
                        </button>
                    </div>

                </div>

                
                <div class="panel w-full bg-white/85 backdrop-blur-sm rounded-3xl border border-[#ecdfff] shadow-[0_14px_36px_rgba(109,40,87,0.08)] p-5 sm:p-7" data-panel="2">

                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[#f0e8ff]">
                        <div class="w-9 h-9 inline-flex items-center justify-center rounded-xl bg-[#f0e8ff] text-[#6d2857] shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/>
                            </svg>
                        </div>
                        <h2 class="text-base sm:text-lg font-extrabold text-[#6d2857]">Pilih Metode Pembayaran</h2>
                    </div>

                    <div class="flex flex-col gap-3 mb-7">

                        
                        <label class="pay-method selected flex items-center gap-3 rounded-2xl border-2 px-4 py-4 cursor-pointer transition-all">
                            <input type="radio" name="payment" value="qris" checked class="sr-only">
                            <span class="pay-dot w-5 h-5 rounded-full border-2 border-[#8b5cf6] flex items-center justify-center shrink-0">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#6d2857]"></span>
                            </span>
                            <div class="w-9 h-9 rounded-xl bg-[#fef3c7] flex items-center justify-center shrink-0 text-xs font-black text-[#d97706]">QR</div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-extrabold text-[#6d2857]">QRIS</p>
                                <p class="text-xs text-[#8b7aa0]">Scan QR dari semua e-wallet</p>
                            </div>
                            <span class="text-xs font-bold text-[#16a34a] bg-[#dcfce7] px-2 py-0.5 rounded-full">Instan</span>
                        </label>

                        
                        <label class="pay-method flex items-center gap-3 rounded-2xl border-2 border-[#e8dff5] bg-white/70 px-4 py-4 cursor-pointer transition-all hover:bg-[#f5edff]">
                            <input type="radio" name="payment" value="transfer" class="sr-only">
                            <span class="pay-dot w-5 h-5 rounded-full border-2 border-[#c6b6e1] flex items-center justify-center shrink-0">
                                <span class="w-2.5 h-2.5 rounded-full bg-transparent"></span>
                            </span>
                            <div class="w-9 h-9 rounded-xl bg-[#ede9fe] flex items-center justify-center shrink-0 text-[#7c3aed]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-bold text-[#504068]">Transfer Bank</p>
                                <p class="text-xs text-[#8b7aa0]">BCA · BNI · Mandiri · BRI</p>
                            </div>
                        </label>

                        
                        <label class="pay-method flex items-center gap-3 rounded-2xl border-2 border-[#e8dff5] bg-white/70 px-4 py-4 cursor-pointer transition-all hover:bg-[#f5edff]">
                            <input type="radio" name="payment" value="ewallet" class="sr-only">
                            <span class="pay-dot w-5 h-5 rounded-full border-2 border-[#c6b6e1] flex items-center justify-center shrink-0">
                                <span class="w-2.5 h-2.5 rounded-full bg-transparent"></span>
                            </span>
                            <div class="w-9 h-9 rounded-xl bg-[#fce7f3] flex items-center justify-center shrink-0 text-[#be185d]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18-3a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3m18-3v3M3 9h18"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-bold text-[#504068]">E-Wallet</p>
                                <p class="text-xs text-[#8b7aa0]">GoPay · OVO · Dana · ShopeePay</p>
                            </div>
                        </label>

                        
                        <label class="pay-method flex items-center gap-3 rounded-2xl border-2 border-[#e8dff5] bg-white/70 px-4 py-4 cursor-pointer transition-all hover:bg-[#f5edff]">
                            <input type="radio" name="payment" value="cod" class="sr-only">
                            <span class="pay-dot w-5 h-5 rounded-full border-2 border-[#c6b6e1] flex items-center justify-center shrink-0">
                                <span class="w-2.5 h-2.5 rounded-full bg-transparent"></span>
                            </span>
                            <div class="w-9 h-9 rounded-xl bg-[#f0fdf4] flex items-center justify-center shrink-0 text-[#16a34a]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-bold text-[#504068]">Bayar di Tempat (COD)</p>
                                <p class="text-xs text-[#8b7aa0]">Hanya untuk area tertentu</p>
                            </div>
                        </label>

                    </div>

                    <div class="flex items-center justify-between gap-4">
                        <button type="button" id="btn-to-step1"
                                class="inline-flex items-center gap-2 rounded-full border-2 border-[#d9c7ee] bg-white hover:bg-[#f5edff]
                                       text-[#6d2857] font-bold text-sm px-6 py-3 transition-all shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                            </svg>
                            Kembali
                        </button>
                        <button type="button" id="btn-to-step3"
                                class="inline-flex items-center gap-2 rounded-full
                                       bg-gradient-to-r from-[#9f7aea] via-[#8b5cf6] to-[#6d2857]
                                       hover:from-[#8b5cf6] hover:via-[#7c3aed] hover:to-[#55234a]
                                       text-white font-bold text-sm sm:text-base
                                       py-3.5 px-8 shadow-[0_12px_28px_rgba(109,40,87,0.30)]
                                       hover:-translate-y-0.5 transition-all duration-200">
                            Konfirmasi Pesanan
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                            </svg>
                        </button>
                    </div>
                </div>

                
                <div class="panel w-full bg-white/85 backdrop-blur-sm rounded-3xl border border-[#ecdfff] shadow-[0_14px_36px_rgba(109,40,87,0.08)] p-5 sm:p-7" data-panel="3">

                    <div class="flex flex-col items-center text-center py-6 gap-4">
                        <div class="w-20 h-20 rounded-full bg-[#dcfce7] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#16a34a]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-[#6d2857]">Pesanan Dikonfirmasi! 🌸</h2>
                        <p class="text-sm text-gray-500 max-w-sm">
                            Terima kasih telah berbelanja di Giftify Bloom.<br>
                            Pesananmu sedang diproses dan akan segera dikirim.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 mt-2">
                            <a href="<?php echo e(route('shop')); ?>"
                               class="inline-flex items-center gap-2 rounded-full border-2 border-[#d9c7ee] bg-white hover:bg-[#f5edff]
                                      text-[#6d2857] font-bold text-sm px-6 py-3 transition-all">
                                Lanjut Belanja
                            </a>
                            <button type="button" id="btn-to-step2-back"
                                    class="inline-flex items-center gap-2 rounded-full border-2 border-[#d9c7ee] bg-white hover:bg-[#f5edff]
                                           text-[#6d2857] font-bold text-sm px-6 py-3 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                                </svg>
                                Kembali
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            
            <aside class="w-full flex flex-col gap-4 lg:sticky lg:top-6">

                <div class="w-full bg-white/85 backdrop-blur-sm rounded-3xl border border-[#ecdfff] shadow-[0_14px_34px_rgba(109,40,87,0.08)] p-5 sm:p-6">

                    <h2 class="text-lg font-extrabold text-[#6d2857] mb-5 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                        </svg>
                        Ringkasan Pesanan
                    </h2>

                    
                    <?php if(empty($cart)): ?>
                        <p class="text-sm text-gray-400 text-center py-4">Keranjang kosong</p>
                    <?php else: ?>
                        <div class="flex flex-col gap-3 mb-5">
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex items-center gap-3">
                                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-xl bg-gradient-to-b from-[#8c52a5] to-[#6e3787] p-1.5 shrink-0 overflow-hidden">
                                        <img src="<?php echo e(asset('images/landing/' . $item['img'])); ?>" alt="<?php echo e($item['name']); ?>"
                                             class="w-full h-full object-contain"/>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-bold text-[#3d1f48] truncate"><?php echo e($item['name']); ?></p>
                                        <p class="text-xs text-[#8b5cf6]"><?php echo e($item['tag']); ?></p>
                                        <p class="text-sm font-bold text-[#6d2857]">Rp <?php echo e(number_format($item['price'], 0, ',', '.')); ?></p>
                                    </div>
                                    <div class="flex items-center border border-[#d9c7ee] rounded-full overflow-hidden bg-white shrink-0">
                                        <span class="w-7 h-7 inline-flex items-center justify-center text-xs font-bold text-[#6d2857] border-r border-[#d9c7ee]"><?php echo e($item['qty']); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    
                    <div class="space-y-2 border-t border-[#ecdfff] pt-4 mb-4">
                        <div class="flex justify-between text-sm text-gray-600">
                            <span>Subtotal (<?php echo e(array_sum(array_column($cart, 'qty'))); ?> items)</span>
                            <span class="font-bold text-[#6d2857]">Rp <?php echo e(number_format($subtotal, 0, ',', '.')); ?></span>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600">
                            <span>Ongkos Kirim</span>
                            <span id="ongkir-display" class="font-bold text-[#6d2857]">Rp <?php echo e(number_format($ongkir, 0, ',', '.')); ?></span>
                        </div>
                    </div>

                    <div class="w-full rounded-2xl bg-[#ede9fe] px-5 py-4 flex items-center justify-between mb-5">
                        <span class="text-sm font-extrabold text-[#6d2857]">Total Pembayaran</span>
                        <span id="grand-total-display" class="text-xl sm:text-2xl font-extrabold text-[#6d2857] tabular-nums">
                            Rp <?php echo e(number_format($total, 0, ',', '.')); ?>

                        </span>
                    </div>

                    
                    <div class="mb-5">
                        <label class="text-xs font-bold text-[#6d2857] flex items-center gap-1.5 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                            </svg>
                            Catatan Pesanan <span class="text-[#a18bb5] font-normal">(Opsional)</span>
                        </label>
                        <textarea rows="3" placeholder="Tulis catatan untuk pesanan ini..."
                                  class="w-full px-4 py-3 rounded-2xl bg-white border border-[#e8dff5] text-sm text-[#2d1532] placeholder:text-[#b3a7c2]
                                         focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] transition-all resize-none"></textarea>
                    </div>

                    
                    <div class="flex items-center gap-3 rounded-2xl bg-[#f8f0ff] border border-[#e8dff5] px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#6d2857] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                        <div>
                            <p class="text-xs font-extrabold text-[#6d2857]">Transaksi aman & terpercaya</p>
                            <p class="text-[11px] text-[#8b7aa0]">Data Anda akan kami jaga kerahasiaannya.</p>
                        </div>
                    </div>

                </div>

            </aside>

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
        // ── Step navigation ──────────────────────────────────────────
        var currentStep = 1;

        function goToStep(n) {
            // Panels
            document.querySelectorAll('.panel').forEach(function(p) {
                p.classList.toggle('active', parseInt(p.dataset.panel) === n);
            });

            // Step indicators
            document.querySelectorAll('.step-item').forEach(function(el) {
                var s = parseInt(el.dataset.for);
                el.classList.remove('step-active', 'step-done', 'step-inactive');
                if (s < n)       el.classList.add('step-done');
                else if (s === n) el.classList.add('step-active');
                else             el.classList.add('step-inactive');
            });

            // Step lines
            document.querySelectorAll('.step-line').forEach(function(el) {
                var l = parseInt(el.dataset.line);
                el.classList.toggle('step-line-done', l < n);
            });

            currentStep = n;
        }

        document.getElementById('btn-to-step2').addEventListener('click', function() { goToStep(2); });
        document.getElementById('btn-to-step1').addEventListener('click', function() { goToStep(1); });
        document.getElementById('btn-to-step3').addEventListener('click', function() { goToStep(3); });
        document.getElementById('btn-to-step2-back').addEventListener('click', function() { goToStep(2); });

        // ── Shipping selection ───────────────────────────────────────
        var ongkirBase = <?php echo e($subtotal); ?>;

        document.querySelectorAll('.ship-card').forEach(function(card) {
            card.addEventListener('click', function() {
                document.querySelectorAll('.ship-card').forEach(function(c) {
                    c.classList.remove('selected');
                    c.classList.remove('border-[#c4b5fd]', 'bg-[#efe4ff]');
                    c.classList.add('border-[#e8dff5]', 'bg-white/70');
                    var dot = c.querySelector('.ship-dot span');
                    if (dot) { dot.style.background = 'transparent'; }
                });
                card.classList.add('selected');
                card.classList.remove('border-[#e8dff5]', 'bg-white/70');
                card.classList.add('border-[#c4b5fd]', 'bg-[#efe4ff]');
                var dot = card.querySelector('.ship-dot span');
                if (dot) { dot.style.background = '#6d2857'; }
                card.querySelector('input[type=radio]').checked = true;

                var price = parseInt(card.dataset.price) || 0;
                var label = price === 0 ? 'Gratis' : 'Rp ' + price.toLocaleString('id-ID');
                document.getElementById('ongkir-display').textContent = label;
                document.getElementById('grand-total-display').textContent =
                    'Rp ' + (ongkirBase + price).toLocaleString('id-ID');
            });
        });

        // ── Payment method selection ─────────────────────────────────
        document.querySelectorAll('.pay-method').forEach(function(card) {
            card.addEventListener('click', function() {
                document.querySelectorAll('.pay-method').forEach(function(c) {
                    c.classList.remove('selected', 'border-[#c4b5fd]', 'bg-[#f8f0ff]');
                    c.classList.add('border-[#e8dff5]', 'bg-white/70');
                    var dot = c.querySelector('.pay-dot span');
                    if (dot) { dot.style.background = 'transparent'; }
                });
                card.classList.add('selected');
                card.classList.remove('border-[#e8dff5]', 'bg-white/70');
                card.classList.add('border-[#c4b5fd]', 'bg-[#f8f0ff]');
                var dot = card.querySelector('.pay-dot span');
                if (dot) { dot.style.background = '#6d2857'; }
                card.querySelector('input[type=radio]').checked = true;
            });
        });
    </script>

</body>
</html>
<?php /**PATH C:\laragon\www\giftifybloom\resources\views\checkout.blade.php ENDPATH**/ ?>