@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 h-screen">
        @include('user.rally_trading.inc.sidebar')
        <div class="col-span-10 h-screen flex flex-col gap-y-8 px-4 py-8">
            @include('user.rally_trading.inc.topbar')
            @include('user.rally_trading.inc.trading_topbar')
            <div class="h-vh-60 grid grid-cols-2 gap-x-4">
                <div class="border-2 border-eternity-6-gray bg-eternity-6-black px-4 py-2">
                    <form action="" method="post">
                        <div class="text-xl">Raw Material</div>
                        <div class="overflow-y-scroll font-montserrat h-vh-40">
                            <table class="w-full">
                                <tr>
                                    <td>No.</td>
                                    <td>Item</td>
                                    <td>Inventory</td>
                                    <td>Price</td>
                                    <td>Amount</td>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('svg/e-flower.svg') }}" class="w-6">
                                            Flower
                                        </div>
                                    </td>
                                    <td id="raw-1-amount">5</td>
                                    <td><span id="raw-1-price">50</span>
                                        <span class="text-eternity-6-green">
                                            <span class="fa fa-fw fa-arrow-up"></span>10
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('raw', 1);"></span>
                                        <input type="number" name="raw_1" id="raw-1" class="input-text w-16" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('raw', 1);"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="flex items-end justify-end gap-x-12 px-12">
                            <div class="flex flex-col gap-y-2">
                                <div class="mb-2">Total</div>
                                <div class="text-xl text-eternity-6-green total-raw">0</div>
                                <input type="hidden" name="total_raw_value" id="total-raw-value" value=0>
                            </div>
                            <div class="hover-button cursor-pointer" onclick="openModal('raw-confirmation');">Sell</div>
                        </div>
                    </form>
                </div>
                <div class="border-2 border-eternity-6-gray bg-eternity-6-black px-4 py-2">
                    <form action="" method="post">
                        <div class="text-xl">Crafted Material</div>
                        <div class="overflow-y-scroll font-montserrat h-vh-40">
                            <table class="w-full">
                                <tr>
                                    <td>No.</td>
                                    <td>Item</td>
                                    <td>Inventory</td>
                                    <td>Price</td>
                                    <td>Amount</td>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('svg/e-flower.svg') }}" class="w-6">
                                            Flower
                                        </div>
                                    </td>
                                    <td id="crafted-1-amount">5</td>
                                    <td><span id="crafted-1-price">50</span>
                                        <span class="text-eternity-6-green">
                                            <span class="fa fa-fw fa-arrow-up"></span>10
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('crafted', 1);"></span>
                                        <input type="number" name="crafted_1" id="crafted-1" class="input-text w-16"
                                            value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('crafted', 1);"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="flex items-end justify-end gap-x-12 px-12">
                            <div class="flex flex-col gap-y-2">
                                <div class="mb-2">Total</div>
                                <div class="text-xl text-eternity-6-green total-crafted">0</div>
                                <input type="hidden" name="total_crafted_value" id="total-crafted-value" value=0>
                            </div>
                            <div class="hover-button cursor-pointer" onclick="openModal('crafted-confirmation');">Sell</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    @include('user.rally_trading.inc.modal.news')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="raw-confirmation-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
            <div class="text-3xl ml-12 mb-8">Confirmation</div>
            <div class="text-xl ml-12 mr-24 font-montserrat">
                <div class="mb-8">
                    Are you sure you want to sell your raw materials for
                    <span class="font-bold">
                        <span class="total-raw">0</span> Eternites?
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                <button type="submit" class="hover-button" onclick="closeModal();">No</button>
                <button type="submit" class="hover-button" onclick="disiniSubmitForm();">Yes</button>
            </div>
        </div>
    </div>
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="crafted-confirmation-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
            <div class="text-3xl ml-12 mb-8">Confirmation</div>
            <div class="text-xl ml-12 mr-24 font-montserrat">
                <div class="mb-8">
                    Are you sure you want to sell your crafted materials for
                    <span class="font-bold">
                        <span class="total-crafted">0</span> Eternites?
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                <button type="submit" class="hover-button" onclick="closeModal();">No</button>
                <button type="submit" class="hover-button" onclick="disiniSubmitForm();">Yes</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function plusSell(type, order) {
            if ($('#' + type + '-' + order).val() < $('#' + type + '-' + order + '-amount').html()) {
                $('#' + type + '-' + order).get(0).value++
                $('.total-' + type).html(parseInt($('.total-' + type).html()) + parseInt($('#' + type + '-' + order +
                    '-price').html()))
                $('#total-' + type + '-value').val(parseInt($('.total-' + type).html()) + parseInt($('#' + type + '-' +
                    order +
                    '-price').html()))
            }
        }

        function minSell(type, order) {
            if ($('#' + type + '-' + order).val() > 0) {
                $('#' + type + '-' + order).get(0).value--
                $('.total-' + type).html(parseInt($('.total-' + type).html()) - parseInt($('#' + type + '-' + order +
                    '-price').html()))
                $('#total-' + type + '-value').val(parseInt($('.total-' + type).html()) - parseInt($('#' + type + '-' +
                    order +
                    '-price').html()))
            }
        }
    </script>
@endsection
