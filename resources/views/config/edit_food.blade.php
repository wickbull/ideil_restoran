@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="col-md-12">
                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">{{ $lang['button_1'] }}</a>
            </div>

            <div class="col-md-12 block">
                <div class="col-md-12 top">
                    <center> <b>{{ $lang['status_1'] }}</b> </center>
                </div>
                <div class="col-md-12 center_text">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>{{ $lang['status_2'] }}</th>
                                <th>{{ $lang['status_3'] }}</th>
                                <th>{{ $lang['status_4'] }}</th>
                                <th>{{ $lang['status_5'] }}</th>
                                <th>{{ $lang['status_6'] }}</th>
                                <th>{{ $lang['status_7'] }}</th>
                                <th>{{ $lang['status_8'] }}</th>
                            </tr>
                        </thead>
                        @foreach($foods as $key => $food)
                            <tbody>
                                <tr>
                                    <td> <b>{{ ++$key }}</b> </td>
                                    <td><img width="40%" src="{{ $food->photo }}" alt=""></td>
                                    <td> <b>{{ $food->product }}</b> </td>
                                    <td> <b>{{ $food->weight }}</b> </td>
                                    <td> <b>{{ $food->price_uah }}</b> </td>
                                    <td> <b>{{ $food->price_usd }}</b> </td>
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
