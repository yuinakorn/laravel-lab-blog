@extends('layouts.structure')
@section('title', 'Yui Nakorn')

@section('header')
      
@endsection
    
@section('content')
        contact me : yuinakorn@hotmail.com
        <p>{{ $des }}</p>
        <p>{{ number_format($price,2) }} ฿</p>
@endsection

@section('footer','copyright@yuinakorn')
    
{{-- @endsection --}}