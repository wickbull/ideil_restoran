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
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('category.add_cat_food')</a>
=======
<<<<<<< HEAD
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('category.add_cat_food')</a>
=======
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_1'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                            </center>
                        </div>
                    @endif
                @endif

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                <div class="col-md-12">
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                </div>

<<<<<<< HEAD
=======
                @foreach($foods as $food)
                    <div class="col-md-3 block">
                        <div class="col-md-12 top">
                            <center>{{ $food->product }}</center>
                        </div>
                        <div class="col-md-12 center_text">
                            <img style="width: 100%; height: 50%;" src="{{ $food->photo }}" alt="">
                        </div>
                        

                        <div class="col-md-12 bottom">
                            <center>
                                <a href="{{ route('show_additionalls',['id' => $food->id, 'name' => $food->product]) }}" class="btn btn-primary btn-xs right_price">@lang('category.more')</a>
                                @if (Auth::check())
                                    @if(Auth::user()->admin == 1)

                                        <a href="{{ route('show_food',['id' => $food->id]) }}" class="btn btn-warning btn-xs right_price">@lang('category.edit')</a>
                                    @endif
                                @endif 
                            </center>
                        </div>
=======
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                @foreach($foods as $food)
                    <div class="col-md-3 block">
                        <div class="col-md-12 top">
                            <center>{{ $food->product }}</center>
                        </div>
                        <div class="col-md-12 center_text">
<<<<<<< HEAD
                            <img style="width: 100%; height: 50%;" src="{{ $food->photo }}" alt="">
=======
                            <center> <b>{{ $lang['param_1'] }}</b> </center>
                            {{ $lang['param_2'] }}: {{ $food->weight }}
                            <div class="right_price">{{ $food->price_uah }} грн. / {{ $food->price_usd }} usd. </div>
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                        </div>
                        

                        <div class="col-md-12 bottom">
                            <center>
                                <a href="{{ route('show_additionalls',['id' => $food->id, 'name' => $food->product]) }}" class="btn btn-primary btn-xs right_price">@lang('category.more')</a>
                                @if (Auth::check())
                                    @if(Auth::user()->admin == 1)

<<<<<<< HEAD
                                        <a href="{{ route('show_food',['id' => $food->id]) }}" class="btn btn-warning btn-xs right_price">@lang('category.edit')</a>
                                    @endif
                                @endif 
                            </center>
                        </div>
=======
                            <a href="{{ route('show_additionalls',['id' => $food->id, 'name' => $food->product]) }}" class="btn btn-primary right_price">{{ $lang['button_2'] }}</a>

                            @if (Auth::check())

                                @if(Auth::user()->admin == 1)

                                    <a href="{{ route('show_food',['id' => $food->id]) }}" class="btn btn-warning right_price">{{ $lang['button_3'] }}</a>

                                @endif

                            @endif

                            

                        </div>

>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                    </div>
                @endforeach
                <div class="col-md-12">
                    <center>{{ $foods->render() }}</center>
                </div>            

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




