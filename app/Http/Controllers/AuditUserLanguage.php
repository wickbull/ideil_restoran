<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use Auth;

class AuditUserLanguage extends Controller
{

    public function index()
    {

        
        $languages = Language::select(['lang','category','photo'])->get();
        $user = Auth::user();
        if(empty($user)){
            $zero = '0';
            return view('/welcome', [
                'languages' => $languages,
                'admin' => $zero,
                ]);
        } else {
            return view('/welcome', [
                'languages' => $languages,
                'admin' => $user->admin,
                ]);
        }
    }

    public function choose($id){
        if($id == 'en')session()->put('applocale', $id);
        if($id == 'ua')session()->put('applocale', $id);
        return redirect('/');
    }

}
