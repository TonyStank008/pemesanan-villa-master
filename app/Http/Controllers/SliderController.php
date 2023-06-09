<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use File;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();

        return view('admin.slider.slider', ['slider' => $slider]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'slider' => ['required', 'mimes:jpeg,jpg,png', 'max:1024'],
        ]);

        $filename = Str::random(10) . '-' . now()->timestamp . '.' . $request->file('slider')->extension();
        $slider = Slider::create(['path' => $filename]);

        if($slider){
            $request->file('slider')->storeAs('slider', $filename);
        }   

        return redirect('slider');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrfail($id);
        $path = $slider->path;
        
        $slider->delete();

        if($slider){
            $sliderPath = public_path().'/storage/slider/'.$path;
            if(File::exists($sliderPath)){
                File::delete($sliderPath);
            }
        }

        return redirect('slider');

    }
}
