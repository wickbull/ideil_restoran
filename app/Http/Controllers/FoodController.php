<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use App\Additionally;
use App\Category;
use App\ParseSmth;
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
                'photo' => $image_way, 
            );

            $additionally = new Category;
            $additionally->fill($food);
            $additionally->save();
            return redirect('config/add_food');
    }

    public function show()
    {

        $food = Category::select(['id','product','photo'])->get();
        return view('config/edit_food', [
                'foods' => $food,
                ]);
    }

    public function show_additionall($id)
    {

        $parse_usd = ParseSmth::select(['id','nbu_usd'])->get();

        foreach ($parse_usd as $usd) {
            $last_usd = $usd->nbu_usd;
        }
        $additionall = Additionally::where('id', $id)->first();
        $food = Category::select(['id','product','photo'])->get();
        return view('/home/cat/add', [
                'additionall' => $additionall,
                'foods' => $food,
                'nbu_usd' => $last_usd,
            ]);
    }

    public function edit_additionall(Request $request){
        if(!empty($request->name)) Additionally::where('id', $request->id)->update(['name' => $request->name]);
        if(!empty($request->weight)) Additionally::where('id', $request->id)->update(['weight' => $request->weight]);
        if(!empty($request->price_uah)) Additionally::where('id', $request->id)->update(['price_uah' => $request->price_uah]);
        if(!empty($request->price_usd)) Additionally::where('id', $request->id)->update(['price_usd' => $request->price_usd]);
        if(!empty($request->product)) Additionally::where('id', $request->id)->update(['product' => $request->product]);
        if(!empty($request->info)) Additionally::where('id', $request->id)->update(['info' => $request->info]);
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

        $parse_usd = ParseSmth::select(['id','nbu_usd'])->get();

        foreach ($parse_usd as $usd) {
            $last_usd = $usd->nbu_usd;
        }

        $food = Category::where('id', $id)->first();
        return view('/home/edit', [
                'nbu_usd' => $last_usd,
                'food' => $food,
            ]);
    }

    public function edit_food(Request $request){
        if(!empty($request->product)){
            Category::where('id', $request->id)->update(['product' => $request->product]);
        }
        if(!empty($request->file)){
            $imageTempName = $request->file->getPathName();
            $nameImage = substr($imageTempName, 5);
            $image_src = $nameImage.'.jpg';
            $path_db = '/img/300x200/';
            $image = Image::make($request->file)->resize(300, 200)->save('img/300x200/'.$image_src);
            Category::where('id', $request->id)->update(['photo' => $path_db.$image_src]);
        }

        return redirect('/home/edit/'.$request->id);
    }

    public function show_additionalls($id, $name)
    {
        dump(session()->all());
        if(session('food') == NULL) session()->put('food', '1' );
        $categories = Category::select(['id','product'])->get();
        $additionall = Additionally::where('product', $id)->get();
        return view('/home/cat', [
                'additionall' => $additionall,
                'name' => $name,
                'id_category' => $id,
                'categories' => $categories,
            ]);
    }

    public function add_to_basket(Request $request)
    {
        dump($request->all());
        dump(session()->all());

        if(($request->id_food != NULL) and (session('food.'.$request->id_food) != NULL))
        {
            if(session('food.'.$request->id_food) != NULL)
            {   
                if($request->inc == '+'){
                    $inc = session('food.'.$request->id_food);
                    ++$inc;
                    session()->put('food.'.$request->id_food,  $inc );
                }
                if(($request->dec == '-')){
                    $inc = session('food.'.$request->id_food);
                    --$inc;
                    session()->put('food.'.$request->id_food,  $inc );
                    if($inc == '1'){
                        session()->forget('food.'.$request->id_food);
                    }
                }
            }
        } else {

            session()->put('food.'.$request->id_food, '1' );
        } 
        session()->put('id.'.$request->id_food, $request->id_food );
        session()->put('photo.'.$request->id_food, $request->photo );
        session()->put('name_food.'.$request->id_food, $request->name_food );
        session()->put('name_cat.'.$request->id_food, $request->name_cat );
        session()->put('p_uah.'.$request->id_food, $request->price_uah );
        session()->put('p_usd.'.$request->id_food, $request->price_usd );


        //dump(session('count'));

        /*$basket = array(
                'cat' => $request->id_category,
                'food' => $request->id_food,
                'name_cat' => $request->name_cat,
                'name_food' => $request->name_food,
                'p_uah' => $request->price_uah,
                'p_usd' => $request->price_usd,
                'photo' => $request->photo,
                'count' => $request->count,
            );*/
        return redirect('home/cat/'.$request->id_category.'/'.$request->name_cat);

    }

    public function delete_additionall($id)
    {
        Additionally::where('id', $id)->delete();
        return redirect('config/edit_additionallies');
    }

    public function delete_food($id)
    {
        Category::where('id', $id)->delete();
        return redirect('config/edit_food');
    }

}
