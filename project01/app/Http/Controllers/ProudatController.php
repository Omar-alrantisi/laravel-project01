<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProudatController extends Controller
{
   function Items(){

    $item=[
        'name'=>'computer',
        'desc'=>'computer Kafooo',
        'price'=>'$50',
    ];

    return view('about')->with('items',$item);

   }
}
