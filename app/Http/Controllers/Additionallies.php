<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use App\Category;
use App\English;
use App\ParseSmth;
use App\Additionally;

class Additionallies extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $parse_usd = ParseSmth::select(['id','nbu_usd'])->get();

        foreach ($parse_usd as $usd) {
            $last_usd = $usd->nbu_usd;
        }

        $food_for_additionally = Category::select(['id','product'])->get();
        return view('config/add_food', [
                'food_adds' => $food_for_additionally, 
                'nbu_usd' => $last_usd,
                ]);

    }

    public function store(Request $request)
    {
        $array_additionally = $request->all();

        $imageTempName = $request->file->getPathName();
        $nameImage = substr($imageTempName, 5);
        $image_src = $nameImage.'.jpg'; 

        $path_image_300x200 = 'img/300x200/additionall/';
        Image::make($request->file)->resize(300, 200)->save($path_image_300x200.$image_src);

        $add_array_additionally = array(
            'name' => $array_additionally['name'],
            'weight' => $array_additionally['weight'].' '.$array_additionally['measurement'],
            'product' => $array_additionally['product'],
            'price_uah' => $array_additionally['price_uah'],
            'price_usd' => $array_additionally['price_usd'],
            'info' => $array_additionally['info'],
            'photo' => $image_src,
        );


        $additionally = new Additionally;
        $additionally->fill($add_array_additionally);
        $additionally->save();
        return redirect('config/add_food');
    }

    public function show()
    {



        $additionall = Additionally::select(['id','name', 'product','info','weight','price_uah','price_usd','photo'])->get();
        return view('config/edit_additionallies', [
                'additionalls' => $additionall,
                ]);
    }

}
