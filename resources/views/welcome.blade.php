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
                <div class="flex items-center gap-x-2">
                    @if (Auth::user()->escape == 1)
                        <span
                            @if (Auth::user()->rank <= 5 && Auth::user()->rank > 0) onclick="openModal('last');" @else onclick="openModal('info');" @endif
                            class="text-2xl cursor-pointer hover:text-gray-300">Info</span>
                    @endif
                    <span>|</span>
                    <span
                        onclick="event.preventDefault();
                                                                                                                                                                        document.getElementById('logout-form').submit();"
                        class="text-2xl cursor-pointer hover:text-gray-300">Logout</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endauth
        </div>
        <div class="h-vh-80 flex flex-col items-center justify-center gap-4 relative">
            <div class="text-5xl tracking-widest">ETERNITY 6.0</div>
            <div class="text-2xl tracking-widest font-montserrat font-bold mb-20">STABILITY IN DIVERSITY</div>
            <div class="flex items-center justify-center gap-20">
                @guest
                    <a onclick="openModal('login');"
                        class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                        <img src="{{ asset('svg/first-island.svg') }}" class="w-56 group-hover:animate-pulse">
                        <div class="text-xl font-montserrat font-medium">Rally & Trading</div>
                    </a>
                    <a onclick="openModal('login');"
                        class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                        <img src="{{ asset('svg/second-island.svg') }}" class="w-56 group-hover:animate-pulse">
                        <div class="text-xl font-montserrat font-medium">Escape Room</div>
                    </a>
                    <a onclick="openModal('login');"
                        class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                        <img src="{{ asset('svg/fourth-island.svg') }}" class="w-56 group-hover:animate-pulse">
                        <div class="text-xl font-montserrat font-medium">Business Simulation</div>
                    </a>
                @endguest
                @auth
                    @if (Auth::user()->period->close_final == 0)
                        @if (Auth::user()->period->close_start == 0)
                            <a @if (Auth::user()->role == 0) onclick="openModal('denied');" @else href="{{ route('escape_index') }}" @endif
                                class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                                <img src="{{ asset('svg/first-island.svg') }}" class="w-56 group-hover:animate-pulse">
                                <div class="text-xl font-montserrat font-medium">Rally & Trading</div>
                            </a>
                            <a onclick="openModal('denied');"
                                class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                                <img src="{{ asset('svg/second-island.svg') }}" class="w-56 group-hover:animate-pulse">
                                <div class="text-xl font-montserrat font-medium">Escape Room</div>
                            </a>
                            <a onclick="openModal('denied');"
                                class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                                <img src="{{ asset('svg/fourth-island.svg') }}" class="w-56 group-hover:animate-pulse">
                                <div class="text-xl font-montserrat font-medium">Business Simulation</div>
                            </a>
                        @else
                            <a href="{{ route('rally_trading_index') }}"
                                class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                                <img src="{{ asset('svg/first-island.svg') }}" class="w-56 group-hover:animate-pulse">
                                <div class="text-xl font-montserrat font-medium">Rally & Trading</div>
                            </a>
                            <a @if (Auth::user()->escape == 0) onclick="openModal('denied');" @else href="{{ route('escape_index') }}" @endif
                                class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                                <img src="{{ asset('svg/second-island.svg') }}" class="w-56 group-hover:animate-pulse">
                                <div class="text-xl font-montserrat font-medium">Escape Room</div>
                            </a>
                            <a href="#"
                                class="flex flex-col items-center justify-center gap-4 cursor-pointer transition ease-in-out hover:-translate-y-3 group">
                                <img src="{{ asset('svg/fourth-island.svg') }}" class="w-56 group-hover:animate-pulse">
                                <div class="text-xl font-montserrat font-medium">Business Simulation</div>
                            </a>
                        @endif
                    @else
                        <div class="text-4xl text-center">The race is over !<br>
                            Please return to the main zoom for the winners announcement<br>
                            Good Luck !
                        </div>
                    @endif
                @endauth
            </div>
        </div>
        <div class="absolute right-8 bottom-0">
            <div class="text-xl">Supported by</div>
            <img src="{{ asset('img/logo-anteraja.png') }}" class="w-64">
        </div>
    </div>
@endsection

@section('modals')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="denied-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="flex items-center justify-center">
                <div class="text-4xl">Access Denied</div>
            </div>
        </div>
    </div>
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="info-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="grid grid-cols-2 gap-2 justify-center">
                <div class="text-3xl text-center">Line Group (Top 50)</div>
                <div class="text-3xl text-center">Zoom</div>
                <div class="flex flex-col gap-y-2 items-center">
                    <img src="{{ asset('png/qr-info.jpg') }}" alt="" srcset="">
                    <a class="underline text-center" target="_blank"
                        href="https://line.me/R/ti/g/e3dVvOhhNM">https://line.me/R/ti/g/e3dVvOhhNM</a>
                </div>
                <div class="flex flex-col gap-y-2 items-center justify-center">
                    <div>Meeting ID: 966 8951 3032</div>
                    <div>Password: RALLY2</div>
                    <a class="underline text-center" target="_blank"
                        href="https://zoom.us/j/96689513032?pwd=cE1qb3FGSyttNFVXNGZuOVBHTVZldz09">https://zoom.us/j/96689513032?pwd=cE1qb3FGSyttNFVXNGZuOVBHTVZldz09</a>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="last-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="grid grid-cols-2 gap-2 justify-center">
                <div class="text-3xl text-center">Line Group (Top 5)</div>
                <div class="text-3xl text-center">Zoom</div>
                <div class="flex flex-col gap-y-2 items-center">
                    <img src="{{ asset('png/qr-last-stage.jpg') }}" alt="" srcset="">
                    <a class="underline text-center" target="_blank"
                        href="https://line.me/R/ti/g/e3dVvOhhNM">https://line.me/R/ti/g/e3dVvOhhNM</a>
                </div>
                <div class="flex flex-col gap-y-2 items-center justify-center">
                    <div>Meeting ID: 966 8951 3032</div>
                    <div>Password: RALLY2</div>
                    <a class="underline text-center" target="_blank"
                        href="https://zoom.us/j/96689513032?pwd=cE1qb3FGSyttNFVXNGZuOVBHTVZldz09">https://zoom.us/j/96689513032?pwd=cE1qb3FGSyttNFVXNGZuOVBHTVZldz09</a>
                </div>
            </div>
        </div>
    </div>
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
