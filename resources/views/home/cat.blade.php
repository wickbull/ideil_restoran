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

                @foreach($additionall as $add)
                    <div class="col-md-4 block">
                        <div class="col-md-12 top">
                            <center><b>{{ $name }}</b>: {{ $add->name }}</center>
                        </div>
                        <div class="col-md-12 center">
                            <img src="/img/300x200/additionall/{{ $add->photo }}" alt="">
                        </div>
                        <div class="col-md-12 center_text">
                            <center><b>@lang('food.ingredients')</b></center>
                        </div>
                        <div class="col-md-12 center_text">
                            {!! nl2br($add->info) !!}
                        </div>
                        <div class="col-md-12 center_text">
                            <div class="col-md-12">
                                <center> <b>@lang('food.pw')</b> </center>
                            </div>
                            @lang('food.weight') {{ $add->weight }}
                            <div class="right_price">{{ $add->price_uah }} грн. / {{ $add->price_usd }} usd. </div>
                        </div>

                        <div class="col-md-12 bottom">

                            <a href="{{ route('go_to_order',['id' => $add->id]) }}" class="btn btn-primary right_price">@lang('food.order')</a>

                            @if (Auth::check())

                                @if(Auth::user()->admin == 1)
                                    
                                    <a href="{{ route('show_additionall',['id' => $add->id]) }}" class="btn btn-warning right_price">@lang('food.edit')</a>

                                @endif

                            @endif
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
