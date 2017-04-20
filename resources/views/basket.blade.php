@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<div class="col-md-12 block">
			    <div class="col-md-12 top">
			        <center> <b>@lang('basket.header_div_order')</b> <b style="color:#00AD68">@lang('basket.header_div_order_message')</b> </center>
			    </div>

			    <div class="col-md-12 center_text">
					<div class="table-responsive">
						<table class="table table-bordered">
							
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>@lang('basket.photo')</th>
                                    <th>@lang('basket.category')</th>
                                    <th>@lang('basket.food')</th>
                                    <th>@lang('basket.number')</th>
                                    <th>@lang('basket.price_uah')</th>
                                    <th>@lang('basket.price_usd')</th>
                                    <th>@lang('basket.delete')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($gets->reverse() as $get)
									
                                    <tr>
                                        <td> <b>{{ $get->getKey() }}</b> </td>
                                        <td><img width="30%" src="{{ $get->photo }}" alt=""></td>
                                        <td> <b>{{ $get->name_product }}</b> </td>
                                        <td> <b>{{ $get->name_addit }}</b> </td>
                                        <td> <b>{{ $get->count }}</b> </td>
                                        <td> <b>{{ $get->price_uah }}</b> </td>
                                        <td> <b>{{ $get->price_usd }}</b> </td>
                                        <td>
                                            <center>
                                                <a href="{{ route('index_delete',['id' => $get->getKey()]) }}" class="accordion-toggle btn-block text-danger"><i width="40%" class="fa fa-ban fa-2x" aria-hidden="true"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                @empty
                                	<center> <b>@lang('basket.message_1')</b> </center>
                                	<center style="margin-bottom: 5px"> 
                                		<b style="color:#5CB85C">@lang('basket.message_2')</b> 
                                		<a href="{{ url('/home') }}" class="btn btn-success btn-xs" ><b>@lang('basket.button_here')</b></a> 
                                	</center>
                                @endforelse

                            </tbody>
                        </table>  	
					</div>
				</div>

				<div class="col-md-12 bottom"></div>
			</div>


			<div class="col-md-12 block">
			    <div class="col-md-12 top">
			        <center> <b>@lang('basket.header_div_order_history')</b> </center>
			    </div>

				<div class="col-md-12 center_text">
					<div class="table-responsive">
						<table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>@lang('basket.photo')</th>
                                    <th>@lang('basket.category')</th>
                                    <th>@lang('basket.food')</th>
                                    <th>@lang('basket.number')</th>
                                    <th>@lang('basket.price_uah')</th>
                                    <th>@lang('basket.price_usd')</th>
                                    <th>@lang('basket.status')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($gets_history->reverse() as $get_history)
                                    <tr>
                                        <td> <b>{{ $get_history->getKey() }}</b> </td>
                                        <td><img width="30%" src="{{ $get_history->photo }}" alt=""></td>
                                        <td> <b>{{ $get_history->name_product }}</b> </td>
                                        <td> <b>{{ $get_history->name_addit }}</b> </td>
                                        <td> <b>{{ $get_history->count }}</b> </td>
                                        <td> <b>{{ $get_history->price_uah }}</b> </td>
                                        <td> <b>{{ $get_history->price_usd }}</b> </td>
                                        <td>
                                            <center>
                                                <b style="color:#3665FF;">@lang('basket.order_status')</b>
                                            </center>
                                        </td>
                                    </tr>
                                @empty
                                    <p>NUH</p>
                                @endforelse

                            </tbody>
                        </table>  	
					</div>
				</div>

			  	<div class="col-md-12 bottom">
			  		
			  	</div>
			</div>

			


        </div>
    </div>
</div>	
@endsection