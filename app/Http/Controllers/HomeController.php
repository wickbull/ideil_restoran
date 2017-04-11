<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $food = Food::paginate(10);
        return view('home', [
            'foods' => $food]);
    }
}
