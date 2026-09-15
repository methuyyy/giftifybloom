<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keranjang — Giftify Bloom</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-gradient-to-br from-[#f7efff] via-[#fbf6ff] to-[#fff5f0] antialiased min-h-screen w-full overflow-x-hidden relative" data-ongkir="15000">
@php
    $cart   = array_values(session()->get('cart', []));
    $ongkir = 15000;
@endphp

    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-24 left-2 w-16 sm:w-24 lg:w-36 opacity-30 pointer-events-none" viewBox="0 0 24 24" fill="none" stroke="#a78bfa" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M12 2c1.5 3.5 4 4 4 7a4 4 0 0 1-8 0c0-3 2.5-3.5 4-7z" />
        <path d="M12 9v13" />
        <path d="M5 12c1-1.5 2.5-1.5 3.5 0M19 12c-1-1.5-2.5-1.5-3.5 0" />
        <path d="M7.5 14c1-1.5 2-1 2.5 0M16.5 14c-1-1.5-2-1-2.5 0" />
    </svg>
    <x-navbar />

    <section class="w-full relative py-8 sm:py-10 lg:py-14 z-10">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">

            <div class="w-full grid grid-cols-1 lg:grid-cols-[1.4fr_0.9fr] gap-6 sm:gap-8 lg:gap-10 items-start">

                <div class="w-full flex flex-col gap-6">

                    <header class="w-full bg-[#eaddf9]/90 rounded-3xl px-5 sm:px-8 py-5 sm:py-6 flex items-center gap-4">
                        <a href="{{ route('shop') }}" aria-label="Back to shop"
                           class="w-9 h-9 sm:w-10 sm:h-10 inline-flex items-center justify-center rounded-full text-[#6d2857]
                                  hover:bg-white/60 transition-colors shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-7 sm:w-7" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </a>
                        <div class="flex-1 flex items-center justify-center gap-3 sm:gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 text-[#6d2857] shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 21s-7-4.35-7-10a4 4 0 0 1 7-2.65A4 4 0 0 1 19 11c0 5.65-7 10-7 10z" />
                            </svg>
                            <h1 class="text-2xl sm:text-3xl lg:text-[42px] font-semibold italic text-[#6d2857] tracking-wide leading-none"
                                style="font-family: 'Brush Script MT', 'Segoe Script', cursive;">
                                Have a Special Day !
                            </h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 text-[#6d2857] shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 21s-7-4.35-7-10a4 4 0 0 1 7-2.65A4 4 0 0 1 19 11c0 5.65-7 10-7 10z" />
                            </svg>
                        </div>
                    </header>

                    <div id="cart-items" class="w-full flex flex-col gap-5 sm:gap-6">

                        @if (empty($cart))
                            <div class="w-full flex flex-col items-center justify-center py-16 text-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-[#d9c7ee]" fill="none" stroke="currentColor" stroke-width="1.3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                                <p class="text-lg font-bold text-[#6d2857]">Keranjangmu masih kosong 🌸</p>
                                <p class="text-sm text-gray-500">Yuk pilih buket favoritmu!</p>
                                <a href="{{ route('shop') }}"
                                   class="mt-2 inline-flex items-center gap-2 rounded-full bg-[#8b5cf6] hover:bg-[#7c3aed]
                                          text-white font-bold text-sm px-6 py-3 transition-all">
                                    Shop Now
                                </a>
                            </div>
                        @else
                        @foreach ($cart as $item)
                            <article
                                class="cart-item group w-full bg-white/80 backdrop-blur-sm border border-[#ecdfff] rounded-3xl p-4 sm:p-5 lg:p-6
                                       shadow-[0_14px_36px_rgba(109,40,87,0.08)] transition-all duration-200"
                                data-id="{{ $item['id'] }}"
                                data-price="{{ $item['price'] }}"
                            >
                                <div class="w-full flex items-start gap-4 sm:gap-5 lg:gap-6">

                                    <div class="w-24 h-24 sm:w-28 sm:h-28 lg:w-32 lg:h-32 shrink-0 rounded-2xl bg-gradient-to-b from-[#8c52a5] to-[#6e3787] p-2.5 sm:p-3
                                                shadow-[0_10px_22px_rgba(109,40,87,0.22)] overflow-hidden">
                                        <img
                                            src="{{ asset('images/landing/' . $item['img']) }}"
                                            alt="{{ $item['name'] }}"
                                            class="w-full h-full object-contain drop-shadow-md"
                                        />
                                    </div>

                                    <div class="flex-1 min-w-0 flex flex-col gap-3 sm:gap-4">
                                        <div class="w-full flex items-start justify-between gap-3">
                                            <div class="flex flex-col gap-1 min-w-0">
                                                <h3 class="text-xl sm:text-2xl font-extrabold text-[#6d2857] tracking-tight leading-tight">
                                                    {{ $item['name'] }}
                                                </h3>
                                                <p class="text-sm sm:text-base text-[#8b5cf6] font-medium">
                                                    {{ $item['tag'] }}
                                                </p>
                                            </div>
                                            <button
                                                type="button"
                                                class="cart-remove mt-1 w-8 h-8 rounded-full inline-flex items-center justify-center
                                                       text-gray-400 hover:text-[#b91c1c] hover:bg-red-50 transition-colors shrink-0"
                                                aria-label="Remove item"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="w-full flex flex-wrap items-center justify-between gap-4 sm:gap-5">
                                            <p class="text-xl sm:text-2xl lg:text-[28px] font-extrabold text-[#6d2857] tracking-wide leading-none">
                                                Rp {{ number_format($item['price'], 0, ',', '.') }}
                                            </p>

                                            <div class="qty-control flex items-center border-2 border-[#d9c7ee] rounded-full bg-white overflow-hidden shadow-sm">
                                                <button
                                                    type="button"
                                                    class="qty-minus w-11 h-10 sm:w-12 sm:h-11 inline-flex items-center justify-center text-[#6d2857]
                                                           hover:bg-[#f5edff] transition-colors text-xl sm:text-2xl font-bold disabled:opacity-40 disabled:cursor-not-allowed"
                                                    aria-label="Decrease quantity"
                                                    {{ $item['qty'] <= 1 ? 'disabled' : '' }}
                                                >&minus;</button>
                                                <span
                                                    class="qty-value w-10 sm:w-12 h-10 sm:h-11 inline-flex items-center justify-center text-base sm:text-lg font-bold text-[#3d1f48] tabular-nums select-none"
                                                >{{ $item['qty'] }}</span>
                                                <button
                                                    type="button"
                                                    class="qty-plus w-11 h-10 sm:w-12 sm:h-11 inline-flex items-center justify-center text-[#6d2857]
                                                           hover:bg-[#f5edff] transition-colors text-xl sm:text-2xl font-bold"
                                                    aria-label="Increase quantity"
                                                >+</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-5 pt-4 border-t border-[#ecdfff] flex items-end justify-between">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-xs sm:text-sm font-semibold text-gray-700 tracking-wide">
                                            Estimate Total
                                        </span>
                                        <p class="item-estimate text-xl sm:text-2xl font-extrabold text-[#6d2857] tracking-wide leading-none">
                                            Rp {{ number_format($item['price'] * $item['qty'], 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        @endif

                    </div>

                    <footer class="w-full bg-white/60 backdrop-blur-sm rounded-3xl border border-[#ecdfff] px-4 sm:px-8 py-5 sm:py-6 mt-2">
                        <div class="w-full flex items-center justify-center gap-3 sm:gap-5 text-[#6d2857]">
                            <span class="h-px bg-[#d9c7ee] flex-1 max-w-[220px]"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 sm:h-4 sm:w-4 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 21s-7-4.35-7-10a4 4 0 0 1 7-2.65A4 4 0 0 1 19 11c0 5.65-7 10-7 10z" />
                            </svg>
                            <p class="text-base sm:text-xl lg:text-[26px] font-semibold italic leading-snug text-center"
                               style="font-family: 'Brush Script MT', 'Segoe Script', cursive;">
                                Terima kasih telah memilih kami
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 sm:h-4 sm:w-4 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 21s-7-4.35-7-10a4 4 0 0 1 7-2.65A4 4 0 0 1 19 11c0 5.65-7 10-7 10z" />
                            </svg>
                            <span class="h-px bg-[#d9c7ee] flex-1 max-w-[220px]"></span>
                        </div>
                    </footer>

                </div>

                <aside class="w-full flex flex-col gap-6 lg:sticky lg:top-6">

                    <div class="w-full bg-[#f3e9ff]/80 backdrop-blur-sm rounded-3xl border border-[#eaddf9] shadow-[0_14px_34px_rgba(109,40,87,0.08)] p-5 sm:p-6 lg:p-7">

                        <h2 class="text-xl sm:text-2xl lg:text-[26px] font-extrabold text-[#6d2857] mb-5 tracking-tight">
                            Ringkasan Pesanan
                        </h2>

                        @php
                            $subtotal    = array_sum(array_map(fn($i) => $i['price'] * $i['qty'], $cart));
                            $totalQty    = array_sum(array_column($cart, 'qty'));
                            $grandTotal  = $subtotal + $ongkir;
                        @endphp

                        <div class="w-full space-y-4 border-b border-[#d9c7ee] pb-5">
                            <div class="flex items-center justify-between gap-4">
                                <span class="text-sm sm:text-base text-gray-700 font-medium">
                                    Subtotal (<span id="count-items">{{ $totalQty }}</span> items)
                                </span>
                                <span id="subtotal" class="text-sm sm:text-base font-bold text-[#6d2857] tabular-nums">
                                    Rp {{ number_format($subtotal, 0, ',', '.') }}
                                </span>
                            </div>
                            <div class="flex items-center justify-between gap-4">
                                <span class="text-sm sm:text-base text-gray-700 font-medium">
                                    Ongkos Kirim
                                </span>
                                <span id="ongkir" class="text-sm sm:text-base font-bold text-[#6d2857] tabular-nums">
                                    Rp {{ number_format($ongkir, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>

                        <div class="flex items-end justify-between gap-4 mt-5 mb-7">
                            <span class="text-base sm:text-lg font-bold text-[#6d2857] tracking-wide">
                                Total Estimasi
                            </span>
                            <span id="grand-total" class="text-2xl sm:text-3xl lg:text-[36px] font-extrabold text-[#6d2857] tracking-wide leading-none tabular-nums">
                                Rp {{ number_format($grandTotal, 0, ',', '.') }}
                            </span>
                        </div>

                        <div class="w-full flex flex-col gap-3 mb-6">
                            <div class="flex items-center gap-2.5 mb-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6 text-[#6d2857]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                <h3 class="text-base sm:text-lg font-bold text-[#6d2857]">
                                    Catatan Pesanan
                                </h3>
                            </div>
                            <textarea
                                id="catatan"
                                rows="4"
                                maxlength="500"
                                placeholder="Tulis catatan untuk pesanan ini..."
                                class="w-full px-4 sm:px-5 py-3.5 sm:py-4 rounded-2xl bg-white/90 border border-[#eaddf9] text-[#2d1532]
                                       text-xs sm:text-sm placeholder:text-[#b3a7c2] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6]/50
                                       focus:border-[#8b5cf6] transition-all resize-y shadow-sm leading-relaxed"
                            ></textarea>
                        </div>

                        <div class="w-full flex flex-col gap-3 mb-7">
                            <div class="flex items-center gap-2.5 mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6 text-[#6d2857]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5L8.25 15.75 15.75 8.25M3 18.75h18" />
                                </svg>
                                <h3 class="text-base sm:text-lg font-bold text-[#6d2857]">
                                    Metode Pembayaran
                                </h3>
                            </div>

                            <label class="w-full flex items-center gap-3 rounded-2xl border-2 border-[#d9c7ee] bg-[#efe4ff] px-4 sm:px-5 py-3.5 sm:py-4
                                          cursor-pointer hover:bg-[#e4d2fb] transition-colors shadow-sm">
                                <input type="radio" name="payment" value="voucher" checked class="payment-radio sr-only peer">
                                <span class="relative inline-flex w-5 h-5 sm:w-[22px] sm:h-[22px] rounded-full border-2 border-[#8b5cf6] items-center justify-center shrink-0 peer-checked:border-[#6d2857]">
                                    <span class="inline-block w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-[#8b5cf6] peer-checked:bg-[#6d2857] transition-colors"></span>
                                </span>
                                <span class="text-sm sm:text-base font-semibold text-[#6d2857]">
                                    Voucher
                                </span>
                            </label>

                            <label class="w-full flex items-center gap-3 rounded-2xl border-2 border-[#e8dff5] bg-white/60 px-4 sm:px-5 py-3.5 sm:py-4
                                          cursor-pointer hover:bg-[#f5edff] transition-colors shadow-sm">
                                <input type="radio" name="payment" value="transfer" class="payment-radio sr-only peer">
                                <span class="relative inline-flex w-5 h-5 sm:w-[22px] sm:h-[22px] rounded-full border-2 border-[#c6b6e1] items-center justify-center shrink-0 peer-checked:border-[#6d2857]">
                                    <span class="inline-block w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-transparent peer-checked:bg-[#6d2857] transition-colors"></span>
                                </span>
                                <span class="text-sm sm:text-base font-semibold text-[#6b5a76]">
                                    Transfer Bank
                                </span>
                            </label>

                            <label class="w-full flex items-center gap-3 rounded-2xl border-2 border-[#e8dff5] bg-white/60 px-4 sm:px-5 py-3.5 sm:py-4
                                          cursor-pointer hover:bg-[#f5edff] transition-colors shadow-sm">
                                <input type="radio" name="payment" value="ewallet" class="payment-radio sr-only peer">
                                <span class="relative inline-flex w-5 h-5 sm:w-[22px] sm:h-[22px] rounded-full border-2 border-[#c6b6e1] items-center justify-center shrink-0 peer-checked:border-[#6d2857]">
                                    <span class="inline-block w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-transparent peer-checked:bg-[#6d2857] transition-colors"></span>
                                </span>
                                <span class="text-sm sm:text-base font-semibold text-[#6b5a76]">
                                    E-Wallet
                                </span>
                            </label>
                        </div>

                        <button
                            id="btn-checkout"
                            type="button"
                            data-checkout-url="{{ route('checkout') }}"
                            class="w-full inline-flex items-center justify-center gap-2 rounded-full
                                   bg-gradient-to-r from-[#9f7aea] via-[#8b5cf6] to-[#7c50b3]
                                   hover:from-[#8b5cf6] hover:via-[#7c3aed] hover:to-[#6d2857]
                                   text-white font-bold text-base sm:text-lg tracking-wide
                                   py-4 sm:py-[18px] px-6 sm:px-8 mt-1
                                   shadow-[0_18px_38px_rgba(109,40,87,0.32)]
                                   hover:shadow-[0_22px_44px_rgba(109,40,87,0.42)]
                                   hover:-translate-y-0.5 active:translate-y-0
                                   transition-all duration-200"
                        >
                            <span>Check Out</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>

                        <p id="checkout-status" class="mt-3 text-xs sm:text-sm font-medium min-h-[18px]" aria-live="polite"></p>

                    </div>

                </aside>

            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ongkir = Number(document.body.dataset.ongkir) || 0;
            const cartWrap = document.getElementById('cart-items');
            const countItemsEl = document.getElementById('count-items');
            const subtotalEl = document.getElementById('subtotal');
            const grandTotalEl = document.getElementById('grand-total');
            const btnCheckout = document.getElementById('btn-checkout');
            const checkoutStatus = document.getElementById('checkout-status');
            const catatanEl = document.getElementById('catatan');

            function formatRupiah(value) {
                return 'Rp ' + Number(value).toLocaleString('id-ID');
            }

            function recomputeTotals() {
                const items = cartWrap.querySelectorAll('.cart-item');
                let subtotal = 0;
                let countQty = 0;

                items.forEach(function (article) {
                    const price = Number(article.getAttribute('data-price')) || 0;
                    const qtyEl = article.querySelector('.qty-value');
                    const estimateEl = article.querySelector('.item-estimate');
                    const qty = Number(qtyEl.textContent.trim()) || 1;

                    const rowTotal = price * qty;
                    estimateEl.textContent = formatRupiah(rowTotal);
                    subtotal += rowTotal;
                    countQty += qty;
                });

                countItemsEl.textContent = String(countQty);
                subtotalEl.textContent = formatRupiah(subtotal);
                grandTotalEl.textContent = formatRupiah(subtotal + ongkir);
            }

            cartWrap.addEventListener('click', function (e) {
                const minusBtn = e.target.closest('.qty-minus');
                const plusBtn = e.target.closest('.qty-plus');
                const removeBtn = e.target.closest('.cart-remove');

                const article = e.target.closest('.cart-item');
                if (!article) return;

                if (minusBtn || plusBtn) {
                    const qtyEl = article.querySelector('.qty-value');
                    const minusEl = article.querySelector('.qty-minus');
                    let qty = Number(qtyEl.textContent.trim()) || 1;
                    if (minusBtn) {
                        qty = Math.max(1, qty - 1);
                    } else {
                        qty += 1;
                    }
                    qtyEl.textContent = String(qty);
                    minusEl.disabled = qty <= 1;
                    recomputeTotals();
                    return;
                }

                if (removeBtn) {
                    article.style.transition = 'opacity .2s ease, transform .2s ease';
                    article.style.opacity = '0';
                    article.style.transform = 'translateX(14px)';
                    setTimeout(function () {
                        article.remove();
                        recomputeTotals();
                    }, 200);
                }
            });

            recomputeTotals();

            const paymentRadios = document.querySelectorAll('.payment-radio');
            paymentRadios.forEach(function (radio) {
                radio.addEventListener('change', function () {
                    paymentRadios.forEach(function (r) {
                        const label = r.closest('label');
                        const dot = label.querySelector('span.relative span');
                        if (r.checked) {
                            label.classList.remove('bg-white/60', 'border-[#e8dff5]');
                            label.classList.add('bg-[#efe4ff]', 'border-[#d9c7ee]');
                            label.querySelector('span:last-child').classList.remove('text-[#6b5a76]');
                            label.querySelector('span:last-child').classList.add('text-[#6d2857]');
                            dot.classList.add('bg-[#6d2857]');
                        } else {
                            label.classList.add('bg-white/60', 'border-[#e8dff5]');
                            label.classList.remove('bg-[#efe4ff]', 'border-[#d9c7ee]');
                            label.querySelector('span:last-child').classList.add('text-[#6b5a76]');
                            label.querySelector('span:last-child').classList.remove('text-[#6d2857]');
                            dot.classList.remove('bg-[#6d2857]');
                        }
                    });
                });
            });

            btnCheckout.addEventListener('click', function () {
                const itemsLeft = cartWrap.querySelectorAll('.cart-item').length;
                if (itemsLeft === 0) {
                    checkoutStatus.textContent = 'Keranjang kosong. Pilih bunga dulu yaa 🌸';
                    checkoutStatus.className = 'mt-3 text-xs sm:text-sm font-medium min-h-[18px] text-[#b91c1c]';
                    return;
                }
                window.location.href = checkoutBtn.getAttribute('data-checkout-url');
            });
        });
    </script>

</body>
</html>
