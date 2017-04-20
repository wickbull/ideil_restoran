<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Additionally;
use App\Basket;
use App\Category;
use App\User;
use App\English;
use Auth;
use Mail;
use App;

class Baskets extends Controller
{
    public function index()
    {
        $id_user = Auth::user()->id;

        $gets = Basket::where('id_user', $id_user)->get();

        $gets_history = Basket::where('id_user', $id_user)->onlyTrashed()->get();

        return view('basket',[
                'gets' => $gets,
                'gets_history' => $gets_history,
            ]);
    }

    public function index_delete($id)
    {
        Basket::where('id', $id)->forceDelete();
        return redirect('basket');
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
        dump($basket_arr);

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
