<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\multipic;

class PortfolioDetail extends Controller
{
    function index($id){
        $images = Multipic::find($id);

        return view('frontEnd.portfolio.portfolio-details',['images'=>$images]);
        }
}
