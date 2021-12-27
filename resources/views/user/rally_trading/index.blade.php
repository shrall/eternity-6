@extends('layouts.app')

@section('content')
<form action="#" method="post">
    @csrf
    <div class="grid grid-cols-12 h-screen">
        @include('user.rally_trading.inc.sidebar')
        <div class="col-span-10 h-screen flex flex-col gap-y-8 px-4 py-8">
            @include('user.rally_trading.inc.topbar')
            <div class="h-vh-50 grid grid-cols-10 gap-x-4">
                <div class="col-span-8 flex flex-col gap-2">
                    <div class="flex items-center gap-8">
                        <div class="border-2 border-eternity-6-gray px-2 py-1">
                            Your Ship
                        </div>
                        <div class="border-2 border-eternity-6-gray px-2 py-1">
                            Tier Status: Novice
                        </div>
                    </div>
                    <div class="w-full h-full border-2 border-eternity-6-gray px-4 py-2">
                        <div>Ship</div>
                    </div>
                </div>
                <div class="col-span-2 flex flex-col gap-2">
                    <div class="h-7/10 border-2 border-eternity-6-gray px-12 py-8 flex flex-col gap-y-2">
                        <div class="mb-8">Ship Status</div>
                        <div class="font-montserrat font-bold">Power</div>
                        <div class="border-4 border-white h-6 mb-8">
                            <div class="w-1/2 bg-white h-4"></div>
                        </div>
                        <div class="font-montserrat font-bold">Resource</div>
                        <div class="font-montserrat">100</div>
                    </div>
                    <div class="h-3/10 border-2 border-eternity-6-gray px-12 py-4 flex flex-col items-center">
                        <div class="text-lg self-start mb-4">Points</div>
                        <div class="text-2xl">2500</div>
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
                <div class="col-span-1 border-2 border-eternity-6-gray flex items-center justify-center cursor-pointer transition ease-in-out hover:-translate-y-3"
                    onclick="openModal('crafting');">
                    Crafting
                </div>
                <div class="col-span-2 bg-lt-rb-frame bg-contain bg-no-repeat px-8 py-4 flex flex-col items-center">
                    <div class="text-lg self-start mb-4">Profile</div>
                    <div class="text-2xl">Tim Hore</div>
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
                    <tr>
                        <td>1</td>
                        <td>Win Rally One</td>
                        <td><span class="text-eternity-6-green">+ 200 Eternites</span></td>
                        <td>0 Eternites</td>
                        <td>200 Eternites</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Buy Bread</td>
                        <td><span class="text-eternity-6-red">- 10 Eternites</span></td>
                        <td>200 Eternites</td>
                        <td>190 Eternites</td>
                    </tr>
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
                                <td class="flex items-center"><span><img src="{{ asset('svg/e-flower.svg') }}"
                                            class="w-4 mr-2"></span>Flower</td>
                                <td>Food</td>
                                <td>0 pcs</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="flex items-center"><span><img src="{{ asset('svg/e-flower.svg') }}"
                                            class="w-4 mr-2"></span>Flower</td>
                                <td>Food</td>
                                <td>0 pcs</td>
                            </tr>
                        </table>
                    </div>
                </div>
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
                                <td class="flex items-center"><span><img src="{{ asset('svg/e-flower.svg') }}"
                                            class="w-4 mr-2"></span>Flower</td>
                                <td>Food</td>
                                <td>0 pcs</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="flex items-center"><span><img src="{{ asset('svg/e-flower.svg') }}"
                                            class="w-4 mr-2"></span>Flower</td>
                                <td>Food</td>
                                <td>0 pcs</td>
                            </tr>
                        </table>
                    </div>
                </div>
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
                                <td class="flex items-center"><span><img src="{{ asset('svg/e-flower.svg') }}"
                                            class="w-4 mr-2"></span>Flower</td>
                                <td>Food</td>
                                <td>0 pcs</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="flex items-center"><span><img src="{{ asset('svg/e-flower.svg') }}"
                                            class="w-4 mr-2"></span>Flower</td>
                                <td>Food</td>
                                <td>0 pcs</td>
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
                <div
                    class="h-full bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
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
                                <td class="flex items-center"><span><img src="{{ asset('svg/e-flower.svg') }}"
                                            class="w-4 mr-2"></span>Flower</td>
                                <td>Food</td>
                                <td>0 pcs</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="flex items-center"><span><img src="{{ asset('svg/e-flower.svg') }}"
                                            class="w-4 mr-2"></span>Flower</td>
                                <td>Food</td>
                                <td>0 pcs</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="h-full bg-eternity-6-blackbg-contain bg-no-repeat flex flex-col gap-y-4">
                    <div
                        class="h-1/2 bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                        <div class="text-xl mb-4">Recipe</div>
                        <div class="overflow-y-scroll flex">
                            <table class="font-montserrat w-full">
                                <tr>
                                    <td class="w-3/10">Flower</td>
                                    <td>= Flower + Flower </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div
                        class="h-1/2 bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
                        <div class="text-xl mb-4">Craft</div>
                        <div class="overflow-y-scroll flex mb-4">
                            <table class="font-montserrat w-full">
                                <tr>
                                    <td>Item</td>
                                    <td>Amount</td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/e-flower.svg') }}"
                                                class="w-4 mr-2"></span>Flower
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(1);"></span>
                                        <input type="number" id="craft-1" class="input-text w-12" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(1);"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="flex items-center">
                                        <span><img src="{{ asset('svg/e-flower.svg') }}"
                                                class="w-4 mr-2"></span>Flower
                                    </td>
                                    <td>
                                        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200"
                                            onclick="minCraft(1);"></span>
                                        <input type="number" id="craft-1" class="input-text w-12" value=0>
                                        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200"
                                            onclick="plusCraft(1);"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="flex items-center">
                            <button type="submit" class="hover-button ml-auto text-md">Craft</button>
                        </div>
                    </div>
                </div>
                <div
                    class="h-full bg-eternity-6-black border-2 border-eternity-6-gray p-8 bg-contain bg-no-repeat flex flex-col">
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
                                <td class="flex items-center"><span><img src="{{ asset('svg/e-flower.svg') }}"
                                            class="w-4 mr-2"></span>Flower</td>
                                <td>Food</td>
                                <td>0 pcs</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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
