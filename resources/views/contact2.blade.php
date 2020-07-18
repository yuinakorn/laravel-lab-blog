<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Yui Nakorn</h2>
    <!-- route สามารถตั้งชื่อ route ได้ -->
    <p> 
        <a href="/show/menu"> email</a> | 
        <a href="{{ route('cmail') }}"> phone</a> | 
        <a href="{{ route('blog',['id'=>1]) }}">page1</a>
        <a href="{{ route('blog',['id'=>2]) }}">page2</a>
    </p>
    <p><h2>Price = {{ number_format($price,2) }}</h2></p>
    <h3>
        {{ Str::limit($des,4) }}
        <a href="#">read more</a>
    </h3>
</body>
</html>