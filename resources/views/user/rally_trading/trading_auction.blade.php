@extends('layouts.app')

@section('content')
        <div class="grid grid-cols-12 h-screen">
            @include('user.rally_trading.inc.sidebar')
            <div class="col-span-10 h-screen flex flex-col gap-y-8 px-4 py-8">
                @include('user.rally_trading.inc.topbar')
                @include('user.rally_trading.inc.trading_topbar')
                <div class="h-vh-60 grid grid-cols-10 gap-x-4">
                    <div class="col-span-10 border-2 border-eternity-6-gray px-4 py-2 overflow-y-scroll">
                        <div class="text-2xl mb-8">Zoom Auction</div>
                        <div class="grid grid-cols-3 gap-x-12 gap-y-4 px-14">
                            <div id="rally-1" onclick="openModal('auction-1');"
                                class="bg-rally-zoom bg-contain bg-no-repeat transition hover:-translate-y-2 cursor-pointer h-48 px-12 py-4 flex flex-col group">
                                <div class="text-xl 2xl:text-2xl mb-8 2xl:mb-10">Auction 1</div>
                                <div class="text-lg 2xl:text-xl group-hover:text-eternity-6-blue transition-colors duration-300 ml-10 2xl:ml-20">Team 1 - 45</div>
                            </div>
                            <div id="rally-2" onclick="openModal('auction-2');"
                                class="bg-rally-zoom bg-contain bg-no-repeat transition hover:-translate-y-2 cursor-pointer h-48 px-12 py-4 flex flex-col group">
                                <div class="text-xl 2xl:text-2xl mb-8 2xl:mb-10">Auction 2</div>
                                <div class="text-lg 2xl:text-xl group-hover:text-eternity-6-blue transition-colors duration-300 ml-10 2xl:ml-20">Team 46 - 90</div>
                            </div>
                            <div id="rally-3" onclick="openModal('auction-3');"
                                class="bg-rally-zoom bg-contain bg-no-repeat transition hover:-translate-y-2 cursor-pointer h-48 px-12 py-4 flex flex-col group">
                                <div class="text-xl 2xl:text-2xl mb-8 2xl:mb-10">Auction 3</div>
                                <div class="text-lg 2xl:text-xl group-hover:text-eternity-6-blue transition-colors duration-300 ml-10 2xl:ml-20">Team 91 - 135</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('modals')
        @include('user.rally_trading.inc.modal.news')
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="auction-1-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div class="w-vw-60 h-vh-60 bg-lt-rb-frame p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Zoom Info</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="flex items-center justify-between gap-8 mb-8">
                        Meeting ID: 926 0766 3915<br>
                        Password: auction1<br>
                    </div>
                </div>
                <div class="flex items-center mr-8 2xl:mr-32">
                    <button type="submit" class="hover-button ml-auto" onclick="closeModal();">Okay</button>
                </div>
            </div>
        </div>
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="auction-2-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div class="w-vw-60 h-vh-60 bg-lt-rb-frame p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Zoom Info</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="flex items-center justify-between gap-8 mb-8">
                        Meeting ID: 956 7359 8988<br>
                        Password: auction2<br>
                    </div>
                </div>
                <div class="flex items-center mr-8 2xl:mr-32">
                    <button type="submit" class="hover-button ml-auto" onclick="closeModal();">Okay</button>
                </div>
            </div>
        </div>
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="auction-3-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div class="w-vw-60 h-vh-60 bg-lt-rb-frame p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Zoom Info</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="flex items-center justify-between gap-8 mb-8">
                        Meeting ID: 947 1249 7910<br>
                        Password: auction3<br>
                    </div>
                </div>
                <div class="flex items-center mr-8 2xl:mr-32">
                    <button type="submit" class="hover-button ml-auto" onclick="closeModal();">Okay</button>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection
