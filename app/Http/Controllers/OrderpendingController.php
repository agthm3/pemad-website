<?php

namespace App\Http\Controllers;

use App\Models\Orderpending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrderpendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'user_id'=> 'required',
            'order_id'=> 'required',
            'receipt'=> 'required|image'
        ]);

        $file = $request->file('client_file');
        $path = time() . '_' . $request->type_request . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'. $path, file_get_contents($file));

        $user_id = 1;
        Orderpending::create([
            'receipt' => $path,
            'user_id' => $user_id,
            'order_id' => $request->order_id
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('dashboard.order.pending');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orderpending $orderpending)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orderpending $orderpending)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orderpending $orderpending)
    {
        //
    }
}
