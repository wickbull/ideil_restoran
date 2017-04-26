@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <center>
            <div style="width: 65%; background: red;">
                
                <div class="col-md-8" style="background: #353535; border-right:1px solid white">

                    @if(session('food') != NULL) 
                        <div class="col-md-12">
                            <center> <b>@lang('basket.header_div_order')</b> </center> 
                            <center> <b style="color:#00AD68">@lang('basket.header_div_order_message')</b> </center>
                        </div>
                        <div class="col-md-12">
                            <center><b style="float:right" >Загальна сумма</b></center>
                        </div>
                        @forelse(session('food') as $id => $food)
                            
                            <div class="col-md-4" style="background: #A6A6A6; margin-top: 15px; margin-bottom: 15px;">
                                <center style="color:#500000"><b>{{ session('name_cat', $id)[$id] }}</b></center>
                                <center style="color:black"><b>{{ session('name_food', $id)[$id] }}</b></center>
                                <img width="100%" src="{{ session('photo', $id)[$id] }}" alt="">
                                <center>
                                     <b style="color:#1B1B1B">@lang('basket.price_uah') :</b> <tag style="color:#00531E"><b>{{ session('food', $id)[$id]*session('p_uah', $id)[$id] }}</b></tag>
                                </center>
                                <center>
                                    <b style="color:#1B1B1B">@lang('basket.number') :</b> <tag style="color:#00531E"><b>{{ session('food', $id)[$id] }}</b></tag>
                                </center>

                                <center style="margin-top: 3px; margin-bottom: 5px;">
                                    
                                    <form method="POST" action="{{ route('index_do') }}">
                                        
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="category" value="{{ session('name_cat', $id)[$id] }}">
                                        <input type="hidden" name="name" value="{{ session('name_food', $id)[$id] }}">
                                        <input type="hidden" name="price" value="{{ session('p_uah', $id)[$id] }}">
                                        <input type="hidden" name="count" value="{{ session('food', $id)[$id] }}">
                                        
                                        
                                        <button type="submit" name="dec" value="-" class="btn btn-danger" style="border-radius: 0;">-</button>
                                        <button type="submit" name="inc" value="+" class="btn btn-success" style="border-radius: 0;">+</button>

                                    </form>

                                </center>
                            </div>
                        
                        @empty

                        @endforelse
                    @else
                        <div class="col-md-12">
                            <center> <b>@lang('basket.message_1')</b> </center>
                            <center style="margin-bottom: 5px"> 
                                <b style="color:#5CB85C">@lang('basket.message_2')</b> 
                                <a href="{{ url('/home') }}" class="btn btn-success btn-xs" ><b>@lang('basket.button_here')</b></a> 
                            </center>
                        </div>
                        
                    @endif   
                    
                </div>
                
                <div class="col-md-4" style="background: #353535;">
                    <div class="col-md-12" style="background: #A6A6A6; margin-top: 15px; margin-bottom: 15px;">
                        <center style="margin-top: 15px; margin-bottom: 15px;">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="color:black">Phone <b style="color:red;">*</b></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone">
                            </div>
                            <div class="form-group" style="border-top:1px solid black">
                                <label for="exampleInputEmail1" style="color:black">Street</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Street">
                            </div>
                            <button type="submit" class="btn btn-default">@lang('basket.order')</button>
                        </center>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>
    




	
@endsection