<div class="h-vh-10 grid grid-cols-10 gap-x-2 items-center justify-center">
    <a href="{{ route('rally_trading_trading_market') }}"
        class="col-span-2 bg-market-left bg-contain bg-no-repeat w-full h-full transition hover:-translate-y-2 cursor-pointer flex justify-center py-4 2xl:py-6">
        <div class="text-xl 2xl:text-2xl">Market</div>
    </a>
    <a href="{{ route('rally_trading_trading_exchange') }}"
        class="col-span-2 bg-market-middle bg-contain bg-no-repeat w-full h-full transition hover:-translate-y-2 cursor-pointer flex justify-center py-4 2xl:py-6">
        <div class="text-xl 2xl:text-2xl">Exchange</div>
    </a>
    <a href="{{ route('rally_trading_trading_lucky') }}"
        class="col-span-2 bg-market-middle bg-contain bg-no-repeat w-full h-full transition hover:-translate-y-2 cursor-pointer flex justify-center py-4 2xl:py-6">
        <div class="text-xl 2xl:text-2xl">Lucky Draw</div>
    </a>
    @if (Auth::user()->period->name == 4)
        <a href="#" onclick="openModal('auction');"
            class="col-span-2 bg-market-middle bg-contain bg-no-repeat w-full h-full transition hover:-translate-y-2 cursor-pointer flex justify-center py-4 2xl:py-6 animate-bounce text-eternity-6-red">
            <div class="text-xl 2xl:text-2xl">!!! Auction !!!</div>
        </a>
    @else
        <a @if (Auth::user()->auction == 1 && Auth::user()->period->name == 6) href="{{ route('rally_trading_trading_auction') }}" @else onclick="openModal('auction-disabled');" @endif
            class="col-span-2 bg-market-middle bg-contain bg-no-repeat w-full h-full transition hover:-translate-y-2 cursor-pointer flex justify-center py-4 2xl:py-6">
            <div class="text-xl 2xl:text-2xl">Auction</div>
        </a>
    @endif
    <a href="{{ route('rally_trading_trading_resource') }}"
        class="col-span-2 bg-market-right bg-contain bg-no-repeat w-full h-full transition hover:-translate-y-2 cursor-pointer flex justify-center py-4 2xl:py-6">
        <div class="text-xl 2xl:text-2xl">Resource Market</div>
    </a>
</div>
