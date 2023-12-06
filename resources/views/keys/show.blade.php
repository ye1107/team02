@extends('app')

@section('title','鑰匙借用系統-列出所有鑰匙編號和地點')

@section('record_contents')
<h1>列出單一鑰匙編號和地點</h1>

<table>
    
編號:{{ $key->id }}</br>
鑰匙:{{ $key->key }}</br>
教室:{{ $key->room }}</br>
    
    
    
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