@if (Auth::check())
    @if (Auth::user()->admin == 1)

    	@extends('layouts.app')
		
		@section('js')
			<script>
		        window.oninput = function onInputPrice() {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
		            
		            var price1 = document.getElementById('price_uah').value;
		            var str1 = (price1 / {{ $nbu_usd }}).toFixed(2);
		            document.getElementById('price_usd').value = str1;

>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
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
<<<<<<< HEAD
			        		<a href="{{ url('config/edit_food') }}" class="btn btn-danger btn-lg button_add">@lang('add_product.manage_category')</a>
			        		<a href="{{ url('config/edit_additionallies') }}" class="btn btn-warning btn-lg right_price">@lang('add_product.manage_food')</a>
			        	</div>
						<div class="col-md-6 block">
						    <div class="col-md-12 top">
						        <center> <b>@lang('add_product.add_category')</b> </center>
=======
<<<<<<< HEAD
			        		<a href="{{ url('config/edit_food') }}" class="btn btn-danger btn-lg button_add">@lang('add_product.manage_category')</a>
			        		<a href="{{ url('config/edit_additionallies') }}" class="btn btn-warning btn-lg right_price">@lang('add_product.manage_food')</a>
			        	</div>
						<div class="col-md-6 block">
						    <div class="col-md-12 top">
						        <center> <b>@lang('add_product.add_category')</b> </center>
=======
			        		<a href="{{ url('config/edit_food') }}" class="btn btn-danger btn-lg button_add">{{ $lang['button_1'] }}</a>
			        		<a href="{{ url('config/edit_additionallies') }}" class="btn btn-warning btn-lg right_price">{{ $lang['button_2'] }}</a>
			        	</div>
						<div class="col-md-6 block">
						    <div class="col-md-12 top">
						        <center> <b>{{ $lang['section_1'] }}</b> </center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
						    </div>
						    <div class="col-md-12 center_text">

						        <form method="POST" action="{{ route('foodStore') }}" enctype="multipart/form-data">
								  	{{ csrf_field() }}
								  	<div class="form-group">
<<<<<<< HEAD
									    <label>@lang('add_product.name')</label>
									    <input type="text" name="product" id="product" onChange="checkProduct()" class="form-control" placeholder="@lang('add_product.name')">
								  	</div>
								  	<div class="form-group">
									    <label>@lang('add_product.photo')</label>
=======
<<<<<<< HEAD
									    <label>@lang('add_product.name')</label>
									    <input type="text" name="product" id="product" onChange="checkProduct()" class="form-control" placeholder="@lang('add_product.name')">
								  	</div>
								  	<div class="form-group">
									    <label>@lang('add_product.photo')</label>
=======
									    <label>{{ $lang['status_1'] }}</label>
									    <input type="text" name="product" id="product" onChange="checkProduct()" class="form-control" placeholder="{{ $lang['status_1'] }}">
								  	</div>
								  	
								  	<div class="form-group">
									    <label>{{ $lang['status_2'] }}</label>
									    <div class="col-md-8">
									    	<input type="text" name="weight" id="weight" onChange="checkProduct()" class="form-control" placeholder="{{ $lang['status_2'] }}">
									    </div>
									    <div class="col-md-4">
									    	<select  name="measurement" class="form-control">
										    	<option disabled>---------------</option>
													<option value="Грам">Грам</option>
													<option value="Міліграм">Міліграм</option>
												<option disabled>---------------</option>
													<option value="Літр">Літр</option>
													<option value="Мілілітр">Мілілітр</option>
												<option disabled>---------------</option>	
											</select>
									    </div>
								  	</div>

								  	<div class="form-group">
									    <div class="col-md-12">
									    	<center>
									    		<label>{{ $lang['status_3'] }}</label>
									    	</center>
								  		</div>
									    <div class="col-md-6">
									    	<label>{{ $lang['status_4'] }}</label>
									    	<input type="text" id="price_uah" onChange="checkProduct()" name="price_uah" class="form-control" placeholder="{{ $lang['status_4'] }}">
									    </div>
									    <div class="col-md-6">
									    	<label>{{ $lang['status_5'] }}</label>
									    	<input type="text" id="price_usd" name="price_usd" class="form-control" placeholder="{{ $lang['status_5'] }}">
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label>{{ $lang['status_6'] }}</label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
									    <input type="file" name="file" id="file" onChange="checkProduct()" class="btn btn-success">
								  	</div>
							</div>
								  	<div class="col-md-12 bottom">
<<<<<<< HEAD
								  		<button type="submit" id="submit" class="btn btn-default right_price" disabled>@lang('add_product.add')</button>
=======
<<<<<<< HEAD
								  		<button type="submit" id="submit" class="btn btn-default right_price" disabled>@lang('add_product.add')</button>
=======
								  		<button type="submit" id="submit" class="btn btn-default right_price" disabled>{{ $lang['button_3'] }}</button>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
								  	</div>
								</form>

						</div>

						<div class="col-md-6 block">
						    <div class="col-md-12 top">
<<<<<<< HEAD
						        <center> <b>@lang('add_product.add_food')</b> </center>
=======
<<<<<<< HEAD
						        <center> <b>@lang('add_product.add_food')</b> </center>
=======
						        <center> <b>{{ $lang['section_2'] }}</b> </center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
						    </div>

						    <div class="col-md-12 center_text">




						        <form method="POST" action="{{route('addAdditional')}}" enctype="multipart/form-data">
						        	{{ csrf_field() }}
								  	<div class="form-group">
<<<<<<< HEAD
									    <label for="exampleInputEmail1">@lang('add_product.name')</label>
									    <input type="text" name="name" id="name" onChange="checkAdditionall()" class="form-control" placeholder="@lang('add_product.name')">
=======
<<<<<<< HEAD
									    <label for="exampleInputEmail1">@lang('add_product.name')</label>
									    <input type="text" name="name" id="name" onChange="checkAdditionall()" class="form-control" placeholder="@lang('add_product.name')">
=======
									    <label for="exampleInputEmail1">{{ $lang['status_1'] }}</label>
									    <input type="text" name="name" id="name" onChange="checkAdditionall()" class="form-control" placeholder="{{ $lang['status_1'] }}">
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
								  	</div>
								  	
									<div class="form-group">
										<div class="col-md-12">
<<<<<<< HEAD
											<label>@lang('add_product.weight_volume')</label>
										</div>
									    <div class="col-md-8">
									    	<input type="text" name="weight" id="weigh" onChange="checkAdditionall()" class="form-control" placeholder="@lang('add_product.weight_volume')">
=======
<<<<<<< HEAD
											<label>@lang('add_product.weight_volume')</label>
										</div>
									    <div class="col-md-8">
									    	<input type="text" name="weight" id="weigh" onChange="checkAdditionall()" class="form-control" placeholder="@lang('add_product.weight_volume')">
=======
											<label>{{ $lang['status_7'] }}</label>
										</div>
									    <div class="col-md-8">
									    	<input type="text" name="weight" id="weigh" onChange="checkAdditionall()" class="form-control" placeholder="{{ $lang['status_7'] }}">
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
									    </div>
									    <div class="col-md-4">
									    	<select  name="measurement" class="form-control">
										    	<option disabled>---------------</option>
													<option value="Грам">Грам</option>
<<<<<<< HEAD
												<option disabled>---------------</option>
													<option value="Літр">Літр</option>
=======
<<<<<<< HEAD
												<option disabled>---------------</option>
													<option value="Літр">Літр</option>
=======
													<option value="Міліграм">Міліграм</option>
												<option disabled>---------------</option>
													<option value="Літр">Літр</option>
													<option value="Мілілітр">Мілілітр</option>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
												<option disabled>---------------</option>	
											</select>
									    </div>
								  	</div>

								  	<div class="form-group">
								  		<div class="col-md-12">
<<<<<<< HEAD
								  			<label for="form-control">@lang('add_product.select_category')</label>
=======
<<<<<<< HEAD
								  			<label for="form-control">@lang('add_product.select_category')</label>
=======
								  			<label for="form-control">{{ $lang['status_8'] }}</label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
								  		</div>
								  		<div class="col-md-12">
								  			<select size="1" name="product" class="form-control">
									    		@foreach($food_adds as $food_add)
<<<<<<< HEAD
													<option value="{{ $food_add->id }}">
														{{ $food_add->product }}
=======
<<<<<<< HEAD
													<option value="{{ $food_add->id }}">
														{{ $food_add->product }}
=======
													<option value="{{ $food_add->id }}"> 
													{{ $food_add->product }} / {{ $food_add->weight }} = {{ $food_add->price_uah }} грн. / {{ $food_add->price_usd }} usd.
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
													</option>
									    		@endforeach
										   </select>
								  		</div>
								  	</div>
								  	<div class="form-group">
									    <div class="col-md-6">
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
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
=======
									    	<label for="exampleInputPassword1">{{ $lang['status_4'] }}</label>
									    	<input type="text" id="price_uah_additional" onChange="checkAdditionall()" name="price_uah" class="form-control" placeholder="{{ $lang['status_4'] }}">
									    </div>
									    <div class="col-md-6">
									    	<label for="exampleInputPassword1">{{ $lang['status_5'] }}</label>
									    	<input type="text" name="price_usd" id="price_usd_additional" class="form-control" placeholder="{{ $lang['status_5'] }}">
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputPassword1">{{ $lang['status_9'] }}</label>
									    <textarea name="info" id="info" onChange="checkAdditionall()" class="form-control" cols="30" rows="10"></textarea>
								  	</div>
								  	<div class="form-group">
									    <label>{{ $lang['status_6'] }}</label>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
									    <input type="file" name="file" id="file2" onChange="checkAdditionall()" class="btn btn-success">
								  	</div>
								  	
							</div>
								  	<div class="col-md-12 bottom">
<<<<<<< HEAD
								  		<button type="submit" id="sbmt" class="btn btn-default right_price" disabled>@lang('add_product.add')</button>
=======
<<<<<<< HEAD
								  		<button type="submit" id="sbmt" class="btn btn-default right_price" disabled>@lang('add_product.add')</button>
=======
								  		<button type="submit" id="sbmt" class="btn btn-default right_price" disabled>{{ $lang['button_3'] }}</button>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
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
<<<<<<< HEAD
				<center> <h2><b style="color:#980000;">Просто непомню що це :</b> і це тоже </h2> </center>
=======
<<<<<<< HEAD
				<center> <h2><b style="color:#980000;">Просто непомню що це :</b> і це тоже </h2> </center>
=======
				<center> <h2><b style="color:#980000;">{{ $lang['status_11'] }}:</b> {{ $lang['status_10'] }} </h2> </center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
			</div>
		@endsection

    @endif
@endif

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

		