@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="col-md-12">
                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add">@lang('edit_table_food.add_cat_food')</a>
            </div>

            <div class="col-md-12 block">
                <div class="col-md-12 top">
                    <center> <b>@lang('edit_table_food.food')</b> </center>
                </div>

                <div class="col-md-12 center_text">
                    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>@lang('edit_table_food.photo')</th>
                                    <th>@lang('edit_table_food.name')</th>
                                    <th>@lang('edit_table_food.weight')</th>
                                    <th>@lang('edit_table_food.ingredients')</th>
                                    <th>@lang('edit_table_food.price_uah')</th>
                                    <th>@lang('edit_table_food.price_usd')</th>
                                    <th>@lang('edit_table_food.edit')</th>
                                    <th>@lang('edit_table_food.delete')</th>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection