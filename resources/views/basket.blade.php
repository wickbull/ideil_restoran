@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<div class="col-md-12 block">
			    <div class="col-md-12 top">
<<<<<<< HEAD
			        <center> <b>@lang('basket.header_div_order')</b> <b style="color:#00AD68">@lang('basket.header_div_order_message')</b> </center>
=======
<<<<<<< HEAD
			        <center> <b>@lang('basket.header_div_order')</b> <b style="color:#00AD68">@lang('basket.header_div_order_message')</b> </center>
=======
			        <center> <b>{{ $lang['status_4'] }}</b> <b style="color:#00AD68">({{ $lang['status_5'] }})</b> </center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
			    </div>

			    <div class="col-md-12 center_text">
					<div class="table-responsive">
						<table class="table table-bordered">
							
                            <thead>
                                <tr>
                                    <th>ID</th>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                                    <th>@lang('basket.photo')</th>
                                    <th>@lang('basket.category')</th>
                                    <th>@lang('basket.food')</th>
                                    <th>@lang('basket.number')</th>
                                    <th>@lang('basket.price_uah')</th>
                                    <th>@lang('basket.price_usd')</th>
                                    <th>@lang('basket.delete')</th>
                                </tr>
                            </thead>
<<<<<<< HEAD
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
=======
=======
                                    <th>{{ $lang['table_1'] }}</th>
                                    <th>{{ $lang['table_2'] }}</th>
                                    <th>{{ $lang['table_3'] }}</th>
                                    <th>{{ $lang['table_4'] }}</th>
                                    <th>{{ $lang['table_5'] }}</th>
                                    <th>{{ $lang['table_6'] }}</th>
                                    <th>{{ $lang['table_7'] }}</th>
                                </tr>
                            </thead>
								
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
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
<<<<<<< HEAD
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                                	<center> <b>@lang('basket.message_1')</b> </center>
                                	<center style="margin-bottom: 5px"> 
                                		<b style="color:#5CB85C">@lang('basket.message_2')</b> 
                                		<a href="{{ url('/home') }}" class="btn btn-success btn-xs" ><b>@lang('basket.button_here')</b></a> 
<<<<<<< HEAD
                                	</center>
=======
=======
                                	<center> <b> {{ $lang['status_2'] }} </b> </center>
                                	<center style="margin-bottom: 5px"> 
                                		<b style="color:#5CB85C">{{ $lang['status_3'] }} </b> 
                                		<a href="{{ url('/home') }}" class="btn btn-success btn-xs" ><b>{{ $lang['button_1'] }}</b></a> 
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                                	</center>
                                @endforelse
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe

                            </tbody>
                        </table>  	
					</div>
				</div>

				<div class="col-md-12 bottom"></div>
			</div>


			<div class="col-md-12 block">
			    <div class="col-md-12 top">
<<<<<<< HEAD
			        <center> <b>@lang('basket.header_div_order_history')</b> </center>
=======
<<<<<<< HEAD
			        <center> <b>@lang('basket.header_div_order_history')</b> </center>
=======
			        <center> <b>{{ $lang['status_6'] }}</b> </center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
			    </div>

				<div class="col-md-12 center_text">
					<div class="table-responsive">
						<table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                                    <th>@lang('basket.photo')</th>
                                    <th>@lang('basket.category')</th>
                                    <th>@lang('basket.food')</th>
                                    <th>@lang('basket.number')</th>
                                    <th>@lang('basket.price_uah')</th>
                                    <th>@lang('basket.price_usd')</th>
                                    <th>@lang('basket.status')</th>
<<<<<<< HEAD
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
=======
=======
                                    <th>{{ $lang['table_1'] }}</th>
                                    <th>{{ $lang['table_2'] }}</th>
                                    <th>{{ $lang['table_3'] }}</th>
                                    <th>{{ $lang['table_4'] }}</th>
                                    <th>{{ $lang['table_5'] }}</th>
                                    <th>{{ $lang['table_6'] }}</th>
                                    <th>{{ $lang['table_8'] }}</th>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
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
<<<<<<< HEAD
                                                <b style="color:#3665FF;">@lang('basket.order_status')</b>
=======
                                                <b style="color:#3665FF;">{{ $lang['status_1'] }}</b>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                                            </center>
                                        </td>
                                    </tr>
                                @empty
                                    <p>NUH</p>
                                @endforelse
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe

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
<<<<<<< HEAD
=======
@endsection

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
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
@endsection