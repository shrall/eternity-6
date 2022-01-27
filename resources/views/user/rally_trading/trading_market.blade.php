@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 h-screen">
        @include('user.rally_trading.inc.sidebar')
        <div class="col-span-10 h-screen flex flex-col gap-y-8 px-4 py-8">
            @include('user.rally_trading.inc.topbar')
            @include('user.rally_trading.inc.trading_topbar')
            <div class="h-vh-60 grid grid-cols-2 gap-x-4">
                <div class="border-2 border-eternity-6-gray bg-eternity-6-black px-4 py-2">
                    <form action="{{ route('rally_trading_sell_market') }}" method="post" id="form-raw">
                        @csrf
                        <input type="hidden" name="type" value="raw">
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
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/flour.svg') }}" class="w-4 mr-2">
                                        </span>Flour
                                    </td>
                                    <td id="raw-1-amount">{{ Auth::user()->flour }}</td>
                                    <td><span id="raw-1-price">{{ Auth::user()->period->flour }}</span>
                                        <span
                                            class="{{ Auth::user()->period->flour_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->flour_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>{{ Auth::user()->period->flour_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('raw', 1);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="flour" id="raw-1"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('raw', 1);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/egg.svg') }}" class="w-4 mr-2">
                                        </span>Egg
                                    </td>
                                    <td id="raw-2-amount">{{ Auth::user()->egg }}</td>
                                    <td><span id="raw-2-price">{{ Auth::user()->period->egg }}</span>
                                        <span
                                            class="{{ Auth::user()->period->egg_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->egg_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>{{ Auth::user()->period->egg_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('raw', 2);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="egg" id="raw-2"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('raw', 2);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/meat.svg') }}" class="w-4 mr-2">
                                        </span>Meat
                                    </td>
                                    <td id="raw-3-amount">{{ Auth::user()->meat }}</td>
                                    <td><span id="raw-3-price">{{ Auth::user()->period->meat }}</span>
                                        <span
                                            class="{{ Auth::user()->period->meat_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->meat_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->meat_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('raw', 3);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="meat" id="raw-3"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('raw', 3);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/oil.svg') }}" class="w-4 mr-2">
                                        </span>Oil
                                    </td>
                                    <td id="raw-4-amount">{{ Auth::user()->oil }}</td>
                                    <td><span id="raw-4-price">{{ Auth::user()->period->oil }}</span>
                                        <span
                                            class="{{ Auth::user()->period->oil_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->oil_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->oil_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('raw', 4);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="oil" id="raw-4"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('raw', 4);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/iron.svg') }}" class="w-4 mr-2">
                                        </span>Iron
                                    </td>
                                    <td id="raw-5-amount">{{ Auth::user()->iron }}</td>
                                    <td><span id="raw-5-price">{{ Auth::user()->period->iron }}</span>
                                        <span
                                            class="{{ Auth::user()->period->iron_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->iron_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->iron_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('raw', 5);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="iron" id="raw-5"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('raw', 5);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/wood.svg') }}" class="w-4 mr-2">
                                        </span>Wood
                                    </td>
                                    <td id="raw-6-amount">{{ Auth::user()->wood }}</td>
                                    <td><span id="raw-6-price">{{ Auth::user()->period->wood }}</span>
                                        <span
                                            class="{{ Auth::user()->period->wood_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->wood_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->wood_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('raw', 6);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="wood" id="raw-6"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('raw', 6);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/cloth.svg') }}" class="w-4 mr-2">
                                        </span>Cloth
                                    </td>
                                    <td id="raw-7-amount">{{ Auth::user()->cloth }}</td>
                                    <td><span id="raw-7-price">{{ Auth::user()->period->cloth }}</span>
                                        <span
                                            class="{{ Auth::user()->period->cloth_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->cloth_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->cloth_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('raw', 7);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="cloth" id="raw-7"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('raw', 7);"></span>
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
                    <form action="{{ route('rally_trading_sell_market') }}" method="post" id="form-crafted">
                        @csrf
                        <input type="hidden" name="type" value="crafted">
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
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/bread.svg') }}" class="w-4 mr-2">
                                        </span>Bread
                                    </td>
                                    <td id="crafted-1-amount">{{ Auth::user()->bread }}</td>
                                    <td><span id="crafted-1-price">{{ Auth::user()->period->bread }}</span>
                                        <span
                                            class="{{ Auth::user()->period->bread_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->bread_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>{{ Auth::user()->period->bread_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('crafted', 1);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="bread" id="crafted-1"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('crafted', 1);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/omelette.svg') }}" class="w-4 mr-2">
                                        </span>Omelette
                                    </td>
                                    <td id="crafted-2-amount">{{ Auth::user()->omelette }}</td>
                                    <td><span id="crafted-2-price">{{ Auth::user()->period->omelette }}</span>
                                        <span
                                            class="{{ Auth::user()->period->omelette_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->omelette_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>{{ Auth::user()->period->omelette_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('crafted', 2);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="omelette" id="crafted-2"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('crafted', 2);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/steak.svg') }}" class="w-4 mr-2">
                                        </span>Steak
                                    </td>
                                    <td id="crafted-3-amount">{{ Auth::user()->steak }}</td>
                                    <td><span id="crafted-3-price">{{ Auth::user()->period->steak }}</span>
                                        <span
                                            class="{{ Auth::user()->period->steak_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->steak_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->steak_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('crafted', 3);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="steak" id="crafted-3"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('crafted', 3);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/bakpao.svg') }}" class="w-4 mr-2">
                                        </span>Bakpao
                                    </td>
                                    <td id="crafted-4-amount">{{ Auth::user()->bakpao }}</td>
                                    <td><span id="crafted-4-price">{{ Auth::user()->period->bakpao }}</span>
                                        <span
                                            class="{{ Auth::user()->period->bakpao_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->bakpao_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->bakpao_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('crafted', 4);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="bakpao" id="crafted-4"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('crafted', 4);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/sword.svg') }}" class="w-4 mr-2">
                                        </span>Sword
                                    </td>
                                    <td id="crafted-5-amount">{{ Auth::user()->sword }}</td>
                                    <td><span id="crafted-5-price">{{ Auth::user()->period->sword }}</span>
                                        <span
                                            class="{{ Auth::user()->period->sword_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->sword_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->sword_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('crafted', 5);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="sword" id="crafted-5"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('crafted', 5);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/furniture.svg') }}" class="w-4 mr-2">
                                        </span>Furniture
                                    </td>
                                    <td id="crafted-6-amount">{{ Auth::user()->furniture }}</td>
                                    <td><span id="crafted-6-price">{{ Auth::user()->period->furniture }}</span>
                                        <span
                                            class="{{ Auth::user()->period->furniture_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->furniture_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->furniture_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('crafted', 6);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="furniture" id="crafted-6"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('crafted', 6);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/armorsvg') }}" class="w-4 mr-2">
                                        </span>Armor
                                    </td>
                                    <td id="crafted-7-amount">{{ Auth::user()->armor }}</td>
                                    <td><span id="crafted-7-price">{{ Auth::user()->period->armor }}</span>
                                        <span
                                            class="{{ Auth::user()->period->armor_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->armor_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->armor_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('crafted', 7);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="armor" id="crafted-7"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('crafted', 7);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/sail.svg') }}" class="w-4 mr-2">
                                        </span>Sail
                                    </td>
                                    <td id="crafted-8-amount">{{ Auth::user()->sail }}</td>
                                    <td><span id="crafted-8-price">{{ Auth::user()->period->sail }}</span>
                                        <span
                                            class="{{ Auth::user()->period->sail_math == 1 ? 'text-eternity-6-green' : 'text-eternity-6-red' }}">
                                            <span
                                                class="fa fa-fw {{ Auth::user()->period->sail_math == 1 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></span>
                                            {{ Auth::user()->period->sail_change }}
                                        </span>
                                    </td>
                                    <td class="flex items-center gap-x-1">
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minSell('crafted', 8);"></span>
                                        <input type="number" disabled onkeyup="refreshTotal();" name="sail" id="crafted-7"
                                            class="w-12 bg-transparent text-center" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusSell('crafted', 8);"></span>
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
                            <div class="hover-button cursor-pointer" onclick="openModal('crafted-confirmation');">Sell
                            </div>
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
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
            onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
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
                <button type="submit" class="hover-button" onclick="event.preventDefault();
                    document.getElementById('form-raw').submit();">Yes</button>
            </div>
        </div>
    </div>
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="crafted-confirmation-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
            onclick="closeModal();">
        </div>
        <div
            class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
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
                <button type="submit" class="hover-button" onclick="event.preventDefault();
                    document.getElementById('form-crafted').submit();">Yes</button>
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
        function plusSell(type, order) {
            if (parseInt($('#' + type + '-' + order).val()) < parseInt($('#' + type + '-' + order + '-amount').html())) {
                $('#' + type + '-' + order).get(0).value++
                $('.total-' + type).html(parseInt($('.total-' + type).html()) + parseInt($('#' + type + '-' + order +
                    '-price').html()))
                $('#total-' + type + '-value').val(parseInt($('.total-' + type).html()) + parseInt($('#' + type + '-' +
                    order +
                    '-price').html()))
            }
        }

        function minSell(type, order) {
            if (parseInt($('#' + type + '-' + order).val()) > 0) {
                $('#' + type + '-' + order).get(0).value--
                $('.total-' + type).html(parseInt($('.total-' + type).html()) - parseInt($('#' + type + '-' + order +
                    '-price').html()))
                $('#total-' + type + '-value').val(parseInt($('.total-' + type).html()) - parseInt($('#' + type + '-' +
                    order +
                    '-price').html()))
            }
        }

        function refreshTotal() {
            // for (let index = 1; index <= 7; index++) {
            //     $('.total-raw').html(parseInt($('#raw-' + index + '-price').html()) * $('#raw-' + index))
            // }
            // for (let index = 1; index <= 8; index++) {
            //     $('.total-crafted').html(parseInt($('#crafted-' + index + '-price').html()) * $('#crafted-' + index))
            // }
        }
    </script>
@endsection
