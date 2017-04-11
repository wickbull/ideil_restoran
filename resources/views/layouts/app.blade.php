<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <script src="{ asset('js/jquery.min.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blade.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
                @if (Auth::check())
                    <div class="top-right links">
                        
                        @if(Auth::user()->admin == 1)
                            <a href="{{ url('/home') }}">admin</a>
                        @endif
                        <a href="{{ url('/basket') }}">Basket(5)</a>
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>
                    
                    <div class="top-left links">
                    <a href="/">Welcome</a>
                    You logged in: <b>{{ Auth::user()->name }}</b>
                @else
                    <div class="top-left links">
                        <a href="/">Welcome</a>
                    </div>
                    
                    <div class="top-right links">
                    <a href="{{ url('/home') }}">home</a>
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif

    <script>
        window.oninput = function onInputPrice() {
            var price1 = document.getElementById('price_uah').value;
            var str1 = (price1 / 27).toFixed(2);
            document.getElementById('price_usd').value = str1;

            var price = document.getElementById('price_uah_additional').value;
            var str = (price / 27).toFixed(2);
            document.getElementById('price_usd_additional').value = str;
        }
    </script>     
            


    </div>
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
