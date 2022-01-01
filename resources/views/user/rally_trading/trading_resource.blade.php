@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 h-screen">
        @include('user.rally_trading.inc.sidebar')
        <div class="col-span-10 h-screen flex flex-col gap-y-8 px-4 py-8">
            @include('user.rally_trading.inc.topbar')
            @include('user.rally_trading.inc.trading_topbar')
            <div class="h-vh-60 border-2 border-eternity-6-gray bg-eternity-6-black px-4 py-2">
                <div class="flex items-center justify-center w-full h-full text-3xl">
                    Please comeback on the 10th or 12th period.
                </div>
                <form action="" method="post" class="hidden">
                    <div class="text-xl">Resource Items</div>
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
                                <td>52</td>
                                <input type="hidden" name="" id="resource-1-amount" value=5>
                                <td><span id="resource-1-price">50</span></td>
                                <td class="flex items-center gap-x-1">
                                    <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                        onclick="minSell('resource', 1);"></span>
                                    <input type="number" name="resource_1" id="resource-1" class="input-text w-16" value=0>
                                    <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                        onclick="plusSell('resource', 1);"></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="flex items-end justify-end gap-x-12 px-12">
                        <div class="flex flex-col gap-y-2">
                            <div class="mb-2">Total</div>
                            <div class="text-xl text-eternity-6-green total-resource">0</div>
                            <input type="hidden" name="total_resource_value" id="total-resource-value" value=0>
                        </div>
                        <div class="hover-button cursor-pointer" onclick="openModal('resource-confirmation');">Buy</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    @include('user.rally_trading.inc.modal.news')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="resource-confirmation-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
            <div class="text-3xl ml-12 mb-8">Confirmation</div>
            <div class="text-xl ml-12 mr-24 font-montserrat">
                <div class="mb-8">
                    Are you sure you want to buy resource materials for
                    <span class="font-bold">
                        <span class="total-resource">0</span> Eternites?
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
            if ($('#' + type + '-' + order).val() < $('#' + type + '-' + order + '-amount').val()) {
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
