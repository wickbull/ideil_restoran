@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-12 block">
                <div class="col-md-12 top">
                    <center> <b>Login</b> </center>
                </div>

                <div class="col-md-12 center_text">
                    @foreach($foods as $key => $food)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Фото</th>
                                    <th>Назва</th>
                                    <th>Вага</th>
                                    <th>Ціна грн.</th>
                                    <th>Ціна usd.</th>
                                    <th>Змінити</th>
                                    <th>Видалити</th>
                                </tr>
                            </thead>
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
                                            <a href="" class="accordion-toggle btn-block text-primary"><i width="40%" class="fa fa-pencil fa-2x" aria-hidden="true"></i></a>
                                        </center>
                                        
                                    </td>
                                    <td>
                                        <center>
                                            <a href="" class="accordion-toggle btn-block text-danger"><i width="40%" class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
