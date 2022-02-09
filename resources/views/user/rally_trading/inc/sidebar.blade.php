<div class="col-span-2 bg-eternity-6-brown h-screen flex flex-col p-4">
    <img src="{{ asset('svg/e-logo.svg') }}" alt="" srcset="" class="w-16 mb-16">
    <div class="text-2xl mb-4">Menu</div>
    <a href="{{ route('rally_trading_index') }}"
        class="flex items-center gap-4 mx-4 mb-4 text-lg hover:text-eternity-6-orange">
        <span class="fa fa-fw fa-th-large"></span>
        Dashboard
    </a>
    <a href="{{ route('rally_trading_rally') }}"
        class="flex items-center gap-4 mx-4 mb-4 text-lg hover:text-eternity-6-orange">
        <span class="fa fa-fw fa-gamepad"></span>
        Rally
    </a>
    <a href="{{ route('rally_trading_trading_market') }}"
        class="flex items-center gap-4 mx-4 mb-4 text-lg hover:text-eternity-6-orange">
        <span class="fa fa-fw fa-shopping-cart"></span>
        Trading
    </a>
    <a onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"
        class="flex items-center gap-4 mx-4 mb-4 text-lg hover:text-eternity-6-orange">
        <span class="fa fa-fw fa-sign-out"></span>
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
