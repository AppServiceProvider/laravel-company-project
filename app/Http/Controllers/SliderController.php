<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;


class SliderController extends Controller
{
    function sliderDeleteController($id){
        Slider::find($id)->delete();
        return Redirect()->back();
    }
    public function SliderIndex(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }
    public function AddSlider(){
        return view('admin.slider.create');
    }
    function sliderEdit(Request $request, $id){
        $sliders = Slider::find($id);
        return view('admin.slider.editSlider',["sliders"=>$sliders]);
       }


    public function StoreSlider(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            
        ],
        [
            'title.required' => 'Please Submit Form',
        ]);

        $slider_image =  $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920,1088)->save('image/slider/'.$name_gen);
        $last_img = 'image/slider/'.$name_gen;
        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('home.slider')->with('success','Slider Inserted Successfully');
    }

}
