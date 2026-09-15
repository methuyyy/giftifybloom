<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akun Saya — Giftify Bloom</title>
    <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php else: ?>
        <script src="https://cdn.tailwindcss.com"></script>
    <?php endif; ?>
</head>
<body class="bg-gradient-to-br from-[#f5efff] via-[#fbf6ff] to-[#fff5f0] antialiased min-h-screen w-full overflow-x-hidden">

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

    <section class="w-full py-8 sm:py-10 lg:py-14 z-10 relative">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">

            <!-- Page Header -->
            <div class="mb-6 sm:mb-8">
                <h1 class="text-3xl sm:text-4xl font-extrabold text-[#2d1532] tracking-tight leading-tight">Profil</h1>
                <p class="text-sm sm:text-base text-[#8b7aa0] font-medium mt-1">Kelola Informasi akun dan data pribadi Anda.</p>
            </div>

            <div class="w-full grid grid-cols-1 lg:grid-cols-[220px_1fr_300px] gap-5 lg:gap-6 items-start">

                <!-- =========================================== -->
                <!-- SIDEBAR KIRI: NAVIGASI AKUN                -->
                <!-- Desktop: vertical sidebar | Mobile: tab strip -->
                <!-- =========================================== -->

                
                <div class="lg:hidden w-full overflow-x-auto pb-1" style="-webkit-overflow-scrolling:touch; scrollbar-width:none;">
                    <div class="flex gap-2 min-w-max">
                        <?php
                            $mobileTabs = [
                                ['id' => 'profil',    'label' => 'Profil'],
                                ['id' => 'keamanan',  'label' => 'Keamanan'],
                                ['id' => 'pesanan',   'label' => 'Pesanan'],
                                ['id' => 'wishlist',  'label' => 'Wishlist'],
                            ];
                        ?>
                        <?php $__currentLoopData = $mobileTabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button"
                                    data-tab="<?php echo e($mt['id']); ?>"
                                    class="mobile-tab-btn px-4 py-2 rounded-full text-sm font-bold border-2 transition-all whitespace-nowrap
                                           <?php echo e($loop->first ? 'bg-[#6d2857] text-white border-[#6d2857]' : 'bg-white text-[#504068] border-[#d9c7ee] hover:border-[#8b5cf6] hover:text-[#6d2857]'); ?>">
                                <?php echo e($mt['label']); ?>

                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit"
                                    class="px-4 py-2 rounded-full text-sm font-bold border-2 bg-white text-red-500 border-red-200 hover:bg-red-50 transition-all whitespace-nowrap">
                                Keluar
                            </button>
                        </form>
                    </div>
                </div>

                
                <aside class="hidden lg:block w-full">
                    <nav class="w-full bg-white/85 backdrop-blur-sm rounded-[20px] border border-[#ecdfff] shadow-[0_8px_24px_rgba(109,40,87,0.07)] overflow-hidden">
                        <ul class="flex flex-col py-2">

                            <li>
                                <a href="#" id="nav-profil" data-tab="profil"
                                   class="account-nav-link flex items-center gap-3 px-5 py-3.5 text-sm font-semibold rounded-xl mx-2 my-0.5 transition-all
                                          bg-[#f5edff] text-[#6d2857]" aria-current="page">
                                    <span class="w-8 h-8 inline-flex items-center justify-center rounded-lg bg-[#ede0ff] shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <circle cx="12" cy="8" r="4"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0"/>
                                        </svg>
                                    </span>
                                    Profil Saya
                                </a>
                            </li>

                            <li>
                                <a href="#" id="nav-keamanan" data-tab="keamanan"
                                   class="account-nav-link flex items-center gap-3 px-5 py-3.5 text-sm font-semibold rounded-xl mx-2 my-0.5 transition-all
                                          text-[#504068] hover:bg-[#f5edff] hover:text-[#6d2857]">
                                    <span class="w-8 h-8 inline-flex items-center justify-center rounded-lg bg-[#f3f4f6] shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                                        </svg>
                                    </span>
                                    Keamanan Akun
                                </a>
                            </li>

                            <li>
                                <a href="#" id="nav-pesanan" data-tab="pesanan"
                                   class="account-nav-link flex items-center gap-3 px-5 py-3.5 text-sm font-semibold rounded-xl mx-2 my-0.5 transition-all
                                          text-[#504068] hover:bg-[#f5edff] hover:text-[#6d2857]">
                                    <span class="w-8 h-8 inline-flex items-center justify-center rounded-lg bg-[#f3f4f6] shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                                        </svg>
                                    </span>
                                    Pesanan Saya
                                </a>
                            </li>

                            <li>
                                <a href="#" id="nav-wishlist" data-tab="wishlist"
                                   class="account-nav-link flex items-center gap-3 px-5 py-3.5 text-sm font-semibold rounded-xl mx-2 my-0.5 transition-all
                                          text-[#504068] hover:bg-[#f5edff] hover:text-[#6d2857]">
                                    <span class="w-8 h-8 inline-flex items-center justify-center rounded-lg bg-[#f3f4f6] shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                                        </svg>
                                    </span>
                                    Wishlist
                                </a>
                            </li>

                            <li class="border-t border-[#f0e8ff] mt-1 pt-1">
                                <a href="#" id="nav-keluar"
                                   class="flex items-center gap-3 px-5 py-3.5 text-sm font-semibold rounded-xl mx-2 my-0.5 transition-all
                                          text-[#b91c1c] hover:bg-red-50">
                                    <span class="w-8 h-8 inline-flex items-center justify-center rounded-lg bg-[#fef2f2] shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
                                        </svg>
                                    </span>
                                    Keluar
                                </a>
                            </li>

                        </ul>
                    </nav>
                </aside>

                <!-- =========================================== -->
                <!-- PANEL TENGAH: KONTEN TAB                   -->
                <!-- =========================================== -->
                <main class="w-full flex flex-col gap-5">

                    <!-- TAB: PROFIL SAYA -->
                    <div id="tab-profil" class="account-tab-panel">

                        <!-- Profile Card -->
                        <div class="w-full bg-white/90 backdrop-blur-sm rounded-[24px] border border-[#ecdfff] shadow-[0_8px_24px_rgba(109,40,87,0.07)] p-6 sm:p-7 mb-5">

                            <!-- Avatar + Name -->
                            <div class="flex items-center gap-5 mb-7 pb-6 border-b border-[#f0e8ff]">
                                <div class="relative shrink-0">
                                    <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-gradient-to-br from-[#c4b5fd] to-[#a78bfa] flex items-center justify-center shadow-[0_8px_20px_rgba(139,92,246,0.3)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12 text-white/90" fill="currentColor" viewBox="0 0 24 24">
                                            <circle cx="12" cy="8" r="4.5" opacity=".9"/>
                                            <path d="M3.5 20.5a8.5 8.5 0 0117 0" opacity=".7"/>
                                        </svg>
                                    </div>
                                    <button type="button"
                                            class="absolute -bottom-1 -right-1 w-7 h-7 rounded-full bg-[#6d2857] border-2 border-white inline-flex items-center justify-center shadow-md hover:bg-[#8b5cf6] transition-colors"
                                            aria-label="Ganti foto profil">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <h2 class="text-xl sm:text-2xl font-extrabold text-[#2d1532] tracking-tight leading-tight">Arethuyyy</h2>
                                    <p class="text-sm text-[#8b7aa0] font-medium mt-0.5">Member sejak 12 Jan 2025</p>
                                </div>
                            </div>

                            <!-- Informasi Pribadi -->
                            <div class="w-full">
                                <div class="flex items-center gap-2.5 mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#6d2857] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <circle cx="12" cy="8" r="4"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0"/>
                                    </svg>
                                    <h3 class="text-base font-extrabold text-[#2d1532] tracking-tight">Informasi Pribadi</h3>
                                </div>

                                <div class="w-full border-t border-[#f0e8ff]">

                                    <!-- Nama Lengkap -->
                                    <div class="profile-field flex items-center justify-between py-4 border-b border-[#f0e8ff] gap-4 group">
                                        <div class="flex items-start gap-3 min-w-0 flex-1">
                                            <span class="w-8 h-8 shrink-0 inline-flex items-center justify-center rounded-lg bg-[#f5edff] text-[#8b5cf6] mt-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <circle cx="12" cy="8" r="4"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0"/>
                                                </svg>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <p class="text-xs text-[#8b7aa0] font-semibold mb-0.5">Nama Lengkap</p>
                                                <p class="profile-value text-sm sm:text-base font-semibold text-[#2d1532]">Aretha Safira</p>
                                                <input type="text" class="profile-input hidden w-full mt-1 px-3 py-2 rounded-xl border border-[#d9c7ee] text-sm text-[#2d1532] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] bg-white transition-all" value="Aretha Safira" />
                                            </div>
                                        </div>
                                        <button type="button" class="edit-btn shrink-0 w-8 h-8 inline-flex items-center justify-center rounded-full text-[#8b7aa0] hover:text-[#6d2857] hover:bg-[#f5edff] transition-colors" aria-label="Edit Nama Lengkap">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- No. HP -->
                                    <div class="profile-field flex items-center justify-between py-4 border-b border-[#f0e8ff] gap-4 group">
                                        <div class="flex items-start gap-3 min-w-0 flex-1">
                                            <span class="w-8 h-8 shrink-0 inline-flex items-center justify-center rounded-lg bg-[#f5edff] text-[#8b5cf6] mt-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/>
                                                </svg>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <p class="text-xs text-[#8b7aa0] font-semibold mb-0.5">No. Hp</p>
                                                <p class="profile-value text-sm sm:text-base font-semibold text-[#2d1532]">0812345678</p>
                                                <input type="tel" class="profile-input hidden w-full mt-1 px-3 py-2 rounded-xl border border-[#d9c7ee] text-sm text-[#2d1532] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] bg-white transition-all" value="0812345678" />
                                            </div>
                                        </div>
                                        <button type="button" class="edit-btn shrink-0 w-8 h-8 inline-flex items-center justify-center rounded-full text-[#8b7aa0] hover:text-[#6d2857] hover:bg-[#f5edff] transition-colors" aria-label="Edit No. HP">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Email -->
                                    <div class="profile-field flex items-center justify-between py-4 border-b border-[#f0e8ff] gap-4 group">
                                        <div class="flex items-start gap-3 min-w-0 flex-1">
                                            <span class="w-8 h-8 shrink-0 inline-flex items-center justify-center rounded-lg bg-[#f5edff] text-[#8b5cf6] mt-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                                </svg>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <p class="text-xs text-[#8b7aa0] font-semibold mb-0.5">Email</p>
                                                <p class="profile-value text-sm sm:text-base font-semibold text-[#2d1532]">aretha@gmail.com</p>
                                                <input type="email" class="profile-input hidden w-full mt-1 px-3 py-2 rounded-xl border border-[#d9c7ee] text-sm text-[#2d1532] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] bg-white transition-all" value="aretha@gmail.com" />
                                            </div>
                                        </div>
                                        <button type="button" class="edit-btn shrink-0 w-8 h-8 inline-flex items-center justify-center rounded-full text-[#8b7aa0] hover:text-[#6d2857] hover:bg-[#f5edff] transition-colors" aria-label="Edit Email">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Alamat -->
                                    <div class="profile-field flex items-start justify-between py-4 gap-4 group">
                                        <div class="flex items-start gap-3 min-w-0 flex-1">
                                            <span class="w-8 h-8 shrink-0 inline-flex items-center justify-center rounded-lg bg-[#f5edff] text-[#8b5cf6] mt-0.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                                </svg>
                                            </span>
                                            <div class="min-w-0 flex-1">
                                                <p class="text-xs text-[#8b7aa0] font-semibold mb-0.5">Alamat</p>
                                                <p class="profile-value text-sm sm:text-base font-semibold text-[#2d1532] leading-relaxed">
                                                    Jl. Melati No. 12, RT 03/RW 05<br>
                                                    Kec Sukajadi, Kota Malang<br>
                                                    Jawa Timur 65123
                                                </p>
                                                <textarea class="profile-input hidden w-full mt-1 px-3 py-2 rounded-xl border border-[#d9c7ee] text-sm text-[#2d1532] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] bg-white transition-all resize-none" rows="3">Jl. Melati No. 12, RT 03/RW 05
Kec Sukajadi, Kota Malang
Jawa Timur 65123</textarea>
                                            </div>
                                        </div>
                                        <button type="button" class="edit-btn shrink-0 w-8 h-8 inline-flex items-center justify-center rounded-full text-[#8b7aa0] hover:text-[#6d2857] hover:bg-[#f5edff] transition-colors mt-0.5" aria-label="Edit Alamat">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- TAB: KEAMANAN AKUN -->
                    <div id="tab-keamanan" class="account-tab-panel hidden">
                        <div class="w-full bg-white/90 backdrop-blur-sm rounded-[24px] border border-[#ecdfff] shadow-[0_8px_24px_rgba(109,40,87,0.07)] p-6 sm:p-7">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="w-9 h-9 inline-flex items-center justify-center rounded-xl bg-[#f5edff] text-[#6d2857]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                                    </svg>
                                </span>
                                <h3 class="text-lg font-extrabold text-[#2d1532]">Keamanan Akun</h3>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <label class="text-xs font-bold text-[#504068]">Password Saat Ini</label>
                                    <input type="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-2xl border border-[#d9c7ee] text-sm text-[#2d1532] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] bg-white/90 transition-all"/>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="text-xs font-bold text-[#504068]">Password Baru</label>
                                    <input type="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-2xl border border-[#d9c7ee] text-sm text-[#2d1532] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] bg-white/90 transition-all"/>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="text-xs font-bold text-[#504068]">Konfirmasi Password Baru</label>
                                    <input type="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-2xl border border-[#d9c7ee] text-sm text-[#2d1532] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] bg-white/90 transition-all"/>
                                </div>
                                <button type="button" class="mt-2 self-end inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-[#9f7aea] via-[#8b5cf6] to-[#6d2857] hover:from-[#8b5cf6] hover:via-[#7c3aed] hover:to-[#55234a] text-white font-bold text-sm py-3 px-8 shadow-[0_10px_24px_rgba(109,40,87,0.25)] hover:-translate-y-0.5 transition-all duration-200">
                                    Simpan Password
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: PESANAN SAYA -->
                    <div id="tab-pesanan" class="account-tab-panel hidden">
                        <div class="w-full bg-white/90 backdrop-blur-sm rounded-[24px] border border-[#ecdfff] shadow-[0_8px_24px_rgba(109,40,87,0.07)] p-6 sm:p-7">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="w-9 h-9 inline-flex items-center justify-center rounded-xl bg-[#f5edff] text-[#6d2857]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                                    </svg>
                                </span>
                                <h3 class="text-lg font-extrabold text-[#2d1532]">Pesanan Saya</h3>
                            </div>
                            <div class="flex flex-col items-center justify-center py-12 text-center">
                                <div class="w-20 h-20 rounded-full bg-[#f5edff] inline-flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#c4b5fd]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                                    </svg>
                                </div>
                                <p class="text-base font-bold text-[#504068] mb-1">Belum ada pesanan</p>
                                <p class="text-sm text-[#8b7aa0]">Pesanan kamu akan muncul di sini.</p>
                                <a href="<?php echo e(route('shop')); ?>" class="mt-5 inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-[#9f7aea] via-[#8b5cf6] to-[#6d2857] text-white font-bold text-sm py-3 px-8 shadow-[0_10px_24px_rgba(109,40,87,0.25)] hover:-translate-y-0.5 transition-all duration-200">
                                    Mulai Belanja
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: WISHLIST -->
                    <div id="tab-wishlist" class="account-tab-panel hidden">
                        <div class="w-full bg-white/90 backdrop-blur-sm rounded-[24px] border border-[#ecdfff] shadow-[0_8px_24px_rgba(109,40,87,0.07)] p-6 sm:p-7">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="w-9 h-9 inline-flex items-center justify-center rounded-xl bg-[#f5edff] text-[#6d2857]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                                    </svg>
                                </span>
                                <h3 class="text-lg font-extrabold text-[#2d1532]">Wishlist</h3>
                            </div>
                            <div class="flex flex-col items-center justify-center py-12 text-center">
                                <div class="w-20 h-20 rounded-full bg-[#f5edff] inline-flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#c4b5fd]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                                    </svg>
                                </div>
                                <p class="text-base font-bold text-[#504068] mb-1">Wishlist kosong</p>
                                <p class="text-sm text-[#8b7aa0]">Tambahkan produk favoritmu ke wishlist.</p>
                                <a href="<?php echo e(route('shop')); ?>" class="mt-5 inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-[#9f7aea] via-[#8b5cf6] to-[#6d2857] text-white font-bold text-sm py-3 px-8 shadow-[0_10px_24px_rgba(109,40,87,0.25)] hover:-translate-y-0.5 transition-all duration-200">
                                    Lihat Produk
                                </a>
                            </div>
                        </div>
                    </div>

                </main>

                <!-- =========================================== -->
                <!-- SIDEBAR KANAN: INFO AKUN                   -->
                <!-- =========================================== -->
                <aside class="w-full flex flex-col gap-5 lg:sticky lg:top-6" id="right-sidebar">

                    <!-- Akun Anda Aman -->
                    <div class="w-full rounded-[20px] bg-[#ede0ff] border border-[#d9c7ee] p-5 sm:p-6 shadow-[0_4px_16px_rgba(109,40,87,0.08)]">
                        <h3 class="text-base font-extrabold text-[#2d1532] mb-2">Akun Anda Aman</h3>
                        <p class="text-sm text-[#504068] leading-relaxed">
                            Pastikan data pribadi Anda selalu terupdate untuk pengalaman belanja yang lebih baik
                        </p>
                    </div>

                    <!-- Informasi Tambahan -->
                    <div class="w-full bg-white/90 backdrop-blur-sm rounded-[20px] border border-[#ecdfff] shadow-[0_8px_24px_rgba(109,40,87,0.07)] p-5 sm:p-6">
                        <div class="flex items-center gap-2.5 mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#6d2857] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/>
                            </svg>
                            <h3 class="text-base font-extrabold text-[#2d1532]">Informasi Tambahan</h3>
                        </div>

                        <div class="flex flex-col divide-y divide-[#f0e8ff]">

                            <!-- Tanggal Lahir -->
                            <div class="profile-field flex items-center justify-between py-4 gap-3">
                                <div class="flex items-start gap-3 min-w-0 flex-1">
                                    <span class="w-8 h-8 shrink-0 inline-flex items-center justify-center rounded-lg bg-[#f5edff] text-[#8b5cf6]">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
                                        </svg>
                                    </span>
                                    <div class="min-w-0">
                                        <p class="text-xs text-[#8b7aa0] font-semibold mb-0.5">Tanggal Lahir</p>
                                        <p class="profile-value text-sm font-semibold text-[#2d1532]">1 maret 2010</p>
                                        <input type="date" class="profile-input hidden w-full mt-1 px-3 py-2 rounded-xl border border-[#d9c7ee] text-sm text-[#2d1532] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] bg-white transition-all" value="2010-03-01" />
                                    </div>
                                </div>
                                <button type="button" class="edit-btn shrink-0 w-8 h-8 inline-flex items-center justify-center rounded-full text-[#8b7aa0] hover:text-[#6d2857] hover:bg-[#f5edff] transition-colors" aria-label="Edit Tanggal Lahir">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                    </svg>
                                </button>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="profile-field flex items-center justify-between py-4 gap-3">
                                <div class="flex items-start gap-3 min-w-0 flex-1">
                                    <span class="w-8 h-8 shrink-0 inline-flex items-center justify-center rounded-lg bg-[#f5edff] text-[#8b5cf6]">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <circle cx="12" cy="8" r="4"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 20.25a7.5 7.5 0 0115 0"/>
                                        </svg>
                                    </span>
                                    <div class="min-w-0">
                                        <p class="text-xs text-[#8b7aa0] font-semibold mb-0.5">Jenis Kelamin</p>
                                        <p class="profile-value text-sm font-semibold text-[#2d1532]">Perempuan</p>
                                        <select class="profile-input hidden w-full mt-1 px-3 py-2 rounded-xl border border-[#d9c7ee] text-sm text-[#2d1532] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/40 focus:border-[#8b5cf6] bg-white transition-all">
                                            <option value="perempuan" selected>Perempuan</option>
                                            <option value="laki-laki">Laki-laki</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" class="edit-btn shrink-0 w-8 h-8 inline-flex items-center justify-center rounded-full text-[#8b7aa0] hover:text-[#6d2857] hover:bg-[#f5edff] transition-colors" aria-label="Edit Jenis Kelamin">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                    </svg>
                                </button>
                            </div>

                            <!-- Status Akun -->
                            <div class="flex items-center gap-3 py-4">
                                <span class="w-8 h-8 shrink-0 inline-flex items-center justify-center rounded-lg bg-[#f5edff] text-[#8b5cf6]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                                    </svg>
                                </span>
                                <div>
                                    <p class="text-xs text-[#8b7aa0] font-semibold mb-1">Status Akun</p>
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-[#dcfce7] text-[#15803d] text-xs font-bold px-3 py-1 border border-[#bbf7d0]">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                        </svg>
                                        Aktif
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>

                </aside>

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

            // ── Tab navigation ─────────────────────────────
            const navLinks = document.querySelectorAll('.account-nav-link');
            const tabPanels = document.querySelectorAll('.account-tab-panel');
            const rightSidebar = document.getElementById('right-sidebar');

            navLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const tab = link.getAttribute('data-tab');
                    if (!tab) return;

                    // Update nav styles
                    navLinks.forEach(function (l) {
                        l.classList.remove('bg-[#f5edff]', 'text-[#6d2857]');
                        l.classList.add('text-[#504068]');
                        l.removeAttribute('aria-current');
                    });
                    link.classList.add('bg-[#f5edff]', 'text-[#6d2857]');
                    link.classList.remove('text-[#504068]');
                    link.setAttribute('aria-current', 'page');

                    // Show/hide panels
                    tabPanels.forEach(function (panel) {
                        panel.classList.add('hidden');
                    });
                    const target = document.getElementById('tab-' + tab);
                    if (target) target.classList.remove('hidden');

                    // Hide right sidebar on non-profil tabs for cleaner layout on mobile
                    if (rightSidebar) {
                        rightSidebar.style.display = (tab === 'profil') ? '' : '';
                    }
                });
            });

            // ── Inline field editing ───────────────────────
            document.querySelectorAll('.profile-field').forEach(function (field) {
                const editBtn = field.querySelector('.edit-btn');
                if (!editBtn) return;

                let isEditing = false;

                editBtn.addEventListener('click', function () {
                    const valueEl = field.querySelector('.profile-value');
                    const inputEl = field.querySelector('.profile-input');
                    if (!valueEl || !inputEl) return;

                    isEditing = !isEditing;

                    if (isEditing) {
                        valueEl.classList.add('hidden');
                        inputEl.classList.remove('hidden');
                        inputEl.focus();

                        // Change icon to save
                        editBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>`;
                        editBtn.classList.remove('text-[#8b7aa0]', 'hover:text-[#6d2857]', 'hover:bg-[#f5edff]');
                        editBtn.classList.add('text-[#6d2857]', 'bg-[#f5edff]');
                    } else {
                        // Save value back to display
                        const newVal = inputEl.value !== undefined ? inputEl.value : inputEl.options[inputEl.selectedIndex].text;
                        if (inputEl.tagName === 'SELECT') {
                            valueEl.textContent = inputEl.options[inputEl.selectedIndex].text;
                        } else if (inputEl.tagName === 'TEXTAREA') {
                            valueEl.innerHTML = inputEl.value.replace(/\n/g, '<br>');
                        } else if (inputEl.type === 'date') {
                            const d = new Date(inputEl.value);
                            if (!isNaN(d)) {
                                valueEl.textContent = d.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' });
                            } else {
                                valueEl.textContent = inputEl.value;
                            }
                        } else {
                            valueEl.textContent = inputEl.value;
                        }

                        inputEl.classList.add('hidden');
                        valueEl.classList.remove('hidden');

                        // Restore pencil icon
                        editBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                        </svg>`;
                        editBtn.classList.add('text-[#8b7aa0]', 'hover:text-[#6d2857]', 'hover:bg-[#f5edff]');
                        editBtn.classList.remove('text-[#6d2857]', 'bg-[#f5edff]');
                    }
                });
            });

            // ── Mobile tab strip ──────────────────────────
            document.querySelectorAll('.mobile-tab-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var tab = btn.dataset.tab;

                    // Update button styles
                    document.querySelectorAll('.mobile-tab-btn').forEach(function(b) {
                        b.classList.remove('bg-[#6d2857]', 'text-white', 'border-[#6d2857]');
                        b.classList.add('bg-white', 'text-[#504068]', 'border-[#d9c7ee]');
                    });
                    btn.classList.add('bg-[#6d2857]', 'text-white', 'border-[#6d2857]');
                    btn.classList.remove('bg-white', 'text-[#504068]', 'border-[#d9c7ee]');

                    // Show the matching tab panel
                    document.querySelectorAll('.account-tab-panel').forEach(function(p) {
                        p.classList.add('hidden');
                    });
                    var panel = document.getElementById('tab-' + tab);
                    if (panel) panel.classList.remove('hidden');

                    // Also sync desktop sidebar
                    document.querySelectorAll('.account-nav-link').forEach(function(l) {
                        l.classList.remove('bg-[#f5edff]', 'text-[#6d2857]');
                        l.classList.add('text-[#504068]', 'hover:bg-[#f5edff]', 'hover:text-[#6d2857]');
                    });
                    var desktopLink = document.getElementById('nav-' + tab);
                    if (desktopLink) {
                        desktopLink.classList.add('bg-[#f5edff]', 'text-[#6d2857]');
                        desktopLink.classList.remove('text-[#504068]');
                    }
                });
            });

            // ── Keluar (logout) ────────────────────────────
            const keluarBtn = document.getElementById('nav-keluar');
            if (keluarBtn) {
                keluarBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (confirm('Yakin ingin keluar dari akun?')) {
                        const form = document.createElement('form');
                        form.method = 'POST';
                        form.action = '<?php echo e(route("logout")); ?>';
                        const csrf = document.createElement('input');
                        csrf.type = 'hidden';
                        csrf.name = '_token';
                        csrf.value = '<?php echo e(csrf_token()); ?>';
                        form.appendChild(csrf);
                        document.body.appendChild(form);
                        form.submit();
                    }
                });
            }
        });
    </script>

</body>
</html>
<?php /**PATH C:\laragon\www\giftifybloom\resources\views\account.blade.php ENDPATH**/ ?>