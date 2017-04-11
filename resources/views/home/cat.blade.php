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

            	<div class="col-md-4 block">
				    <div class="col-md-12 top">123</div>
			    	<div class="col-md-12 center_text">123</div>
			    	<div class="col-md-12 bottom">
				  		<button type="submit" class="btn btn-default right_price">Добавити</button>
				  	</div>
                </div>
            </div>
        </div>
    </div>
@endsection