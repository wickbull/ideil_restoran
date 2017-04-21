<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
<<<<<<< HEAD
=======
use App\English;
>>>>>>> 86f0a91b020a5f54aba1ac82ea4533c72a093cfe

class HomeController extends Controller
{


    public function index()
    {   

        $food = Category::paginate(10);
        return view('home', [
                'foods' => $food,
            ]);
    }


    public function show_food($id)
    {   
        $food = Category::where('id', $id)->first();
        return view('home/edit/', [
                'food' => $food,
            ]);
    }

    
}
