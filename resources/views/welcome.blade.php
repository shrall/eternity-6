@extends('layouts.app')

@section('content')
    <div id="loading-page" class="flex flex-col items-center justify-center h-screen">
        <img src="{{ asset('svg/loading-ship.svg') }}" class="animate-pulse mb-8">
        <div class="w-96 border border-eternity-6-orange h-6 relative">
            <div id="loading-bar" class="bg-eternity-6-orange h-6" style="width: 0%"></div>
            <span id="loading-counter"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">0%</span>
        </div>
    </div>
    <div id="welcome-page" class="opacity-0 hidden h-screen relative">
        <img src="{{ asset('svg/e-flower.svg') }}" alt="" srcset="" class="absolute animate-spin-slow"
            style="bottom: 50px; left:-50px;">
        <img src="{{ asset('svg/e-flower.svg') }}" alt="" srcset="" class="absolute animate-spin-slow w-36"
            style="top: 50px; left:180px;">
        <img src="{{ asset('svg/e-flower.svg') }}" alt="" srcset="" class="absolute animate-spin-slow w-48"
            style="top: 190px; right:100px;">
        <div id="welcome-navbar" class="flex items-center justify-between mx-12">
            <img src="{{ asset('svg/e-logo.svg') }}" class="w-20">
            @guest
                <span onclick="openModal('login');" class="text-2xl cursor-pointer">Login</span>
            @endguest
            @auth
                <span onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="text-2xl cursor-pointer">Logout</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </div>
        <div class="h-vh-80 flex flex-col items-center justify-center gap-4 relative">
            <div class="text-5xl tracking-widest">ETERNITY 6.0</div>
            <div class="text-2xl tracking-widest font-montserrat font-bold mb-20">STABILITY IN DIVERSITY</div>
            <div class="flex items-center justify-center gap-20">
                <a href="{{ route('rally_trading_index') }}"
                    class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                    <img src="{{ asset('svg/first-island.svg') }}" class="w-56 group-hover:animate-pulse">
                    <div class="text-xl font-montserrat font-medium">Rally & Trading</div>
                </a>
                <a href="#"
                    class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                    <img src="{{ asset('svg/second-island.svg') }}" class="w-56 group-hover:animate-pulse">
                    <div class="text-xl font-montserrat font-medium">Escape Room</div>
                </a>
                <a href="#"
                    class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                    <img src="{{ asset('svg/third-island.svg') }}" class="w-56 group-hover:animate-pulse">
                    <div class="text-xl font-montserrat font-medium">Final</div>
                </a>
            </div>
        </div>
        <div class="absolute right-8 bottom-0">
            <div class="text-xl">Supported by</div>
            <img src="{{ asset('img/logo-anteraja.png') }}" class="w-64">
        </div>
    </div>
@endsection

@section('modals')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="login-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div class="w-vw-60 h-vh-60 bg-lt-rb-frame p-12 absolute bg-contain bg-no-repeat flex flex-col gap-20">
            <div class="text-3xl ml-12 mb-8">Login</div>
            <div class="text-2xl mx-24">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex items-center justify-between gap-8 mb-4">
                        <label for="email">E-Mail</label>
                        <input id="email" class="input-text" type="email" name="email" value="{{ old('email') }}"
                            required autocomplete="email" autofocus>
                    </div>
                    <div class="flex items-center justify-between gap-8 mb-12">
                        <label for="password">Password</label>
                        <input id="password" class="input-text" type="password" name="password" required
                            autocomplete="current-password">
                    </div>
                    <div class="flex items-center">
                        <button type="submit" class="hover-button ml-auto">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var i = 0;

        function move() {
            if (i == 0) {
                i = 1;
                var elem = document.getElementById("loading-bar");
                var width = 1;
                var id = setInterval(frame, 1);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                        $('#loading-page').animate({
                            opacity: "0"
                        }, 300);
                        setTimeout(function() {
                            $('#loading-page').css("display", "none");
                            $("#welcome-page").css("display", "block");
                            $("#welcome-page").animate({
                                opacity: "100"
                            }, 5000);
                        }, 600);
                    } else {
                        width++;
                        elem.style.width = width + "%";
                        $('#loading-counter').html(width + "%")
                    }
                }
            }
        }
        move();
    </script>
@endsection
