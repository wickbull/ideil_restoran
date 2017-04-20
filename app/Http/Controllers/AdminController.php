<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;
use App\User;
use App\English;
use App\SoftDeletes;
use Mail;
use App;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserved = Basket::get();

        $trash = Basket::onlyTrashed()->get();
        
        return view('config',[
                'reserved' => $reserved,
                'trash' => $trash,
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

}
