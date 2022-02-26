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
    <link href="{{ asset('css/map.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

    <script src="https://unpkg.com/interactjs/dist/interact.min.js"></script>
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
                        <div id="challenge"
                            class="absolute inset-x-0 mx-auto bg-eternity-6-black border-2 border-eternity-6-gray top-0 hidden"
                            style="width: 1000px; height: 600px;">
                            <div class="flex items-center justify-center mb-8 mt-24">
                                <img src="{{ asset('png/qr-challenge-1.png') }}" id="qr-challenge-1"
                                    class="hidden">
                                <img src="{{ asset('png/qr-challenge-2.png') }}" id="qr-challenge-2"
                                    class="hidden">
                            </div>
                            <div class="flex items-center justify-center mb-8">
                                <div class="text-3xl text-center">Scan This QR.</div>
                            </div>
                        </div>
                        <div id="challenge-3"
                            class="absolute inset-x-0 mx-auto bg-tembok border-2 border-eternity-6-gray top-0 hidden p-4"
                            style="width: 1000px; height: 600px;">
                            <div class="flex items-center gap-x-2 absolute" style="width: 475px;height:162px;">
                                <div
                                    class="bg-eternity-6-brown border border-eternity-6-gray flex flex-col gap-y-2 p-2 w-28">
                                    <img src="{{ asset('svg/pic-edison.svg') }}" class="w-auto h-16">
                                    <div class="text-xs text-center">Thomas Alva Edison</div>
                                    <div class="text-xs text-center">1847-1931</div>
                                </div>
                                <div
                                    class="bg-eternity-6-brown border border-eternity-6-gray flex flex-col gap-y-2 p-2 w-28">
                                    <img src="{{ asset('svg/pic-grahambell.svg') }}" class="w-auto h-16">
                                    <div class="text-xs text-center">Alexander Graham Bell</div>
                                    <div class="text-xs text-center">1847-1922</div>
                                </div>
                                <div
                                    class="bg-eternity-6-brown border border-eternity-6-gray flex flex-col gap-y-2 p-2 w-28">
                                    <img src="{{ asset('svg/pic-watt.svg') }}" class="w-auto h-16">
                                    <div class="text-xs text-center">James Watt<br><br> </div>
                                    <div class="text-xs text-center">1736-1819</div>
                                </div>
                                <div
                                    class="bg-eternity-6-brown border border-eternity-6-gray flex flex-col gap-y-2 p-2 w-28">
                                    <img src="{{ asset('svg/pic-faraday.svg') }}" class="w-auto h-16">
                                    <div class="text-xs text-center">Michael Faraday<br><br> </div>
                                    <div class="text-xs text-center">1791-1867</div>
                                </div>
                            </div>
                            <div class="absolute bg-safe bg-no-repeat bg-cover"
                                style="width: 475px; height:350px; top:250px;">
                                <input type="number" name="safe1 safe-input" id="safe1"
                                    class="rounded-xl absolute text-center text-lg text-black" readonly
                                    style="width: 65px; left: 76px; top:71px; background-color:#f1f1f1;">
                                <input type="number" name="safe2 safe-input" id="safe2"
                                    class="rounded-xl absolute text-center text-lg text-black" readonly
                                    style="width: 65px; left:160px; top:71px; background-color:#f1f1f1;">
                                <input type="number" name="safe3 safe-input" id="safe3"
                                    class="rounded-xl absolute text-center text-lg text-black" readonly
                                    style="width: 65px; left:244px; top:71px; background-color:#f1f1f1;">
                                <input type="number" name="safe4 safe-input" id="safe4"
                                    class="rounded-xl absolute text-center text-lg text-black" readonly
                                    style="width: 65px; left:328px; top:71px; background-color:#f1f1f1;">
                                <img src="{{ asset('svg/fingerprint.svg') }}" onclick="clickFingerprint();"
                                    class="absolute w-16 h-24 hover:opacity-80 cursor-pointer"
                                    style="top: 200px; left:68px;">
                                <img src="{{ asset('svg/1.svg') }}"
                                    class="absolute w-12 h-12 hover:opacity-80 cursor-pointer" onclick="clickSafe(1)"
                                    style="top:125px; right:220px;">
                                <img src="{{ asset('svg/2.svg') }}"
                                    class="absolute w-12 h-12 hover:opacity-80 cursor-pointer" onclick="clickSafe(2)"
                                    style="top:125px; right:160px;">
                                <img src="{{ asset('svg/3.svg') }}"
                                    class="absolute w-12 h-12 hover:opacity-80 cursor-pointer" onclick="clickSafe(3)"
                                    style="top:125px; right:100px;">
                                <img src="{{ asset('svg/4.svg') }}"
                                    class="absolute w-12 h-12 hover:opacity-80 cursor-pointer" onclick="clickSafe(4)"
                                    style="top:185px; right:220px;">
                                <img src="{{ asset('svg/5.svg') }}"
                                    class="absolute w-12 h-12 hover:opacity-80 cursor-pointer" onclick="clickSafe(5)"
                                    style="top:185px; right:160px;">
                                <img src="{{ asset('svg/6.svg') }}"
                                    class="absolute w-12 h-12 hover:opacity-80 cursor-pointer" onclick="clickSafe(6)"
                                    style="top:185px; right:100px;">
                                <img src="{{ asset('svg/7.svg') }}"
                                    class="absolute w-12 h-12 hover:opacity-80 cursor-pointer" onclick="clickSafe(7)"
                                    style="top:245px; right:220px;">
                                <img src="{{ asset('svg/8.svg') }}"
                                    class="absolute w-12 h-12 hover:opacity-80 cursor-pointer" onclick="clickSafe(8)"
                                    style="top:245px; right:160px;">
                                <img src="{{ asset('svg/9.svg') }}"
                                    class="absolute w-12 h-12 hover:opacity-80 cursor-pointer" onclick="clickSafe(9)"
                                    style="top:245px; right:100px;">
                            </div>
                            <div class="absolute bg-eternity-6-brown border border-eternity-6-gray right-0"
                                style="width: 220px; height:295px; right:50px;">
                                <img src="{{ asset('png/puzzle-piece-3.png') }}" style="width: 70px; height:70px;"
                                    id="piece-3" class="absolute cursor-pointer hover:opacity-90"
                                    onclick="movePiece('3');">
                                <img src="{{ asset('png/puzzle-piece-6.png') }}"
                                    style="width: 70px; height:70px; left:72.5px;" id="piece-6"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('6');">
                                <img src="{{ asset('png/puzzle-piece-2.png') }}"
                                    style="width: 70px; height:70px; left: 145px;" id="piece-2"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('2');">
                                <img src="{{ asset('png/puzzle-piece-11.png') }}"
                                    style="width: 70px; height:70px; top: 72.5px;" id="piece-11"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('11');">
                                <img src="{{ asset('png/puzzle-piece-1.png') }}"
                                    style="width: 70px; height:70px; left: 72.5px; top: 72.5px;" id="piece-1"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('1');">
                                <img src="{{ asset('png/puzzle-piece-4.png') }}"
                                    style="width: 70px; height:70px; left: 145px; top: 72.5px;" id="piece-4"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('4');">
                                <img src="{{ asset('png/puzzle-piece-5.png') }}"
                                    style="width: 70px; height:70px; top: 145px;" id="piece-5"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('5');">
                                <img src="{{ asset('png/puzzle-piece-9.png') }}"
                                    style="width: 70px; height:70px; left: 72.5px; top: 145px;" id="piece-9"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('9');">
                                <img src="{{ asset('png/puzzle-piece-8.png') }}"
                                    style="width: 70px; height:70px; left: 145px; top: 145px;" id="piece-8"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('8');">
                                <img src="{{ asset('png/puzzle-piece-10.png') }}"
                                    style="width: 70px; height:70px; top: 217.5px;" id="piece-10"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('10');">
                                <img src="{{ asset('png/puzzle-piece-7.png') }}"
                                    style="width: 70px; height:70px; left: 72.5px; top: 217.5px;" id="piece-7"
                                    class="absolute cursor-pointer hover:opacity-90" onclick="movePiece('7');">
                                <img src="{{ asset('png/puzzle-piece-12.png') }}" id="piece-12"
                                    style="width: 70px; height:70px; left: 145px; top: 217.5px;"
                                    class="absolute cursor-pointer hover:opacity-90 hidden">
                            </div>
                            <div class="absolute bg-eternity-6-brown border border-eternity-6-gray rounded-xl"
                                style="width: 420px; height:205px; right:50px; top:360px;">
                                <img src="{{ asset('svg/hijau.svg') }}" class="absolute w-12 h-12 hover:opacity-70"
                                    id="0hijau" onclick="circuit(0, 'hijau')" style="left: 20px; top:15px;">
                                <img src="{{ asset('svg/ungu.svg') }}" class="absolute w-12 h-12 hover:opacity-70"
                                    id="0ungu" onclick="circuit(0, 'ungu')" style="left: 20px; top:55px;">
                                <img src="{{ asset('svg/pink.svg') }}" class="absolute w-12 h-12 hover:opacity-70"
                                    id="0pink" onclick="circuit(0, 'pink')" style="left: 20px; top:95px;">
                                <img src="{{ asset('svg/kuning.svg') }}" class="absolute w-12 h-12 hover:opacity-70"
                                    id="0kuning" onclick="circuit(0, 'kuning')" style="left: 20px; top:135px;">

                                <img src="{{ asset('svg/pink.svg') }}" class="absolute w-12 h-12 hover:opacity-70"
                                    id="1pink" onclick="circuit(1, 'pink')" style="right: 20px; top:15px;">
                                <img src="{{ asset('svg/kuning.svg') }}" class="absolute w-12 h-12 hover:opacity-70"
                                    id="1kuning" onclick="circuit(1, 'kuning')" style="right: 20px; top:55px;">
                                <img src="{{ asset('svg/hijau.svg') }}" class="absolute w-12 h-12 hover:opacity-70"
                                    id="1hijau" onclick="circuit(1, 'hijau')" style="right: 20px; top:95px;">
                                <img src="{{ asset('svg/ungu.svg') }}" class="absolute w-12 h-12 hover:opacity-70"
                                    id="1ungu" onclick="circuit(1, 'ungu')" style="right: 20px; top:135px;">
                            </div>
                            <img onclick="click3();" src="{{ asset('svg/click.svg') }}"
                                style="top: 200px; left:500px;"
                                class="absolute w-32 h-32 hover:opacity-80 cursor-pointer">
                            <div class="absolute hidden opacity-50"></div>
                        </div>
                        <div id="question"
                            class="absolute inset-x-0 mx-auto bg-eternity-6-black border-2 border-eternity-6-gray top-0 hidden"
                            style="width: 1000px; height: 600px;">
                            <div class="flex flex-col items-center justify-center" style="height: 600px;">
                                <div class="flex items-center justify-center mb-8">
                                    <div class="text-3xl text-center" id="question-text"></div>
                                    <img src="{{ asset('png/hard-1.png') }}" id="qr-hard-1" class="hidden">
                                    <img src="{{ asset('png/hard-2.png') }}" id="qr-hard-2" class="hidden">
                                    <img src="{{ asset('png/hard-3.png') }}" id="qr-hard-3" class="hidden">
                                </div>
                                <div class="grid grid-cols-4 gap-x-2 items-center justify-evenly mb-4"
                                    id="question-choices">
                                    <div class="text-md text-center font-montserrat" id="choice-a"></div>
                                    <div class="text-md text-center font-montserrat" id="choice-b"></div>
                                    <div class="text-md text-center font-montserrat" id="choice-c"></div>
                                    <div class="text-md text-center font-montserrat" id="choice-d"></div>
                                </div>
                                <div class="items-center justify-center mb-8 hidden" id="easy-2-q">
                                    <img src="{{ asset('png/easy-2-q.png') }}" class="w-36">
                                </div>
                                <div class="flex items-center justify-center mb-8">
                                    <textarea style="resize: none; width: 800px;" id="answer"
                                        class="bg-eternity-6-black border-2 border-eternity-6-gray p-4" type="text"
                                        name="answer"></textarea>
                                </div>
                                <div class="flex items-center justify-center mb-8">
                                    <div class="hover-button cursor-pointer" onclick="submitAnswer();">Submit</div>
                                </div>
                            </div>
                        </div>
                        <div id="inventory"
                            class="absolute inset-x-0 mx-auto bg-eternity-6-black border-2 border-eternity-6-gray top-0 hidden pt-4"
                            style="width: 1000px; height: 600px;">
                            <div id="map-true" @if (Auth::user()->period->name2 == '2b' && Auth::user()->referral == 0) class="hidden" @endif>
                                @if (Auth::user()->map_type == 1)
                                    <img src="{{ asset('png/1a.png') }}"
                                        class="absolute imap1 @if (Auth::user()->map1 == 0) hidden @endif">
                                    <img src="{{ asset('png/2a.png') }}"
                                        class="absolute imap2 @if (Auth::user()->map2 == 0) hidden @endif">
                                    <img src="{{ asset('png/3a.png') }}"
                                        class="absolute imap3 @if (Auth::user()->map3 == 0) hidden @endif">
                                    <img src="{{ asset('png/4a.png') }}"
                                        class="absolute imap4 @if (Auth::user()->map4 == 0) hidden @endif">
                                    <img src="{{ asset('png/5a.png') }}"
                                        class="absolute imap5 @if (Auth::user()->map5 == 0) hidden @endif">
                                    <img src="{{ asset('png/6a.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/7a.png') }}"
                                        class="absolute imap7 @if (Auth::user()->map7 == 0) hidden @endif">
                                    <img src="{{ asset('png/6a.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/8a.png') }}"
                                        class="absolute imap8 @if (Auth::user()->map8 == 0) hidden @endif">
                                    <img src="{{ asset('png/9a.png') }}"
                                        class="absolute imap9 @if (Auth::user()->map9 == 0) hidden @endif">
                                    <img src="{{ asset('png/10a.png') }}"
                                        class="absolute imap10 @if (Auth::user()->map10 == 0) hidden @endif">
                                    <img src="{{ asset('png/11a.png') }}"
                                        class="absolute imap11 @if (Auth::user()->map11 == 0) hidden @endif">
                                    <img src="{{ asset('png/12a.png') }}"
                                        class="absolute imap12 @if (Auth::user()->map12 == 0) hidden @endif">
                                    <img src="{{ asset('png/13a.png') }}"
                                        class="absolute imap13 @if (Auth::user()->map13 == 0) hidden @endif">
                                    <img src="{{ asset('png/14a.png') }}"
                                        class="absolute imap14 @if (Auth::user()->map14 == 0) hidden @endif">
                                    <img src="{{ asset('png/15a.png') }}"
                                        class="absolute imap15 @if (Auth::user()->map15 == 0) hidden @endif">
                                    <img src="{{ asset('png/16a.png') }}"
                                        class="absolute imap16 @if (Auth::user()->map16 == 0) hidden @endif">
                                    <img src="{{ asset('png/17a.png') }}"
                                        class="absolute imap17 @if (Auth::user()->map17 == 0) hidden @endif">
                                    <img src="{{ asset('png/18a.png') }}"
                                        class="absolute imap18 @if (Auth::user()->map18 == 0) hidden @endif">
                                    <img src="{{ asset('png/19a.png') }}"
                                        class="absolute imap19 @if (Auth::user()->map19 == 0) hidden @endif">
                                    <img src="{{ asset('png/20a.png') }}"
                                        class="absolute imap20 @if (Auth::user()->map20 == 0) hidden @endif">
                                @else
                                    <img src="{{ asset('png/1b.png') }}"
                                        class="absolute imap1 @if (Auth::user()->map1 == 0) hidden @endif">
                                    <img src="{{ asset('png/2b.png') }}"
                                        class="absolute imap2 @if (Auth::user()->map2 == 0) hidden @endif">
                                    <img src="{{ asset('png/3b.png') }}"
                                        class="absolute imap3 @if (Auth::user()->map3 == 0) hidden @endif">
                                    <img src="{{ asset('png/4b.png') }}"
                                        class="absolute imap4 @if (Auth::user()->map4 == 0) hidden @endif">
                                    <img src="{{ asset('png/5b.png') }}"
                                        class="absolute imap5 @if (Auth::user()->map5 == 0) hidden @endif">
                                    <img src="{{ asset('png/7b.png') }}"
                                        class="absolute imap7 @if (Auth::user()->map7 == 0) hidden @endif">
                                    <img src="{{ asset('png/6b.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/8b.png') }}"
                                        class="absolute imap8 @if (Auth::user()->map8 == 0) hidden @endif">
                                    <img src="{{ asset('png/9b.png') }}"
                                        class="absolute imap9 @if (Auth::user()->map9 == 0) hidden @endif">
                                    <img src="{{ asset('png/10b.png') }}"
                                        class="absolute imap10 @if (Auth::user()->map10 == 0) hidden @endif">
                                    <img src="{{ asset('png/11b.png') }}"
                                        class="absolute imap11 @if (Auth::user()->map11 == 0) hidden @endif">
                                    <img src="{{ asset('png/12b.png') }}"
                                        class="absolute imap12 @if (Auth::user()->map12 == 0) hidden @endif">
                                    <img src="{{ asset('png/13b.png') }}"
                                        class="absolute imap13 @if (Auth::user()->map13 == 0) hidden @endif">
                                    <img src="{{ asset('png/14b.png') }}"
                                        class="absolute imap14 @if (Auth::user()->map14 == 0) hidden @endif">
                                    <img src="{{ asset('png/15b.png') }}"
                                        class="absolute imap15 @if (Auth::user()->map15 == 0) hidden @endif">
                                    <img src="{{ asset('png/16b.png') }}"
                                        class="absolute imap16 @if (Auth::user()->map16 == 0) hidden @endif">
                                    <img src="{{ asset('png/17b.png') }}"
                                        class="absolute imap17 @if (Auth::user()->map17 == 0) hidden @endif">
                                    <img src="{{ asset('png/18b.png') }}"
                                        class="absolute imap18 @if (Auth::user()->map18 == 0) hidden @endif">
                                    <img src="{{ asset('png/19b.png') }}"
                                        class="absolute imap19 @if (Auth::user()->map19 == 0) hidden @endif">
                                    <img src="{{ asset('png/20b.png') }}"
                                        class="absolute imap20 @if (Auth::user()->map20 == 0) hidden @endif">
                                @endif
                            </div>
                            <div id="map-false" @if (Auth::user()->period->name2 != '2b' || Auth::user()->referral == 1) class="hidden" @endif>
                                <div style="top: 250px;"
                                    class="p-2 flex flex-col items-center justify-center gap-y-2 absolute mx-auto inset-x-0">
                                    <span class="underline">Referral Code</span>
                                    <span>{{ Auth::user()->referral_code }}</span>
                                </div>
                                @if (Auth::user()->map_type == 1)
                                    <img src="{{ asset('png/1b.png') }}"
                                        class="absolute imap1 @if (Auth::user()->map1 == 0) hidden @endif">
                                    <img src="{{ asset('png/2b.png') }}"
                                        class="absolute imap2 @if (Auth::user()->map2 == 0) hidden @endif">
                                    <img src="{{ asset('png/4b.png') }}"
                                        class="absolute imap4 @if (Auth::user()->map4 == 0) hidden @endif">
                                    <img src="{{ asset('png/5b.png') }}"
                                        class="absolute imap5 @if (Auth::user()->map5 == 0) hidden @endif">
                                    <img src="{{ asset('png/6b.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/10b.png') }}"
                                        class="absolute imap10 @if (Auth::user()->map10 == 0) hidden @endif">
                                    <img src="{{ asset('png/12b.png') }}"
                                        class="absolute imap12 @if (Auth::user()->map12 == 0) hidden @endif">
                                    <img src="{{ asset('png/13b.png') }}"
                                        class="absolute imap13 @if (Auth::user()->map13 == 0) hidden @endif">
                                    <img src="{{ asset('png/14b.png') }}"
                                        class="absolute imap14 @if (Auth::user()->map14 == 0) hidden @endif">
                                    <img src="{{ asset('png/15b.png') }}"
                                        class="absolute imap15 @if (Auth::user()->map15 == 0) hidden @endif">
                                    <img src="{{ asset('png/20b.png') }}"
                                        class="absolute imap20 @if (Auth::user()->map20 == 0) hidden @endif">
                                @else
                                    <img src="{{ asset('png/7a.png') }}"
                                        class="absolute imap7 @if (Auth::user()->map7 == 0) hidden @endif">
                                    <img src="{{ asset('png/6a.png') }}"
                                        class="absolute imap6 @if (Auth::user()->map6 == 0) hidden @endif">
                                    <img src="{{ asset('png/8a.png') }}"
                                        class="absolute imap8 @if (Auth::user()->map8 == 0) hidden @endif">
                                    <img src="{{ asset('png/9a.png') }}"
                                        class="absolute imap9 @if (Auth::user()->map9 == 0) hidden @endif">
                                    <img src="{{ asset('png/10a.png') }}"
                                        class="absolute imap10 @if (Auth::user()->map10 == 0) hidden @endif">
                                    <img src="{{ asset('png/11a.png') }}"
                                        class="absolute imap11 @if (Auth::user()->map11 == 0) hidden @endif">
                                    <img src="{{ asset('png/15a.png') }}"
                                        class="absolute imap15 @if (Auth::user()->map15 == 0) hidden @endif">
                                    <img src="{{ asset('png/16a.png') }}"
                                        class="absolute imap16 @if (Auth::user()->map16 == 0) hidden @endif">
                                    <img src="{{ asset('png/17a.png') }}"
                                        class="absolute imap17 @if (Auth::user()->map17 == 0) hidden @endif">
                                    <img src="{{ asset('png/18a.png') }}"
                                        class="absolute imap18 @if (Auth::user()->map18 == 0) hidden @endif">
                                    <img src="{{ asset('png/19a.png') }}"
                                        class="absolute imap19 @if (Auth::user()->map19 == 0) hidden @endif">
                                    <img src="{{ asset('png/20a.png') }}"
                                        class="absolute imap20 @if (Auth::user()->map20 == 0) hidden @endif">
                                @endif
                            </div>
                            @if (Auth::user()->period->name2 == '2b' && Auth::user()->referral == 0)
                                <input type="text" style="resize: none; width: 400px; bottom: -36px;" id="referral"
                                    class="bg-eternity-6-black border-2 border-eternity-6-gray absolute inset-x-0 mx-auto"
                                    type="text" name="referral" placeholder="Input Code Here">
                                <div class="flex items-center justify-center hover-button cursor-pointer absolute inset-x-0 mx-auto"
                                    id="referral-button" style="bottom: -93px; width: 145px;"
                                    onclick="submitReferral();">
                                    Submit</div>
                            @endif
                        </div>
                        <div id="item"
                            class="absolute inset-x-0 mx-auto bg-eternity-6-black border-2 border-eternity-6-gray top-0 hidden pt-4"
                            style="width: 1000px; height: 600px;">
                            <form action="{{ route('escape.buyitem') }}" method="post">
                                @csrf
                                <div class="text-2xl text-center mb-4">Items Shop</div>
                                <hr class="mb-4">
                                <div class="overflow-y-scroll mb-4" style="height: 400px;">
                                    <div class="grid grid-cols-3 gap-2 mx-24 mb-2">
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/dice-1.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">Dice 1</div>
                                            <div class="text-md">Price : 50</div>
                                            <div class="flex items-center gap-x-1 mb-4 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('dice1');"></span>
                                                <input type="number" name="dice1" id="amount-dice1"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('dice1');"></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/dice-2.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">Dice 2</div>
                                            <div class="text-md">Price : 90</div>
                                            <div class="flex items-center gap-x-1 mb-4 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('dice2');"></span>
                                                <input type="number" name="dice2" id="amount-dice2"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('dice2');"></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/dice-3.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">Dice 3</div>
                                            <div class="text-md">Price : 130</div>
                                            <div class="flex items-center gap-x-1 mb-4 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('dice3');"></span>
                                                <input type="number" name="dice3" id="amount-dice3"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('dice3');"></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/dice-4.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">Dice 4</div>
                                            <div class="text-md">Price : 170</div>
                                            <div class="flex items-center gap-x-1 mb-4 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('dice4');"></span>
                                                <input type="number" name="dice4" id="amount-dice4"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('dice4');"></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/dice-5.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">Dice 5</div>
                                            <div class="text-md">Price : 210</div>
                                            <div class="flex items-center gap-x-1 mb-5 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('dice5');"></span>
                                                <input type="number" name="dice5" id="amount-dice5"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('dice5');"></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/dice-6.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">Dice 6</div>
                                            <div class="text-md">Price : 250</div>
                                            <div class="flex items-center gap-x-1 mb-5 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('dice6');"></span>
                                                <input type="number" name="dice6" id="amount-dice6"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('dice6');"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 gap-2 mx-24">
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/timestwo.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">X2</div>
                                            <div class="text-md">Price : 300</div>
                                            <div class="flex items-center gap-x-1 mb-4 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('timestwo');"></span>
                                                <input type="number" name="timestwo" id="amount-timestwo"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('timestwo');"></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/freepass.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">Freepass</div>
                                            <div class="text-md">Price : 1000</div>
                                            <div class="flex items-center gap-x-1 mb-4 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('freepass');"></span>
                                                <input type="number" name="freepass" id="amount-freepass"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('freepass');"></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/teleport.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">Teleport</div>
                                            <div class="text-md">Price : 750</div>
                                            <div class="flex items-center gap-x-1 mb-4 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('teleport');"></span>
                                                <input type="number" name="teleport" id="amount-teleport"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('teleport');"></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col items-center justify-center gap-y-1">
                                            <img src="{{ asset('svg/magnet.svg') }}" class="w-16 h-16">
                                            <div class="text-lg">Magnet</div>
                                            <div class="text-md">Price : 250</div>
                                            <div class="flex items-center gap-x-1 mb-4 border border-eternity-6-gray">
                                                <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                                    onclick="minAmount('magnet');"></span>
                                                <input type="number" name="magnet" id="amount-magnet"
                                                    class="w-12 bg-transparent text-center border border-eternity-6-gray"
                                                    value=0>
                                                <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                                    onclick="plusAmount('magnet');"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="w-full flex justify-center">
                                    <button type="submit" class="hover-button cursor-pointer">Buy</button>
                                </div>
                            </form>
                        </div>
                        <div class="nplc-item bg-eternity-6-black border-2 border-eternity-6-gray @if (Auth::user()->finish == 0) flex @else hidden @endif flex-col items-center justify-center p-2"
                            style="width: 150px; height:70px; bottom:0; left:0;">
                            <span class="text-lg">Eternites</span>
                            <span class="text-lg">
                                <span id="user-eternites">{{ Auth::user()->eternite2 }}</span>
                            </span>
                        </div>
                        <div class="nplc-item bg-eternity-6-black border-2 border-eternity-6-gray @if (Auth::user()->finish == 0) flex @else hidden @endif flex-col items-center justify-center p-2"
                            style="width: 100px; height:70px; top:0; right:0;">
                            <span class="text-lg">Round</span>
                            <span class="text-lg">
                                {{ Auth::user()->period->name2 }}</span>
                        </div>
                        @if (Auth::user()->period->name2 != '3')
                            <div class="nplc-item bg-eternity-6-black hover:opacity-80 border-2 border-eternity-6-gray flex items-center gap-x-4"
                                style="width: 150px; height:50px; bottom:0; right:0;" onclick="openHUD('#inventory');">
                                <div class="bg-map-9b w-12 h-12 bg-no-repeat bg-cover bg-center"
                                    style="margin-top: 25px;">
                                </div>
                                <span class="text-lg">x
                                    <span id="map-count">{{ Auth::user()->map }}</span>
                                </span>
                            </div>
                        @else
                            <div class="nplc-item bg-eternity-6-black hover:opacity-80 border-2 border-eternity-6-gray @if (Auth::user()->finish == 0) flex @else hidden @endif items-center justify-center gap-x-4"
                                style="width: 150px; height:50px; bottom:0; right:0;" onclick="openHUD('#item');">
                                <span class="text-lg">Shop
                                </span>
                            </div>
                            <div class="nplc-item bg-eternity-6-black border-2 border-eternity-6-gray @if (Auth::user()->finish == 0) flex @else hidden @endif flex-col items-center py-2 gap-y-2 overflow-y-scroll"
                                style="width: 100px; height:450px; top:0; left:0;">
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/dice-1.svg') }}" class="w-12 h-12">
                                    <div class="text-md">Dice 1</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-dice1">{{ Auth::user()->dice1 }}</span></div>
                                    <div class="hover-button" onclick="useItem('dice1')" style="padding: 0.5rem;">Use
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/dice-2.svg') }}" class="w-12 h-12">
                                    <div class="text-md">Dice 2</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-dice2">{{ Auth::user()->dice2 }}</span></div>
                                    <div class="hover-button" onclick="useItem('dice2')" style="padding: 0.5rem;">Use
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/dice-3.svg') }}" class="w-12 h-12">
                                    <div class="text-md">Dice 3</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-dice3">{{ Auth::user()->dice3 }}</span></div>
                                    <div class="hover-button" onclick="useItem('dice3')" style="padding: 0.5rem;">Use
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/dice-4.svg') }}" class="w-12 h-12">
                                    <div class="text-md">Dice 4</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-dice4">{{ Auth::user()->dice4 }}</span></div>
                                    <div class="hover-button" onclick="useItem('dice4')" style="padding: 0.5rem;">Use
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/dice-5.svg') }}" class="w-12 h-12">
                                    <div class="text-md">Dice 5</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-dice5">{{ Auth::user()->dice5 }}</span></div>
                                    <div class="hover-button" onclick="useItem('dice5')" style="padding: 0.5rem;">Use
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/dice-6.svg') }}" class="w-12 h-12">
                                    <div class="text-md">Dice 6</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-dice6">{{ Auth::user()->dice6 }}</span></div>
                                    <div class="hover-button" onclick="useItem('dice6')" style="padding: 0.5rem;">Use
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/freepass.svg') }}" class="w-12 h-12">
                                    <div class="text-md">Freepass</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-freepass">{{ Auth::user()->freepass }}</span></div>
                                    <div class="hover-button" onclick="useItem('freepass')" style="padding: 0.5rem;">
                                        Use
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/teleport.svg') }}" class="w-12 h-12">
                                    <div class="text-md">Teleport</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-teleport">{{ Auth::user()->teleport }}</span></div>
                                    <div class="hover-button" onclick="useItem('teleport')" style="padding: 0.5rem;">
                                        Use
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/timestwo.svg') }}" class="w-12 h-12">
                                    <div class="text-md">X2</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-timestwo">{{ Auth::user()->timestwo }}</span></div>
                                    <div class="hover-button" onclick="useItem('timestwo')" style="padding: 0.5rem;">
                                        Use
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-y-1">
                                    <img src="{{ asset('svg/magnet.svg') }}" class="w-12 h-12">
                                    <div class="text-md">Magnet</div>
                                    <div class="text-sm">Qty: <span
                                            id="qty-magnet">{{ Auth::user()->magnet }}</span></div>
                                    <div class="hover-button" onclick="useItem('magnet')" style="padding: 0.5rem;">
                                        Use
                                    </div>
                                </div>
                            </div>
                        @endif
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
            $(".draggable").draggable({
                containment: 'parent',
            });
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
            $('#item').removeClass('block').addClass('hidden');
            $('#question').removeClass('block').addClass('hidden');
            $('#challenge').removeClass('block').addClass('hidden');
            $('#challenge-3').removeClass('block').addClass('hidden');
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
        var dice1 = @json(Auth::user()->dice1);
        var dice2 = @json(Auth::user()->dice2);
        var dice3 = @json(Auth::user()->dice3);
        var dice4 = @json(Auth::user()->dice4);
        var dice5 = @json(Auth::user()->dice5);
        var dice6 = @json(Auth::user()->dice6);
        var freepass = @json(Auth::user()->freepass);
        var teleport = @json(Auth::user()->teleport);
        var timestwo = @json(Auth::user()->timestwo);
        var magnet = @json(Auth::user()->magnet);
        var item_y = 0;
        var timestwobool = false;
        var magnetbool = false;

        function useItem(item) {
            if (!timestwobool && !magnetbool) {
                if (diceRes != 0 && diceTimer != 0) {
                    openModal('warning');
                    $('#warning-message').html('Select A Tile To Move First.')
                } else if (parseInt($('#qty-' + item).html()) <= 0) {
                    openModal('warning');
                    $('#warning-message').html("You don't have the item.")
                } else {
                    $.post('{{ config('app.url') }}' + "/escape/use-item", {
                        _token: CSRF_TOKEN,
                        item: item,
                        id: {{ Auth::id() }}
                    }).done(function(result) {
                        if (item == 'dice1' || item == 'dice2' || item == 'dice3' || item == 'dice4' || item ==
                            'dice5' || item == 'dice6') {
                            getMovement(parseInt(item[4]));
                            $('#dice-info').html(null);
                            diceTimer = 20;
                            diceRes = parseInt(item[4]);
                        } else if (item == 'teleport') {
                            if (chl1 == 0) {
                                item_y = '09'
                            } else if (chl2 == 0) {
                                item_y = '17'
                            } else if (chl3 == 0) {
                                item_y = '24'
                            } else {
                                item_y = '30'
                            }
                            $.post('{{ config('app.url') }}' + "/escape/move-pos", {
                                    _token: CSRF_TOKEN,
                                    x: player_x_id,
                                    y: item_y
                                })
                                .done(function(data) {})
                                .fail(function(e) {
                                    console.log(e);
                                });
                            player_y_id = item_y;
                            $('#user-position').css('top', $('#' + player_x_id + '-' + player_y_id).css('top'))
                            $('#user-position').css('left', $('#' + player_x_id + '-' + player_y_id).css('left'))
                        } else if (item == 'magnet') {
                            magnetbool = true;
                            let magnet_x_first = player_x_id - 2;
                            let magnet_x_last = player_x_id + 2;
                            let magnet_y_first = player_y_id - 2;
                            let magnet_y_last = player_y_id + 2;

                            for (let j = 0; j < 5; j++) {
                                for (let k = 0; k < 5; k++) {
                                    let xtemp = ""
                                    let ytemp = ""
                                    if ((magnet_y_first + k) < 10) {
                                        ytemp = '0' + (magnet_y_first + k)
                                    } else {
                                        ytemp = (magnet_y_first + k)
                                    }
                                    if ((magnet_x_first + j) < 10) {
                                        xtemp = '0' + (magnet_x_first + j)
                                    } else {
                                        xtemp = (magnet_x_first + j)
                                    }
                                    console.log(xtemp + '-' + ytemp)
                                    $('#' + xtemp.toString() + '-' + ytemp.toString())
                                        .addClass('bg-eternity-6-blue')
                                        .removeClass('bg-eternity-6-brown');
                                }
                            }
                        } else if (item ==
                            'freepass') {
                            $.post('{{ config('app.url') }}' + "/escape/freepass", {
                                _token: CSRF_TOKEN,
                                id: {{ Auth::id() }}
                            }).done(function(result) {
                                chl1 = 1;
                                $('#border-chl1').addClass('hidden');
                            });
                        } else if (item == 'timestwo') {
                            timestwobool = true;
                            $('#dice-info').html(null);
                            $('#dice-info').removeClass('bg-dice-1').removeClass('bg-dice-2').removeClass(
                                    'bg-dice-3')
                                .removeClass('bg-dice-4').removeClass('bg-dice-5').removeClass('bg-dice-6');
                            $('#dice-info').addClass('bg-timestwo')
                        }
                        $('#qty-' + item).html(result);
                    });
                }
            } else {
                openModal('warning');
                $('#warning-message').html("Please Use Your Current Item First.")
            }
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
    <script>
        var safe = '0';
        var safe_counter = @json(Auth::user()->safe);
        var slide_counter = @json(Auth::user()->slide);
        var circuit_counter = @json(Auth::user()->circuit);

        function clickSafe(number) {
            if (safe_counter == 0) {
                if ($('#safe1').val() == '') {
                    $('#safe1').val(number)
                } else if ($('#safe2').val() == '') {
                    $('#safe2').val(number)
                } else if ($('#safe3').val() == '') {
                    $('#safe3').val(number)
                } else if ($('#safe4').val() == '') {
                    $('#safe4').val(number)
                } else {
                    $('#safe1').val(null);
                    $('#safe2').val(null);
                    $('#safe3').val(null);
                    $('#safe4').val(null);
                    $('#safe1').val(number)
                }
            }
        }

        function clickFingerprint() {
            safe = $('#safe1').val() + $('#safe2').val() + $('#safe3').val() + $('#safe4').val()
            $.post('{{ config('app.url') }}' + "/escape/safe", {
                _token: CSRF_TOKEN,
                answer: safe,
                id: {{ Auth::id() }}
            }).done(function(result) {
                console.log(result);
                if (result == 0) {
                    $('#safe1').val(null);
                    $('#safe2').val(null);
                    $('#safe3').val(null);
                    $('#safe4').val(null);
                } else {
                    safe_counter = result
                }
            });
        }
        var puzzle = [
            '3', '6', '2',
            '11', '1', '4',
            '5', '9', '8',
            '10', '7', '0'
        ]

        function movePiece(number) {
            if (slide_counter == 0) {
                let sel_piece = parseInt(puzzle.indexOf(number));
                let e_location = parseInt(puzzle.indexOf('0'));
                let templeft = $('#piece-' + number).css('left');
                let temptop = $('#piece-' + number).css('top');
                if (e_location == (sel_piece - 1) || e_location == (sel_piece + 1) ||
                    e_location == (sel_piece - 3) || e_location == (sel_piece + 3)) {
                    puzzle[sel_piece] = '0'
                    puzzle[e_location] = number
                    $('#piece-' + number).css('left', $('#piece-12').css('left'));
                    $('#piece-' + number).css('top', $('#piece-12').css('top'));
                    $('#piece-12').css('left', templeft);
                    $('#piece-12').css('top', temptop);
                }
                if (arraysEqual(puzzle, ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '0'])) {
                    $('#piece-12').removeClass('hidden').addClass('block');
                    $.post('{{ config('app.url') }}' + "/escape/slide", {
                        _token: CSRF_TOKEN,
                        id: {{ Auth::id() }}
                    }).done(function(result) {
                        slide_counter = 1;
                    });
                }
            }

            function arraysEqual(a, b) {
                if (a === b) return true;
                if (a == null || b == null) return false;
                if (a.length !== b.length) return false;

                for (var i = 0; i < a.length; ++i) {
                    if (a[i] !== b[i]) return false;
                }
                return true;
            }
        }
        var firstc = '';
        var secondc = '';
        var firstp = 0;
        var secondp = 0;
        var kuning = false;
        var hijau = false;
        var pink = false;
        var ungu = false;

        function circuit(pos, color) {
            $('#' + pos + color).addClass('opacity-50');
            if (firstc == '') {
                firstc = color
                firstp = pos
            } else {
                secondc = color;
                secondp = pos;
                if (firstc == secondc && firstp != secondp) {
                    if (color == 'kuning') {
                        kuning = true;
                    } else if (color == 'hijau') {
                        hijau = true;
                    } else if (color == 'pink') {
                        pink = true;
                    } else if (color == 'ungu') {
                        ungu = true;
                    }
                } else {
                    $('#' + firstp + firstc).removeClass('opacity-50');
                    $('#' + secondp + secondc).removeClass('opacity-50');
                }
                firstc = ''
                secondc = ''
            }
            if (kuning && hijau && pink && ungu) {
                $.post('{{ config('app.url') }}' + "/escape/circuit", {
                    _token: CSRF_TOKEN,
                    id: {{ Auth::id() }}
                }).done(function(result) {
                    circuit_counter = 1;
                });
            }
        }

        function click3() {
            $.post('{{ config('app.url') }}' + "/escape/click", {
                _token: CSRF_TOKEN,
                id: {{ Auth::id() }}
            }).done(function(result) {
                if (result == 0) {
                    openModal('warning');
                    $('#warning-message').html("You Haven't Finished All The Puzzles.")
                } else {
                    chl3 = 1;
                    $('#border-chl3').addClass('hidden');
                    closeHUD();
                }
            });
        }
    </script>
    <script>
        var questions = {};
        var easy = {};
        var medium = {};
        var hard = {};
        var easy_choices = {};
        easy['1'] = ['Puncak gunung manakah yang tertinggi di bumi sebelum puncak everest ditaklukkan?',
            'Di foto, aku selalu berada diatas presiden dan wakil presiden, tetapi aku tidak memiliki peran apapun di pemerintahan, siapakah aku?',
            '2 pria harus menyebrangi sungai dengan 1 perahu yang hanya bisa menampung 1 orang. Namun, keduanya tetap berhasil menyeberangi sungai. Bagaimana itu bisa terjadi?',
            'Semakin banyak kamu mengambil, semakin banyak yang tersisa. Apakah itu?',
            'Aku adalah makhluk ciptaan tuhan, jawabanku selalu benar. Siapakah aku?',
            'Aku dibeli untuk makanan namun aku tidak pernah dimakan, apakah aku?',
            'Manakah yang lebih dulu, ayam atau telur?',
            'Ada 5 orang yang berjalan di satu payung kecil, tetapi anehnya tidak seorangpun dari mereka kehujanan, kenapa?',
            'Siapakah menteri ekonomi Indonesia?',
            'Sebutkan contoh Tradeoff dalam kehidupan sehari-hari!'
        ];
        easy_choices['1a'] = ['A. Everest', 'A. Burung Garuda',
            'A. Orang pertama menyeberang terlebih dahulu, kemudian orang pertama mengoper perahu tersebut dan orang kedua menyeberang',
            'A. Pasir', 'A. Perempuan', 'A. Kerupuk', 'A. Telur', 'A. Karena hujannya di tempat lain', '', ''
        ];
        easy_choices['1b'] = ['B. K2', 'B. Foto Presiden', 'B. Mereka berada di dua tepi sungai yang berbeda',
            'B. Air', 'B. Panitia eternity', 'B. Plastik', 'B. Ayam ', 'B. Karena mereka berjalan di dalam rumah',
            '', ''
        ];
        easy_choices['1c'] = ['C. Makalu', 'C. Peci',
            'C. Orang pertama menyeberang menggunakan perahu, orang kedua menyeberang dengan berenang',
            'C. Es batu mencair', 'C. Wanita', 'C. Tisu', 'C. Peternak Ayam', 'C. Karena tidak hujan ', '', ''
        ];
        easy_choices['1d'] = ['D. Cho Oyu', 'D. Jam dinding',
            'D. Orang pertama menggendong orang kedua dan menyeberang bersama menggunakan perahu', 'D. Sidik jari',
            'D. Orang tua ', 'D. Piring', 'D. Semua jawaban benar', 'D. Karena orangnya kecil-kecil', '', ''
        ];
        easy['2'] = ['Kenapa kaca spion ada dua?',
            'Mobil apa yang bikin galau?',
            'Budi punya 3 apel, diambil dua. Sisa berapa?',
            'Apa yang ada di akhir pelangi?',
            'Negara apa yang kaya akan teh hijau?',
            'Apa yang terjadi 4 tahun sekali?',
            'Apa nama daerah yang sangat beracun?',
            'Cicak cicak apa yang banyak maunya?',
            'Siapakah ini?',
            'Apa perbedaan ekonomi mikro dan ekonomi makro?'
        ];
        easy_choices['2a'] = ['A. Agar pengendara dapat melihat kondisi di belakang kiri dan kanan kendaraan',
            'A. Mobil tanpa penumpang di kiri',
            'A. 3', 'A. Emas ', 'A. Papua nugreentea', 'A. Piala dunia ', 'A. Tasikmalaya', 'A. Cicak labil', '', ''
        ];
        easy_choices['2b'] = ['B. Supaya bisa liat doi', 'B. Mobilang sayang tapi bukan pacar ', 'B. 4',
            'B. Leprechaun (kurcaci ijo)', 'B. Papua Nugenea', 'B. Piala Thomas ', 'B. Tasikasik',
            'B. Cicak cicak demanding', '', ''
        ];
        easy_choices['2c'] = ['C. Karena kalau cuma satu kesepian', 'C. Mobil belum lunas cicilannya', 'C. 5', 'C. i',
            'C. Papua Nugrinti', 'C. Piala presiden', 'C. Toxicmalaysia', 'C. Cicak betina', '', ''
        ];
        easy_choices['2d'] = ['D. Karena sudah kodratnya', 'D. Mobil mantan', 'D. 6', 'D. Kentang',
            'D. Papua New Guinea',
            'D. Piala Gubernur', 'D. Toxicmalaya ', 'D. Cicak kelaparan', '', ''
        ];
        easy['3'] = [
            'Ada seseorang yang berjalan di tepi pantai. Ketika ia menoleh ke belakang, ia tidak menemukan jejak kakinya. Mengapa?',
            'Siapa presiden paling unyu?',
            'Kaki seribu kalo belok kiri kakinya berapa?',
            'Kesenian apa yang biasa dilakukan oleh nasabah bank?',
            'Kenapa matahari bisa tenggelam?',
            'Buku buku apa yang buat keringatan dan pakai alat?',
            'Siapa penyanyi dangdut yang mempunyai surel (surat elektronik)?',
            'Meja meja apa yang sudah punah?',
            'Sebutkan 10 prinsip ekonomi',
            'Berikan contoh pasar monopolistik!'
        ];
        easy_choices['3a'] = ['A. Karena dia berjalan mundur ', 'A. Xi Jinping', 'A. 1001', 'A. Tari jaipong',
            'A. Karena matahari bisanya terbit ', 'A. Buku hantam', 'A. Saiful jamil', 'A. Merak', '', ''
        ];
        easy_choices['3b'] = ['B. Karena dia tidak menoleh', 'B. Kim Jong Unch', 'B. 2000', 'B. Tari tunai ',
            'B. Karena matahari tidak bisa berenang', 'B. Buku tangkis', 'B. Ayu ting ting', 'B. Quangga', '', ''
        ];
        easy_choices['3c'] = ['C. Karena dia menutup matanya', 'C. Jokowi', 'C. 500', 'C. Tari torsetor',
            'C. Karena matahari terbit dari timur', 'C. Buku sulap', 'C. Via valen', 'C. Burung dodo', '', ''
        ];
        easy_choices['3d'] = ['D. Karena jejak kakinya terhapus oleh air laut', 'D. Joe Biden', 'D. 1000',
            'D. Tari piring', 'D. Karena matahari bisa berenang', 'D. Buku anak', 'D. Lesti kejora', 'D. Mejalodon',
            '', ''
        ];
        medium['1'] = ['Berdasarkan sumbernya, inflasi dibagi menjadi dua. Sebutkan dan jelaskan!',
            'Sebutkan dan jelaskan kebijakan perdagangan internasional di bidang ekspor!',
            'Sebutkan dan jelaskan fungsi dan peran dana pensiun!',
            'Perhatikan data komponen pendapatan nasional negara X berikut: GNP Rp. 30.000, Penyusutan Rp. 4.500, Pajak langsung Rp. 2.750, Pajak tidak langsung Rp. 3.300, Subsidi Rp. 1.000, Besarnya NNI (Net National Income) negara X adalah',
            'Sebutkan dan jelaskan jenis tenaga kerja menurut tingkat kualitasnya!', 'Siapa saja pelaku ekonomi?'
        ];
        medium['2'] = ['Sebutkan hal-hal yang mempengaruhi permintaan!',
            'Sebutkan fungsi dan peran perusahaan asuransi!', 'Sebutkan syarat-syarat sistem pengupahan yang baik!',
            'Ada tiga pendekatan yang digunakan dalam menghitung pendapatan nasional yaitu pendekatan produksi, pendapatan, dan pengeluaran. Tuliskan rumus masing-masing pendekatan!',
            'Sebutkan dan jelaskan 5 fungsi bank sentral!', 'Sebutkan faktor-faktor yang mempengaruhi kebutuhan!'
        ];
        medium['3'] = ['Sebutkan fungsi turunan uang!', 'Sebutkan peranan utama BUMD terhadap perekonomian indonesia!',
            'Jelaskan mengapa ilmu ekonomi sangat bermanfaat bagi manusia!',
            'Sebutkan faktor-faktor penyebab kelangkaan!', 'Sebutkan hal-hal yang mempengaruhi penawaran!',
            'Diketahui negara Y memiliki data dalam satu tahun: sewa  Rp800.000, upah  Rp500.000, investasi Rp100.000, bunga Rp30.000, konsumsi Rp900.000, ekspor Rp20.000, impor Rp15.000, Belanja pemerintah Rp700.000, Besarnya pendapatan nasional negara Y dihitung dengan menggunakan pendekatan pengeluaran adalah'
        ];
        hard['1'] = [''];
        hard['2'] = [''];
        hard['3'] = [''];
    </script>
    <script>
        var c_diff = '';
        var c_type = '';
        var c_num = '';

        function openQ(diff, type, num) {
            if (diff == 'easy' && type == 2 && num == 9) {
                $('#easy-2-q').removeClass('hidden').addClass('flex');
            } else {
                $('#easy-2-q').removeClass('flex').addClass('hidden');
            }
            if (diff == 'easy') {
                $('#question-choices').removeClass('hidden').addClass('grid');
                $('#choice-a').html(easy_choices[type + 'a'][num - 1]);
                $('#choice-b').html(easy_choices[type + 'b'][num - 1]);
                $('#choice-c').html(easy_choices[type + 'c'][num - 1]);
                $('#choice-d').html(easy_choices[type + 'd'][num - 1]);
            } else {
                $('#question-choices').removeClass('grid').addClass('hidden');
            }
            $('#answer').val(null);
            c_diff = diff;
            c_type = type;
            c_num = num;
            if (diff == 'easy') {
                questions = easy;
            } else if (diff == 'medium') {
                questions = medium;
            } else if (diff == 'hard') {
                questions = hard;
            }
            $('#qr-hard-' + type).addClass('hidden').removeClass('block');
            $('#question-text').html(null);
            if (diff == 'hard') {
                //ganti qr code seems gud
                $('#qr-hard-' + type).removeClass('hidden').addClass('block');
            } else {
                $('#question-text').html(questions[type][num - 1]);
            }
            openHUD('#question');
        }

        function submitAnswer() {
            $.post('{{ config('app.url') }}' + "/escape/submit-answer", {
                _token: CSRF_TOKEN,
                answer: $('#answer').val(),
                difficulty: c_diff,
                number: c_num,
                id: {{ Auth::id() }}
            }).done(function(result) {
                closeHUD();
                $('#paper-' + c_diff + c_num).addClass('hidden');
            });
        }

        function submitReferral() {
            $.post('{{ config('app.url') }}' + "/escape/submit-referral", {
                _token: CSRF_TOKEN,
                code: $('#referral').val(),
                id: {{ Auth::id() }}
            }).done(function(result) {
                if (result == 1) {
                    $('#referral-button').html('CORRECT');
                    $('#referral-button').css('background-color', '#1db954');
                    $('#referral-button').prop('disabled', true);
                    $('#map-false').addClass('hidden');
                    $('#map-true').removeClass('hidden').addClass('block');
                } else {
                    $('#referral-button').html('WRONG')
                    $('#referral-button').prop('disabled', true);
                    setTimeout(function() {
                        $('#referral-button').html('Submit')
                        $('#referral-button').prop('disabled', false);
                    }, 1000);
                }
            });
        }
    </script>
    <script>
        function plusAmount(id) {
            $('#amount-' + id).get(0).value++
        }

        function minAmount(id) {
            if ($('#amount-' + id).val() > 0) {
                $('#amount-' + id).get(0).value--
            }
        }
    </script>
    @yield('scripts')
</body>

</html>
