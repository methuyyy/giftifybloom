<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pick Your Flowers — Giftify Bloom</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-gradient-to-b from-[#f5eefc] via-[#f8f4ef] to-[#f5eefc] antialiased min-h-screen w-full overflow-x-hidden">

    <x-navbar />

    <x-step-indicator :current="1" />

    <section class="relative w-full py-6 sm:py-8 lg:py-10">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">

            <div class="w-full flex flex-col items-center text-center mb-10 sm:mb-12 lg:mb-16">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#6d2857] mb-3"
                    style="font-family: 'Brush Script MT', 'Segoe Script', cursive; font-style: italic;">
                    Pick Your Flowers
                </h2>
                <p class="text-sm sm:text-base lg:text-lg text-[#6d2857] font-medium">
                    Select the flowers for your bouquet (pick at least 3)
                </p>
            </div>

            <div id="flower-grid"
                 class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-10 mb-12 sm:mb-14 lg:mb-16 max-w-6xl mx-auto">
                @foreach ([
                    ['key' => 'rose',     'label' => 'Rose',     'img' => 'mawar.png'],
                    ['key' => 'lily',     'label' => 'Lily',     'img' => 'lily.png'],
                    ['key' => 'tulip',    'label' => 'Tulip',    'img' => 'tulip.png'],
                    ['key' => 'matahari', 'label' => 'Matahari', 'img' => 'matahari.png'],
                    ['key' => 'anyelir',  'label' => 'Anyelir',  'img' => 'anyelir.png'],
                    ['key' => 'hydrangea','label' => 'Hydrangea','img' => 'hydrangea.png'],
                    ['key' => 'orchid',   'label' => 'Orchid',   'img' => 'orchid.png'],
                    ['key' => 'daisy',    'label' => 'Daisy',    'img' => 'daisy.png'],
                ] as $f)
                    <div
                        class="flower-card group relative w-full aspect-[4/3] sm:aspect-[5/4] rounded-2xl border-2 border-[#f5f0c0] bg-white cursor-pointer
                               flex flex-col items-center justify-center p-4 sm:p-5
                               hover:shadow-[0_8px_24px_rgba(109,40,87,0.18)] transition-all duration-300"
                        data-flower="{{ $f['key'] }}"
                        role="button"
                        tabindex="0"
                        aria-label="Pilih bunga {{ $f['label'] }}"
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
                                src="{{ asset('images/pickflower/' . $f['img']) }}"
                                alt="{{ $f['label'] }}"
                                class="w-full h-full object-contain drop-shadow-md group-hover:scale-110 transition-transform duration-300"
                            />
                        </div>

                        <h3 class="text-base sm:text-lg font-bold text-[#6d2857]">
                            {{ $f['label'] }}
                        </h3>
                    </div>
                @endforeach
            </div>

            <div class="w-full flex justify-center">
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

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.flower-card');
            const btnNext = document.getElementById('btn-next');
            const selected = new Set();
            const nextUrl = "{{ route('pick.grocery') }}";

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
                const key = card.getAttribute('data-flower');
                if (selected.has(key)) {
                    selected.delete(key);
                    applySelection(card, false);
                } else {
                    selected.add(key);
                    applySelection(card, true);
                }
                console.log('Selected flowers:', Array.from(selected));
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
                if (selected.size < 3) {
                    alert('Please pick at least 3 flowers!');
                    return;
                }
                window.location.href = nextUrl;
            });
        });
    </script>

</body>
</html>
