<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    {{-- <div class="header"><h2>@yield('header')</h2></div> --}}
    <div class="header">
        <ul>
            <li>home</li>
            <li>login</li>
            <li>register</li>
        </ul>      
    </div>
    <div class="content">@yield('content')</div>
    {{-- <div class="footer">@yield('footer')</div> --}}
    <div class="footer">
        <p>Copyright(R) YuiNakorn</p>
    </div>
</body>
</html>