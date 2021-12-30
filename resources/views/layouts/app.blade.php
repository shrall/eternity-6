<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eternity 6.0</title>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    @yield('head')
</head>

<body class="font-audiowide text-white tracking-widest">
    @yield('modals')
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
