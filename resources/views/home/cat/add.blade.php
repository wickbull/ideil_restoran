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
		                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_food.add_cat_food')</a>
		                            </center>
		                        </div>
		                        
		                        <div class="col-md-12">
		                        	<a href="{{ url('config/edit_additionallies') }}" class="btn btn-success btn-lg button_add">@lang('edit_food.back')</a>
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
											    <label>@lang('edit_food.name') : <b style="color:#FFCE44;">{{ $additionall->name }}</b></label>
											    <input type="text" name="name" class="form-control" placeholder="{{ $additionall->name }}">
										  	</div>

										  	<div class="form-group">
											    <label>@lang('edit_food.price_uah') : <b style="color:#FFCE44;">{{ $additionall->price_uah }}</b></label>
											    <input type="text" id="price_uah_2" onChange="check_usd()" name="price_uah" class="form-control" placeholder="{{ $additionall->price_uah }}">
										  	</div>
		                            	</div>

		                            	<div class="col-md-4">
		                            		<div class="form-group">
											    <label>@lang('edit_food.weight') : <b style="color:#FFCE44;">{{ $additionall->weight }}</b></label>
											    <input type="text" name="weight" class="form-control" placeholder="{{ $additionall->weight }}">
										  	</div>

										  	<div class="form-group">
											    <label>@lang('edit_food.price_usd') : <b style="color:#FFCE44;">{{ $additionall->price_usd }}</b></label>
											    <input type="text" id="price_usd_2" onChange="check_usd()" name="price_usd" class="form-control" placeholder="{{ $additionall->price_usd }}">
										  	</div>
		                            	</div>

		                            	<div class="col-md-4">
		                            		<div class="form-group">
											    <label>@lang('edit_food.category') : <b style="color:#FFCE44;">{{ $additionall->product }}</b></label>
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
														<label>@lang('edit_food.ingredients') : </label>
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
		                        	<button type="submit" class="btn btn-default right_price">@lang('edit_food.change')</button>
		                        </div>

		                    </div>

	                    </form>


		            </div>
		        </div>
		    </div>
    	@endif
    @endif
@endsection

