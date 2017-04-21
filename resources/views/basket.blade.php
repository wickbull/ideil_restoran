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
									
                                    <tr>
                                        <td> <b>1</b> </td>
                                        <td><img width="30%" src="1" alt=""></td>
                                        <td> <b>1</b> </td>
                                        <td> <b>1</b> </td>
                                        <td> <b>1</b> </td>
                                        <td> <b>1</b> </td>
                                        <td> <b>1</b> </td>
                                        <td>
                                            <center>
                                                <a href="{{ route('index_delete',['id' => '1']) }}" class="accordion-toggle btn-block text-danger"><i width="40%" class="fa fa-ban fa-2x" aria-hidden="true"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                	<center> <b>@lang('basket.message_1')</b> </center>
                                	<center style="margin-bottom: 5px"> 
                                		<b style="color:#5CB85C">@lang('basket.message_2')</b> 
                                		<a href="{{ url('/home') }}" class="btn btn-success btn-xs" ><b>@lang('basket.button_here')</b></a> 
                                	</center>

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
                                    <tr>
                                        <td> <b>2</b> </td>
                                        <td><img width="30%" src="2" alt=""></td>
                                        <td> <b>2</b> </td>
                                        <td> <b>2</b> </td>
                                        <td> <b>2</b> </td>
                                        <td> <b>2</b> </td>
                                        <td> <b>2</b> </td>
                                        <td>
                                            <center>
                                                <b style="color:#3665FF;">@lang('basket.order_status')</b>
                                            </center>
                                        </td>
                                    </tr>
                                    <p>NUH</p>

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