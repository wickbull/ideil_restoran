<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\English;
use App;

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
