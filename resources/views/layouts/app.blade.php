<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eternity 6.0</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    @yield('head')
</head>

<body class="font-audiowide text-white tracking-widest">
    @yield('modals')
    @auth
        <div class="absolute w-screen h-screen hidden items-center justify-center modal" id="auction-modal">
            <div class="bg-transparent backdrop-blur-sm 50 w-screen h-screen absolute background-modal"
                onclick="closeModal();">
            </div>
            <div class="w-vw-60 h-vh-60 bg-lt-rb-frame p-12 absolute bg-contain bg-no-repeat flex flex-col gap-16">
                <div class="text-3xl ml-12 mb-8">Entry Access</div>
                <div class="text-2xl mx-24">
                    <form method="POST" action="{{ route('rally_trading_auction_answer') }}">
                        @csrf
                        @if (Auth::user()->auction_q == 1)
                            The biggest virtual rally business competition?
                        @elseif (Auth::user()->auction_q == 2)
                            Universitas yang menyelenggarakan Efortion 3.0?
                        @elseif (Auth::user()->auction_q == 3)
                            Suatu kondisi dimana terjadi peningkatan harga barang dan jasa secara terus menerus disebut?
                        @elseif (Auth::user()->auction_q == 4)
                            Siapakah nama anak presiden pertama Indonesia yang mendirikan partai demokrasi Indonesia
                            perjuangan?
                        @elseif (Auth::user()->auction_q == 5)
                            Dimanakah letak museum Fatahilah?
                        @elseif (Auth::user()->auction_q == 6)
                            Pulau yang memiliki luas 587.295 km persegi?
                        @elseif (Auth::user()->auction_q == 7)
                            Suku Ifugao berasal dari provinsi?
                        @elseif (Auth::user()->auction_q == 8)
                            Pulau terbesar di Indonesia sebelah barat?
                        @elseif (Auth::user()->auction_q == 9)
                            Negara di Asia Tenggara yang tidak pernah dijajah?
                        @elseif (Auth::user()->auction_q == 10)
                            Undang-Undang tidak tertulis disebut?
                        @endif
                        <div></div>
                        <div class="flex items-center justify-between gap-8 mb-12">
                            <label for="answer">Answer</label>
                            <input id="answer" class="input-text" type="text" name="answer" required>
                        </div>
                        <div class="flex items-center">
                            <button type="submit" class="hover-button ml-auto">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endauth
    <div class="w-screen h-screen bg-e-grid-black relative">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    @yield('scripts')
    <script>
        function openModal(type) {
            $('#' + type + '-modal').removeClass('hidden').addClass('flex');
        }

        function closeModal() {
            $('.modal').removeClass('flex').addClass('hidden');
        }
    </script>
</body>

</html>
