@extends('app')

@section('title','鑰匙借用系統 - 所有教職員生')

@section('record_contents')
<h1>列單一教職員生</h1>

<table>
    
        編號:{{ $username->id }}</br>
        教職員生編號:{{ $username->number }}</br>
        教職員生姓名:{{ $username->name }}</br>
        人臉照片檔名路徑:{{ $username->photo }}</br> 
</table>
@endsection