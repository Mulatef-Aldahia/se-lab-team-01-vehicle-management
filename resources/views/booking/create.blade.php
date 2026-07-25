<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>حجز سيارة</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 40px;">
    <h2>نموذج حجز سيارة (مهمة رقم 1)</h2>
    
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/booking" method="POST">
        @csrf
        <label>اختر السيارة المتاحة:</label>  

        <select name="vehicle_id" required>
            <option value="">-- اختر سيارة --</option>
            <option value="1">تويوتا كامري - لوحة 1234</option>
            <option value="2">هيونداي إلنترا - لوحة 5678</option>
        </select>  
  

        
        <label>تاريخ ووقت الاستلام:</label>  

        <input type="datetime-local" name="start_time" required>  
  

        
        <label>تاريخ ووقت الإرجاع:</label>  

        <input type="datetime-local" name="end_time" required>  
  

        
        <button type="submit" style="padding: 10px 20px; background: blue; color: white; border: none;">تأكيد الحجز</button>
    </form>
</body>
</html>
