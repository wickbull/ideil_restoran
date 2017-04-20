<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use App\Additionally;
<<<<<<< HEAD
use App\Category;
=======
use App\Food;
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
use App\ParseSmth;
use App\English;
use Validator;

class FoodController extends Controller
{

    public function index()
    {
        return view('/home/cat');
    }

    public function store(Request $request)
    {
            $array_food = $request->all();

            $imageTempName = $request->file->getPathName();
            $nameImage = substr($imageTempName, 5);
            $image_src = $nameImage.'.jpg';
            $path_db = '/img/300x200/';
            $image_way = $path_db.$image_src;

            $image = Image::make($request->file)->resize(300, 200)->save('img/300x200/'.$image_src);
             
            $food = array(
                'product' => $array_food['product'],
<<<<<<< HEAD
                'photo' => $image_way, 
            );

            $additionally = new Category;
=======
                'weight' => $array_food['weight'].' '.$array_food['measurement'],
                'price_uah' => $array_food['price_uah'],
                'price_usd' => $array_food['price_usd'],
                'photo' => $image_way, 
            );

            $additionally = new Food;
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
            $additionally->fill($food);
            $additionally->save();
            return redirect('config/add_food');
    }

    public function show()
    {

<<<<<<< HEAD
        $food = Category::select(['id','product','photo'])->get();
        return view('config/edit_food', [
                'foods' => $food,
=======
        $langs = English::where('blade', 'food')->get();
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

        
        $food = Food::select(['id','product','weight','price_uah','price_usd','photo'])->get();
        return view('config/edit_food', [
                'foods' => $food,
                'lang' => $res,
                'lang_layout' => $res2,
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                ]);
    }

    public function show_additionall($id)
    {
<<<<<<< HEAD
=======
        $langs = English::where('blade', 'edit_food')->get();
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

        
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f

        $parse_usd = ParseSmth::select(['id','nbu_usd'])->get();

        foreach ($parse_usd as $usd) {
            $last_usd = $usd->nbu_usd;
        }
        $additionall = Additionally::where('id', $id)->first();
<<<<<<< HEAD
        $food = Category::select(['id','product','photo'])->get();
=======
        $food = Food::select(['id','product','weight','price_uah','price_usd','photo'])->get();
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        return view('/home/cat/add', [
                'additionall' => $additionall,
                'foods' => $food,
                'nbu_usd' => $last_usd,
<<<<<<< HEAD
=======
                'lang' => $res,
                'lang_layout' => $res2,
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
            ]);
    }

    public function edit_additionall(Request $request){
<<<<<<< HEAD
        if(!empty($request->name)) Additionally::where('id', $request->id)->update(['name' => $request->name]);
        if(!empty($request->weight)) Additionally::where('id', $request->id)->update(['weight' => $request->weight]);
        if(!empty($request->price_uah)) Additionally::where('id', $request->id)->update(['price_uah' => $request->price_uah]);
        if(!empty($request->price_usd)) Additionally::where('id', $request->id)->update(['price_usd' => $request->price_usd]);
        if(!empty($request->product)) Additionally::where('id', $request->id)->update(['product' => $request->product]);
        if(!empty($request->info)) Additionally::where('id', $request->id)->update(['info' => $request->info]);
=======
        if(!empty($request->name)){
            Additionally::where('id', $request->id)->update(['name' => $request->name]);
        }
        if(!empty($request->weight)){
            Additionally::where('id', $request->id)->update(['weight' => $request->weight]);
        }
        if(!empty($request->price_uah)){
            Additionally::where('id', $request->id)->update(['price_uah' => $request->price_uah]);
        }
        if(!empty($request->price_usd)){
            Additionally::where('id', $request->id)->update(['price_usd' => $request->price_usd]);
        }
        if(!empty($request->product)){
            Additionally::where('id', $request->id)->update(['product' => $request->product]);
        }
        if(!empty($request->info)){
            Additionally::where('id', $request->id)->update(['info' => $request->info]);
        }
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        if(!empty($request->file)){
            $imageTempName = $request->file->getPathName();
            $nameImage = substr($imageTempName, 5);
            $image_src = $nameImage.'.jpg';
            $path_db = '/img/300x200/additionall/';
            $image = Image::make($request->file)->resize(300, 200)->save('img/300x200/additionall/'.$image_src);
            Additionally::where('id', $request->id)->update(['photo' => $image_src]);
        }

        return redirect('/home/show_add/'.$request->id);
    }

    public function show_food($id)
    {
<<<<<<< HEAD
=======
        $langs = English::where('blade', 'edit')->get();
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

>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f

        $parse_usd = ParseSmth::select(['id','nbu_usd'])->get();

        foreach ($parse_usd as $usd) {
            $last_usd = $usd->nbu_usd;
        }

<<<<<<< HEAD
        $food = Category::where('id', $id)->first();
        return view('/home/edit', [
                'nbu_usd' => $last_usd,
                'food' => $food,
=======
        $food = Food::where('id', $id)->first();
        return view('/home/edit', [
                'nbu_usd' => $last_usd,
                'food' => $food,
                'lang' => $res,
                'lang_layout' => $res2,
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
            ]);
    }

    public function edit_food(Request $request){
        if(!empty($request->product)){
<<<<<<< HEAD
            Category::where('id', $request->id)->update(['product' => $request->product]);
=======
            Food::where('id', $request->id)->update(['product' => $request->name]);
        }
        if(!empty($request->weight)){
            Food::where('id', $request->id)->update(['weight' => $request->weight]);
        }
        if(!empty($request->price_uah)){
            Food::where('id', $request->id)->update(['price_uah' => $request->price_uah]);
        }
        if(!empty($request->price_usd)){
            Food::where('id', $request->id)->update(['price_usd' => $request->price_usd]);
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        }
        if(!empty($request->file)){
            $imageTempName = $request->file->getPathName();
            $nameImage = substr($imageTempName, 5);
            $image_src = $nameImage.'.jpg';
            $path_db = '/img/300x200/';
            $image = Image::make($request->file)->resize(300, 200)->save('img/300x200/'.$image_src);
<<<<<<< HEAD
            Category::where('id', $request->id)->update(['photo' => $path_db.$image_src]);
=======
            Food::where('id', $request->id)->update(['photo' => $path_db.$image_src]);
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        }

        return redirect('/home/edit/'.$request->id);
    }

    public function show_additionalls($id, $name)
    {
<<<<<<< HEAD
=======
        $langs = English::where('blade', 'cat')->get();
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

>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        $additionall = Additionally::where('product', $id)->get();
        return view('/home/cat', [
                'additionall' => $additionall,
                'name' => $name,
<<<<<<< HEAD
            ]);
=======
                'lang' => $res,
                'lang_layout' => $res2,
            ]);
        
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
    }

    public function delete_additionall($id)
    {
        Additionally::where('id', $id)->delete();
        return redirect('config/edit_additionallies');
    }

    public function delete_food($id)
    {
<<<<<<< HEAD
        Category::where('id', $id)->delete();
=======
        Food::where('id', $id)->delete();
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        return redirect('config/edit_food');
    }

}
