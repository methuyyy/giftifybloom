<div class="w-full bg-[#EEE3FF] text-[#6d2857] py-2 overflow-hidden">
    <div class="flex whitespace-nowrap animate-marquee gap-16 text-xs sm:text-sm font-medium">
        @php
            $tickers = [
                'Where Every Gift Blooms with Joy! 🌸',
                'Send Joy to the Blooms of Every Heart 🌼',
                'Who\'s a Fancy Gift Blooms with Joy! 🌷',
                'Unwrap the Beauty of Every Bloom 🌺',
                'Where Every Gift Blooms with Joy 🌸',
                'It\'s a the Beauty of Place to Bloom 🌻',
            ];
        @endphp
        @foreach ($tickers as $t)
            <span class="px-6">{{ $t }}</span>
        @endforeach
        @foreach ($tickers as $t)
            <span class="px-6">{{ $t }}</span>
        @endforeach
    </div>
</div>

<style>
    @keyframes marquee {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee { animation: marquee 30s linear infinite; }
</style>
