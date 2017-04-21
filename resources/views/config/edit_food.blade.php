@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="col-md-12">
                <a href="{{ url('/config/add_food') }}" class="btn btn-success btn-lg button_add"> @lang('edit_table_category.add_cat_food')</a>
            </div>

            <div class="col-md-12 block">
                <div class="col-md-12 top">
                    <center> <b>@lang('edit_table_category.categories')</b> </center>
                </div>
                <div class="col-md-12 center_text">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>@lang('edit_table_category.photo')</th>
                                <th>@lang('edit_table_category.name')</th>
                                
                                <th>@lang('edit_table_category.edit')</th>
                                <th>@lang('edit_table_category.delete')</th>
                            </tr>
                        </thead>
                        @foreach($foods as $key => $food)
                            <tbody>
                                <tr>
                                    <td> <b>{{ ++$key }}</b> </td>
                                    <td><img width="50%" height="70%" src="{{ $food->photo }}" alt=""></td>
                                    <td> <b>{{ $food->product }}</b> </td>
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

