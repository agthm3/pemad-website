<?php

namespace App\Repositories\Interfaces;

interface ServiceInterface
{
    public function getService();
    public function storeService($data, $typeRequests);
    public function deleteService($id);
}

