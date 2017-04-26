@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

				@if (Auth::check())
                    @if(Auth::user()->admin == 1)
                        <div class="admin_add_btn"> 
                            <center>
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('food.add_cat_food')</a>
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
                
                    
            </div>
        </div>
    </div>
@endsection
