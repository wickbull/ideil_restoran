<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Additionally;
use App\Food;

class Additionallies extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food_for_additionally = Food::select(['id','product','weight','price_uah','price_usd'])->get();
        return view('config/add_food', [
                'food_adds' => $food_for_additionally, ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $array_additionally = $request->all();

        $imageTempName = $request->file->getPathName();
        $nameImage = substr($imageTempName, 5);
        $image_src = $nameImage.'.jpg'; 
        $path = base_path() . '/public/img/';
        $path_db = '/img/';
        $image_way = $path_db.$image_src;

        $request->file->move($path , $image_src); 
        
        $food_add = Food::whereId($array_additionally['product'])->first();
        $weight_plus = $array_additionally['weight']+trim(substr($food_add['weight'], 0, 4)).' '.$array_additionally['measurement'];

        $price_plus_uah = $array_additionally['price_uah']+$food_add['price_uah'];
        $price_plus_usd = $array_additionally['price_usd']+$food_add['price_usd'];

        $add_array_additionally = array(
            'name' => $array_additionally['name'],
            'weight' => $weight_plus.' '.$array_additionally['measurement'],
            'product' => $array_additionally['product'],
            'price_uah' => $price_plus_uah,
            'price_usd' => $price_plus_usd,
            'info' => $array_additionally['info'],
            'photo' => $image_way, 
        );


        $additionally = new Additionally;
        $additionally->fill($add_array_additionally);
        $additionally->save();
        return redirect('config/add_food');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('/config/edit_additionallies');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
