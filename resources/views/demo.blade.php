<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (LaravelLocalization::getCurrentLocale() == 'ar')
        <p>مرحبًا بك في لارافيل</p>
    @else
        <p>Welcome to laeavel</p>
    @endif
</body>

</html>
