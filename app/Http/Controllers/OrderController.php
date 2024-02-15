<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Typerequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.order.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_request' => 'required',
            'client_file' => 'required',
            'client_request' => 'required|max:1000',
            'service_id' => 'required|exists:services,id',
        ]);

        $file = $request->file('client_file');
        $path = time() . '_' . $request->type_request . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));

        $user_id = 1;

        
        $order = Order::create([
            'type_request' => $request->type_request, 
            'client_request' => $request->client_request,
            'client_file' => $path,
            'service_id' => $request->service_id,
            'user_id' => $user_id
        ]);

        $type_request = $request->type_request;
        $file_name = $path;
        $service = Service::findOrFail($request->service_id);
        $price = $service->price;
        $order_id = $order->id;
       return redirect()->route('order.store.pending', compact('type_request', 'file_name', 'price', 'order_id'))->with('success', 'Service baru berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        // Asumsi relasi 'typeRequests' telah didefinisikan di model Service
        $typeRequests = $service->typeRequests;
        return view('dashboard.order.show', compact('service', 'typeRequests'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
