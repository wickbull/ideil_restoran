<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\English;
use Auth;
<<<<<<< HEAD
use App;

class AuditUserLanguage extends Controller
{

    public function index()
    {

=======

class AuditUserLanguage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langs = English::where('blade', 'welcome')->get();
        foreach ($langs as $choose_lang) {
            if(empty(session('language'))) $res[$choose_lang->element]=$choose_lang->word_ua;
            if(session('language') == 1) $res[$choose_lang->element]=$choose_lang->word_en;
            if(session('language') == 2) $res[$choose_lang->element]=$choose_lang->word_ua;
        }
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        
        $languages = Language::select(['id','lang','category','photo'])->get();
        $user = Auth::user();
        if(empty($user)){
            $zero = '0';
            return view('/welcome', [
                'languages' => $languages,
                'admin' => $zero,
<<<<<<< HEAD
=======
                'lang' => $res,
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
                ]);
        } else {
            return view('/welcome', [
                'languages' => $languages,
                'admin' => $user->admin,
<<<<<<< HEAD
                ]);
        }
    }

    public function choose($id){
        session()->put('applocale', $id);
        return redirect('/');
    }

=======
                'lang' => $res,
                ]);
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function choose($id){
        session()->put('language', $id);
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
