@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 h-screen">
        @include('user.rally_trading.inc.sidebar')
        <div class="col-span-10 h-screen flex flex-col gap-y-8 px-4 py-8">
            @include('user.rally_trading.inc.topbar')
            @include('user.rally_trading.inc.trading_topbar')
            <div class="h-vh-60 border-2 border-eternity-6-gray bg-eternity-6-black px-4 py-2 flex flex-col items-center justify-center"
                id="lucky-1">
                <div class="flex flex-col items-center gap-y-4">
                    <div class="text-2xl font-bold">Test Your Luck!</div>
                    <div class="text-lg font-montserrat">
                        Enter Lucky Draw<br>For
                        <span class=
                        @if (Auth::user()->auction == 0 && Auth::user()->auction_c == 0)
                            <div class="absolute w-screen h-screen {{ Auth::user()->period->name == 4 ? 'flex' : 'hidden' }} items-center justify-center modal"
                                id="auction-announcement-modal">
                                <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                                    onclick="closeModal();">
                                </div>
                                <div
                                    class="w-vw-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
                                    <div class="flex items-center justify-center text-center">
                                        <div class="text-4xl">Auction Will Open on the 6th Period.<br>Access The Trading Menu to Register.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif"font-bold">125 Eternites</span>
                    </div>
                    <div class="hover-button cursor-pointer" @if (Auth::user()->eternite1 >= 125 && Auth::user()->luckydraw != 1) onclick="buyLucky();" @else disabled @endif>@if (Auth::user()->eternite1 >= 125 && Auth::user()->luckydraw != 1) Enter @elseif (Auth::user()->luckydraw != 0) Please Comeback on Another Period @else Not Enough Eternites @endif</div>
                </div>
            </div>
            <div class="h-vh-60 border-2 border-eternity-6-gray bg-eternity-6-black px-4 py-2 hidden flex-col items-center justify-center"
                id="lucky-loading">
                <div class="flex flex-col items-center gap-y-4">
                    <div class="text-4xl fa fa-circle-notch animate-spin"></div>
                </div>
            </div>
            <div class="h-vh-60 border-2 border-eternity-6-gray bg-eternity-6-black px-4 py-2 hidden grid-cols-5 gap-8"
                id="lucky-2">
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
                <div class="bg-lucky-draw-box bg-contain bg-no-repeat bg-center w-full h-full transition hover:-translate-y-2 cursor-pointer"
                    onclick="openModal('lucky');"></div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    @include('user.rally_trading.inc.modal.news')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="lucky-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal">
        </div>
        <div
            class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
            <div class="text-3xl ml-12 mb-8">Congratulations</div>
            <div class="text-xl ml-12 mr-24 font-montserrat">
                <div class="mb-8">
                    You got
                    <span class="font-bold">
                        <span class="lucky-prize">0 Eternites</span>
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                <a href="{{route('rally_trading_trading_lucky')}}" class="hover-button cursor-pointer">Okay</a>
            </div>
        </div>
    </div>
    @if (session('Message'))
        <div class="absolute w-screen h-screen flex items-center justify-center modal" id="upgrade-info-modal">
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
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        lucky = ['125 Eternites', '150 Eternites', '175 Eternites', '200 Eternites', 'Flour', 'Egg', 'Ship Sail', 'Bakpao',
            'Sword & 25 Eternites', 'Bakpao & 25 Eternites'
        ]

        function buyLucky() {
            var index = Math.floor(Math.random() * 10);
            $('#lucky-1').removeClass('flex').addClass('hidden');
            $('#lucky-loading').removeClass('hidden').addClass('flex');
            $('#global-eternites').html(parseInt($('#global-eternites').html()) - 125)
            $.post('{{ config('app.url') }}' + "/rally_trading/getlucky", {
                    _token: CSRF_TOKEN,
                    data: index
                })
                .done(function(data) {
                    $('#lucky-loading').removeClass('flex').addClass('hidden');
                    $('#lucky-2').removeClass('hidden').addClass('grid');
                    $('.lucky-prize').html(lucky[index]);
                })
                .fail(function() {
                    console.log('fail');
                });
        }
    </script>
@endsection
