@extends('app')

@section('title','鑰匙借用系統-列出所有鑰匙借用紀錄')

@section('record_contents')
<h1>列出單一鑰匙借用紀錄</h1>

<table>
        編號:{{ $record->id }}</br>
        教職員生編號:{{ $record->username->name }}</br>
        鑰匙編號:{{ $record->key->key }}</br>
        借用日期:{{ $record->lend_date }}</br>
        借用時間:{{ $record->lend_time }}</br>
        歸還日期:{{ $record->back_date }}</br>
        歸還時間:{{ $record->back_time }}</br>
    
</table>
@endsection