<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Food;
use Intervention\Image\ImageManagerStatic as Image;


class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/home/cat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request)){
            echo 'Воу воу воу заповни всі поля!';
            return redirect('config/add_food');
        } else {
            $array_food = $request->all();

            $imageTempName = $request->file->getPathName();
            $nameImage = substr($imageTempName, 5);
            $image_src = $nameImage.'.jpg';
            $path_db = '/img/300x200/';
            $image_way = $path_db.$image_src;

            $image = Image::make($request->file)->resize(300, 200)->save('img/300x200/'.$image_src);
             
            $food = array(
                'product' => $array_food['product'],
                'weight' => $array_food['weight'].' '.$array_food['measurement'],
                'price_uah' => $array_food['price_uah'],
                'price_usd' => $array_food['price_usd'],
                'photo' => $image_way, 
            );

            $additionally = new Food;
            $additionally->fill($food);
            $additionally->save();
            return redirect('config/add_food');
        }

        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $food = Food::select(['id','product','weight','price_uah','price_usd','photo'])->get();
        return view('config/edit_food', [
                'foods' => $food, ]);
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
        
    }
}
