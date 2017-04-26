<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Additionally;
use App\Basket;
use App\Category;
use App\User;
<<<<<<< HEAD
=======
use App\English;
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
use Auth;
use Mail;

class Baskets extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        
        // dump(session('photo'));
=======
<<<<<<< HEAD
        // $id_user = Auth::user()->id;

        // $gets = Basket::where('id_user', $id_user)->get();
        $gets = '1';
        $gets_history = '21';
        //dump(session());
        //dump(session());
        // $gets_history = Basket::where('id_user', $id_user)->onlyTrashed()->get();

>>>>>>> 433a25734d223e4a3f7686f5ff60a013364032ce
        return view('basket');
=======
        $id_user = Auth::user()->id;

        $gets = Basket::where('id_user', $id_user)->get();

        $gets_history = Basket::where('id_user', $id_user)->onlyTrashed()->get();

        return view('basket',[
                'gets' => $gets,
                'gets_history' => $gets_history,
            ]);
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
    }

    public function index_basket()
    {
        return view('basket/add');
    }


    public function index_do(Request $request)
    {
        dump($request->all());
        // dump(session()->all());
        // dump(session('food'));
        // foreach (session('food') as $key => $value) {
        //     dump($value);
        //     $arr[$key] = $value;
        // }
        // foreach (session('id') as $id => $val) {
        //     $arrays[] = $val;
        // }
        // $id = implode(':',$arrays);
        // dump($id);

        // $zers = explode(':',$smth);
        // dump($zers);
        //return view('basket');
    }

    public function store(Request $request)
    {
        if(empty($request->street)) $request->street = 'Не зазначено';
        if(empty($request->id_user)) $request->id_user = 'Не зазначено';
        $basket_arr = array(
                'id_user' => $request->id_user,
                'name_product' => $request->name_product, 
                'name_addit' => $request->name_addit,
                'count' => $request->count,
                'street' => $request->street,
                'name_user' => $request->name_user,
                'phone' => $request->phone,
                'photo' => $request->photo,
                'price_uah' => $request->price_uah,
                'price_usd' => $request->price_usd,
            );
<<<<<<< HEAD
=======
        dump($basket_arr);
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe

        $user = User::findOrFail($request->id_user);
        
        Mail::send('mail_for_send.user_buy', ['buy' => '<br>категорія = '.$request->name_product.'<br>продукт = '.$request->name_addit.'<br>кількість = '.$request->count], function ($m) use ($user) {
            $m->from($user->email, $user->name);
            $m->to('admin@gmail.com', 'Admin')->subject('Нове замовлення!');
        });

        $additionally = new Basket;
        $additionally->fill($basket_arr);
        $additionally->save();
        return redirect('home/order/'.$request->id);
    }

    public function order($id)
    {
        $order_additional = Additionally::where('id', $id)->first();
        $order_food = Category::where('id', $order_additional->product)->first();
        return view('/home/cat/order',[
                'order_addit' => $order_additional,
                'order_food' => $order_food,
            ]);
    }
    
}
