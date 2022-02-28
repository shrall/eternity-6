@extends('layouts.escape')

@section('content')
    <div class="w-full h-full overflow-hidden bg-eternity-6-black" id="map-container">
        <div id="last-screen"
            class="w-full h-full @if (Auth::user()->finish == 0) hidden @else flex @endif flex-col items-center justify-center gap-4">
            <img src="{{ asset('svg/e-logo.svg') }}" class="w-48">
            <div class="text-4xl">Congratulations!</div>
            <div class="text-2xl">Your Rank : <span id="player-rank">{{ Auth::user()->finish }}</span></div>
        </div>
        <div class="dragged relative mt-16 mx-4 @if (Auth::user()->finish == 0) block @else hidden @endif" id="sea"
            style="transform: translate(-106.68px, -1052.11px);">
            <div class="text-3xl text-center cursor-pointer hover:text-eternity-6-orange" onclick="openFinish();">FINISH
            </div>
            @if (Auth::user()->chl3 == 0)
                <hr id="border-chl3" onclick="openChallenge(3);"
                    class="absolute border-eternity-6-orange z-10 cursor-pointer hover:opacity-75 border-4"
                    style="top: 21rem; left: 9rem; width:72rem;">
            @endif
            @if (Auth::user()->chl2 == 0)
                <hr id="border-chl2" onclick="openChallenge(2);"
                    class="absolute w-full border-eternity-6-orange z-10 cursor-pointer hover:opacity-75 border-4"
                    style="top: 42rem;">
            @endif
            @if (Auth::user()->chl1 == 0)
                <hr id="border-chl1" onclick="openChallenge(1);"
                    class="absolute w-full border-eternity-6-orange z-10 cursor-pointer hover:opacity-75 border-4"
                    style="top: 66rem;">
            @endif
            <div class="board-block bg-eternity-6-brown" id="10-30" style="top:  3rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-30" style="top:  3rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-30" style="top:  3rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-30" style="top:  3rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-30" style="top:  3rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-30" style="top:  3rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-30" style="top:  3rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-30" style="top:  3rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-30" style="top:  3rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-30" style="top:  3rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-30" style="top:  3rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-30" style="top:  3rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-29" style="top:  6rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-29" style="top:  6rem; left:27rem;"></div>
            <div class="board-block bg-e-flower" id="11-29" style="top:  6rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-29" style="top:  6rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-29" style="top:  6rem; left:36rem;"></div>
            <div onclick="getMap('map20')"
                class="board-block @if (Auth::user()->map20 == 0) imap bg-map-20a @else bg-eternity-6-brown @endif"
                id="14-29" data-map="20" style="top:  6rem; left:39rem;"></div>
            <div class="board-block bg-e-flower" id="15-29" style="top:  6rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-29" style="top:  6rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-29" style="top:  6rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-29" style="top:  6rem; left:51rem;"></div>
            <div class="board-block bg-e-flower" id="19-29" style="top:  6rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-29" style="top:  6rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-29" style="top:  6rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-29" style="top:  6rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-28" style="top:  9rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-28" style="top:  9rem; left:24rem;"></div>
            <div onclick="getMap('map19')"
                class="board-block @if (Auth::user()->map19 == 0) imap bg-map-19a @else bg-eternity-6-brown @endif"
                id="10-28" data-map="19" style="top:  9rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-28" style="top:  9rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-28" style="top:  9rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-28" style="top:  9rem; left:36rem;"></div>
            <div class="board-block bg-e-flower" id="14-28" style="top:  9rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-28" style="top:  9rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-28" style="top:  9rem; left:45rem;"></div>
            <div class="board-block bg-e-flower" id="17-28" style="top:  9rem; left:48rem;"></div>
            <div class="board-block bg-e-flower" id="18-28" style="top:  9rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-28" style="top:  9rem; left:54rem;"></div>
            <div class="board-block bg-e-flower" id="20-28" style="top:  9rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-28" style="top:  9rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-28" style="top:  9rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-28" style="top:  9rem; left:66rem;"></div>
            <div onclick="getMap('map18')"
                class="board-block @if (Auth::user()->map18 == 0) imap bg-map-18a @else bg-eternity-6-brown @endif"
                id="07-27" data-map="18" style="top: 12rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-27" style="top: 12rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-27" style="top: 12rem; left:24rem;"></div>
            <div class="board-block bg-e-flower" id="10-27" style="top: 12rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-27" style="top: 12rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-27" style="top: 12rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-27" style="top: 12rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-27" style="top: 12rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-27" style="top: 12rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-27" style="top: 12rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-27" style="top: 12rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-27" style="top: 12rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-27" style="top: 12rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-27" style="top: 12rem; left:57rem;"></div>
            <div class="board-block bg-e-flower" id="21-27" style="top: 12rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-27" style="top: 12rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-27" style="top: 12rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-27" style="top: 12rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-26" style="top: 15rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-26" style="top: 15rem; left:18rem;"></div>
            <div class="board-block bg-e-flower" id="08-26" style="top: 15rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-26" style="top: 15rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-26" style="top: 15rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-26" style="top: 15rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-26" style="top: 15rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-26" style="top: 15rem; left:36rem;"></div>
            <div onclick="getMap('map17')"
                class="board-block @if (Auth::user()->map17 == 0) imap bg-map-17b @else bg-eternity-6-brown @endif"
                id="14-26" data-map="17" style="top: 15rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-26" style="top: 15rem; left:42rem;"></div>
            <div class="board-block bg-e-flower" id="16-26" style="top: 15rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-26" style="top: 15rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-26" style="top: 15rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-26" style="top: 15rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-26" style="top: 15rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-26" style="top: 15rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-26" style="top: 15rem; left:63rem;"></div>
            <div class="board-block bg-e-flower" id="23-26" style="top: 15rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-26" style="top: 15rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-26" style="top: 15rem; left:72rem;"></div>
            <div onclick="getMap('map16')"
                class="board-block @if (Auth::user()->map16 == 0) imap bg-map-10b @else bg-eternity-6-brown @endif"
                id="05-25" data-map="16" style="top: 18rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-25" style="top: 18rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-25" style="top: 18rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-25" style="top: 18rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-25" style="top: 18rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-25" style="top: 18rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-25" style="top: 18rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-25" style="top: 18rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-25" style="top: 18rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-25" style="top: 18rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-25" style="top: 18rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-25" style="top: 18rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-25" style="top: 18rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-25" style="top: 18rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-25" style="top: 18rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-25" style="top: 18rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-25" style="top: 18rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-25" style="top: 18rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-25" style="top: 18rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-25" style="top: 18rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-25" style="top: 18rem; left:72rem;"></div>
            <div onclick="getMap('map15')"
                class="board-block @if (Auth::user()->map15 == 0) imap bg-map-15b @else bg-eternity-6-brown @endif"
                data-map="15" id="26-25" style="top: 18rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-24" style="top: 21rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-24" style="top: 21rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-24" style="top: 21rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-24" style="top: 21rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-24" style="top: 21rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-24" style="top: 21rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-24" style="top: 21rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-24" style="top: 21rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-24" style="top: 21rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-24" style="top: 21rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-24" style="top: 21rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-24" style="top: 21rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-24" style="top: 21rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-24" style="top: 21rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-24" style="top: 21rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-24" style="top: 21rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-24" style="top: 21rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-24" style="top: 21rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-24" style="top: 21rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-24" style="top: 21rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-24" style="top: 21rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-24" style="top: 21rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-24" style="top: 21rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-24" style="top: 21rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-23" style="top: 24rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-23" style="top: 24rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-23" style="top: 24rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-23" style="top: 24rem; left:15rem;"></div>
            <div onclick="getMap('map13')"
                class="board-block @if (Auth::user()->map13 == 0) imap bg-map-13b @else bg-eternity-6-brown @endif"
                data-map="13" id="07-23" style="top: 24rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-23" style="top: 24rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-23" style="top: 24rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-23" style="top: 24rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-23" style="top: 24rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-23" style="top: 24rem; left:33rem;"></div>
            <div class="board-block bg-e-flower" id="13-23" style="top: 24rem; left:36rem;"></div>
            <div class="board-block bg-e-flower" id="14-23" style="top: 24rem; left:39rem;"></div>
            <div class="board-block bg-e-flower" id="15-23" style="top: 24rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-23" style="top: 24rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-23" style="top: 24rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-23" style="top: 24rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-23" style="top: 24rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-23" style="top: 24rem; left:57rem;"></div>
            <div onclick="getMap('map14')"
                class="board-block @if (Auth::user()->map14 == 0) imap bg-map-14b @else bg-eternity-6-brown @endif"
                data-map="14" id="21-23" style="top: 24rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-23" style="top: 24rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-23" style="top: 24rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-23" style="top: 24rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-23" style="top: 24rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-23" style="top: 24rem; left:75rem;"></div>
            <div onclick="getMap('map12')"
                class="board-block @if (Auth::user()->map12 == 0) imap bg-map-12b @else bg-eternity-6-brown @endif"
                data-map="12" id="27-23" style="top: 24rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-23" style="top: 24rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-22" style="top: 27rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-22" style="top: 27rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-22" style="top: 27rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-22" style="top: 27rem; left:12rem;"></div>
            <div class="board-block bg-e-flower" id="06-22" style="top: 27rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-22" style="top: 27rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-22" style="top: 27rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-22" style="top: 27rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-22" style="top: 27rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-22" style="top: 27rem; left:30rem;"></div>
            <div class="board-block bg-e-flower" id="12-22" style="top: 27rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-22" style="top: 27rem; left:36rem;"></div>
            <div onclick="getMap('map11')"
                class="board-block @if (Auth::user()->map11 == 0) imap bg-map-11b @else bg-eternity-6-brown @endif"
                data-map="11" id="14-22" style="top: 27rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-22" style="top: 27rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-22" style="top: 27rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-22" style="top: 27rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-22" style="top: 27rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-22" style="top: 27rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-22" style="top: 27rem; left:57rem;"></div>
            <div class="board-block bg-e-flower" id="21-22" style="top: 27rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-22" style="top: 27rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-22" style="top: 27rem; left:66rem;"></div>
            <div class="board-block bg-e-flower" id="24-22" style="top: 27rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-22" style="top: 27rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-22" style="top: 27rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-22" style="top: 27rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-22" style="top: 27rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-22" style="top: 27rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-21" style="top: 30rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-21" style="top: 30rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-21" style="top: 30rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-21" style="top: 30rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-21" style="top: 30rem; left:12rem;"></div>
            <div onclick="getMap('map10')"
                class="board-block @if (Auth::user()->map10 == 0) imap bg-map-10a @else bg-eternity-6-brown @endif"
                data-map="10" id="06-21" style="top: 30rem; left:15rem;"></div>
            <div class="board-block bg-e-flower" id="07-21" style="top: 30rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-21" style="top: 30rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-21" style="top: 30rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-21" style="top: 30rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-21" style="top: 30rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-21" style="top: 30rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-21" style="top: 30rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-21" style="top: 30rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-21" style="top: 30rem; left:42rem;"></div>
            <div class="board-block bg-e-flower" id="16-21" style="top: 30rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-21" style="top: 30rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-21" style="top: 30rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-21" style="top: 30rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-21" style="top: 30rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-21" style="top: 30rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-21" style="top: 30rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-21" style="top: 30rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-21" style="top: 30rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-21" style="top: 30rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-21" style="top: 30rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-21" style="top: 30rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-21" style="top: 30rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-21" style="top: 30rem; left:84rem;"></div>
            <div onclick="getMap('map9')"
                class="board-block  @if (Auth::user()->map9 == 0) imap bg-map-6b @else bg-eternity-6-brown @endif"
                data-map="9" id="30-21" style="top: 30rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-20" style="top: 33rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-20" style="top: 33rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-20" style="top: 33rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-20" style="top: 33rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-20" style="top: 33rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-20" style="top: 33rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-20" style="top: 33rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-20" style="top: 33rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-20" style="top: 33rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-20" style="top: 33rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-20" style="top: 33rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-20" style="top: 33rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-20" style="top: 33rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-20" style="top: 33rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-20" style="top: 33rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-20" style="top: 33rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-20" style="top: 33rem; left:48rem;"></div>
            <div class="board-block bg-e-flower" id="18-20" style="top: 33rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-20" style="top: 33rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-20" style="top: 33rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-20" style="top: 33rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-20" style="top: 33rem; left:63rem;"></div>
            <div class="board-block bg-e-flower" id="23-20" style="top: 33rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-20" style="top: 33rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-20" style="top: 33rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-20" style="top: 33rem; left:75rem;"></div>
            <div onclick="getMap('map8')"
                class="board-block @if (Auth::user()->map8 == 0) imap bg-map-8b @else bg-eternity-6-brown @endif"
                data-map="8" id="27-20" style="top: 33rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-20" style="top: 33rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-20" style="top: 33rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-20" style="top: 33rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-19" style="top: 36rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-19" style="top: 36rem; left: 3rem;"></div>
            <div class="board-block bg-e-flower" id="03-19" style="top: 36rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-19" style="top: 36rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-19" style="top: 36rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-19" style="top: 36rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-19" style="top: 36rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-19" style="top: 36rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-19" style="top: 36rem; left:24rem;"></div>
            <div class="board-block bg-e-flower" id="10-19" style="top: 36rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-19" style="top: 36rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-19" style="top: 36rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-19" style="top: 36rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-19" style="top: 36rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-19" style="top: 36rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-19" style="top: 36rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-19" style="top: 36rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-19" style="top: 36rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-19" style="top: 36rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-19" style="top: 36rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-19" style="top: 36rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-19" style="top: 36rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-19" style="top: 36rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-19" style="top: 36rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-19" style="top: 36rem; left:72rem;"></div>
            <div class="board-block bg-e-flower" id="26-19" style="top: 36rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-19" style="top: 36rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-19" style="top: 36rem; left:81rem;"></div>
            <div class="board-block bg-e-flower" id="29-19" style="top: 36rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-19" style="top: 36rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-18" style="top: 39rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-18" style="top: 39rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-18" style="top: 39rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-18" style="top: 39rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-18" style="top: 39rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-18" style="top: 39rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-18" style="top: 39rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-18" style="top: 39rem; left:21rem;"></div>
            <div onclick="getMap('map7')"
                class="board-block @if (Auth::user()->map7 == 0) imap bg-map-2b @else bg-eternity-6-brown @endif"
                data-map="7" id="09-18" style="top: 39rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-18" style="top: 39rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-18" style="top: 39rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-18" style="top: 39rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-18" style="top: 39rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-18" style="top: 39rem; left:39rem;"></div>
            <div class="board-block bg-e-flower" id="15-18" style="top: 39rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-18" style="top: 39rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-18" style="top: 39rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-18" style="top: 39rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-18" style="top: 39rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-18" style="top: 39rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-18" style="top: 39rem; left:60rem;"></div>
            <div class="board-block bg-e-flower" id="22-18" style="top: 39rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-18" style="top: 39rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-18" style="top: 39rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-18" style="top: 39rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-18" style="top: 39rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-18" style="top: 39rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-18" style="top: 39rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-18" style="top: 39rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-18" style="top: 39rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-17" style="top: 42rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-17" style="top: 42rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-17" style="top: 42rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-17" style="top: 42rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-17" style="top: 42rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-17" style="top: 42rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-17" style="top: 42rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-17" style="top: 42rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-17" style="top: 42rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-17" style="top: 42rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-17" style="top: 42rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-17" style="top: 42rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-17" style="top: 42rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-17" style="top: 42rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-17" style="top: 42rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-17" style="top: 42rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-17" style="top: 42rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-17" style="top: 42rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-17" style="top: 42rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-17" style="top: 42rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-17" style="top: 42rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-17" style="top: 42rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-17" style="top: 42rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-17" style="top: 42rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-17" style="top: 42rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-17" style="top: 42rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-17" style="top: 42rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-17" style="top: 42rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-17" style="top: 42rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-17" style="top: 42rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-16" style="top: 45rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-16" style="top: 45rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-16" style="top: 45rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-16" style="top: 45rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-16" style="top: 45rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-16" style="top: 45rem; left:15rem;"></div>
            <div class="board-block bg-e-flower" id="07-16" style="top: 45rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-16" style="top: 45rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-16" style="top: 45rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-16" style="top: 45rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-16" style="top: 45rem; left:30rem;"></div>
            <div class="board-block bg-e-flower" id="12-16" style="top: 45rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-16" style="top: 45rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-16" style="top: 45rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-16" style="top: 45rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-16" style="top: 45rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-16" style="top: 45rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-16" style="top: 45rem; left:51rem;"></div>
            <div onclick="getMap('map6')"
                class="board-block @if (Auth::user()->map6 == 0) imap bg-map-6a @else bg-eternity-6-brown @endif"
                data-map="6" id="19-16" style="top: 45rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-16" style="top: 45rem; left:57rem;"></div>
            <div class="board-block bg-e-flower" id="21-16" style="top: 45rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-16" style="top: 45rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-16" style="top: 45rem; left:66rem;"></div>
            <div onclick="getMap('map5')"
                class="board-block @if (Auth::user()->map5 == 0) imap bg-map-5a @else bg-eternity-6-brown @endif"
                data-map="5" id="24-16" style="top: 45rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-16" style="top: 45rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-16" style="top: 45rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-16" style="top: 45rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-16" style="top: 45rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-16" style="top: 45rem; left:84rem;"></div>
            <div class="board-block bg-e-flower" id="30-16" style="top: 45rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-15" style="top: 48rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-15" style="top: 48rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-15" style="top: 48rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-15" style="top: 48rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-15" style="top: 48rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-15" style="top: 48rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-15" style="top: 48rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-15" style="top: 48rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-15" style="top: 48rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-15" style="top: 48rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-15" style="top: 48rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-15" style="top: 48rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-15" style="top: 48rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-15" style="top: 48rem; left:39rem;"></div>
            <div class="board-block bg-e-flower" id="15-15" style="top: 48rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-15" style="top: 48rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-15" style="top: 48rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-15" style="top: 48rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-15" style="top: 48rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-15" style="top: 48rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-15" style="top: 48rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-15" style="top: 48rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-15" style="top: 48rem; left:66rem;"></div>
            <div class="board-block bg-e-flower" id="24-15" style="top: 48rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-15" style="top: 48rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-15" style="top: 48rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-15" style="top: 48rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-15" style="top: 48rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-15" style="top: 48rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-15" style="top: 48rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-14" style="top: 51rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-14" style="top: 51rem; left: 3rem;"></div>
            <div class="board-block bg-e-flower" id="03-14" style="top: 51rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-14" style="top: 51rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-14" style="top: 51rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-14" style="top: 51rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-14" style="top: 51rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-14" style="top: 51rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-14" style="top: 51rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-14" style="top: 51rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-14" style="top: 51rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-14" style="top: 51rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-14" style="top: 51rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-14" style="top: 51rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-14" style="top: 51rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-14" style="top: 51rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-14" style="top: 51rem; left:48rem;"></div>
            <div class="board-block bg-e-flower" id="18-14" style="top: 51rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-14" style="top: 51rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-14" style="top: 51rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-14" style="top: 51rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-14" style="top: 51rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-14" style="top: 51rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-14" style="top: 51rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-14" style="top: 51rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-14" style="top: 51rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-14" style="top: 51rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-14" style="top: 51rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-14" style="top: 51rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-14" style="top: 51rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-13" style="top: 54rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-13" style="top: 54rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-13" style="top: 54rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-13" style="top: 54rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-13" style="top: 54rem; left:12rem;"></div>
            <div onclick="getMap('map3')"
                class="board-block @if (Auth::user()->map3 == 0) imap bg-map-3a @else bg-eternity-6-brown @endif"
                data-map="3" id="06-13" style="top: 54rem; left:15rem;"></div>
            <div class="board-block bg-e-flower" id="07-13" style="top: 54rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-13" style="top: 54rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-13" style="top: 54rem; left:24rem;"></div>
            <div class="board-block bg-e-flower" id="10-13" style="top: 54rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-13" style="top: 54rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-13" style="top: 54rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-13" style="top: 54rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-13" style="top: 54rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-13" style="top: 54rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-13" style="top: 54rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-13" style="top: 54rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-13" style="top: 54rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-13" style="top: 54rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-13" style="top: 54rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-13" style="top: 54rem; left:60rem;"></div>
            <div class="board-block bg-e-flower" id="22-13" style="top: 54rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-13" style="top: 54rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-13" style="top: 54rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-13" style="top: 54rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-13" style="top: 54rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-13" style="top: 54rem; left:78rem;"></div>
            <div class="board-block bg-e-flower" id="28-13" style="top: 54rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-13" style="top: 54rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-13" style="top: 54rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-12" style="top: 57rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-12" style="top: 57rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-12" style="top: 57rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-12" style="top: 57rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-12" style="top: 57rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-12" style="top: 57rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-12" style="top: 57rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-12" style="top: 57rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-12" style="top: 57rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-12" style="top: 57rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-12" style="top: 57rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-12" style="top: 57rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-12" style="top: 57rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-12" style="top: 57rem; left:39rem;"></div>
            <div onclick="getMap('map4')"
                class="board-block @if (Auth::user()->map4 == 0) imap bg-map-4a @else bg-eternity-6-brown @endif"
                data-map="4" id="15-12" style="top: 57rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-12" style="top: 57rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-12" style="top: 57rem; left:48rem;"></div>
            <div class="board-block bg-e-flower" id="18-12" style="top: 57rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-12" style="top: 57rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-12" style="top: 57rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-12" style="top: 57rem; left:60rem;"></div>
            <div class="board-block bg-e-flower" id="22-12" style="top: 57rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-12" style="top: 57rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-12" style="top: 57rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-12" style="top: 57rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-12" style="top: 57rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-12" style="top: 57rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-12" style="top: 57rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-12" style="top: 57rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-12" style="top: 57rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-11" style="top: 60rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-11" style="top: 60rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-11" style="top: 60rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-11" style="top: 60rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-11" style="top: 60rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-11" style="top: 60rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-11" style="top: 60rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-11" style="top: 60rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-11" style="top: 60rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-11" style="top: 60rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-11" style="top: 60rem; left:30rem;"></div>
            <div class="board-block bg-e-flower" id="12-11" style="top: 60rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-11" style="top: 60rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-11" style="top: 60rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-11" style="top: 60rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-11" style="top: 60rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-11" style="top: 60rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-11" style="top: 60rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-11" style="top: 60rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-11" style="top: 60rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-11" style="top: 60rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-11" style="top: 60rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-11" style="top: 60rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-11" style="top: 60rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-11" style="top: 60rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-11" style="top: 60rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-11" style="top: 60rem; left:78rem;"></div>
            <div class="board-block bg-e-flower" id="28-11" style="top: 60rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="29-11" style="top: 60rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-11" style="top: 60rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="01-10" style="top: 63rem; left: 0rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-10" style="top: 63rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-10" style="top: 63rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-10" style="top: 63rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-10" style="top: 63rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-10" style="top: 63rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-10" style="top: 63rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-10" style="top: 63rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-10" style="top: 63rem; left:24rem;"></div>
            <div class="board-block bg-e-flower" id="10-10" style="top: 63rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-10" style="top: 63rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-10" style="top: 63rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-10" style="top: 63rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-10" style="top: 63rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-10" style="top: 63rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-10" style="top: 63rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-10" style="top: 63rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-10" style="top: 63rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-10" style="top: 63rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-10" style="top: 63rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-10" style="top: 63rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-10" style="top: 63rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-10" style="top: 63rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-10" style="top: 63rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-10" style="top: 63rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-10" style="top: 63rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-10" style="top: 63rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-10" style="top: 63rem; left:81rem;"></div>
            <div class="board-block bg-e-flower" id="29-10" style="top: 63rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="30-10" style="top: 63rem; left:87rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="02-09" style="top: 66rem; left: 3rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-09" style="top: 66rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-09" style="top: 66rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-09" style="top: 66rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-09" style="top: 66rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-09" style="top: 66rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-09" style="top: 66rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-09" style="top: 66rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-09" style="top: 66rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-09" style="top: 66rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-09" style="top: 66rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-09" style="top: 66rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-09" style="top: 66rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-09" style="top: 66rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-09" style="top: 66rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-09" style="top: 66rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-09" style="top: 66rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-09" style="top: 66rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-09" style="top: 66rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-09" style="top: 66rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-09" style="top: 66rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-09" style="top: 66rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-09" style="top: 66rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-09" style="top: 66rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-09" style="top: 66rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-09" style="top: 66rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-09" style="top: 66rem; left:81rem;"></div>
            <div onclick="getMap('map2')"
                class="board-block @if (Auth::user()->map2 == 0) imap bg-map-2a @else bg-eternity-6-brown @endif"
                data-map="2" id="29-09" style="top: 66rem; left:84rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="03-08" style="top: 69rem; left: 6rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-08" style="top: 69rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-08" style="top: 69rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-08" style="top: 69rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-08" style="top: 69rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-08" style="top: 69rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-08" style="top: 69rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-08" style="top: 69rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-08" style="top: 69rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-08" style="top: 69rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-08" style="top: 69rem; left:36rem;"></div>
            <div class="board-block bg-e-flower" id="14-08" style="top: 69rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-08" style="top: 69rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-08" style="top: 69rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-08" style="top: 69rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-08" style="top: 69rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-08" style="top: 69rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-08" style="top: 69rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-08" style="top: 69rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-08" style="top: 69rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-08" style="top: 69rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-08" style="top: 69rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-08" style="top: 69rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-08" style="top: 69rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-08" style="top: 69rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="28-08" style="top: 69rem; left:81rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="04-07" style="top: 72rem; left: 9rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-07" style="top: 72rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-07" style="top: 72rem; left:15rem;"></div>
            <div class="board-block bg-e-flower" id="07-07" style="top: 72rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-07" style="top: 72rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-07" style="top: 72rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-07" style="top: 72rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-07" style="top: 72rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-07" style="top: 72rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-07" style="top: 72rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-07" style="top: 72rem; left:39rem;"></div>
            <div class="board-block bg-e-flower" id="15-07" style="top: 72rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-07" style="top: 72rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-07" style="top: 72rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-07" style="top: 72rem; left:51rem;"></div>
            <div class="board-block bg-e-flower" id="19-07" style="top: 72rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-07" style="top: 72rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-07" style="top: 72rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-07" style="top: 72rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-07" style="top: 72rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-07" style="top: 72rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-07" style="top: 72rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="26-07" style="top: 72rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="27-07" style="top: 72rem; left:78rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="05-06" style="top: 75rem; left:12rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-06" style="top: 75rem; left:15rem;"></div>
            <div class="board-block bg-e-flower" id="07-06" style="top: 75rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-06" style="top: 75rem; left:21rem;"></div>
            <div class="board-block bg-e-flower" id="09-06" style="top: 75rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-06" style="top: 75rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-06" style="top: 75rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-06" style="top: 75rem; left:33rem;"></div>
            <div class="board-block bg-e-flower" id="13-06" style="top: 75rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-06" style="top: 75rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-06" style="top: 75rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-06" style="top: 75rem; left:45rem;"></div>
            <div class="board-block bg-e-flower" id="17-06" style="top: 75rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-06" style="top: 75rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-06" style="top: 75rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-06" style="top: 75rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-06" style="top: 75rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-06" style="top: 75rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-06" style="top: 75rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-06" style="top: 75rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-06" style="top: 75rem; left:72rem;"></div>
            <div class="board-block bg-e-flower" id="26-06" style="top: 75rem; left:75rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="06-05" style="top: 78rem; left:15rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-05" style="top: 78rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-05" style="top: 78rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-05" style="top: 78rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-05" style="top: 78rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-05" style="top: 78rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-05" style="top: 78rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-05" style="top: 78rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-05" style="top: 78rem; left:39rem;"></div>
            <div class="board-block bg-e-flower" id="15-05" style="top: 78rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-05" style="top: 78rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-05" style="top: 78rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-05" style="top: 78rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-05" style="top: 78rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-05" style="top: 78rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-05" style="top: 78rem; left:60rem;"></div>
            <div class="board-block bg-e-flower" id="22-05" style="top: 78rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-05" style="top: 78rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-05" style="top: 78rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="25-05" style="top: 78rem; left:72rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="07-04" style="top: 81rem; left:18rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-04" style="top: 81rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-04" style="top: 81rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-04" style="top: 81rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-04" style="top: 81rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-04" style="top: 81rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-04" style="top: 81rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-04" style="top: 81rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-04" style="top: 81rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-04" style="top: 81rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-04" style="top: 81rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-04" style="top: 81rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-04" style="top: 81rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-04" style="top: 81rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-04" style="top: 81rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-04" style="top: 81rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-04" style="top: 81rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="24-04" style="top: 81rem; left:69rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="08-03" style="top: 84rem; left:21rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-03" style="top: 84rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-03" style="top: 84rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-03" style="top: 84rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-03" style="top: 84rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-03" style="top: 84rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-03" style="top: 84rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-03" style="top: 84rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-03" style="top: 84rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-03" style="top: 84rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-03" style="top: 84rem; left:51rem;"></div>
            <div class="board-block bg-e-flower" id="19-03" style="top: 84rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-03" style="top: 84rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-03" style="top: 84rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-03" style="top: 84rem; left:63rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="23-03" style="top: 84rem; left:66rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="09-02" style="top: 87rem; left:24rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="10-02" style="top: 87rem; left:27rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="11-02" style="top: 87rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-02" style="top: 87rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-02" style="top: 87rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-02" style="top: 87rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-02" style="top: 87rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-02" style="top: 87rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-02" style="top: 87rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-02" style="top: 87rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-02" style="top: 87rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-02" style="top: 87rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-02" style="top: 87rem; left:60rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="22-02" style="top: 87rem; left:63rem;"></div>
            <div onclick="getMap('map1')"
                class="board-block @if (Auth::user()->map1 == 0) imap bg-map-1a @else bg-eternity-6-brown @endif"
                data-map="1" id="10-01" style="top: 90rem; left:27rem;"></div>
            <div class="board-block bg-e-flower" id="11-01" style="top: 90rem; left:30rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="12-01" style="top: 90rem; left:33rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="13-01" style="top: 90rem; left:36rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="14-01" style="top: 90rem; left:39rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="15-01" style="top: 90rem; left:42rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="16-01" style="top: 90rem; left:45rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="17-01" style="top: 90rem; left:48rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="18-01" style="top: 90rem; left:51rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="19-01" style="top: 90rem; left:54rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="20-01" style="top: 90rem; left:57rem;"></div>
            <div class="board-block bg-eternity-6-brown" id="21-01" style="top: 90rem; left:60rem;"></div>
            <div id="user-position" class="absolute z-20 w-12 h-12 bg-pion bg-cover" style="top: 90rem; left:42rem;">
            </div>
            <div class="text-3xl text-center cursor-pointer" style="margin-top: 91rem;">START</div>
        </div>
        <div
            class=" @if (Auth::user()->finish == 0) flex @else hidden @endif dice-things absolute bottom-24 border border-eternity-6-gray bg-eternity-6-black mx-auto left-0 right-0 w-60 text-lg items-center justify-center">
            Countdown : <span id="dice-cooldown">0</span>
        </div>
        <div id="dice-button"
            class="dice-things absolute bottom-0 border border-eternity-6-gray bg-eternity-6-black mx-auto left-0 right-0 w-32 h-24 text-xl @if (Auth::user()->finish == 0) flex @else hidden @endif items-center justify-center hover:text-eternity-6-orange cursor-pointer">
            <span class="w-16 h-16 flex items-center justify-center text-center bg-no-repeat bg-center" id="dice-info"
                onclick="rollDice();">Roll
                Dice</span>
        </div>
    </div>
@endsection

@section('modals')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="warning-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
            onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="flex items-center justify-center">
                <div class="text-4xl" id="warning-message"></div>
            </div>
        </div>
    </div>
    @if (session('Message'))
        <div class="absolute w-screen h-screen flex items-center justify-center modal" id="failed-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div
                class="w-vw-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
                <div class="flex items-center justify-center">
                    <div class="text-4xl">{{ session('Message') }}</div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('scripts')
    <script>
        const position = {
            x: -106.68,
            y: -1052.11
        }

        interact('.dragged').draggable({
            listeners: {
                start(event) {},
                move(event) {
                    position.x += event.dx
                    position.y += event.dy

                    event.target.style.transform =
                        `translate(${position.x}px, ${position.y}px)`
                },
            },
            modifiers: [
                interact.modifiers.restrict({
                    restriction: '#map-container',
                    endOnly: true
                })
            ]
        })
    </script>
    <script>
        function rollDice() {
            if (animCounter == 0 && diceTimer == 0 && diceRes == 0 && !magnetbool) {
                $('#dice-info').html(null);
                diceTimer = 10;
                resetDiceBoard();
                diceAnimate();
            } else {
                openModal('warning');
                if (diceTimer != 0) {
                    $('#warning-message').html('Please Wait ' + diceTimer + ' Seconds.')
                } else if (diceRes != 0) {
                    $('#warning-message').html('Select A Tile To Move First.')
                } else if (magnetbool) {
                    $('#warning-message').html('Please Use Your Current Item First.')
                }
            }
        }
        var diceTimer = 0;

        function reduceTimer() {
            if (diceTimer > 0) {
                diceTimer -= 1;
            }
            $('#dice-cooldown').html(' ' + diceTimer);
            setTimeout(reduceTimer, 1000);
        }
        reduceTimer();
        var animCounter = 0;

        function diceAnimate() {
            $('#dice-info').addClass('bg-dice-1').removeClass('bg-dice-6').removeClass('bg-timestwo');
            setTimeout(function() {
                $('#dice-info').addClass('bg-dice-2').removeClass('bg-dice-1');
                setTimeout(function() {
                    $('#dice-info').addClass('bg-dice-3').removeClass('bg-dice-2');
                    setTimeout(function() {
                        $('#dice-info').addClass('bg-dice-4').removeClass('bg-dice-3');
                        setTimeout(function() {
                            $('#dice-info').addClass('bg-dice-5').removeClass(
                                'bg-dice-4');
                            setTimeout(function() {
                                $('#dice-info').addClass('bg-dice-6')
                                    .removeClass(
                                        'bg-dice-5');
                                animCounter++;
                                if (animCounter < 19) {
                                    diceAnimate();
                                } else {
                                    getDice();
                                    animCounter = 0;
                                }
                            }, 100);
                        }, 100);
                    }, 100);
                }, 100);
            }, 100);
        }

        var diceRes = 0;
        var timestwobool = false;

        function getDice() {
            $('#dice-info').removeClass('bg-dice-1').removeClass('bg-dice-2').removeClass('bg-dice-3').removeClass(
                'bg-dice-4').removeClass('bg-dice-5').removeClass('bg-dice-6');

            diceRes = Math.floor((Math.random() * 6) + 1)
            if (timestwobool) {
                diceRes = diceRes * 2;
            }
            getMovement(diceRes);
        }

        var chl1 = @json(Auth::user()->chl1);
        var chl2 = @json(Auth::user()->chl2);
        var chl3 = @json(Auth::user()->chl3);

        function getMovement(diceRoll) {
            if (timestwobool) {
                $('#dice-info').addClass('bg-dice-' + (diceRoll / 2))
            } else {
                $('#dice-info').addClass('bg-dice-' + (diceRoll))
            }
            for (let index = 1; index <= diceRoll; index++) {
                x_math_plus = (parseInt(player_x_id) + index);
                if (x_math_plus < 10) {
                    x_math_plus = '0' + x_math_plus
                }
                if ($('#' + x_math_plus + '-' + player_y_id).hasClass('bg-e-flower')) {
                    break;
                }
                $('#' + x_math_plus + '-' + player_y_id).addClass('bg-eternity-6-orange').removeClass(
                    'bg-eternity-6-brown');
            }
            for (let index = 1; index <= diceRoll; index++) {
                x_math_min = (parseInt(player_x_id) - index);
                if (x_math_min < 10) {
                    x_math_min = '0' + x_math_min
                }
                if ($('#' + x_math_min + '-' + player_y_id).hasClass('bg-e-flower')) {
                    break;
                }
                $('#' + x_math_min + '-' + player_y_id).addClass('bg-eternity-6-orange').removeClass(
                    'bg-eternity-6-brown');
            }
            for (let index = 1; index <= diceRoll; index++) {
                y_math_plus = (parseInt(player_y_id) + index);
                if (y_math_plus < 10) {
                    y_math_plus = '0' + y_math_plus
                }
                if (chl1 == 0 && y_math_plus >= 10) {
                    break;
                }
                if (chl2 == 0 && y_math_plus >= 18) {
                    break;
                }
                if (chl3 == 0 && y_math_plus >= 25) {
                    break;
                }
                if ($('#' + player_x_id + '-' + y_math_plus).hasClass('bg-e-flower')) {
                    break;
                }
                $('#' + player_x_id + '-' + y_math_plus).addClass('bg-eternity-6-orange').removeClass(
                    'bg-eternity-6-brown');
            }
            for (let index = 1; index <= diceRoll; index++) {
                y_math_min = (parseInt(player_y_id) - index);
                if (y_math_min < 10) {
                    y_math_min = '0' + y_math_min
                }
                if ($('#' + player_x_id + '-' + y_math_min).hasClass('bg-e-flower')) {
                    break;
                }
                $('#' + player_x_id + '-' + y_math_min).addClass('bg-eternity-6-orange').removeClass(
                    'bg-eternity-6-brown');
            }
        }

        function resetDiceBoard() {
            $('.board-block').each(function() {
                $(this).removeClass('bg-eternity-6-orange').removeClass('bg-eternity-6-blue').addClass(
                    'bg-eternity-6-brown');
            })
        }

        var clicked_x = 0
        var clicked_y = 0
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $(".board-block").click(function() {
            if ($(this).hasClass('bg-eternity-6-orange')) {
                clicked_x = $(this).attr('id').split('-')[0];
                clicked_y = $(this).attr('id').split('-')[1];
                $.post('{{ config('app.url') }}' + "/escape/move-pos", {
                        _token: CSRF_TOKEN,
                        x: clicked_x,
                        y: clicked_y
                    })
                    .done(function(data) {})
                    .fail(function(e) {
                        console.log(e);
                    });
                player_x_id = clicked_x;
                player_y_id = clicked_y;
                $('#user-position').css('top', $(this).css('top'))
                $('#user-position').css('left', $(this).css('left'))
                resetDiceBoard();
                diceRes = 0;
                timestwobool = false;
            } else if ($(this).hasClass('bg-eternity-6-blue') && $(this).hasClass('imap')) {
                getMap('map' + $(this).data('map'))
                resetDiceBoard();
                magnetbool = false;
            } else if ($(this).hasClass('bg-eternity-6-blue')) {
                magnetbool = false;
                resetDiceBoard();
            }
        });

        function getMap(map) {
            if ($(event.target).hasClass('bg-eternity-6-orange') || $(event.target).hasClass('bg-eternity-6-blue')) {
                getItem(map);
                var tempstring = map[0] + map[1] + map[2] + "-" + map.substr(3, map.length)
                $(event.target).removeClass('bg-' + tempstring + 'a');
                $(event.target).removeClass('bg-' + tempstring + 'b');
            }
        }
    </script>
    <script>
        x = ['0', '3', '6', '9', '12', '15', '18', '21', '24', '27', '30', '33', '36', '39', '42', '45', '48', '51', '54',
            '57', '60', '63', '66', '69', '72', '75', '78', '81', '84', '87'
        ]
        y = ['3', '6', '9', '12', '15', '18', '21', '24', '27', '30', '33', '36', '39', '42', '45', '48', '51', '54',
            '57', '60', '63', '66', '69', '72', '75', '78', '81', '84', '87', '90'
        ]
        y.reverse()
        player_x_id = @json(Auth::user()->x);
        player_y_id = @json(Auth::user()->y);
        player_x_style = x[parseInt(@json(Auth::user()->x) - 1)];
        player_y_style = y[parseInt(@json(Auth::user()->y) - 1)];
        player_position = x[parseInt(@json(Auth::user()->x) - 1)] + '-' + y[parseInt(@json(Auth::user()->y) -
            1)]
    </script>
    <script>
        $('#user-position').css('top', $('#' + player_x_id + '-' + player_y_id).css('top'))
        $('#user-position').css('left', $('#' + player_x_id + '-' + player_y_id).css('left'))
    </script>
    <script>
        function openChallenge(number) {
            if (number == 1 && player_y_id == '09') {
                openHUD('#challenge');
                $('#qr-challenge-1').addClass('block').removeClass('hidden');
                $('#qr-challenge-2').addClass('hidden').removeClass('block');
            } else if (number == 2 && player_y_id == '17') {
                openHUD('#challenge');
                $('#qr-challenge-1').addClass('hidden').removeClass('block');
                $('#qr-challenge-2').addClass('block').removeClass('hidden');
            } else if (number == 3 && player_y_id == '24') {
                openHUD('#challenge-3');
            } else {
                openModal('warning');
                $('#warning-message').html('You Need To Be In Front Of The Wall.')
            }
        }
    </script>
    <script>
        function openFinish() {
            if (player_y_id == '30') {
                $.post('{{ config('app.url') }}' + "/escape/finish", {
                    _token: CSRF_TOKEN,
                    id: {{ Auth::id() }}
                }).done(function(result) {
                    console.log(result)
                    if (result == 0) {
                        openModal('warning');
                        $('#warning-message').html("You Don't Have The Map.")
                    } else {
                        $('#sea').addClass('hidden');
                        $('.dice-things').addClass('hidden');
                        $('#last-screen').removeClass('hidden').addClass('flex')
                        $('#player-rank').html(result)
                    }
                }).fail(function(e) {
                    console.log(e)
                });
            } else {

                openModal('warning');
                $('#warning-message').html('You Are Not In Front Of The Finish line.')
            }
        }
    </script>
@endsection
