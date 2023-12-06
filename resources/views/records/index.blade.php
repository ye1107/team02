
@extends('app')

@section('title','鑰匙借用系統-列出所有鑰匙借用紀錄')

@section('record_contents')
<h1>列出所有鑰匙借用紀錄</h1>
<table>
    <tr>
        <th>編號</th>
        <th>教職員生編號</th>
        <th>鑰匙編號</th>
        <th>借用日期</th>
        <th>借用時間</th>
        <th>歸還日期</th>
        <th>歸還時間</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->uid }}</td>
            <td>{{ $record->kid }}</td>
            <td>{{ $record->lend_date }}</td>
            <td>{{ $record->lend_time }}</td>
            <td>{{ $record->back_date }}</td>
            <td>{{ $record->back_time }}</td>
            <td><a href="{{ route('records.show', ['id'=>$record->id]) }}">顯示</a></td>
            <td><a href="{{ route('records.edit', ['id'=>$record->id]) }}">修改</a></td>
            <td>刪除</td>
        </tr>
    @endforeach
</table>
@endsection