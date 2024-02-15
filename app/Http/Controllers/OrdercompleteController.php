<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ordercomplete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrdercompleteController extends Controller
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
            'note_translator' => 'required',
            'file_complete' => 'required',
            'status' => 'required'
        ]);
        

        // Menangani receipt
        $translatorFile = $request->file('file_complete');
        $FilaPath = 'file_complete/' . time() . '_' . $translatorFile->getClientOriginalName();
        Storage::disk('local')->put('public/'. $FilaPath, file_get_contents($translatorFile));
        $user_id = Auth()->user()->id;
        ordercomplete::create([
            'note_translator' => $request->note_translator,
            'file_complete' => $FilaPath,
            'order_id' => $request->order_id,
            'user_id' => $user_id,
            'rating' => 0
        ]);

        $order = Order::find($request->order_id);
        $order->status = $request->status;
        $order->save();

        return redirect(route('dashboard.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ordercomplete $ordercomplete)
    {
        return view('dashboard.order.client-order-show', compact('ordercomplete'));
    }

    public function downloadFile($id)
    {
        // Assuming $id is the ID of the Ordercomplete entry
        $ordercomplete = Ordercomplete::findOrFail($id); // Find the model instance by ID

        // Now $ordercomplete is an object, and you can access its properties
        $filePath = 'public/' . $ordercomplete->file_complete;

        if (!Storage::exists($filePath)) {
            abort(404); // File not found
        }

        $absolutePath = Storage::path($filePath);
        return response()->download($absolutePath);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ordercomplete $ordercomplete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ordercomplete $ordercomplete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ordercomplete $ordercomplete)
    {
        //
    }
}
