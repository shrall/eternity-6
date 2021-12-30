@extends('layouts.app')

@section('content')
        <div class="grid grid-cols-12 h-screen">
            @include('user.rally_trading.inc.sidebar')
            <div class="col-span-10 h-screen flex flex-col gap-y-8 px-4 py-8">
                @include('user.rally_trading.inc.topbar')
                <div class="h-vh-70 grid grid-cols-10 gap-x-4">
                    <div class="col-span-10 border-2 border-eternity-6-gray px-4 py-2 overflow-y-scroll">
                        <div class="text-2xl mb-8">Zoom Rally</div>
                        <div class="grid grid-cols-5 gap-x-12 gap-y-4 px-14">
                            <div id="rally-1" onclick="openModal('rally-1');"
                                class="bg-rally-zoom bg-contain bg-no-repeat transition hover:-translate-y-2 cursor-pointer h-32 p-4 flex flex-col items-center group">
                                <div class="text-lg mb-1 2xl:mb-4">The Game</div>
                                <div class="text-xl group-hover:text-eternity-6-blue transition-colors duration-300">Join
                                    Zoom</div>
                            </div>
                            <div id="rally-2" onclick="openModal('rally-2');"
                                class="bg-rally-zoom bg-contain bg-no-repeat transition hover:-translate-y-2 cursor-pointer h-32 p-4 flex flex-col items-center group">
                                <div class="text-lg mb-1 2xl:mb-4">The Game</div>
                                <div class="text-xl group-hover:text-eternity-6-blue transition-colors duration-300">Join
                                    Zoom</div>
                            </div>
                            <div id="rally-3" onclick="openModal('rally-3');"
                                class="bg-rally-zoom bg-contain bg-no-repeat transition hover:-translate-y-2 cursor-pointer h-32 p-4 flex flex-col items-center group">
                                <div class="text-lg mb-1 2xl:mb-4">The Game</div>
                                <div class="text-xl group-hover:text-eternity-6-blue transition-colors duration-300">Join
                                    Zoom</div>
                            </div>
                            <div id="rally-4" onclick="openModal('rally-4');"
                                class="bg-rally-zoom bg-contain bg-no-repeat transition hover:-translate-y-2 cursor-pointer h-32 p-4 flex flex-col items-center group">
                                <div class="text-lg mb-1 2xl:mb-4">The Game</div>
                                <div class="text-xl group-hover:text-eternity-6-blue transition-colors duration-300">Join
                                    Zoom</div>
                            </div>
                            <div id="rally-5" onclick="openModal('rally-5');"
                                class="bg-rally-zoom bg-contain bg-no-repeat transition hover:-translate-y-2 cursor-pointer h-32 p-4 flex flex-col items-center group">
                                <div class="text-lg mb-1 2xl:mb-4">The Game</div>
                                <div class="text-xl group-hover:text-eternity-6-blue transition-colors duration-300">Join
                                    Zoom</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('modals')
        @include('user.rally_trading.inc.modal.news')
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="rally-1-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div class="w-vw-60 h-vh-60 bg-lt-rb-frame p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Zoom Info</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="flex items-center justify-between gap-8 mb-8">
                        Meeting ID: 9320-13214-12321<br>
                        Password: EfortionMantuls<br>
                        Breakout: 2
                    </div>
                </div>
                <div class="flex items-center mr-48">
                    <button type="submit" class="hover-button ml-auto" onclick="closeModal();">Okay</button>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
    <script>
        function plusCraft(order) {
            $('#craft-' + order).get(0).value++
        }

        function minCraft(order) {
            $('#craft-' + order).get(0).value--
        }
    </script>
@endsection
