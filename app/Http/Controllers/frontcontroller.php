<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class frontcontroller extends Controller
{
    public function home()
    {
        return view('home');

    }
    public function prod()
    {
        $produtos = Produto::all();
   
        return view('prod', compact('produtos'));

    }

}
