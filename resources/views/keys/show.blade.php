@extends('app')

@section('title','鑰匙借用系統-列出所有鑰匙編號和地點')

@section('record_contents')
<h1>列出單一鑰匙編號和地點</h1>

<table>
    
編號:{{ $key->id }}</br>
鑰匙:{{ $key->key }}</br>
教室:{{ $key->room }}</br>
    
    
    
</table>
@endsection