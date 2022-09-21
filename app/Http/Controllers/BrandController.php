<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
   function allBrandConroller(){
   $brand =Brand::latest()->paginate(5);
    return view('admin.brand.index',compact('brand'));
   }

// ami intervention package ta install koti nai kintu. Package ta ta age install den wait

   public function brandAddController(Request $request){
      $validatedData = $request->validate([
          'brand_name' => 'required|unique:brands|min:4',
          'brand_image' => 'required',
          
      ],
      [
          'brand_name.required' => 'Please Input Brand Name',
          'brand_image.min' => 'Brand Longer then 4 Characters', 
      ]);

      $brand_image =  $request->file('brand_image');

      // $name_gen = hexdec(uniqid());
      // $img_ext = strtolower($brand_image->getClientOriginalExtension());
      // $img_name = $name_gen.'.'.$img_ext;
      // $up_location = 'image/brand/';
      // $last_img = $up_location.$img_name;
      // $brand_image->move($up_location,$img_name);

      $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
      Image::make($brand_image)->resize(300,200)->save('image/brand/'.$name_gen);

      $last_img = 'image/brand/'.$name_gen;

      Brand::insert([
          'brand_name' => $request->brand_name,
          'brand_image' => $last_img,
          'created_at' => Carbon::now()
      ]);
       
      $notification = array(
          'message' => 'Brand Inserted Successfully',
          'alert-type' => 'success'
      );

      return Redirect()->back()->with($notification);

  }
}
