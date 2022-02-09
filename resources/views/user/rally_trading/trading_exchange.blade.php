@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 h-screen">
        @include('user.rally_trading.inc.sidebar')
        <div class="col-span-10 h-screen flex flex-col gap-y-8 px-4 py-8">
            @include('user.rally_trading.inc.topbar')
            @include('user.rally_trading.inc.trading_topbar')
            <div class="h-vh-60 border-2 border-eternity-6-gray bg-eternity-6-black px-4 py-2">
                <div class="text-xl mb-4">Exchange Item</div>
                <div class="text-lg mb-2">Type</div>
                <div class="flex items-center gap-x-4 mb-4">
                    <div id="toggler-food"
                        class="cursor-pointer border border-white rounded-lg text-xl px-6 py-2 transition ease-in-out bg-eternity-6-orange hover:bg-eternity-6-orange duration-300;"
                        onclick="toggleType('food');">Food</div>
                    <div id="toggler-non-food"
                        class="cursor-pointer border border-white rounded-lg text-xl px-6 py-2 transition ease-in-out bg-transparent hover:bg-eternity-6-orange duration-300;"
                        onclick="toggleType('non-food');">Non-Food</div>
                    <div class="cursor-pointer border border-white rounded-lg text-xl px-6 py-2 transition ease-in-out bg-transparent hover:bg-eternity-6-orange duration-300;"
                        onclick="openModal('guide');">Guide</div>
                </div>
                <form action="{{ route('rally_trading_exchange_item') }}" method="post" id="form-food" class="block">
                    @csrf
                    <input type="hidden" name="total_eternites" id="total-eternites-food">
                    <!-- Prevent implicit submission of the form -->
                    <button type="submit" disabled style="display: none" aria-hidden="true"></button>
                    <div class="grid grid-cols-2 gap-x-12 mb-4">
                        <div class="text-lg mb-2">Item 1</div>
                        <div class="text-lg mb-2">Item 2</div>
                        <select name="first_item" id="first-item-food" class="hover-button" onchange="checkItem();">
                            <option value="flour">Flour</option>
                            <option value="oil">Oil</option>
                            <option value="egg">Egg</option>
                            <option value="meat">Meat</option>
                        </select>
                        <select name="second_item" id="second-item-food" class="hover-button" onchange="checkItem();">
                            <option value="flour">Flour</option>
                            <option value="oil" selected>Oil</option>
                            <option value="egg">Egg</option>
                            <option value="meat">Meat</option>
                        </select>
                    </div>
                    <div class="text-lg mb-2">Amount</div>
                    <td class="flex items-center gap-x-1 mb-4">
                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200" onclick="minAmount();"></span>
                        <input type="number" onkeyup="refreshTotal();" name="amount" id="amount-food"
                            class="w-12 bg-transparent text-center" value=0>
                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200" onclick="plusAmount();"></span>
                    </td>
                    <div class="flex items-end justify-end gap-x-12 px-12">
                        <div class="flex flex-col gap-y-2">
                            <div class="mb-2">Total</div>
                            <div class="text-xl text-eternity-6-green total-exchange">0</div>
                        </div>
                        <div class="hover-button cursor-pointer" onclick="openModal('exchange-food');">Exchange
                        </div>
                    </div>
                </form>
                <form action="{{ route('rally_trading_exchange_item') }}" method="post" id="form-non-food" class="hidden">
                    @csrf
                    <input type="hidden" name="total_eternites" id="total-eternites-non-food">
                    <!-- Prevent implicit submission of the form -->
                    <button type="submit" disabled style="display: none" aria-hidden="true"></button>
                    <div class="grid grid-cols-2 gap-x-12 mb-4">
                        <div class="text-lg mb-2">Item 1</div>
                        <div class="text-lg mb-2">Item 2</div>
                        <select name="first_item" id="first-item-non-food" class="hover-button" onchange="checkItem();">
                            <option value="cloth">Cloth</option>
                            <option value="iron">Iron</option>
                            <option value="wood">Wood</option>
                        </select>
                        <select name="second_item" id="second-item-non-food" class="hover-button" onchange="checkItem();">
                            <option value="cloth">Cloth</option>
                            <option value="iron" selected>Iron</option>
                            <option value="wood">Wood</option>
                        </select>
                    </div>
                    <div class="text-lg mb-2">Amount</div>
                    <td class="flex items-center gap-x-1 mb-4">
                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200" onclick="minAmount();"></span>
                        <input type="number" onkeyup="refreshTotal();" name="amount" id="amount-non-food"
                            class="w-12 bg-transparent text-center" value=0>
                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200" onclick="plusAmount();"></span>
                    </td>
                    <div class="flex items-end justify-end gap-x-12 px-12">
                        <div class="flex flex-col gap-y-2">
                            <div class="mb-2">Total</div>
                            <div class="text-xl text-eternity-6-green total-exchange">0</div>
                        </div>
                        <div class="hover-button cursor-pointer" onclick="openModal('exchange-non-food');">Exchange
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    @include('user.rally_trading.inc.modal.news')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="exchange-food-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
            <div class="text-3xl ml-12 mb-8">Confirmation</div>
            <div class="text-xl ml-12 mr-24 font-montserrat">
                <div class="mb-8">
                    Are you sure you want to exchange materials for
                    <span class="font-bold">
                        <span class="total-exchange">0</span> Eternites?
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                <button type="submit" class="hover-button" onclick="closeModal();">No</button>
                <button type="submit" class="hover-button"
                    onclick="event.preventDefault(); document.getElementById('form-food').submit();">Yes</button>
            </div>
        </div>
    </div>
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="exchange-non-food-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
            <div class="text-3xl ml-12 mb-8">Confirmation</div>
            <div class="text-xl ml-12 mr-24 font-montserrat">
                <div class="mb-8">
                    Are you sure you want to exchange materials for
                    <span class="font-bold">
                        <span class="total-exchange">0</span> Eternites?
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                <button type="submit" class="hover-button" onclick="closeModal();">No</button>
                <button type="submit" class="hover-button"
                    onclick="event.preventDefault(); document.getElementById('form-non-food').submit();">Yes</button>
            </div>
        </div>
    </div>
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="guide-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-90 h-vh-90 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="flex justify-between">
                <div class="text-3xl mb-8">Exchange Guide</div>
                <span class="fa fa-fw fa-times cursor-pointer text-2xl hover:text-gray-200" onclick="closeModal();"></span>
            </div>
            <div class="grid grid-cols-2 h-full gap-x-4">
                <div
                    class="h-full bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                    <div class="text-xl mb-8">Raw Food</div>
                    <div class="flex overflow-y-scroll h-vh-60">
                        <table class="font-montserrat w-full">
                            <tr>
                                <td colspan="3">Exchange</td>
                                <td>Price</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/flour.svg') }}" class="w-4 mr-2">Flour</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/oil.svg') }}" class="w-4 mr-2">Oil</td>
                                <td>10 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/flour.svg') }}" class="w-4 mr-2">Flour</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/egg.svg') }}" class="w-4 mr-2">Egg</td>
                                <td>50 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/flour.svg') }}" class="w-4 mr-2">Flour</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/meat.svg') }}" class="w-4 mr-2">Raw Meat</td>
                                <td>100 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/oil.svg') }}" class="w-4 mr-2">Oil</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/flour.svg') }}" class="w-4 mr-2">Flour</td>
                                <td>20 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/oil.svg') }}" class="w-4 mr-2">Oil</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/egg.svg') }}" class="w-4 mr-2">Egg</td>
                                <td>65 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/oil.svg') }}" class="w-4 mr-2">Oil</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/meat.svg') }}" class="w-4 mr-2">Raw Meat</td>
                                <td>120 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/egg.svg') }}" class="w-4 mr-2">Egg</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/flour.svg') }}" class="w-4 mr-2">Flour</td>
                                <td>10 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/egg.svg') }}" class="w-4 mr-2">Egg</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/oil.svg') }}" class="w-4 mr-2">Oil</td>
                                <td>10 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/egg.svg') }}" class="w-4 mr-2">Egg</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/meat.svg') }}" class="w-4 mr-2">Raw Meat</td>
                                <td>55 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/meat.svg') }}" class="w-4 mr-2">Raw Meat</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/flour.svg') }}" class="w-4 mr-2">Flour</td>
                                <td>10 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/meat.svg') }}" class="w-4 mr-2">Raw Meat</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/oil.svg') }}" class="w-4 mr-2">Oil</td>
                                <td>10 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/meat.svg') }}" class="w-4 mr-2">Raw Meat</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/egg.svg') }}" class="w-4 mr-2">Egg</td>
                                <td>10 Eternites</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div
                    class="h-full bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                    <div class="text-xl mb-8">Raw Non-Food</div>
                    <div class="flex overflow-y-scroll">
                        <table class="font-montserrat w-full">
                            <tr>
                                <td colspan="3">Exchange</td>
                                <td>Price</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/cloth.svg') }}" class="w-4 mr-2">Cloth</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/wood.svg') }}" class="w-4 mr-2">Wood</td>
                                <td>20 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/cloth.svg') }}" class="w-4 mr-2">Cloth</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/iron.svg') }}" class="w-4 mr-2">Iron</td>
                                <td>50 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/wood.svg') }}" class="w-4 mr-2">Wood</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/cloth.svg') }}" class="w-4 mr-2">Cloth</td>
                                <td>10 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/wood.svg') }}" class="w-4 mr-2">Wood</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/iron.svg') }}" class="w-4 mr-2">Iron</td>
                                <td>35 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/iron.svg') }}" class="w-4 mr-2">Iron</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/cloth.svg') }}" class="w-4 mr-2">Cloth</td>
                                <td>10 Eternites</td>
                            </tr>
                            <tr>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/iron.svg') }}" class="w-4 mr-2">Iron</td>
                                <td>-></td>
                                <td class="flex items-center gap-x-2"><img src="{{ asset('svg/wood.svg') }}" class="w-4 mr-2">Wood</td>
                                <td>10 Eternites</td>
                            </tr>
                        </table>
                    </div>
                </div>
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
        ctype = 'food';

        function toggleType(type) {
            $('#amount-' + ctype).val(0);
            ctype = type;
            $('#amount-' + ctype).val(0);
            if (type == 'food') {
                $('#toggler-food').removeClass('bg-transparent').addClass('bg-eternity-6-orange');
                $('#toggler-non-food').removeClass('bg-eternity-6-orange').addClass('bg-transparent');
                $('#form-food').removeClass('hidden').addClass('block');
                $('#form-non-food').removeClass('block').addClass('hidden');
            } else {
                $('#toggler-food').removeClass('bg-eternity-6-orange').addClass('bg-transparent');
                $('#toggler-non-food').removeClass('bg-transparent').addClass('bg-eternity-6-orange');
                $('#form-non-food').removeClass('hidden').addClass('block');
                $('#form-food').removeClass('block').addClass('hidden');
            }
            refreshTotal();
        }

        function checkItem() {
            $('#amount-' + ctype).val(0);
            if ($('#first-item-' + ctype).val() == $('#second-item-' + ctype).val()) {
                $('.total-exchange').html('ERROR');
            } else {
                $('.total-exchange').html(0);
            }
        }

        function plusAmount() {
            $('#amount-' + ctype).get(0).value++
            refreshTotal();
        }

        function minAmount() {
            if ($('#amount-' + ctype).val() > 0) {
                $('#amount-' + ctype).get(0).value--
            }
            refreshTotal();
        }
        var total = 0;

        function refreshTotal() {
            if ($('#first-item-' + ctype).val() == 'flour' && $('#second-item-' + ctype).val() == 'egg') {
                total = 50 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'flour' && $('#second-item-' + ctype).val() == 'meat') {
                total = 100 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'flour' && $('#second-item-' + ctype).val() == 'oil') {
                total = 10 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'oil' && $('#second-item-' + ctype).val() == 'meat') {
                total = 120 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'oil' && $('#second-item-' + ctype).val() == 'egg') {
                total = 65 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'oil' && $('#second-item-' + ctype).val() == 'flour') {
                total = 20 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'egg' && $('#second-item-' + ctype).val() == 'meat') {
                total = 55 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'egg' && $('#second-item-' + ctype).val() == 'oil') {
                total = 10 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'egg' && $('#second-item-' + ctype).val() == 'flour') {
                total = 10 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'meat' && $('#second-item-' + ctype).val() == 'flour') {
                total = 10 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'meat' && $('#second-item-' + ctype).val() == 'egg') {
                total = 10 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'meat' && $('#second-item-' + ctype).val() == 'oil') {
                total = 10 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'cloth' && $('#second-item-' + ctype).val() == 'iron') {
                total = 50 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'cloth' && $('#second-item-' + ctype).val() == 'wood') {
                total = 20 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'iron' && $('#second-item-' + ctype).val() == 'wood') {
                total = 10 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'iron' && $('#second-item-' + ctype).val() == 'cloth') {
                total = 10 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'wood' && $('#second-item-' + ctype).val() == 'iron') {
                total = 35 * $('#amount-' + ctype).val();
            } else if ($('#first-item-' + ctype).val() == 'wood' && $('#second-item-' + ctype).val() == 'cloth') {
                total = 10 * $('#amount-' + ctype).val();
            }
            $('#total-eternites-' + ctype).val(parseInt(total));
            $('.total-exchange').html(total);
        }

    </script>
@endsection
