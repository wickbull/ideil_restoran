@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                    
                @if (Auth::check())
                    @if(Auth::user()->admin == 1)
                        <div class="admin_add_btn"> 
                            <center>
                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('category.add_cat_food')</a>
                            </center>
                        </div>
                    @endif
                @endif

                <div class="col-md-12">
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                    <a href="#" class="btn btn-success btn-xs">@lang('category.go')</a>
                </div>

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
                    </div>
                @endforeach
                <div class="col-md-12">
                    <center>{{ $foods->render() }}</center>
                </div>            

            </div>

        </div>
    </div>
@endsection





