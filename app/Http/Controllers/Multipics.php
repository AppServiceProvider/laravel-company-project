<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\multipic;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
class Multipics extends Controller
{
    public function Multpic(){
        $images = Multipic::all();
        return view('admin.multipic.index',compact('images'));
    }

    public function StoreImg(Request $request){

        $image =  $request->file('image');

        foreach($image as $multi_img){ 

        $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
        Image::make($multi_img)->resize(300,300)->save('image/multi/'.$name_gen);

        $last_img = 'image/multi/'.$name_gen;
 
        Multipic::insert([
           
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);
            } // end of the foreach



            return Redirect()->back()->with('success','Brand Inserted Successfully');

 
     }
}
