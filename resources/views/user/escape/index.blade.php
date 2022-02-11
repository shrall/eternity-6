@extends('layouts.escape')

@section('content')
    <div class="w-full h-full bg-starting-point bg-cover relative">
        <div class="nplc-item @if (Auth::user()->easy == 0) bg-easy-red
        hover:bg-easy-red-hover @else bg-easy-green hover:bg-easy-green-hover @endif"
            style="width: 220px; height: 450px; bottom: 100px; right: 950px;"
            @if (Auth::user()->easy != 0) onclick="changeScene('.bg-starting-point',
            '.bg-easy-room');" @else onclick="openModal('locked-room');" @endif>
        </div>
        <div class="nplc-item @if (Auth::user()->medium == 0) bg-medium-red
        hover:bg-medium-red-hover @else bg-medium-green hover:bg-medium-green-hover @endif"
            style="width: 220px; height: 450px; bottom: 100px; right: 520px;"
            @if (Auth::user()->medium != 0) onclick="changeScene('.bg-starting-point',
            '.bg-medium-room');" @else onclick="openModal('locked-room');" @endif>
        </div>
        <div class="nplc-item @if (Auth::user()->hard == 0) bg-hard-red
        hover:bg-hard-red-hover @else bg-hard-green hover:bg-hard-green-hover @endif"
            style="width: 220px; height: 450px; bottom: 100px; right: 83px;"
            @if (Auth::user()->hard != 0) onclick="changeScene('.bg-starting-point',
            '.bg-hard-room');" @else onclick="openModal('locked-room');" @endif>
        </div>
    </div>
    <div class="w-full h-full bg-easy-room bg-cover hidden relative">
        @if (Auth::user()->map1 == 0)
            <div class="e-map map1 bg-map-1a hover:bg-map-1a-hover"
                style="width: 220px; height: 450px; bottom: 100px; right: 83px;" onclick="getItem('map1');">
            </div>
        @endif
    </div>
@endsection

@section('modals')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="locked-room-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="flex items-center justify-center">
                <div class="text-4xl">Room is Locked</div>
            </div>
        </div>
    </div>
@endsection
