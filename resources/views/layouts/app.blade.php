<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Завдання') }}</title>
    
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

        function checkProduct() {
            var product = $('#product').val();
            var weight = $('#weight').val();
            var price_uah = $('#price_uah').val();
            var file = $('#file').val();
             
            if(product.length != 0 && weight.length != 0  && price_uah.length != 0  && file.length != 0) {
                $('#submit').removeAttr('disabled');
            } else {
                $('#submit').attr('disabled', 'disabled');
            }
        }

        
    </script>
    <script>
        function checkAdditionall() {
            var name = $('#name').val();
            var weight = $('#weigh').val();
            var price_ua = $('#price_uah_additional').val();
            var info = $('#info').val();
            var file = $('#file2').val();
             
            if(name.length != 0 && weight.length != 0  && price_ua.length != 0  && info.length != 0 && file.length != 0 ) {
                $('#sbmt').removeAttr('disabled');
            } else {
                $('#sbmt').attr('disabled', 'disabled');
            }
        }
    </script>
    <script>
        function checkBasket() {
            var count = $('#count').val();
            var name_user = $('#name_of_user').val();
            var phone = $('#phone').val();

            if(count.length != 0 && name_user.length != 0  && phone.length != 0) {
                $('#submit').removeAttr('disabled');
            } else {
                $('#submit').attr('disabled', 'disabled');
            }
        }
    </script>
</head>
<body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
                @if (Auth::check())
                    <div class="top-right links">
                        
                        @if(Auth::user()->admin == 1)
                            <a href="{{ url('/config') }}">@yield('button_admin')</a>
                        @endif
                        <a href="{{ url('/basket') }}">@yield('button_basket')</a>
                        <a href="{{ url('/home') }}">@yield('button_shop')</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            @yield('button_logout')
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>
                    
                    <div class="top-left links">
                    <a href="/">@yield('button_home')</a>
                    @yield('logged'): <b>{{ Auth::user()->name }}</b>
                @else
                    <div class="top-left links">
                        <a href="/">@yield('button_home')</a>
                    </div>
                    
                    <div class="top-right links">
                    <a href="{{ url('/home') }}">@yield('button_shop')</a>
                    <a href="{{ url('/login') }}">@yield('button_login')</a>
                    <a href="{{ url('/register') }}">@yield('button_register')</a>
                @endif
            </div>
        @endif
        


         
            
    @yield('money_js')
    @yield('javasrc')
    @yield('js')
    @yield('total_price')
    </div>
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
