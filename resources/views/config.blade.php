@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
			
            <div class="col-md-2">
<<<<<<< HEAD
                <div style="margin-top:5px" ><a href="{{ url('/config/add_food') }}" class="btn btn-success btn-xs">@lang('admin.add_cat_food')</a></div>
                <div style="margin-top:5px" ><a href="{{ url('config/edit_food') }}" class="btn btn-success btn-xs">@lang('admin.manage_categories')</a></div >
                <div style="margin-top:5px" ><a href="{{ url('config/edit_additionallies') }}" class="btn btn-success btn-xs">@lang('admin.manage_food')</a></div >
=======
<<<<<<< HEAD
                <div style="margin-top:5px" ><a href="{{ url('/config/add_food') }}" class="btn btn-success btn-xs">@lang('admin.add_cat_food')</a></div>
                <div style="margin-top:5px" ><a href="{{ url('config/edit_food') }}" class="btn btn-success btn-xs">@lang('admin.manage_categories')</a></div >
                <div style="margin-top:5px" ><a href="{{ url('config/edit_additionallies') }}" class="btn btn-success btn-xs">@lang('admin.manage_food')</a></div >
=======
                <div style="margin-top:5px" ><a href="{{ url('/config/add_food') }}" class="btn btn-success btn-xs">{{ $lang['button_1'] }}</a></div>
                <div style="margin-top:5px" ><a href="{{ url('config/edit_food') }}" class="btn btn-success btn-xs">{{ $lang['button_2'] }}</a></div >
                <div style="margin-top:5px" ><a href="{{ url('config/edit_additionallies') }}" class="btn btn-success btn-xs">{{ $lang['button_3'] }}</a></div >
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                
                
            </div>


			<div class="col-md-10 block">
			    <div class="col-md-12 top">
<<<<<<< HEAD
			        <center> <b>@lang('admin.order_n')</b> </center>
=======
<<<<<<< HEAD
			        <center> <b>@lang('admin.order_n')</b> </center>
=======
			        <center> <b>{{ $lang['status_1'] }}</b> </center>
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
                                    <th>@lang('admin.photo')</th>
                                    <th>@lang('admin.category')</th>
                                    <th>@lang('admin.food')</th>
                                    <th>@lang('admin.name')</th>
                                    <th>@lang('admin.phone')</th>
                                    <th>@lang('admin.place')</th>
                                    <th>@lang('admin.number')</th>
                                    <th>@lang('admin.price_uah')</th>
                                    <th>@lang('admin.price_usd')</th>
                                    <th>@lang('admin.add')</th>
<<<<<<< HEAD
=======
=======
                                    <th>{{ $lang['table_1'] }}</th>
                                    <th>{{ $lang['table_2'] }}</th>
                                    <th>{{ $lang['table_3'] }}</th>
                                    <th>{{ $lang['table_4'] }}</th>
                                    <th>{{ $lang['table_5'] }}</th>
                                    <th>{{ $lang['table_6'] }}</th>
                                    <th>{{ $lang['table_7'] }}</th>
                                    <th>{{ $lang['table_8'] }}</th>
                                    <th>{{ $lang['table_9'] }}</th>
                                    <th>{{ $lang['table_10'] }}</th>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($reserved->reverse() as $reserv)
                                    <tr>
                                        <td> <b>{{ $reserv->getKey() }}</b> </td>
                                        <td><img width="100%" src="{{ $reserv->photo }}" alt=""></td>
                                        <td> <b>{{ $reserv->name_product }}</b> </td>
                                        <td> <b>{{ $reserv->name_addit }}</b> </td>
                                        <td> <b>{{ $reserv->name_user }}</b> </td>
                                        <td> <b>{{ $reserv->phone }}</b> </td>
                                        <td> <b>{{ $reserv->street }}</b> </td>
                                        <td> <b>{{ $reserv->count }}</b> </td>
                                        <td> <b>{{ $reserv->price_uah }}</b> </td>
                                        <td> <b>{{ $reserv->price_usd }}</b> </td>
                                        <td>
                                            <center>
                                                <a href="{{ route('check',['id' => $reserv->getKey(), 'variant' => 'delete']) }}" class="accordion-toggle btn-block text-primary"><i width="40%" class="fa fa-check fa-2x" aria-hidden="true"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="col-md-12">
<<<<<<< HEAD
                                        <center> <b style="color:#8C000C"><h1>@lang('admin.none')</h1></b> </center>
=======
<<<<<<< HEAD
                                        <center> <b style="color:#8C000C"><h1>@lang('admin.none')</h1></b> </center>
=======
                                        <center> <b style="color:#8C000C"><h1>{{ $lang['status_3'] }}</h1></b> </center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                                    </div>
                                @endforelse

                            </tbody>
                        </table> 	
					</div>
				</div>

			  	<div class="col-md-12 top_config">
<<<<<<< HEAD
			        <center> <b>@lang('admin.order_h')</b> </center>
=======
<<<<<<< HEAD
			        <center> <b>@lang('admin.order_h')</b> </center>
=======
			        <center> <b>{{ $lang['status_2'] }}</b> </center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
			    </div>

			    <div class="col-md-12 center_config">
				    <div class="table-responsive">
						<table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                                    <th>@lang('admin.photo')</th>
                                    <th>@lang('admin.category')</th>
                                    <th>@lang('admin.food')</th>
                                    <th>@lang('admin.name')</th>
                                    <th>@lang('admin.phone')</th>
                                    <th>@lang('admin.place')</th>
                                    <th>@lang('admin.number')</th>
                                    <th>@lang('admin.price_uah')</th>
                                    <th>@lang('admin.price_usd')</th>
                                    <th>@lang('admin.undo')</th>
<<<<<<< HEAD
=======
=======
                                    <th>{{ $lang['table_1'] }}</th>
                                    <th>{{ $lang['table_2'] }}</th>
                                    <th>{{ $lang['table_3'] }}</th>
                                    <th>{{ $lang['table_4'] }}</th>
                                    <th>{{ $lang['table_5'] }}</th>
                                    <th>{{ $lang['table_6'] }}</th>
                                    <th>{{ $lang['table_7'] }}</th>
                                    <th>{{ $lang['table_8'] }}</th>
                                    <th>{{ $lang['table_9'] }}</th>
                                    <th>{{ $lang['table_11'] }}</th>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trash->reverse() as $trashed)
                                <tr>
                                    <td> <b>{{ $trashed->getKey() }}</b> </td>
                                    <td><img width="100%" src="{{ $trashed->photo }}" alt=""></td>
                                    <td> <b>{{ $trashed->name_product }}</b> </td>
                                    <td> <b>{{ $trashed->name_addit }}</b> </td>
                                    <td> <b>{{ $trashed->name_user }}</b> </td>
                                    <td> <b>{{ $trashed->phone }}</b> </td>
                                    <td> <b>{{ $trashed->street }}</b> </td>
                                    <td> <b>{{ $trashed->count }}</b> </td>
                                    <td> <b>{{ $trashed->price_uah }}</b> </td>
                                    <td> <b>{{ $trashed->price_usd }}</b> </td>
                                    <td>
                                        <center>
                                            <a href="{{ route('check',['id' => $trashed->getKey(), 'variant' => 'restore']) }}" class="accordion-toggle btn-block text-danger"><i width="40%" class="fa fa-undo fa-2x" aria-hidden="true"></i></a>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table> 	
					</div>
				</div>
			</div>


        </div>
    </div>
</div>	
<<<<<<< HEAD
=======
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
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
@endsection