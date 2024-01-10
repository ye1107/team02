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
<h1>列出所有鑰匙借用紀錄</h1>
<table>
    <tr>
        <th>編號</th>
        <th>教職員生</th>
        <th>鑰匙</th>
        <th>借用日期</th>
        <th>借用時間</th>
        <th>歸還日期</th>
        <th>歸還時間</th>
    </tr>
    @foreach($records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->username->name }}</td>
            <td>{{ $record->key->key }}</td>
            <td>{{ $record->lend_date }}</td>
            <td>{{ $record->lend_time }}</td>
            <td>{{ $record->back_date }}</td>
            <td>{{ $record->back_time }}</td>
        </tr>
    @endforeach
</table>
@endsection