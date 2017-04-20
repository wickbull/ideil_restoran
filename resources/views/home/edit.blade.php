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
		                                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_category.add_cat_food')</a>
		                            </center>
		                            
		                        </div>
		                        <div class="col-md-12">
		                        	<a href="{{ url('config/edit_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_category.back_to_cat')</a>
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
											    <label>@lang('edit_category.name') : <b style="color:#FFCE44;">{{ $food->product }}</b></label>
											    <input type="text" name="product" class="form-control" placeholder="">
										  	</div>
		                            	</div>

		                            	<div class="col-md-4">
		                            		<div class="form-group">
		                            			<label>@lang('edit_category.photo')</label>
											    <input type="file" name="file" class="btn btn-success">
										  	</div>										  	
		                            	</div>
										
		                            </div>
		                        </div>
		                        <div class="col-md-12 bottom">
		                        	<button type="submit" class="btn btn-default right_price">@lang('edit_category.change')</button>
		                        </div>

		                    </div>

	                    </form>


		            </div>
		        </div>
		    </div>
    	@endif
    @endif
@endsection