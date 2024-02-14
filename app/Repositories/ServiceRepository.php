<?php 
namespace App\Repositories;

use App\Models\Service;
use App\Models\Typerequest;
use App\Repositories\Interfaces\ServiceInterface;
use Illuminate\Support\Facades\Storage;

class ServiceRepository implements ServiceInterface
{
    public function getService()
    {
        return Service::all();
    }

    public function storeService($data, $typeRequests)
    {
        $path = time() . '_' . $data['name'] . '.' . $data['image']->getClientOriginalExtension();
        Storage::disk('local')->put('public/'. $path, file_get_contents($data['image']));

        $service = Service::create([
            'image' => $path,
            'title' => $data['title'],
            'description' => $data['description'],
            'price' => $data['price']
        ]);

        foreach ($typeRequests as $typeReq) {
            Typerequest::create([
                'service_id' => $service->id,
                'name' => $typeReq,
            ]);
        }

        return $service; // Mengembalikan instance service yang baru dibuat
    }

    public function deleteService($id)
    {
        $service = Service::find($id);
        if ($service) {
            // Menghapus semua typerequests yang terkait dengan service ini
            $service->typerequests()->delete();

            // Sekarang, aman untuk menghapus service
            if ($service->image) {
                Storage::disk('local')->delete('public/' . $service->image);
            }
            $title = $service->title;
            $service->delete();

            return $title;
        }

        return null;
    }

    
}