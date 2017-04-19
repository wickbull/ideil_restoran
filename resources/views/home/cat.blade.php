@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

				@if (Auth::check())
                    @if(Auth::user()->admin == 1)
                        <div class="admin_add_btn"> 
                            <center>
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_1'] }}</a>
                            </center>
                        </div>
                    @endif
                @endif

                @foreach($additionall as $add)
                    <div class="col-md-4 block">
                        <div class="col-md-12 top">
                            <center><b>{{ $name }}</b>: {{ $add->name }}</center>
                        </div>
                        <div class="col-md-12 center">
                            <img src="/img/300x200/additionall/{{ $add->photo }}" alt="">
                        </div>
                        <div class="col-md-12 center_text">
                            <center><b>{{ $lang['status_1'] }}</b></center>
                        </div>
                        <div class="col-md-12 center_text">
                            {!! nl2br($add->info) !!}
                        </div>
                        <div class="col-md-12 center_text">
                            <div class="col-md-12">
                                <center> <b>{{ $lang['status_2'] }}</b> </center>
                            </div>
                            Вага: {{ $add->weight }}
                            <div class="right_price">{{ $add->price_uah }} грн. / {{ $add->price_usd }} usd. </div>
                        </div>

                        <div class="col-md-12 bottom">

                            <a href="{{ route('go_to_order',['id' => $add->id]) }}" class="btn btn-primary right_price">{{ $lang['button_3'] }}</a>

                            @if (Auth::check())

                                @if(Auth::user()->admin == 1)
                                    
                                    <a href="{{ route('show_additionall',['id' => $add->id]) }}" class="btn btn-warning right_price">{{ $lang['button_2'] }}</a>

                                @endif

                            @endif
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section('button_admin')
    {{ $lang_layout['button_1'] }}
@endsection

@section('button_basket')
    {{ $lang_layout['button_2'] }}
@endsection

@section('button_shop')
    {{ $lang_layout['button_3'] }}
@endsection

@section('button_logout')
    {{ $lang_layout['button_4'] }}
@endsection

@section('button_login')
    {{ $lang_layout['button_5'] }}
@endsection

@section('button_register')
    {{ $lang_layout['button_6'] }}
@endsection

@section('button_home')
    {{ $lang_layout['button_7'] }}
@endsection

@section('logged')
    {{ $lang_layout['auth'] }}
@endsection