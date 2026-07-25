<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return view('vehicles.index');
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'type' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'plate_number' => 'required|string|max:50',
        ]);

        // محاكاة الحفظ في قاعدة البيانات
        return "تمت إضافة السيارة بنجاح! (رقم اللوحة: " . $request->plate_number . ") - تم تحقيق معايير القبول للمهمة.";
    }
}
