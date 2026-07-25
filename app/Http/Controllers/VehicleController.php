<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        // في المشروع الحقيقي، نقوم بجلب السيارات المتاحة من قاعدة البيانات
        // $vehicles = Vehicle::where('status', 'available')->get();
        
        return view('vehicles.index');
    }
}
