@extends('layouts.structure')

@section('content')
    <ul>
    <li>เสื้อผ้า ราคา {{ $price }}</li>
        <li>ร้องเท้า</li>
        <li>หมวก</li>
    </ul>
    <div>
        @if ($price < 100)
            <h2 style="color:red">{{ $price }}</h2>
        @elseif ($price >= 100 && $price <= 150)
            <h2 style="color:green">{{ $price }}</h2>
        @else 
            <h2 style="color:blue">{{ $price }}</h2>            
        @endif
    </div>
    
    <div>
        @foreach ($users as $user)
            <h2>{{ $user }}</h2>            
        @endforeach
    </div>
@endsection