@if (Auth::check())
    @if (Auth::user()->admin == 1)

    	@extends('layouts.app')
		
		@section('js')
			<script>
		        window.oninput = function onInputPrice() {
		            
		            var price1 = document.getElementById('price_uah').value;
		            var str1 = (price1 / {{ $nbu_usd }}).toFixed(2);
		            document.getElementById('price_usd').value = str1;

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
			        		<a href="{{ url('config/edit_food') }}" class="btn btn-danger btn-lg button_add">{{ $lang['button_1'] }}</a>
			        		<a href="{{ url('config/edit_additionallies') }}" class="btn btn-warning btn-lg right_price">{{ $lang['button_2'] }}</a>
			        	</div>
						<div class="col-md-6 block">
						    <div class="col-md-12 top">
						        <center> <b>{{ $lang['section_1'] }}</b> </center>
						    </div>
						    <div class="col-md-12 center_text">

						        <form method="POST" action="{{ route('foodStore') }}" enctype="multipart/form-data">
								  	{{ csrf_field() }}
								  	<div class="form-group">
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
									    <input type="file" name="file" id="file" onChange="checkProduct()" class="btn btn-success">
								  	</div>
							</div>
								  	<div class="col-md-12 bottom">
								  		<button type="submit" id="submit" class="btn btn-default right_price" disabled>{{ $lang['button_3'] }}</button>
								  	</div>
								</form>

						</div>

						<div class="col-md-6 block">
						    <div class="col-md-12 top">
						        <center> <b>{{ $lang['section_2'] }}</b> </center>
						    </div>

						    <div class="col-md-12 center_text">




						        <form method="POST" action="{{route('addAdditional')}}" enctype="multipart/form-data">
						        	{{ csrf_field() }}
								  	<div class="form-group">
									    <label for="exampleInputEmail1">{{ $lang['status_1'] }}</label>
									    <input type="text" name="name" id="name" onChange="checkAdditionall()" class="form-control" placeholder="{{ $lang['status_1'] }}">
								  	</div>
								  	
									<div class="form-group">
										<div class="col-md-12">
											<label>{{ $lang['status_7'] }}</label>
										</div>
									    <div class="col-md-8">
									    	<input type="text" name="weight" id="weigh" onChange="checkAdditionall()" class="form-control" placeholder="{{ $lang['status_7'] }}">
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
								  			<label for="form-control">{{ $lang['status_8'] }}</label>
								  		</div>
								  		<div class="col-md-12">
								  			<select size="1" name="product" class="form-control">
									    		@foreach($food_adds as $food_add)
													<option value="{{ $food_add->id }}"> 
													{{ $food_add->product }} / {{ $food_add->weight }} = {{ $food_add->price_uah }} грн. / {{ $food_add->price_usd }} usd.
													</option>
									    		@endforeach
										   </select>
								  		</div>
								  	</div>
								  	<div class="form-group">
									    <div class="col-md-6">
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
									    <input type="file" name="file" id="file2" onChange="checkAdditionall()" class="btn btn-success">
								  	</div>
								  	
							</div>
								  	<div class="col-md-12 bottom">
								  		<button type="submit" id="sbmt" class="btn btn-default right_price" disabled>{{ $lang['button_3'] }}</button>
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
				<center> <h2><b style="color:#980000;">{{ $lang['status_11'] }}:</b> {{ $lang['status_10'] }} </h2> </center>
			</div>
		@endsection

    @endif
@endif

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

		