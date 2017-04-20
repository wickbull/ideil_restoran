@extends('layouts.app')

@section('javasrc')
	<script>
        window.oninput = function check_usd() {
        	var price3 = document.getElementById('price_uah_2').value;
            var str3 = (price3 / {{ $nbu_usd }}).toFixed(2);
            document.getElementById('price_usd_2').value = str3;
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
		                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_food.add_cat_food')</a>
=======
		                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_1'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
		                            </center>
		                        </div>
		                        
		                        <div class="col-md-12">
<<<<<<< HEAD
		                        	<a href="{{ url('config/edit_additionallies') }}" class="btn btn-success btn-lg button_add">@lang('edit_food.back')</a>
=======
		                        	<a href="{{ url('config/edit_additionallies') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_2'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
		                        </div>
		                    @endif
		                @endif

	                    
	                    <form method="POST" action="{{ route('editAdditionall') }}" enctype="multipart/form-data">
	                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	                    	<input type="hidden" name="id" value="{{ $additionall->id }}">
	                    	<div class="col-md-12 block">

		                        <div class="col-md-12 center_text">
		                            
		                            <div class="col-md-4 center">

		                            	<div class="col-md-12">
		                            		<img style="border-radius: 5px;" src="/img/300x200/additionall/{{ $additionall->photo }}" alt="">
		                            	</div>
		                            	
		                            </div>

		                            <div class="col-md-4 mg_top">
	                            		<input type="file" name="file" class="btn btn-success">
	                            	</div>

		                            <div class="col-md-8">

		                            	<div class="col-md-4">
		                            		<div class="form-group">
<<<<<<< HEAD
											    <label>@lang('edit_food.name') : <b style="color:#FFCE44;">{{ $additionall->name }}</b></label>
=======
											    <label>{{ $lang['status_1'] }} : <b style="color:#FFCE44;">{{ $additionall->name }}</b></label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
											    <input type="text" name="name" class="form-control" placeholder="{{ $additionall->name }}">
										  	</div>

										  	<div class="form-group">
<<<<<<< HEAD
											    <label>@lang('edit_food.price_uah') : <b style="color:#FFCE44;">{{ $additionall->price_uah }}</b></label>
=======
											    <label>{{ $lang['status_4'] }} : <b style="color:#FFCE44;">{{ $additionall->price_uah }}</b></label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
											    <input type="text" id="price_uah_2" onChange="check_usd()" name="price_uah" class="form-control" placeholder="{{ $additionall->price_uah }}">
										  	</div>
		                            	</div>

		                            	<div class="col-md-4">
		                            		<div class="form-group">
<<<<<<< HEAD
											    <label>@lang('edit_food.weight') : <b style="color:#FFCE44;">{{ $additionall->weight }}</b></label>
=======
											    <label>{{ $lang['status_2'] }} : <b style="color:#FFCE44;">{{ $additionall->weight }}</b></label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
											    <input type="text" name="weight" class="form-control" placeholder="{{ $additionall->weight }}">
										  	</div>

										  	<div class="form-group">
<<<<<<< HEAD
											    <label>@lang('edit_food.price_usd') : <b style="color:#FFCE44;">{{ $additionall->price_usd }}</b></label>
=======
											    <label>{{ $lang['status_5'] }} : <b style="color:#FFCE44;">{{ $additionall->price_usd }}</b></label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
											    <input type="text" id="price_usd_2" onChange="check_usd()" name="price_usd" class="form-control" placeholder="{{ $additionall->price_usd }}">
										  	</div>
		                            	</div>

		                            	<div class="col-md-4">
		                            		<div class="form-group">
<<<<<<< HEAD
											    <label>@lang('edit_food.category') : <b style="color:#FFCE44;">{{ $additionall->product }}</b></label>
=======
											    <label>{{ $lang['status_3'] }} : <b style="color:#FFCE44;">{{ $additionall->product }}</b></label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
											    <select size="5" name="product" class="form-control">
													@foreach($foods as $food)
														<option value="{{ $food->id }}"> 
															{{ $food->product }}
														</option>
													@endforeach
										   		</select>
										  	</div>
		                            	</div>

										<div class="col-md-12">
											<div class="form-group">
												
												<div class="col-md-4">
													<div class="col-md-12">
<<<<<<< HEAD
														<label>@lang('edit_food.ingredients') : </label>
=======
														<label>{{ $lang['status_5'] }} : </label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
													</div>
													<div class="col-md-12">
														<b style="color:#FFCE44;">{!! nl2br($additionall->info) !!}</b>
													</div>
												</div>

												<div class="col-md-8">
													<textarea name="info" id="info" onChange="checkAdditionall()" class="form-control" cols="30" rows="10" placeholder="{!! nl2br($additionall->info) !!}"></textarea>
												</div>

										  	</div>
										</div>
		                            </div>
		                        </div>

		                        <div class="col-md-12 bottom">
<<<<<<< HEAD
		                        	<button type="submit" class="btn btn-default right_price">@lang('edit_food.change')</button>
=======
		                        	<button type="submit" class="btn btn-default right_price">{{ $lang['button_3'] }}</button>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
		                        </div>

		                    </div>

	                    </form>


		            </div>
		        </div>
		    </div>
    	@endif
    @endif
@endsection

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
