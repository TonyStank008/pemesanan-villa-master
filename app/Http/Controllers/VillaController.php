<?php

namespace App\Http\Controllers;

use App\Models\Villa;
use App\Models\Facility;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\VillaPostRequest;
use File;

class VillaController extends Controller
{
    public function index()
    {
        $villa = Villa::all();
        
        return view('admin.villa.villa', ['villa' => $villa]);
    }



    
    public function show($id)
    {
        $villa = Villa::with(['facility'])->findOrFail($id);

        return view('admin.villa.detail-villa', ['villa' => $villa]);
    }

    public function store(VillaPostRequest $request)
    {
       
        $path = Str::random(10) . '-' . now()->timestamp . '.' . $request->file('path')->extension();
        
        $villa = Villa::create([
                "name" => $request->name,
                "summary" => $request->summary,
                "description"=> $request->description,
                "price" => $request->price, 
                "path" => $path,
        ]);

        if($villa){
            $request->file('path')->storeAs('path', $path);
            foreach ($request->file('facility') as $facility) {
                $filename = Str::random(10) . '-' . now()->timestamp . '.' . $facility->extension();
                $facility->storeAs('facility', $filename);
                $facility = Facility::create([
                    'path' => $filename,
                    'villa_id' => $villa->id
                ]);
            }
        }

        return redirect('villa');
    }

    public function destroy($id)
    {
        $villa = Villa::findOrFail($id);
        $facility = Facility::where('villa_id', $id)->get();
        
        $villa->delete();

        if($villa){
            $villaPath = public_path().'/storage/path/'.$villa->path;

            if(File::exists($villaPath)){
                File::delete(public_path().'/storage/path/'.$villa->path);
            }
            foreach($facility as $facility){

                $facilityPath = public_path().'/storage/path/'.$facility->path;

                if(File::exists(public_path().'/storage/facility/'.$facility->path)){
                    File::delete(public_path().'/storage/facility/'.$facility->path);
                }
            }
        }

        return redirect('/villa');
    }

    public function editSection1($id)
    {
        $villa = Villa::with(['facility'])->findOrFail($id);

        return view('admin.villa.update-villa-section-1', ['villa' => $villa]);
    }

    public function editSection2($id)
    {
        $villa = Villa::with(['facility'])->findOrFail($id);

        return view('admin.villa.update-villa-section-2', ['villa' => $villa]);
    }

    public function editSection3($id)
    {
        $villa = Villa::with(['facility'])->findOrFail($id);

        return view('admin.villa.update-villa-section-3', ['villa' => $villa]);
    }

    public function updateSection1(Request $request, $id)
    {
        $validate = $request->validate([
            "name" => ['required'],
            "summary" => ['required'],
            "description" => ['required'],
            "price" => ['required', 'numeric'],
        ]);

        $villa = Villa::findOrfail($id);
        $villa->update([
            "name" => $request->name,
            "summary" => $request->summary,
            "description" => $request->description,
            "price" => $request->price,
        ]);

        return redirect('villa');
    }

    public function updateSection2(Request $request, $id)
    {
        $validate = $request->validate([
            'path' => ['required', 'mimes:jpeg,jpg,png', 'max:1024'],
        ]);
        
        $villa = Villa::findOrfail($id);
        if($villa){
            $villaPath = public_path().'/storage/path/'.$villa->path;

            if(File::exists($villaPath)){
                File::delete($villaPath);
            }
            $request->file('path')->storeAs('path', $villa->path);
        }

        return redirect('villa');
    }

    public function updateSection3Add(Request $request, $id)
    {
        $validate = $request->validate([
            'facility' => ['required'],
            'facility.*' => ['mimes:jpeg,jpg,png', 'max:1024']
        ]);

        foreach ($request->file('facility') as $facility) {
            $filename = Str::random(10) . '-' . now()->timestamp . '.' . $facility->extension();
            $facility->storeAs('facility', $filename);
            $facility = Facility::create([
               'path' => $filename,
               'villa_id' => $id
            ]);
        }
        
        return redirect('villa');

    }

    public function updateSection3Delete($id)
    {
        $facility = Facility::findOrFail($id);
        $facility->delete();

        if($facility){
            $facilityPath = public_path().'/storage/facility/'.$facility->path;
            if(File::exists($facilityPath)){
                File::delete($facilityPath);
            }
        }

        return redirect('villa');
    }


    
}
