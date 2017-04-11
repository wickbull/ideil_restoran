@if (Auth::check())
    @if (Auth::user()->admin == 1)

    	@extends('layouts.app')

		@section('content')

			<div class="container">
			    <div class="row">
			        <div class="col-md-10 col-md-offset-1">
			        	<div class="col-md-12">
			        		<a href="{{ url('config/add_food/edit_food') }}" class="btn btn-danger btn-lg button_add">Управління продуктами</a>
			        		<a href="{{ url('config/add_food/edit_additionallies') }}" class="btn btn-warning btn-lg right_price">Управління складниками</a>
			        	</div>
						<div class="col-md-6 block">
						    <div class="col-md-12 top">
						        <center> <b>Додати продукт</b> </center>
						    </div>
						    <div class="col-md-12 center_text">

						        <form method="POST" action="{{ route('foodStore') }}" enctype="multipart/form-data">
								  	{{ csrf_field() }}
								  	<div class="form-group">
									    <label>Продукція</label>
									    <input type="text" name="product" class="form-control" placeholder="Продукція">
								  	</div>
								  	
								  	<div class="form-group">
									    <label>Вага/Об'єм без складників</label>
									    <div class="col-md-8">
									    	<input type="text" name="weight" class="form-control" placeholder="Вага">
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
									    <label>Стандартна ціна за продукт без сладника</label>
									    
									    <div class="col-md-6">
									    	<label>Ціна в грн</label>
									    	<input type="text" id="price_uah" name="price_uah" class="form-control" placeholder="Ціна гривня">
									    </div>
									    <div class="col-md-6">
									    	<label>Ціна в USD</label>
									    	<input type="text" id="price_usd" name="price_usd" class="form-control" placeholder="Ціна USD">
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label>Фотографія</label>
									    <input type="file" name="file" id="fileToUpload" class="btn btn-success">
								  	</div>
							</div>
								  	<div class="col-md-12 bottom">
								  		<button type="submit" class="btn btn-default right_price">Добавити</button>
								  	</div>
								</form>

						</div>

						<div class="col-md-6 block">
						    <div class="col-md-12 top">
						        <center> <b>Додати складник</b> </center>
						    </div>

						    <div class="col-md-12 center_text">
						        <form method="POST" action="{{route('addAdditional')}}" enctype="multipart/form-data">
						        	{{ csrf_field() }}
								  	<div class="form-group">
									    <label for="exampleInputEmail1">Назва</label>
									    <input type="text" name="name" class="form-control" placeholder="Продукція">
								  	</div>
								  	
									<div class="form-group">
									    <label>Вага/Об'єм без продукту</label>
									    <div class="col-md-8">
									    	<input type="text" name="weight" class="form-control" placeholder="Вага">
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
									    <label>Продукт</label>
									    <p>
									    	<select size="5" name="product" class="form-control">
									    		@foreach($food_adds as $food_add)
													<option value="{{ $food_add->id }}"> 
													{{ $food_add->product }} / {{ $food_add->weight }} = {{ $food_add->price_uah }} грн. / {{ $food_add->price_usd }} usd.
													</option>
									    		@endforeach
										   </select>
										</p>
								  	</div>
								  	<div class="form-group">
								  		<label>Ціна за складник без продукта</label>
									    <div class="col-md-6">
									    	<label for="exampleInputPassword1">Ціна в грн</label>
									    	<input type="text" id="price_uah_additional" name="price_uah" class="form-control" placeholder="Ціна гривня">
									    </div>
									    <div class="col-md-6">
									    	<label for="exampleInputPassword1">Ціна в USD</label>
									    	<input type="text" id="price_usd_additional" name="price_usd" class="form-control" placeholder="Ціна USD">
									    </div>
								  	</div>
								  	<div class="form-group">
									    <label for="exampleInputPassword1">Що входить</label>
									    <textarea name="info" class="form-control" cols="30" rows="10"></textarea>
								  	</div>
								  	<div class="form-group">
									    <label>Фотографія</label>
									    <input type="file" name="file" id="fileToUpload" class="btn btn-success">
								  	</div>
								  	
							</div>
								  	<div class="col-md-12 bottom">
								  		<button type="submit" class="btn btn-default right_price">Добавити</button>
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
				<center> <h2><b style="color:#980000;">Error:</b>  Доступ закритий! </h2> </center>
			</div>
		@endsection

    @endif
@endif

		