@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                    
                @if (Auth::check())
                    @if(Auth::user()->admin == 1)
                        <div class="admin_add_btn"> 
                            <center>
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">Добавити їжу</a>
                            </center>
                        </div>
                    @endif
                @endif

                @foreach($foods as $food)
                    <div class="col-md-4 block">
                        <div class="col-md-12 top">
                            <center>{{ $food->product }}</center>
                        </div>
                        <div class="col-md-12 center">
                            <img src="{{ $food->photo }}" alt="">
                        </div>
                        <div class="col-md-12 center_text">
                            <center> <b>Ціна і вага(об'єм) без складників</b> </center>
                            Вага: {{ $food->weight }}
                            <div class="right_price">{{ $food->price_uah }} грн. / {{ $food->price_usd }} usd. </div>
                        </div>

                        <div class="col-md-12 bottom">

                            @if (Auth::check())

                                @if(Auth::user()->admin == 1)

                                    <a href="/home/cat" class="btn btn-primary right_price">Детальніше</a>
                                    <a href="" class="btn btn-warning right_price">Редагувати</a>

                                @else

                                    <a href="/home/cat" class="btn btn-primary right_price">Детальніше</a>

                                @endif

                            @endif
                        </div>

                    </div>
                @endforeach
                <div class="col-md-12">
                    <center>{{ $foods->render() }}</center>
                </div>            

            </div>

        </div>
    </div>
@endsection
