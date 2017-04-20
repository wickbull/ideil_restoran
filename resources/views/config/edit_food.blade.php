@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="col-md-12">
<<<<<<< HEAD
                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add"> @lang('edit_table_category.add_cat_food')</a>
=======
                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_1'] }}</a>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
            </div>

            <div class="col-md-12 block">
                <div class="col-md-12 top">
<<<<<<< HEAD
                    <center> <b>@lang('edit_table_category.categories')</b> </center>
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
                                <th>@lang('edit_table_category.photo')</th>
                                <th>@lang('edit_table_category.name')</th>
                                
                                <th>@lang('edit_table_category.edit')</th>
                                <th>@lang('edit_table_category.delete')</th>
=======
                                <th>{{ $lang['status_2'] }}</th>
                                <th>{{ $lang['status_3'] }}</th>
                                <th>{{ $lang['status_4'] }}</th>
                                <th>{{ $lang['status_5'] }}</th>
                                <th>{{ $lang['status_6'] }}</th>
                                <th>{{ $lang['status_7'] }}</th>
                                <th>{{ $lang['status_8'] }}</th>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                            </tr>
                        </thead>
                        @foreach($foods as $key => $food)
                            <tbody>
                                <tr>
                                    <td> <b>{{ ++$key }}</b> </td>
<<<<<<< HEAD
                                    <td><img width="50%" height="70%" src="{{ $food->photo }}" alt=""></td>
                                    <td> <b>{{ $food->product }}</b> </td>
=======
                                    <td><img width="40%" src="{{ $food->photo }}" alt=""></td>
                                    <td> <b>{{ $food->product }}</b> </td>
                                    <td> <b>{{ $food->weight }}</b> </td>
                                    <td> <b>{{ $food->price_uah }}</b> </td>
                                    <td> <b>{{ $food->price_usd }}</b> </td>
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                                    <td>
                                        <center>
                                            <a href="{{ route('show_food',['id' => $food->id]) }}" class="accordion-toggle btn-block text-primary"><i width="40%" class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="{{ route('delete_food',['id' => $food->id]) }}" class="accordion-toggle btn-block text-danger"><i width="40%" class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

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
