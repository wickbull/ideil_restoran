<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <!-- Styles -->

        <style>
            a:link{
                text-decoration: none;
                color: rgba(106,106,106,0.6);
                -moz-transition: all 0.3s linear;
                -o-transition: all 0.3s linear;
                -webkit-transition: all 0.3s linear;
            }

            a:link:hover{
                text-decoration: none;
                color: rgb(106,106,106);
            }

            html, body {
<<<<<<< HEAD
                /* background-image: url('/img/restoran.jpg'); */
                background: #111111;
=======
                background-image: url('/img/restoran.jpg');
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                color: #FFFFFF;
                /* 636b6f */
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

            }

            .img_lang{
                width: 100%;
            }

            .add_lang{
                font-size: 5em;
                font-weight: 900;
                
                background: rgba(169,169,169,0.6);
                width: 40%;
                height: 25vh;
                border-radius: 5px;
                -moz-transition: all 0.3s linear;
                -o-transition: all 0.3s linear;
                -webkit-transition: all 0.3s linear;
            }

            .add_lang:hover{

                color: #FFFFFF;
                background: rgb(169,169,169);
            }

            .img_lang img{
                width: 40%;
                height: 25vh;
                -moz-transition: all 0.3s linear;
                -o-transition: all 0.3s linear;
                -webkit-transition: all 0.3s linear;
            }

            .img_lang img:hover{
                width: 50%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

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
                            <a href="{{ url('/config') }}">{{ $lang['button_1'] }}</a>
                        @endif
                        <a href="{{ url('/basket') }}">{{ $lang['button_2'] }}</a>
                        <a href="{{ url('/home') }}">{{ $lang['button_3'] }}</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ $lang['button_4'] }}
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>
                        <div class="top-left links">
<<<<<<< HEAD
                        @lang('header.logged_text'): <b>{{ Auth::user()->name }}</b>
                    @else
                        <div class="top-right links">
                        <a href="{{ url('/home') }}">@lang('header.delivery')</a>
                        <a href="{{ url('/login') }}">@lang('header.login')</a>
                        <a href="{{ url('/register') }}">@lang('header.register')</a>
=======
                        {{ $lang['login_info'] }}: <b>{{ Auth::user()->name }}</b>
                    @else
                        <div class="top-right links">
                        <a href="{{ url('/home') }}">{{ $lang['button_3'] }}</a>
                        <a href="{{ url('/login') }}">{{ $lang['button_5'] }}</a>
                        <a href="{{ url('/register') }}">{{ $lang['button_6'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                    @endif
                </div>
            @endif

            <div class="content">
                

                
                 
                <div class="col-md-12">
                    @if(empty(session('language')))
                        <div class="col-md-12" >
                            <h2>Choose your language / Виберіть свою мову</h2>
                        </div>
                        
                            @foreach($languages as $language)
                                <div class="col-md-6">
                                    <h2>
                                        <center>
                                            <div class="img_lang">
                                                <center>
                                                    <b>
                                                        {{ $language->lang }}
                                                    </b>
                                                </center>
                                                <a href="{{ route('chooseLang',['id' => $language->category]) }}">
                                                    <img src="{{ asset($language->photo) }}" alt="{{ $language->lang }}">
                                                </a>   
                                            </div>
                                        </center>
                                    </h2>
                                </div>
                            @endforeach

                    @else

                        <div class="col-md-12" >
<<<<<<< HEAD
                            <h2>@lang('welcome.chose_lang_text') : 
=======
                            <h2>{{ $lang['use'] }} 
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                                @if( session('language') == 1)
                                    English
                                @else
                                    Українська
                                @endif
                            </h2>
                        </div>
                        
                        @foreach($languages as $language)
                            <div class="col-md-6">
                                <h2>
                                    <center>
                                        <div class="img_lang">
                                            <center>
                                                <b>
                                                    {{ $language->lang }}
                                                </b>
                                            </center>
                                            <a href="{{ route('chooseLang',['id' => $language->category]) }}">
                                                <img src="{{ asset($language->photo) }}" alt="{{ $language->lang }}">
                                            </a>   
                                        </div>
                                    </center>
                                </h2>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </body>
</html>
