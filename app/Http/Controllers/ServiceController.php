<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Typerequest;
use App\Repositories\Interfaces\ServiceInterface;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Repositories\ServiceRepository;

class ServiceController extends Controller
{
    private $serviceRepository;
    public function __construct(ServiceInterface $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allService = $this->serviceRepository->getService();
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
            'image' => 'required|image',
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'price' => 'required|integer',
            'typeRequest' => 'required|array',
            'typeRequest.*' => 'required|string',
        ]);

        $file = $request->file('image');
        $data = [
            'image' => $file,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'name' => $request->name, // Pastikan ini sesuai dengan ekspektasi data yang dikirim
        ];

        $this->serviceRepository->storeService($data, $request->typeRequest);

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
    public function destroy($id)
    {
        $title = $this->serviceRepository->deleteService($id);

        if ($title) {
            
            return Redirect()->route('dashboard.servicelist')->with('success', $title . ' berhasil dihapus.');
        } else {
            return Redirect()->route('dashboard.servicelist')->with('error', 'Service gagal dihapus.');
        }
    }

}
