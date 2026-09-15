@php
    $steps = [
        ['number' => 1, 'label' => 'Flowers'],
        ['number' => 2, 'label' => 'Greenery'],
        ['number' => 3, 'label' => 'Card'],
        ['number' => 4, 'label' => 'Message'],
        ['number' => 5, 'label' => 'Theme'],
    ];
    $currentStep = $current ?? 1;
    $totalSteps = count($steps);
    $filledPercent = round(($currentStep / $totalSteps) * 100, 2);
    $darkPercent = round(100 - $filledPercent, 2);
    $filledWidthClass = 'w-[' . $filledPercent . '%]';
    $darkWidthClass   = 'w-[' . $darkPercent . '%]';
@endphp

<section class="relative w-full py-8 sm:py-10 lg:py-12 overflow-hidden bg-gradient-to-br from-[#f5eefc] via-[#f8f4ef] to-[#f5eefc]">
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-8 lg:px-16">
        <div class="relative w-full">

            <div class="absolute left-0 right-0 h-1.5 sm:h-[6px] lg:h-2 flex items-center
                        top-[44px] sm:top-[52px] lg:top-[60px]">
                <div class="h-full rounded-l-full {{ $filledWidthClass }} bg-[#f5f0c0]"></div>
                <div class="h-full rounded-r-full {{ $darkWidthClass }} bg-[#6d2857]"></div>
            </div>

            <div class="grid grid-cols-5 gap-1 sm:gap-2 lg:gap-4 relative z-10">
                @foreach ($steps as $step)
                    @php
                        $isDone = $step['number'] <= $currentStep;
                        $circleClass   = $isDone ? 'bg-[#6d2857] shadow-[0_6px_16px_rgba(109,40,87,0.35)]' : 'bg-[#f5f0c0] shadow-[0_4px_12px_rgba(109,40,87,0.15)]';
                        $numberClass   = $isDone ? 'text-[#f5f0c0]' : 'text-[#8b2a2a]';
                    @endphp
                    <div class="flex flex-col items-center justify-start">
                        <div
                            class="w-14 h-14 sm:w-16 sm:h-16 lg:w-[72px] lg:h-[72px] rounded-full flex items-center justify-center {{ $circleClass }}"
                        >
                            <span
                                class="text-2xl sm:text-3xl lg:text-[34px] font-bold {{ $numberClass }}"
                            >
                                {{ $step['number'] }}
                            </span>
                        </div>
                        <span
                            class="mt-3 sm:mt-[14px] lg:mt-4 text-[13px] sm:text-sm lg:text-[15px] font-medium text-center tracking-wide text-[#6d2857]"
                        >
                            {{ $step['label'] }}
                        </span>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
