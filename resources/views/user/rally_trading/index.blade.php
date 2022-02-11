@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 h-screen">
        @include('user.rally_trading.inc.sidebar')
        <div class="col-span-10 h-screen flex flex-col gap-y-8 px-4 py-8">
            @include('user.rally_trading.inc.topbar')
            <div class="h-vh-50 grid grid-cols-10 gap-x-4">
                <div class="col-span-8 flex flex-col gap-2">
                    <div class="flex items-center gap-4">
                        <div class="border-2 border-eternity-6-gray px-2 py-1">
                            Your Ship
                        </div>
                    </div>
                    <div class="w-full h-full border-2 border-eternity-6-gray px-4 py-2 relative">
                        <div class="w-full grid grid-cols-3 gap-x-8 gap-y-4">
                            <div>Part A - Level {{ Auth::user()->ship1 }}</div>
                            <div>Part B - Level {{ Auth::user()->ship2 }}</div>
                            <div>Part C - Level {{ Auth::user()->ship3 }}</div>
                            <div onclick="openModal('ship-1')"
                                class="border-2 border-eternity-6-gray bg-ship-1 bg-contain bg-center bg-no-repeat h-32 cursor-pointer transition ease-in-out hover:-translate-y-3">
                            </div>
                            <div onclick="openModal('ship-2')"
                                class="border-2 border-eternity-6-gray bg-ship-2 bg-contain bg-center bg-no-repeat h-32 cursor-pointer transition ease-in-out hover:-translate-y-3">
                            </div>
                            <div onclick="openModal('ship-3')"
                                class="border-2 border-eternity-6-gray bg-ship-3 bg-contain bg-center bg-no-repeat h-32 cursor-pointer transition ease-in-out hover:-translate-y-3">
                            </div>
                            <div>Part D - Level {{ Auth::user()->ship4 }}</div>
                            <div>Part E - Level {{ Auth::user()->ship5 }}</div>
                            <div>Part F - Level {{ Auth::user()->ship6 }}</div>
                            <div onclick="openModal('ship-4')"
                                class="border-2 border-eternity-6-gray bg-ship-4 bg-contain bg-center bg-no-repeat h-32 cursor-pointer transition ease-in-out hover:-translate-y-3">
                            </div>
                            <div onclick="openModal('ship-5')"
                                class="border-2 border-eternity-6-gray bg-ship-5 bg-contain bg-center bg-no-repeat h-32 cursor-pointer transition ease-in-out hover:-translate-y-3">
                            </div>
                            <div onclick="openModal('ship-6')"
                                class="border-2 border-eternity-6-gray bg-ship-6 bg-contain bg-center bg-no-repeat h-32 cursor-pointer transition ease-in-out hover:-translate-y-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 flex flex-col gap-2">
                    <div class="h-7/10 border-2 border-eternity-6-gray px-12 py-8 flex flex-col gap-y-2">
                        <div class="mb-8">Ship Status</div>
                        <div class="font-montserrat font-bold">Power <span id="power-value"></span></div>
                        <div class="border-4 border-white h-6 mb-8">
                            <div class="bg-white h-4" id="power-bar"></div>
                        </div>
                        <div class="font-montserrat font-bold">Resource</div>
                        <div class="font-montserrat">
                            {{ Auth::user()->ration * 40 + Auth::user()->coal * 75 + Auth::user()->cannonball * 450 + Auth::user()->cannon * 3250 }}
                        </div>
                    </div>
                    <div class="h-3/10 border-2 border-eternity-6-gray px-12 py-4 flex flex-col items-center">
                        <div class="text-lg self-start mb-4">Total Points</div>
                        <div class="text-2xl" id="points">2500</div>
                    </div>
                </div>
            </div>
            <div class="h-vh-5"></div>
            <div class="h-vh-25 grid grid-cols-10 gap-x-4">
                <div class="col-span-1 bg-rt-frame bg-contain bg-no-repeat flex items-center justify-center cursor-pointer transition ease-in-out hover:-translate-y-3"
                    onclick="openModal('history');">
                    History
                </div>
                <div class="col-span-5"></div>
                <div class="col-span-1 bg-lt-frame bg-contain bg-no-repeat flex items-center justify-center cursor-pointer transition ease-in-out hover:-translate-y-3"
                    onclick="openModal('inventory');">
                    Inventory
                </div>
                <div class="col-span-1 bg-box-frame bg-contain bg-no-repeat flex items-center justify-center cursor-pointer transition ease-in-out hover:-translate-y-3"
                    onclick="openModal('crafting');">
                    Crafting
                </div>
                <div class="col-span-2 bg-lt-rb-frame bg-contain bg-no-repeat px-8 py-4 flex flex-col items-center">
                    <div class="text-lg self-start mb-4">Profile</div>
                    <div class="text-xl self-start">Tim {{ Auth::user()->name }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    @include('user.rally_trading.inc.modal.news')
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="history-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-90 h-vh-80 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="flex justify-between">
                <div class="text-3xl mb-8">History</div>
                <span class="fa fa-fw fa-times cursor-pointer text-2xl hover:text-gray-200" onclick="closeModal();"></span>
            </div>
            <div class="overflow-y-scroll flex">
                <table class="font-montserrat w-full">
                    <tr>
                        <td>No.</td>
                        <td>Description</td>
                        <td>Transaction</td>
                        <td>Before</td>
                        <td>After</td>
                    </tr>
                    @foreach (Auth::user()->logs as $log)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $log->description }}</td>
                            <td>
                                @if ($log->math == 0)
                                    <span class="text-eternity-6-green">+ {{ $log->amount }} Eternites</span>
                                @else
                                    <span class="text-eternity-6-red">- {{ $log->amount }} Eternites</span>
                                @endif
                            </td>
                            <td>{{ $log->before }} Eternites</td>
                            <td>{{ $log->after }} Eternites</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="inventory-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-90 h-vh-80 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="flex justify-between">
                <div class="text-3xl mb-8">Inventory</div>
                <span class="fa fa-fw fa-times cursor-pointer text-2xl hover:text-gray-200" onclick="closeModal();"></span>
            </div>
            <div class="grid grid-cols-3 h-full gap-x-4">
                <div
                    class="col-span-1 h-vh-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                    <div class="text-xl mb-8">Raw Material</div>
                    <div class="overflow-y-scroll flex">
                        <table class="font-montserrat w-full">
                            <tr>
                                <td>No.</td>
                                <td>Item</td>
                                <td>Type</td>
                                <td>Amount</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/flour.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Flour
                                </td>
                                <td>Food</td>
                                <td>{{ Auth::user()->flour }} pcs</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/egg.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Egg
                                </td>
                                <td>Food</td>
                                <td>{{ Auth::user()->egg }} pcs</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/meat.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Raw Meat
                                </td>
                                <td>Food</td>
                                <td>{{ Auth::user()->meat }} pcs</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/oil.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Oil
                                </td>
                                <td>Food</td>
                                <td>{{ Auth::user()->oil }} pcs</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/iron.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Iron
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->iron }} pcs</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/wood.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Wood
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->wood }} pcs</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/cloth.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Cloth
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->cloth }} pcs</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div
                    class="col-span-1 h-vh-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                    <div class="text-xl mb-8">Crafted Items</div>
                    <div class="overflow-y-scroll flex">
                        <table class="font-montserrat w-full">
                            <tr>
                                <td>No.</td>
                                <td>Item</td>
                                <td>Type</td>
                                <td>Amount</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/bread.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Bread
                                </td>
                                <td>Food</td>
                                <td>{{ Auth::user()->bread }} pcs</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/bakpao.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Bakpao
                                </td>
                                <td>Food</td>
                                <td>{{ Auth::user()->bakpao }} pcs</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/omelette.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Omelette
                                </td>
                                <td>Food</td>
                                <td>{{ Auth::user()->omelette }} pcs</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/steak.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Steak
                                </td>
                                <td>Food</td>
                                <td>{{ Auth::user()->steak }} pcs</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/sword.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Sword
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->sword }} pcs</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/furniture.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Furniture
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->furniture }} pcs</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/armor.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Armor
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->armor }} pcs</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/sail.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Ship Sail
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->sail }} pcs</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div
                    class="col-span-1 h-vh-60 bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                    <div class="text-xl mb-8">Resources Items</div>
                    <div class="overflow-y-scroll flex">
                        <table class="font-montserrat w-full">
                            <tr>
                                <td>No.</td>
                                <td>Item</td>
                                <td>Type</td>
                                <td>Amount</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/ration.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Ration
                                </td>
                                <td>Food</td>
                                <td>{{ Auth::user()->ration }} pcs</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/coal.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Coal
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->coal }} pcs</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/cannon.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Cannon
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->cannon }} pcs</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="flex items-center">
                                    <span><img src="{{ asset('svg/cannonball.svg') }}" class="w-6 h-6 mr-2">
                                    </span>Cannon Ball
                                </td>
                                <td>Non-Food</td>
                                <td>{{ Auth::user()->cannonball }} pcs</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="crafting-modal">
        <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal" onclick="closeModal();">
        </div>
        <div
            class="w-vw-90 h-vh-90 bg-eternity-6-black border-2 border-eternity-6-gray p-8 absolute bg-contain bg-no-repeat flex flex-col">
            <div class="flex justify-between">
                <div class="text-3xl mb-8">Crafting</div>
                <span class="fa fa-fw fa-times cursor-pointer text-2xl hover:text-gray-200" onclick="closeModal();"></span>
            </div>
            <div class="grid grid-cols-3 h-full gap-x-4">
                <div class="h-vh-70 bg-eternity-6-blackbg-contain bg-no-repeat flex flex-col">
                    <div
                        class="h-1/2 bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                        <div class="text-xl mb-8">Raw Material</div>
                        <div class="overflow-y-scroll flex">
                            <table class="font-montserrat w-full">
                                <tr>
                                    <td>No.</td>
                                    <td>Item</td>
                                    <td>Type</td>
                                    <td>Amount</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/flour.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Flour
                                    </td>
                                    <td>Food</td>
                                    <td>{{ Auth::user()->flour }} pcs</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/egg.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Egg
                                    </td>
                                    <td>Food</td>
                                    <td>{{ Auth::user()->egg }} pcs</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/meat.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Raw Meat
                                    </td>
                                    <td>Food</td>
                                    <td>{{ Auth::user()->meat }} pcs</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/oil.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Oil
                                    </td>
                                    <td>Food</td>
                                    <td>{{ Auth::user()->oil }} pcs</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/iron.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Iron
                                    </td>
                                    <td>Non-Food</td>
                                    <td>{{ Auth::user()->iron }} pcs</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/wood.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Wood
                                    </td>
                                    <td>Non-Food</td>
                                    <td>{{ Auth::user()->wood }} pcs</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/cloth.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Cloth
                                    </td>
                                    <td>Non-Food</td>
                                    <td>{{ Auth::user()->cloth }} pcs</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div
                        class="h-1/2 bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                        <div class="text-xl mb-8">Crafted Items</div>
                        <div class="overflow-y-scroll flex">
                            <table class="font-montserrat w-full">
                                <tr>
                                    <td>No.</td>
                                    <td>Item</td>
                                    <td>Type</td>
                                    <td>Amount</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/bread.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Bread
                                    </td>
                                    <td>Food</td>
                                    <td>{{ Auth::user()->bread }} pcs</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/bakpao.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Bakpao
                                    </td>
                                    <td>Food</td>
                                    <td>{{ Auth::user()->bakpao }} pcs</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/omelette.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Omelette
                                    </td>
                                    <td>Food</td>
                                    <td>{{ Auth::user()->omelette }} pcs</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/steak.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Steak
                                    </td>
                                    <td>Food</td>
                                    <td>{{ Auth::user()->steak }} pcs</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/sword.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Sword
                                    </td>
                                    <td>Non-Food</td>
                                    <td>{{ Auth::user()->sword }} pcs</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/furniture.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Furniture
                                    </td>
                                    <td>Non-Food</td>
                                    <td>{{ Auth::user()->furniture }} pcs</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/armor.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Armor
                                    </td>
                                    <td>Non-Food</td>
                                    <td>{{ Auth::user()->armor }} pcs</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/sail.svg') }}" class="w-6 h-6 mr-2">
                                        </span>Ship Sail
                                    </td>
                                    <td>Non-Food</td>
                                    <td>{{ Auth::user()->sail }} pcs</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div
                    class="h-vh-70 bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                    <div class="text-xl mb-4">Recipe</div>
                    <div class="overflow-y-scroll flex">
                        <table class="font-montserrat w-full">
                            <tr>
                                <td class="w-3/10">Bread</td>
                                <td>= Flour + Egg </td>
                            </tr>
                            <tr>
                                <td class="w-3/10">Bakpao</td>
                                <td>= Flour + Meat </td>
                            </tr>
                            <tr>
                                <td class="w-3/10">Omelette</td>
                                <td>= Oil + Egg </td>
                            </tr>
                            <tr>
                                <td class="w-3/10">Steak</td>
                                <td>= Oil + Meat </td>
                            </tr>
                            <tr>
                                <td class="w-3/10">Sword</td>
                                <td>= Iron + Wood </td>
                            </tr>
                            <tr>
                                <td class="w-3/10">Furniture</td>
                                <td>= Iron + Wood + Cloth </td>
                            </tr>
                            <tr>
                                <td class="w-3/10">Armor</td>
                                <td>= Cloth + Iron </td>
                            </tr>
                            <tr>
                                <td class="w-3/10">Ship Sail</td>
                                <td>= Cloth + Wood </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <form action="{{ route('rally_trading_craft') }}" method="post">
                    @csrf
                    <div
                        class="h-vh-70 bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                        <div class="text-xl mb-4">Craft</div>
                        <div class="overflow-y-scroll flex mb-4">
                            <table class="font-montserrat w-full">
                                <tr>
                                    <td>Item</td>
                                    <td>Amount</td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/bread.svg') }}" class="w-6 h-6 mr-2"></span>Bread
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(1);"></span>
                                        <input type="number" id="craft-1" name="bread" class="input-text w-12" value=0
                                            min=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(1);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/bakpao.svg') }}" class="w-6 h-6 mr-2"></span>Bakpao
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(2);"></span>
                                        <input type="number" id="craft-2" name="bakpao" class="input-text w-12" value=0
                                            min=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(2);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/omelette.svg') }}" class="w-6 h-6 mr-2"></span>Omelette
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(3);"></span>
                                        <input type="number" id="craft-3" name="omelette" class="input-text w-12" value=0
                                            min=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(3);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/steak.svg') }}" class="w-6 h-6 mr-2"></span>Steak
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(4);"></span>
                                        <input type="number" id="craft-4" name="steak" class="input-text w-12" value=0
                                            min=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(4);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/sword.svg') }}" class="w-6 h-6 mr-2"></span>Sword
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(5);"></span>
                                        <input type="number" id="craft-5" name="sword" class="input-text w-12" value=0
                                            min=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(5);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/furniture.svg') }}"
                                                class="w-6 h-6 mr-2"></span>Furniture
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(6);"></span>
                                        <input type="number" id="craft-6" name="furniture" class="input-text w-12" value=0
                                            min=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(6);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/armor.svg') }}" class="w-6 h-6 mr-2"></span>Armor
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(7);"></span>
                                        <input type="number" id="craft-7" name="armor" class="input-text w-12" value=0
                                            min=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(7);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/sail.svg') }}" class="w-6 h-6 mr-2"></span>Ship
                                        Sail
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(8);"></span>
                                        <input type="number" id="craft-8" name="sail" class="input-text w-12" value=0 min=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(8);"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="flex items-center">
                            <button type="submit" class="hover-button ml-auto text-md">Craft</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form action="{{ route('rally_trading_upgrade_ship') }}" method="post">
        @csrf
        <input type="hidden" name="ship" value='A'>
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="ship-1-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div
                class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Upgrade</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="mb-8">
                        @if (Auth::user()->ship1 > Auth::user()->ship2 || Auth::user()->ship1 > Auth::user()->ship3 || Auth::user()->ship1 > Auth::user()->ship4 || Auth::user()->ship1 > Auth::user()->ship5 || Auth::user()->ship1 > Auth::user()->ship6)
                            Please upgrade all the parts to the same level first.
                        @elseif (Auth::user()->ship1 != 5)
                            Are you sure you want to upgrade part A for
                            <span class="font-bold">
                                @if (Auth::user()->ship1 == 0)
                                    <span>100</span> Eternites?
                                @elseif (Auth::user()->ship1 == 1)
                                    <span>150</span> Eternites?
                                @elseif (Auth::user()->ship1 == 2)
                                    <span>300</span> Eternites?
                                @elseif (Auth::user()->ship1 == 3)
                                    <span>350</span> Eternites?
                                @elseif (Auth::user()->ship1 == 4)
                                    <span>400</span> Eternites?
                                @endif
                            </span>
                        @else
                            <span class="font-bold">This ship's part is already at Max Level.</span>
                        @endif
                    </div>
                </div>
                <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                    @if (Auth::user()->ship1 > Auth::user()->ship2 || Auth::user()->ship1 > Auth::user()->ship3 || Auth::user()->ship1 > Auth::user()->ship4 || Auth::user()->ship1 > Auth::user()->ship5 || Auth::user()->ship1 > Auth::user()->ship6)
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @elseif (Auth::user()->ship1 != 5)
                        <div type="submit" class="hover-button" onclick="closeModal();">No</div>
                        <button type="submit" class="hover-button">Yes</button>
                    @else
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @endif
                </div>
            </div>
        </div>
    </form>
    <form action="{{ route('rally_trading_upgrade_ship') }}" method="post">
        @csrf
        <input type="hidden" name="ship" value='B'>
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="ship-2-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div
                class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Upgrade</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="mb-8">
                        @if (Auth::user()->ship2 > Auth::user()->ship1 || Auth::user()->ship2 > Auth::user()->ship3 || Auth::user()->ship2 > Auth::user()->ship4 || Auth::user()->ship2 > Auth::user()->ship5 || Auth::user()->ship2 > Auth::user()->ship6)
                            Please upgrade all the parts to the same level first.
                        @elseif (Auth::user()->ship2 != 5)
                            Are you sure you want to upgrade part B for
                            <span class="font-bold">
                                @if (Auth::user()->ship2 == 0)
                                    <span>100</span> Eternites?
                                @elseif (Auth::user()->ship2 == 1)
                                    <span>150</span> Eternites?
                                @elseif (Auth::user()->ship2 == 2)
                                    <span>300</span> Eternites?
                                @elseif (Auth::user()->ship2 == 3)
                                    <span>350</span> Eternites?
                                @elseif (Auth::user()->ship2 == 4)
                                    <span>400</span> Eternites?
                                @endif
                            </span>
                        @else
                            <span class="font-bold">This ship's part is already at Max Level.</span>
                        @endif
                    </div>
                </div>
                <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                    @if (Auth::user()->ship2 > Auth::user()->ship1 || Auth::user()->ship2 > Auth::user()->ship3 || Auth::user()->ship2 > Auth::user()->ship4 || Auth::user()->ship2 > Auth::user()->ship5 || Auth::user()->ship2 > Auth::user()->ship6)
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @elseif (Auth::user()->ship2 != 5)
                        <div type="submit" class="hover-button" onclick="closeModal();">No</div>
                        <button type="submit" class="hover-button">Yes</button>
                    @else
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @endif
                </div>
            </div>
        </div>
    </form>
    <form action="{{ route('rally_trading_upgrade_ship') }}" method="post">
        @csrf
        <input type="hidden" name="ship" value='C'>
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="ship-3-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div
                class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Upgrade</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="mb-8">
                        @if (Auth::user()->ship3 > Auth::user()->ship1 || Auth::user()->ship3 > Auth::user()->ship2 || Auth::user()->ship3 > Auth::user()->ship4 || Auth::user()->ship3 > Auth::user()->ship5 || Auth::user()->ship3 > Auth::user()->ship6)
                            Please upgrade all the parts to the same level first.
                        @elseif (Auth::user()->ship3 != 5)
                            Are you sure you want to upgrade part C for
                            <span class="font-bold">
                                @if (Auth::user()->ship3 == 0)
                                    <span>100</span> Eternites?
                                @elseif (Auth::user()->ship3 == 1)
                                    <span>150</span> Eternites?
                                @elseif (Auth::user()->ship3 == 2)
                                    <span>300</span> Eternites?
                                @elseif (Auth::user()->ship3 == 3)
                                    <span>350</span> Eternites?
                                @elseif (Auth::user()->ship3 == 4)
                                    <span>400</span> Eternites?
                                @endif
                            </span>
                        @else
                            <span class="font-bold">This ship's part is already at Max Level.</span>
                        @endif
                    </div>
                </div>
                <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                    @if (Auth::user()->ship3 > Auth::user()->ship1 || Auth::user()->ship3 > Auth::user()->ship2 || Auth::user()->ship3 > Auth::user()->ship4 || Auth::user()->ship3 > Auth::user()->ship5 || Auth::user()->ship3 > Auth::user()->ship6)
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @elseif (Auth::user()->ship3 != 5)
                        <div type="submit" class="hover-button" onclick="closeModal();">No</div>
                        <button type="submit" class="hover-button">Yes</button>
                    @else
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @endif
                </div>
            </div>
        </div>
    </form>
    <form action="{{ route('rally_trading_upgrade_ship') }}" method="post">
        @csrf
        <input type="hidden" name="ship" value='D'>
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="ship-4-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div
                class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Upgrade</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="mb-8">
                        @if (Auth::user()->ship4 > Auth::user()->ship1 || Auth::user()->ship4 > Auth::user()->ship2 || Auth::user()->ship4 > Auth::user()->ship3 || Auth::user()->ship4 > Auth::user()->ship5 || Auth::user()->ship4 > Auth::user()->ship6)
                            Please upgrade all the parts to the same level first.
                        @elseif (Auth::user()->ship4 != 5)
                            Are you sure you want to upgrade part D for
                            <span class="font-bold">
                                @if (Auth::user()->ship4 == 0)
                                    <span>100</span> Eternites?
                                @elseif (Auth::user()->ship4 == 1)
                                    <span>150</span> Eternites?
                                @elseif (Auth::user()->ship4 == 2)
                                    <span>300</span> Eternites?
                                @elseif (Auth::user()->ship4 == 3)
                                    <span>350</span> Eternites?
                                @elseif (Auth::user()->ship4 == 4)
                                    <span>400</span> Eternites?
                                @endif
                            </span>
                        @else
                            <span class="font-bold">This ship's part is already at Max Level.</span>
                        @endif
                    </div>
                </div>
                <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                    @if (Auth::user()->ship4 > Auth::user()->ship1 || Auth::user()->ship4 > Auth::user()->ship2 || Auth::user()->ship4 > Auth::user()->ship3 || Auth::user()->ship4 > Auth::user()->ship5 || Auth::user()->ship4 > Auth::user()->ship6)
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @elseif (Auth::user()->ship4 != 5)
                        <div type="submit" class="hover-button" onclick="closeModal();">No</div>
                        <button type="submit" class="hover-button">Yes</button>
                    @else
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @endif
                </div>
            </div>
        </div>
    </form>
    <form action="{{ route('rally_trading_upgrade_ship') }}" method="post">
        @csrf
        <input type="hidden" name="ship" value='E'>
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="ship-5-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div
                class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Upgrade</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="mb-8">
                        @if (Auth::user()->ship5 > Auth::user()->ship1 || Auth::user()->ship5 > Auth::user()->ship2 || Auth::user()->ship5 > Auth::user()->ship3 || Auth::user()->ship5 > Auth::user()->ship4 || Auth::user()->ship5 > Auth::user()->ship6)
                            Please upgrade all the parts to the same level first.
                        @elseif (Auth::user()->ship5 != 5)
                            Are you sure you want to upgrade part E for
                            <span class="font-bold">
                                @if (Auth::user()->ship5 == 0)
                                    <span>100</span> Eternites?
                                @elseif (Auth::user()->ship5 == 1)
                                    <span>150</span> Eternites?
                                @elseif (Auth::user()->ship5 == 2)
                                    <span>300</span> Eternites?
                                @elseif (Auth::user()->ship5 == 3)
                                    <span>350</span> Eternites?
                                @elseif (Auth::user()->ship5 == 4)
                                    <span>400</span> Eternites?
                                @endif
                            </span>
                        @else
                            <span class="font-bold">This ship's part is already at Max Level.</span>
                        @endif
                    </div>
                </div>
                <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                    @if (Auth::user()->ship5 > Auth::user()->ship1 || Auth::user()->ship5 > Auth::user()->ship2 || Auth::user()->ship5 > Auth::user()->ship3 || Auth::user()->ship5 > Auth::user()->ship4 || Auth::user()->ship5 > Auth::user()->ship6)
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @elseif (Auth::user()->ship5 != 5)
                        <div type="submit" class="hover-button" onclick="closeModal();">No</div>
                        <button type="submit" class="hover-button">Yes</button>
                    @else
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @endif
                </div>
            </div>
        </div>
    </form>
    <form action="{{ route('rally_trading_upgrade_ship') }}" method="post">
        @csrf
        <input type="hidden" name="ship" value='F'>
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="ship-6-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div
                class="w-vw-60 h-vh-60 bg-lt-rb-frame pt-12 pb-24 px-12 2xl:p-12 absolute bg-contain bg-no-repeat flex flex-col justify-between">
                <div class="text-3xl ml-12 mb-8">Upgrade</div>
                <div class="text-xl ml-12 mr-24 font-montserrat">
                    <div class="mb-8">
                        @if (Auth::user()->ship6 > Auth::user()->ship1 || Auth::user()->ship6 > Auth::user()->ship2 || Auth::user()->ship6 > Auth::user()->ship3 || Auth::user()->ship6 > Auth::user()->ship4 || Auth::user()->ship6 > Auth::user()->ship5)
                            Please upgrade all the parts to the same level first.
                        @elseif (Auth::user()->ship6 != 5)
                            Are you sure you want to upgrade part F for
                            <span class="font-bold">
                                @if (Auth::user()->ship6 == 0)
                                    <span>100</span> Eternites?
                                @elseif (Auth::user()->ship6 == 1)
                                    <span>150</span> Eternites?
                                @elseif (Auth::user()->ship6 == 2)
                                    <span>300</span> Eternites?
                                @elseif (Auth::user()->ship6 == 3)
                                    <span>350</span> Eternites?
                                @elseif (Auth::user()->ship6 == 4)
                                    <span>400</span> Eternites?
                                @endif
                            </span>
                        @else
                            <span class="font-bold">This ship's part is already at Max Level.</span>
                        @endif
                    </div>
                </div>
                <div class="flex items-center justify-end gap-x-4 2xl:mr-36">
                    @if (Auth::user()->ship6 > Auth::user()->ship1 || Auth::user()->ship6 > Auth::user()->ship2 || Auth::user()->ship6 > Auth::user()->ship3 || Auth::user()->ship6 > Auth::user()->ship4 || Auth::user()->ship6 > Auth::user()->ship5)
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @elseif (Auth::user()->ship6 != 5)
                        <div type="submit" class="hover-button" onclick="closeModal();">No</div>
                        <button type="submit" class="hover-button">Yes</button>
                    @else
                        <div type="submit" class="hover-button" onclick="closeModal();">Okay</div>
                    @endif
                </div>
            </div>
        </div>
    </form>
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
        var ship1 = @json(Auth::user()->ship1);
        var ship2 = @json(Auth::user()->ship2);
        var ship3 = @json(Auth::user()->ship3);
        var ship4 = @json(Auth::user()->ship4);
        var ship5 = @json(Auth::user()->ship5);
        var ship6 = @json(Auth::user()->ship6);
        var power = 0;
        var ships = [ship1, ship2, ship3, ship4, ship5, ship6]
        ships.forEach(element => {
            if (element == 1) {
                power += 150;
            } else if (element == 2) {
                power += 380;
            } else if (element == 3) {
                power += 1030;
            } else if (element == 4) {
                power += 1930;
            } else if (element == 5) {
                power += 3130;
            }
        });
        $('#power-value').html(power);
        var powerbarwidth = power / 18780 * 100;
        $('#power-bar').css('width', powerbarwidth + '%')
        var ration = @json(Auth::user()->ration);
        var coal = @json(Auth::user()->coal);
        var cannonball = @json(Auth::user()->cannonball);
        var cannon = @json(Auth::user()->cannon);
        var resources = (ration * 40) + (coal * 75) + (cannonball * 450) + (cannon * 3250);
        $('#points').html((power * 3 / 5) + (resources * 2 / 5));

    </script>
    <script>
        function plusCraft(order) {
            $('#craft-' + order).get(0).value++
        }

        function minCraft(order) {
            $('#craft-' + order).get(0).value--
        }

    </script>
@endsection
