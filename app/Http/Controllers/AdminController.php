<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;
use App\User;
use App\English;
use App\SoftDeletes;
use Mail;
<<<<<<< HEAD
use App;
=======
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
=======

        $langs = English::where('blade', 'config')->get();
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
        $reserved = Basket::get();

        $trash = Basket::onlyTrashed()->get();
        
        return view('config',[
                'reserved' => $reserved,
                'trash' => $trash,
<<<<<<< HEAD
=======
                'lang' => $res,
                'lang_layout' => $res2,
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
            ]);

                
                
            
    }

    public function check($id, $variant)
    {
       
        if($variant == 'delete'){
            $search_user = Basket::where('id', $id)->first();
            $user = User::where('id', $search_user->id_user)->first();
            
            Mail::send('mail_for_send.user_buy', ['buy' => 'Ви замовили '.$search_user->name_product.' '.$search_user->name_addit.' = '.$search_user->count.' шт.'.'<br> Загальна сумма грн: '.$search_user->price_uah.'<br> Загальна сумма usd: '.$search_user->price_usd.'<br>Чекайте нашого дзвінка на протязі 5 хв.'], function ($m) use ($user) {
                $m->from('admin@gmail.com', 'Admin');
                $m->to($user->email, $user->name)->subject('Ваше замовлення було прийняте!');
            });
            Basket::where('id', $id)->delete(); 
        }

        if($variant == 'restore') Basket::withTrashed()->where('id', $id)->restore();

        return redirect('config');
    }

<<<<<<< HEAD
=======
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
}
