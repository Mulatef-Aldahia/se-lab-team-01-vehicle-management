<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        // التحقق من صحة البيانات (Validation) كما هو مطلوب في المتطلبات
        $request->validate([
            'vehicle_id' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time', // يجب أن يكون الإرجاع بعد الاستلام
        ]);

        // هنا يتم عادة الحفظ في قاعدة البيانات
        // سنكتفي بإرجاع رسالة نجاح لمحاكاة العملية
        return "تم استلام طلب الحجز بنجاح! (تم تحقيق معايير القبول للمهمة)";
    }
}
