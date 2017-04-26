<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\English;
use Auth;

class AuditUserLanguage extends Controller
{

    public function index()
    {

        
<<<<<<< HEAD
        $languages = Language::select(['lang','category','photo'])->get();
=======
        $languages = Language::select(['id','lang','category','photo'])->get();
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
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
<<<<<<< HEAD
        if($id == 'en')session()->put('applocale', $id);
        if($id == 'ua')session()->put('applocale', $id);
=======
        session()->put('applocale', $id);
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe
        return redirect('/');
    }

}
