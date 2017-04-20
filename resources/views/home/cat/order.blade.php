@extends('layouts.app')
	
@section('total_price')
	<script>
		window.oninput = function money() {
		  	var price = document.getElementById('count').value;
		  	var money_uah = (price * {{ $order_addit->price_uah }});
		  	var money_usd = (price * {{ $order_addit->price_usd }});
		  	document.getElementById('price_uah').innerHTML = money_uah;
		  	document.getElementById('price_usd').innerHTML = money_usd;
		  	document.getElementById('value_uah').value = money_uah;
		  	document.getElementById('value_usd').value = money_usd;
		  	console.log(money_uah);
		}
	</script>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	<div class="col-md-12 top">
                <center>Оформити замовлення</center>
            </div>
        	

                    	
                        

	                        <form method="POST" action="{{ route('store_order') }}">
	                        	@if (Auth::check())
	                        		<input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
	                        	@endif
	                        	<input type="hidden" name="id" value="{{ $order_addit->id }}">
	                        	<input type="hidden" name="photo" value="/img/300x200/additionall/{{ $order_addit->photo }}">
		                    	<div class="col-md-12 center_text">
									<div class="col-md-4 center">
			                        	<div class="col-md-12">
			                        		<img style="border-radius: 5px;" src="/img/300x200/additionall/{{ $order_addit->photo }}" alt="">
			                        	</div>
			                        </div>
									<div class="col-md-4 center">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
	                    				<div class="col-md-12">
											<label>Категорія : <b style="color:#FFCE44;">{{ $order_food->product }}</b></label>
											<input type="hidden" name="name_product" value="{{ $order_food->product }}">
										</div>
										<div class="col-md-12">
											<label>Назва : <b style="color:#FFCE44;">{{ $order_addit->name }}</b></label>
											<input type="hidden" name="name_addit" value="{{ $order_addit->name }}">
										</div>
										<div class="col-md-12">
											<label>Складові : <br><b style="color:#FFCE44;">{!! nl2br($order_addit->info) !!}</b></label>
										</div>
										<div class="col-md-12">
											<label>Вага : <b style="color:#FFCE44;">{{ $order_addit->weight }}</b></label>
										</div>
										<div class="col-md-12">
											<label>Ціна UAH : <b style="color:#FFCE44;">{{ $order_addit->price_uah }}</b></label>
										</div>
										<div class="col-md-12">
											<label>Ціна USD : <b style="color:#FFCE44;">{{ $order_addit->price_usd }}</b></label>
											<input type="hidden" value="{{ $order_addit->price_usd }}">
										</div>
									</div>
									<div class="col-md-4 center">
										
									  	<div class="form-group">
										    <label>Ваша вулиця : </label>
										    <input type="text" name="street" class="form-control" placeholder="">
									  	</div>
									  	<div class="form-group">
									  		<label for="">
												<b style="color:#FF001E;">*</b>  обов'язкові поля!
											</label>
									  	</div>
										<div class="form-group">
										    <label>Кількість <b style="color:#FF001E;">*</b> : </label>
										    <input type="text" name="count" id="count" class="form-control" onChange="checkBasket()">
									  	</div>
									  	<div class="form-group">
										    <label>Ваше ім'я <b style="color:#FF001E;">*</b> : </label>
										    <input type="text" id="name_of_user" name="name_user" class="form-control" onChange="checkBasket()" placeholder="">
									  	</div>
									  	<div class="form-group">
										    <label>Ваш номер телефона <b style="color:#FF001E;">*</b> : </label>
										    <input type="text" id="phone" name="phone" class="form-control" onChange="checkBasket()" placeholder="">
									  	</div>
									  	<div class="form-group">
										    
										    <div class="col-md-12">
										    	<label>Загальна сумма в грн: <b id="price_uah" style="color:#FF001E;">  </b> </label>
										    	<input type="hidden" name="price_uah" id="value_uah">
										    </div>
										    <div class="col-md-12">
										    	<label>Загальна сумма в usd: <b id="price_usd" style="color:#FF001E;">  </b> </label>
										    	<input type="hidden" name="price_usd" id="value_usd">
										    </div>
									  	</div>
									  	<div class="form-group">
									  		<input type="checkbox" name="check" checked> Лишити кур'єру на пиво 15грн
									  	</div>
									</div>
								</div>
									
								<div class="col-md-12 bottom">
			                    	<button type="submit" id="submit" class="btn btn-default right_price" disabled>Замовити</button>
			                    </div>
		                    </form>
	                    
						


        </div>
    </div>
</div>
@endsection