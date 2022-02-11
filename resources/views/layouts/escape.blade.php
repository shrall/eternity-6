<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body class="font-audiowide text-white tracking-widest">
    @yield('modals')
    <div class="w-screen h-screen flex justify-center bg-e-grid-black pt-8 font-raleway-regular">
        <div class="relative border-2 border-eternity-6-gray " style="width: 1280px; height: 720px;">
            <div class="bg-black z-40 absolute" id="fade-black"
                style="width: 1260px; height: 700px; margin-left: 10px; margin-top: 10px;"></div>
            <div id="game-container" class="absolute z-20"
                style="width: 1260px; height: 700px; margin-left: 10px; margin-top: 10px;">
                @yield('content')
                <div class="bg-black opacity-40 w-full h-full absolute top-0 hidden" id="hud-background"
                    onclick="closeHUD();"></div>
                <div id="game-hud">
                    <div id="hud-foreground">
                        @yield('puzzles')
                        <div id="inventory"
                            class="absolute inset-x-0 mx-auto bg-eternity-6-black border-2 border-eternity-6-gray top-0 hidden pt-4"
                            style="width: 1000px; height: 600px;">
                            <img src="{{asset('png/1a.png')}}" class="absolute imap1 @if(Auth::user()->map1 == 0) hidden @endif">
                            <img src="{{asset('png/2a.png')}}" class="absolute imap2 @if(Auth::user()->map2 == 0) hidden @endif">
                            <img src="{{asset('png/3a.png')}}" class="absolute imap3 @if(Auth::user()->map3 == 0) hidden @endif">
                            <img src="{{asset('png/4a.png')}}" class="absolute imap4 @if(Auth::user()->map4 == 0) hidden @endif">
                            <img src="{{asset('png/5a.png')}}" class="absolute imap5 @if(Auth::user()->map5 == 0) hidden @endif">
                            <img src="{{asset('png/6a.png')}}" class="absolute imap6 @if(Auth::user()->map6 == 0) hidden @endif">
                            <img src="{{asset('png/7a.png')}}" class="absolute imap7 @if(Auth::user()->map7 == 0) hidden @endif">
                            <img src="{{asset('png/6a.png')}}" class="absolute imap6 @if(Auth::user()->map6 == 0) hidden @endif">
                            <img src="{{asset('png/8a.png')}}" class="absolute imap8 @if(Auth::user()->map8 == 0) hidden @endif">
                            <img src="{{asset('png/9a.png')}}" class="absolute imap9 @if(Auth::user()->map9 == 0) hidden @endif">
                            <img src="{{asset('png/10a.png')}}" class="absolute imap10 @if(Auth::user()->map10 == 0) hidden @endif">
                            <img src="{{asset('png/11a.png')}}" class="absolute imap11 @if(Auth::user()->map11 == 0) hidden @endif">
                            <img src="{{asset('png/12a.png')}}" class="absolute imap12 @if(Auth::user()->map12 == 0) hidden @endif">
                            <img src="{{asset('png/13a.png')}}" class="absolute imap13 @if(Auth::user()->map13 == 0) hidden @endif">
                            <img src="{{asset('png/14a.png')}}" class="absolute imap14 @if(Auth::user()->map14 == 0) hidden @endif">
                            <img src="{{asset('png/15a.png')}}" class="absolute imap15 @if(Auth::user()->map15 == 0) hidden @endif">
                            <img src="{{asset('png/16a.png')}}" class="absolute imap16 @if(Auth::user()->map16 == 0) hidden @endif">
                            <img src="{{asset('png/17a.png')}}" class="absolute imap17 @if(Auth::user()->map17 == 0) hidden @endif">
                            <img src="{{asset('png/18a.png')}}" class="absolute imap18 @if(Auth::user()->map18 == 0) hidden @endif">
                            <img src="{{asset('png/19a.png')}}" class="absolute imap19 @if(Auth::user()->map19 == 0) hidden @endif">
                            <img src="{{asset('png/20a.png')}}" class="absolute imap20 @if(Auth::user()->map20 == 0) hidden @endif">
                        </div>
                        <div class="nplc-item bg-eternity-6-black border-2 border-eternity-6-gray flex items-center gap-x-4"
                            style="width: 150px; height:50px; bottom:0; right:0;" onclick="openHUD('#inventory');">
                            <div class="bg-map-9b w-12 h-12 bg-no-repeat bg-cover bg-center" style="margin-top: 25px;">
                            </div>
                            <span class="text-lg">x <span id="map-count">{{ Auth::user()->map }}</span></span>
                        </div>
                        <div class="nplc-item bg-logout-button hover:bg-logout-button-hover"
                            style="width: 100px; height:100px; bottom:0; left:0;" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    </script>
    <script>
        $(function() {
            $(".draggable").draggable();
        });

    </script>
    <script>
        $("#fade-black").animate({
            opacity: "0"
        }, 300);
        setTimeout(function() {
            $("#fade-black").css("display", "none");
        }, 300);

    </script>
    <script>
        function closeHUD() {
            $('#hud-background').removeClass('block').addClass('hidden');
            $('#inventory').removeClass('block').addClass('hidden');
            $('.puzzle').removeClass('block').addClass('hidden');
        }

        function openHUD(cssClass) {
            $('#hud-background').removeClass('hidden').addClass('block');
            $(cssClass).removeClass('hidden').addClass('block');
        }

        function checkDatabase(column) {
            return $.post('{{ config('app.url') }}' + "/user/check-database", {
                _token: CSRF_TOKEN,
                column: column,
            });
        }

        function checkAnswer(puzzle, answer) {
            return $.post('{{ config('app.url') }}' + "/user/check-answer", {
                _token: CSRF_TOKEN,
                puzzle: puzzle,
                answer: answer,
            });
        }

        function changeScene(before, after) {
            $("#fade-black").css("display", "block");
            $("#fade-black").animate({
                opacity: "1"
            }, 300);
            setTimeout(function() {
                $(before).css("display", "none");
                $(after).css("display", "block");
                setTimeout(function() {
                    $("#fade-black").animate({
                        opacity: "0"
                    }, 300);
                    setTimeout(function() {
                        $("#fade-black").css("display", "none");
                    }, 300);
                }, 300);
            }, 300);
        }
        var acquiredItem = "";

        function getItem(name) {
            $('.' + name).addClass('hidden');
            $('.i' + name).removeClass('hidden');
            closeHUD();
            addItem(name)
        }

        function addItem(item) {
            return $.post('{{ config('app.url') }}' + "/escape/add-item", {
                _token: CSRF_TOKEN,
                item: item,
                id: {{ Auth::id() }}
            }).done(function(result) {
                $('#map-count').html(result);
            });
        }

    </script>
    <script>
        function openModal(type) {
            $('#' + type + '-modal').removeClass('hidden').addClass('flex');
        }

        function closeModal() {
            $('.modal').removeClass('flex').addClass('hidden');
        }

    </script>
    @yield('scripts')
</body>

</html>
