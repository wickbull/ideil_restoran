@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

				@if (Auth::check())
                    @if(Auth::user()->admin == 1)
                        <div class="admin_add_btn"> 
                            <center>
<<<<<<< HEAD
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('food.add_cat_food')</a>
=======
<<<<<<< HEAD
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('food.add_cat_food')</a>
=======
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_1'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                            </center>
                        </div>
                    @endif
                @endif
                <div class="col-md-3 left_col">
                    <div class="col-md-12 div_block">
                        <center><b style="color:#FF8130">@lang('food.categories')</b></center>
                        @foreach($categories as $category)
                            <div class="category_buttons">
                                <a href="{{ route('show_additionalls',['id' => $category->id, 'name' => $category->product]) }}" class="btn btn-warning btn-xs float_left"><b style="color:#CD5000;border-radius: 0;">{{ $category->product }}</b></a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-9 right_col">
                @foreach($additionall as $add)
                    <div class="col-md-12 div_block">
                        <div class="col-md-4">
                            <img width="65%" src="/img/300x200/additionall/{{ $add->photo }}" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <center><b style="color:#FF8130">{{ $name }}</b>: {{ $add->name }}</center>
                            </div>
                            <div class="col-md-12">
                                <b style="color:#FF8130">@lang('food.ingredients')</b>: {!! $add->info !!}
                            </div>
                            <div class="col-md-12">
                                <b style="color:#FF8130">@lang('food.weight')</b>: {{ $add->weight }}
                                @if(session('food') == '1')
                                    <div class="float_right">
                                        <b style="color:#FF8130">@lang('food.price')</b>: {{ $add->price_uah }} грн.
                                    </div>
                                @else
                                    <div class="float_right">
                                        <b style="color:#FF8130">@lang('food.price')</b>: {{ $add->price_uah }} грн.
                                    </div>
                                @endif
                                
                            </div>
                            <div class="col-md-12">
                                <div class="float_right">
                                   

                                    @if (Auth::check())

                                        @if(Auth::user()->admin == 1)
                                            
                                            <a href="{{ route('show_additionall',['id' => $add->id]) }}" class="btn btn-warning btn-xs right_price">@lang('food.edit')</a>

                                        @endif
                                    @else
                                        <form method="POST" action="{{ route('add_to_basket') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            
                                            <input type="hidden" name="id_category" value="{{ $id_category }}">
                                            
                                            <input type="hidden" name="id_food" value="{{ $add->id }}">
                                            
                                            <input type="hidden" name="name_cat" value="{{ $name }}">

<<<<<<< HEAD
                                            <input type="hidden" name="name_food" value="{{ $add->name }}">

                                            <input type="hidden" name="price_uah" value="{{ $add->price_uah }}">

                                            <input type="hidden" name="price_usd" value="{{ $add->price_usd }}">
                                            
                                            <input type="hidden" name="count" value="1">
                                            
                                            <input type="hidden" name="photo" value="/img/300x200/additionall/{{ $add->photo }}">
                                            
                                            @if(session('food.'.$add->id) == NULL)
                                                <button type="submit" name="inc" value="+" class="btn btn-primary btn-xs right_price">Додати в кошик</button>
                                            @else
                                                <button type="submit" name="inc" value="+" class="btn btn-primary btn-xs right_price">+</button>
                                                <button class="btn btn-danger btn-xs right_price">{{session('food.'.$add->id)}}</button>
                                                <button type="submit" name="dec" value="-" class="btn btn-primary btn-xs right_price">-</button>
                                                </button>
                                            @endif
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                
                    
=======
                @foreach($additionall as $add)
                    <div class="col-md-4 block">
                        <div class="col-md-12 top">
                            <center><b>{{ $name }}</b>: {{ $add->name }}</center>
                        </div>
                        <div class="col-md-12 center">
                            <img src="/img/300x200/additionall/{{ $add->photo }}" alt="">
                        </div>
                        <div class="col-md-12 center_text">
<<<<<<< HEAD
                            <center><b>@lang('food.ingredients')</b></center>
=======
                            <center><b>{{ $lang['status_1'] }}</b></center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                        </div>
                        <div class="col-md-12 center_text">
                            {!! nl2br($add->info) !!}
                        </div>
                        <div class="col-md-12 center_text">
                            <div class="col-md-12">
<<<<<<< HEAD
                                <center> <b>@lang('food.pw')</b> </center>
                            </div>
                            @lang('food.weight') {{ $add->weight }}
=======
                                <center> <b>{{ $lang['status_2'] }}</b> </center>
                            </div>
                            Вага: {{ $add->weight }}
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                            <div class="right_price">{{ $add->price_uah }} грн. / {{ $add->price_usd }} usd. </div>
                        </div>

                        <div class="col-md-12 bottom">

<<<<<<< HEAD
                            <a href="{{ route('go_to_order',['id' => $add->id]) }}" class="btn btn-primary right_price">@lang('food.order')</a>
=======
                            <a href="{{ route('go_to_order',['id' => $add->id]) }}" class="btn btn-primary right_price">{{ $lang['button_3'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f

                            @if (Auth::check())

                                @if(Auth::user()->admin == 1)
                                    
<<<<<<< HEAD
                                    <a href="{{ route('show_additionall',['id' => $add->id]) }}" class="btn btn-warning right_price">@lang('food.edit')</a>
=======
                                    <a href="{{ route('show_additionall',['id' => $add->id]) }}" class="btn btn-warning right_price">{{ $lang['button_2'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f

                                @endif

                            @endif
                        </div>

                    </div>
                @endforeach

>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
            </div>
        </div>
    </div>
@endsection
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

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
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
