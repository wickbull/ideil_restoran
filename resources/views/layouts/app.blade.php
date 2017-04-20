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
<<<<<<< HEAD
            var file = $('#file').val();
             
            if(product.length != 0 && file.length != 0) {
=======
            var weight = $('#weight').val();
            var price_uah = $('#price_uah').val();
            var file = $('#file').val();
             
            if(product.length != 0 && weight.length != 0  && price_uah.length != 0  && file.length != 0) {
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
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
<<<<<<< HEAD
                            <a href="{{ url('/config') }}">@lang('header.admin')</a>
                        @endif
                        <a href="{{ url('/basket') }}">@lang('header.basket')</a>
                        <a href="{{ url('/home') }}">@lang('header.delivery')</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            @lang('header.logout')
=======
                            <a href="{{ url('/config') }}">@yield('button_admin')</a>
                        @endif
                        <a href="{{ url('/basket') }}">@yield('button_basket')</a>
                        <a href="{{ url('/home') }}">@yield('button_shop')</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            @yield('button_logout')
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>
                    
                    <div class="top-left links">
<<<<<<< HEAD
                    <a href="/">@lang('header.home')</a>
                    @lang('header.logged_text'): <b>{{ Auth::user()->name }}</b>
                @else
                    <div class="top-left links">
                        <a href="/">@lang('header.home')</a>
                    </div>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach (Config::get('languages') as $lang => $language)
                                
                                    <li>
                                        <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                    </li>
                                
                            @endforeach
                        </ul>
                    </li>
                    
                    <div class="top-right links">

                    

                    <a href="{{ url('/home') }}">@lang('header.delivery')</a>
                    <a href="{{ url('/login') }}">@lang('header.login')</a>
                    <a href="{{ url('/register') }}">@lang('header.register')</a>
=======
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
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
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
