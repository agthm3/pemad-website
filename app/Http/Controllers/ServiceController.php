<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allService = Service::all();
        return view('dashboard.service.index', compact('allService'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.service.add');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=> 'required|image',
            'title'=>'required|max:255',
            'description'=>'required|max:1000',
            'price'=>'required|integer'
        ]);

        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));

        Service::create([
            'image'=>$path,
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price
        ]);

    
        return redirect()->back()->with('success', 'Service baru berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
    
       return view('dashboard.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
         return view('dashboard.service.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
