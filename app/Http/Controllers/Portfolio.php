<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\multipic;

class Portfolio extends Controller
{
    //
    function index(){
    $images = Multipic::all();
    return view('frontEnd.portfolio.portfolio',compact('images'));

    }
}
