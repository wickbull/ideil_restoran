<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Category;
use App\English;
use App;
=======
use App\Food;
use App\English;
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f

class HomeController extends Controller
{


<<<<<<< HEAD
    public function index()
    {   

        $food = Category::paginate(10);
        return view('home', [
                'foods' => $food,
=======
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $langs = English::where('blade', 'home')->get();
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

        $food = Food::paginate(10);
        return view('home', [
                'foods' => $food,
                'lang' => $res,
                'lang_layout' => $res2,
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
            ]);
    }


    public function show_food($id)
    {   
<<<<<<< HEAD
        $food = Category::where('id', $id)->first();
        return view('home/edit/', [
                'food' => $food,
=======

        $langs = English::where('blade', 'home')->get();
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

        dump($res);
        dump($res2);


        $food = Food::where('id', $id)->first();
        return view('home/edit/', [
                'food' => $food,
                'lang' => $res,
                'lang_layout' => $res2, 
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
            ]);
    }

    
}
