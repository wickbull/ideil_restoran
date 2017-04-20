@if (Auth::check())
    @if (Auth::user()->admin == 1)

    	@extends('layouts.app')
		
		@section('js')
			<script>
		        window.oninput = function onInputPrice() {
		            var price = document.getElementById('price_uah_additional').value;
		            var str = (price / {{ $nbu_usd }}).toFixed(2);
		            document.getElementById('price_usd_additional').value = str;
		        }
		    </script>
		@endsection

		@section('content')

			<div class="container">
			    <div class="row">
			        <div class="col-md-10 col-md-offset-1">
			        	<div class="col-md-12">
			        		<a href="{{ url('config/edit_food') }}" class="btn btn-danger btn-lg button_add">@lang('add_product.manage_category')</a>
			        		<a href="{{ url('config/edit_additionallies') }}" class="btn btn-warning btn-lg right_price">@lang('add_product.manage_food')</a>
			        	</div>
						<div class="col-md-6 block">
						    <div class="col-md-12 top">
						        <center> <b>@lang('add_product.add_category')</b> </center>
						    </div>
						    <div class="col-md-12 center_text">

						        <form method="POST" action="{{ route('foodStore') }}" enctype="multipart/form-data">
								  	{{ csrf_field() }}
								  	<div class="form-group">
									    <label>@lang('add_product.name')</label>
									    <input type="text" name="product" id="product" onChange="checkProduct()" class="form-control" placeholder="@lang('add_product.name')">
								  	</div>
								  	<div class="form-group">
									    <label>@lang('add_product.photo')</label>
									    <input type="file" name="file" id="file" onChange="checkProduct()" class="btn btn-success">
								  	</div>
							</div>
								  	<div class="col-md-12 bottom">
								  		<button type="submit" id="submit" class="btn btn-default right_price" disabled>@lang('add_product.add')</button>
								  	</div>
								</form>

						</div>

						<div class="col-md-6 block">
						    <div class="col-md-12 top">
						        <center> <b>@lang('add_product.add_food')</b> </center>
						    </div>

						    <div class="col-md-12 center_text">




						        <form method="POST" action="{{route('addAdditional')}}" enctype="multipart/form-data">
						        	{{ csrf_field() }}
								  	<div class="form-group">
									    <label for="exampleInputEmail1">@lang('add_product.name')</label>
									    <input type="text" name="name" id="name" onChange="checkAdditionall()" class="form-control" placeholder="@lang('add_product.name')">
								  	</div>
								  	
									<div class="form-group">
										<div class="col-md-12">
											<label>@lang('add_product.weight_volume')</label>
										</div>
									    <div class="col-md-8">
									    	<input type="text" name="weight" id="weigh" onChange="checkAdditionall()" class="form-control" placeholder="@lang('add_product.weight_volume')">
									    </div>
									    <div class="col-md-4">
									    	<select  name="measurement" class="form-control">
										    	<option disabled>---------------</option>
													<option value="Грам">Грам</option>
												<option disabled>---------------</option>
													<option value="Літр">Літр</option>
												<option disabled>---------------</option>	
											</select>
									    </div>
								  	</div>

								  	<div class="form-group">
								  		<div class="col-md-12">
								  			<label for="form-control">@lang('add_product.select_category')</label>
								  		</div>
								  		<div class="col-md-12">
								  			<select size="1" name="product" class="form-control">
									    		@foreach($food_adds as $food_add)
													<option value="{{ $food_add->id }}">
														{{ $food_add->product }}
													</option>
									    		@endforeach
										   </select>
								  		</div>
								  	</div>
								  	<div class="form-group">
									    <div class="col-md-6">
									    	<label for="exampleInputPassword1">@lang('add_product.price_uah')</label>
									    	<input type="text" id="price_uah_additional" onChange="checkAdditionall()" name="price_uah" class="form-control" placeholder="@lang('add_product.price_uah')">
									    </div>
									    <div class="col-md-6">
									    	<label for="exampleInputPassword1">@lang('add_product.price_usd')</label>
									    	<input type="text" name="price_usd" id="price_usd_additional" class="form-control" placeholder="@lang('add_product.price_usd')">
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputPassword1">@lang('add_product.ingredients')</label>
									    <textarea name="info" id="info" onChange="checkAdditionall()" class="form-control" cols="30" rows="10"></textarea>
								  	</div>
								  	<div class="form-group">
									    <label>@lang('add_product.photo')</label>
									    <input type="file" name="file" id="file2" onChange="checkAdditionall()" class="btn btn-success">
								  	</div>
								  	
							</div>
								  	<div class="col-md-12 bottom">
								  		<button type="submit" id="sbmt" class="btn btn-default right_price" disabled>@lang('add_product.add')</button>
								  	</div>
								</form>
						    
						</div>
			        </div>
			    </div>
			</div>	

		@endsection
	@else

		@section('content')
			<div class="container">
				<center> <h2><b style="color:#980000;">Просто непомню що це :</b> і це тоже </h2> </center>
			</div>
		@endsection

    @endif
@endif



		