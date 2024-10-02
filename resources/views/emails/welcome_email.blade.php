<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    {{-- - المتغير داتا مرسل من ملف الإيميل  --}}
    <h1>مرحبًا بك يا: {{ $data['name'] }}</h1>
    <h1 style="color:blue;">في مدونة التكنولوجيا</h1>
    <p>كلمة المرور الخاصة بك:
        {{ $data['password'] }}
    </p>
</body>

</html>
