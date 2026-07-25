<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إضافة سيارة جديدة</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 40px;">
    <h2>إضافة سيارة جديدة للأسطول (مهمة رقم 3)</h2>
    
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/vehicles" method="POST">
        @csrf
        <label>نوع السيارة (مثل: تويوتا):</label>  

        <input type="text" name="type" required>  
  

        
        <label>الموديل (مثل: كامري):</label>  

        <input type="text" name="model" required>  
  

        
        <label>رقم اللوحة:</label>  

        <input type="text" name="plate_number" required>  
  

        
        <button type="submit" style="padding: 10px 20px; background: green; color: white; border: none;">حفظ السيارة</button>
    </form>
      

    <a href="/vehicles" style="color: blue; text-decoration: none;">العودة لقائمة السيارات</a>
</body>
</html>
