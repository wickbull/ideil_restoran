@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="col-md-12">
<<<<<<< HEAD
                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_table_food.add_cat_food')</a>
=======
                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_1'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
            </div>

            <div class="col-md-12 block">
                <div class="col-md-12 top">
<<<<<<< HEAD
                    <center> <b>@lang('edit_table_food.food')</b> </center>
=======
                    <center> <b>{{ $lang['status_1'] }}</b> </center>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                </div>

                <div class="col-md-12 center_text">
                    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>№</th>
<<<<<<< HEAD
                                    <th>@lang('edit_table_food.photo')</th>
                                    <th>@lang('edit_table_food.name')</th>
                                    <th>@lang('edit_table_food.weight')</th>
                                    <th>@lang('edit_table_food.ingredients')</th>
                                    <th>@lang('edit_table_food.price_uah')</th>
                                    <th>@lang('edit_table_food.price_usd')</th>
                                    <th>@lang('edit_table_food.edit')</th>
                                    <th>@lang('edit_table_food.delete')</th>
=======
                                    <th>{{ $lang['status_2'] }}</th>
                                    <th>{{ $lang['status_3'] }}</th>
                                    <th>{{ $lang['status_4'] }}</th>
                                    <th>{{ $lang['status_5'] }}</th>
                                    <th>{{ $lang['status_6'] }}</th>
                                    <th>{{ $lang['status_7'] }}</th>
                                    <th>{{ $lang['status_8'] }}</th>
                                    <th>{{ $lang['status_9'] }}</th>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                                </tr>
                            </thead>
                            @foreach($additionalls as $key => $additionall)
                                <tbody>
                                    <tr>
                                        <td> <b>{{ ++$key }}</b> </td>
                                        <td><img width="100%" src="/img/300x200/additionall/{{ $additionall->photo }}" alt="{{ $additionall->name }}"></td>
                                        <td> <b>{{ $additionall->name }}</b> </td>
                                        <td> <b>{{ $additionall->weight }}</b> </td>
                                        <td> <b>{!! nl2br($additionall->info) !!}</b> </td>
                                        <td> <b>{{ $additionall->price_uah }}</b> </td>
                                        <td> <b>{{ $additionall->price_usd }}</b> </td>
                                        <td>
                                            <center>
                                                <a href="{{ route('show_additionall',['id' => $additionall->id]) }}" class="accordion-toggle btn-block text-primary"><i width="40%" class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                                            </center>
                                            
                                        </td>
                                        <td>
                                            <center>
                                                <a href="{{ route('delete_additionall',['id' => $additionall->id]) }}" class="accordion-toggle btn-block text-danger"><i width="40%" class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
<<<<<<< HEAD
=======
                    
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
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