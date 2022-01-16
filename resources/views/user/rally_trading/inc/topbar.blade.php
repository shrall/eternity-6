<div class="h-vh-20 grid grid-cols-10 gap-x-4">
    <div
        class="col-span-2 bg-lb-rt-dashboard-frame bg-contain bg-no-repeat bg-center w-full h-full flex flex-col items-center px-4 py-8">
        <div class="text-lg self-start mb-4">Period</div>
        <div class="text-2xl">{{Auth::user()->period->name}}</div>
    </div>
    <div class="col-span-6 bg-lt-rb-long-frame bg-contain bg-no-repeat bg-center w-full h-full flex flex-col px-8 py-8">
        <div class="flex items-center justify-between w-full text-lg mb-4">
            <div class="">News</div>
            <div onclick="openModal('news');" class="cursor-pointer hover:text-eternity-6-orange">See More</div>
        </div>
        <marquee class="text-2xl">{{Auth::user()->period->news}}</marquee>
    </div>
    <div
        class="col-span-2 bg-lb-rt-dashboard-frame bg-contain bg-no-repeat bg-center w-full h-full flex flex-col items-center px-4 py-8">
        <div class="text-lg self-start mb-4">Eternites</div>
        <div class="text-2xl">{{Auth::user()->eternite1}}</div>
    </div>
</div>
