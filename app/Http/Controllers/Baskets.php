<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Additionally;
use App\Basket;
<<<<<<< HEAD
use App\Category;
=======
use App\Food;
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
use App\User;
use App\English;
use Auth;
use Mail;
<<<<<<< HEAD
use App;

class Baskets extends Controller
{
    public function index()
    {
=======

class Baskets extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langs = English::where('blade', 'basket')->get();
        foreach ($langs as $choose_lang) {
            if(empty(session('language'))) $res[$choose_lang->element]=$choose_lang->word_ua;
            if(session('language') == 1) $res[$choose_lang->element]=$choose_lang->word_en;
            if(session('language') == 2) $res[$choose_lang->element]=$choose_lang->word_ua;
        }

        $langs = English::where('blade', 'layout')->get(); //добавити на остальних блейдах
        foreach ($langs as $choose_lang) {
            if(empty(session('language'))) $res2[$choose_lang->element]=$choose_lang->word_ua;
            if(session('language') == 1) $res2[$choose_lang->element]=$choose_lang->word_en;
            if(session('language') == 2) $res2[$choose_lang->element]=$choose_lang->word_ua;
        }


>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        $id_user = Auth::user()->id;

        $gets = Basket::where('id_user', $id_user)->get();

        $gets_history = Basket::where('id_user', $id_user)->onlyTrashed()->get();

        return view('basket',[
                'gets' => $gets,
                'gets_history' => $gets_history,
<<<<<<< HEAD
            ]);
    }

=======
                'lang' => $res,
                'lang_layout' => $res2,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
    public function index_delete($id)
    {
        Basket::where('id', $id)->forceDelete();
        return redirect('basket');
    }

<<<<<<< HEAD
    public function store(Request $request)
    {
=======
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
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

<<<<<<< HEAD
    public function order($id)
    {
        $order_additional = Additionally::where('id', $id)->first();
        $order_food = Category::where('id', $order_additional->product)->first();
=======
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order($id)
    {
        $order_additional = Additionally::where('id', $id)->first();
        $order_food = Food::where('id', $order_additional->product)->first();
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        return view('/home/cat/order',[
                'order_addit' => $order_additional,
                'order_food' => $order_food,
            ]);
    }
<<<<<<< HEAD
    
=======

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
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
}
