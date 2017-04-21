@extends('layouts.app')

@section('money_js')
	<script>
        window.oninput = function check_money() {
        	var price2 = document.getElementById('price_uah_1').value;
            var str2 = (price2 / {{ $nbu_usd }}).toFixed(2);
            document.getElementById('price_usd_1').value = str2;
        }
    </script>
@endsection

@section('content')
	@if (Auth::check())
	    @if(Auth::user()->admin == 1)
		
			<div class="container">
		        <div class="row">
		            <div class="col-md-10 col-md-offset-1">
						
						@if (Auth::check())
		                    @if(Auth::user()->admin == 1)
		                        <div class="admin_add_btn"> 

		                            <center>
<<<<<<< HEAD
		                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_category.add_cat_food')</a>
=======
<<<<<<< HEAD
		                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_category.add_cat_food')</a>
=======
		                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_1'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
		                            </center>
		                            
		                        </div>
		                        <div class="col-md-12">
<<<<<<< HEAD
		                        	<a href="{{ url('config/edit_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_category.back_to_cat')</a>
=======
<<<<<<< HEAD
		                        	<a href="{{ url('config/edit_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_category.back_to_cat')</a>
=======
		                        	<a href="{{ url('config/edit_food') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_2'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
		                        </div>
		                    @endif
		                @endif
						
	                    
	                    <form method="POST" action="{{ route('editFood') }}" enctype="multipart/form-data">
	                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	                    	<input type="hidden" name="id" value="{{ $food->id }}">
	                    	<div class="col-md-12 block">

		                        <div class="col-md-12 center_text">
		                            
		                            <div class="col-md-4 center">

		                            	<div class="col-md-12">
		                            		<img style="border-radius: 5px;" src="{{ $food->photo }}" alt="">
		                            	</div>
		                            	
		                            </div>

		                            

		                            <div class="col-md-8">

		                            	<div class="col-md-4">
		                            		<div class="form-group">
<<<<<<< HEAD
											    <label>@lang('edit_category.name') : <b style="color:#FFCE44;">{{ $food->product }}</b></label>
											    <input type="text" name="product" class="form-control" placeholder="">
										  	</div>
=======
<<<<<<< HEAD
											    <label>@lang('edit_category.name') : <b style="color:#FFCE44;">{{ $food->product }}</b></label>
											    <input type="text" name="product" class="form-control" placeholder="">
										  	</div>
=======
											    <label>{{ $lang['status_1'] }} : <b style="color:#FFCE44;">{{ $food->product }}</b></label>
											    <input type="text" name="product" class="form-control" placeholder="">
										  	</div>

										  	<div class="form-group">
											    <label>{{ $lang['status_3'] }} : <b style="color:#FFCE44;">{{ $food->price_uah }}</b></label>
											    <input type="text" id="price_uah_1" onChange="check_money()" name="price_uah" class="form-control" placeholder="">
										  	</div>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
		                            	</div>

		                            	<div class="col-md-4">
		                            		<div class="form-group">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
		                            			<label>@lang('edit_category.photo')</label>
											    <input type="file" name="file" class="btn btn-success">
										  	</div>										  	
		                            	</div>
										
		                            </div>
		                        </div>
		                        <div class="col-md-12 bottom">
		                        	<button type="submit" class="btn btn-default right_price">@lang('edit_category.change')</button>
<<<<<<< HEAD
=======
=======
											    <label>{{ $lang['status_2'] }} : <b style="color:#FFCE44;">{{ $food->weight }}</b></label>
											    <input type="text" name="weight" class="form-control" placeholder="">
										  	</div>

										  	<div class="form-group">
											    <label>{{ $lang['status_4'] }} : <b style="color:#FFCE44;">{{ $food->price_usd }}</b></label>
											    <input type="text" id="price_usd_1" onChange="check_money()" name="price_usd" class="form-control" placeholder="">
										  	</div>
		                            	</div>

		                            </div>
		                            <div class="col-md-4">
	                            		<div class="col-md-12 mg_top">
	                            			<input type="file" name="file" class="btn btn-success">
	                            		</div>
		                            </div>
		                            
		                        </div>

		                        <div class="col-md-12 bottom">
		                        	<button type="submit" class="btn btn-default right_price">{{ $lang['button_3'] }}</button>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
		                        </div>

		                    </div>

	                    </form>


		            </div>
		        </div>
		    </div>
    	@endif
    @endif
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
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
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
@endsection