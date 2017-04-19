<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use App\Food;
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
        $langs = English::where('blade', 'add')->get();
        foreach ($langs as $choose_lang) {
            if(empty(session('language'))) $res[$choose_lang->element]=$choose_lang->word_ua;
            if(session('language') == 1) $res[$choose_lang->element]=$choose_lang->word_en;
            if(session('language') == 2) $res[$choose_lang->element]=$choose_lang->word_ua;
        }

        $langs = English::where('blade', 'layout')->get(); 
        foreach ($langs as $choose_lang) {
            if(empty(session('language'))) $res2[$choose_lang->element]=$choose_lang->word_ua;
            if(session('language') == 1) $res2[$choose_lang->element]=$choose_lang->word_en;
            if(session('language') == 2) $res2[$choose_lang->element]=$choose_lang->word_ua;
        }

        $parse_usd = ParseSmth::select(['id','nbu_usd'])->get();

        foreach ($parse_usd as $usd) {
            $last_usd = $usd->nbu_usd;
        }

        $food_for_additionally = Food::select(['id','product','weight','price_uah','price_usd'])->get();
        return view('config/add_food', [
                'food_adds' => $food_for_additionally, 
                'nbu_usd' => $last_usd,
                'lang' => $res,
                'lang_layout' => $res2,
                ]);

    }

    public function store(Request $request)
    {
        $array_additionally = $request->all();

        $imageTempName = $request->file->getPathName();
        $nameImage = substr($imageTempName, 5);
        $image_src = $nameImage.'.jpg'; 
        // $path_300x200 = '/img/300x200/additionall/';

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
            // 'path300х200' => $path_300x200,
        );


        $additionally = new Additionally;
        $additionally->fill($add_array_additionally);
        $additionally->save();
        return redirect('config/add_food');
    }

    public function show()
    {
        $langs = English::where('blade', 'additionallies')->get();
        foreach ($langs as $choose_lang) {
            if(empty(session('language'))) $res[$choose_lang->element]=$choose_lang->word_ua;
            if(session('language') == 1) $res[$choose_lang->element]=$choose_lang->word_en;
            if(session('language') == 2) $res[$choose_lang->element]=$choose_lang->word_ua;
        }

        $langs = English::where('blade', 'layout')->get(); 
        foreach ($langs as $choose_lang) {
            if(empty(session('language'))) $res2[$choose_lang->element]=$choose_lang->word_ua;
            if(session('language') == 1) $res2[$choose_lang->element]=$choose_lang->word_en;
            if(session('language') == 2) $res2[$choose_lang->element]=$choose_lang->word_ua;
        }


        $additionall = Additionally::select(['id','name', 'product','info','weight','price_uah','price_usd','photo'])->get();
        return view('config/edit_additionallies', [
                'additionalls' => $additionall,
                'lang' => $res,
                'lang_layout' => $res2,
                ]);
    }

}
