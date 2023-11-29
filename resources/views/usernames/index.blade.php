@extends('app')

@section('record_contents')
<h1>列出所有教職員生</h1>
<table>
    <tr>
        <th>編號</th>
        <th>教職員生編號</th>
        <th>教職員生姓名</th>
        <th>人臉照片檔名路徑</th> 
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @for($i=0; $i<count($usernames); $i++)
        <tr>
            <td>{{ $usernames[$i]['id'] }}</td>
            <td>{{ $usernames[$i]['number'] }}</td>
            <td>{{ $usernames[$i]['name'] }}</td>
            <td>{{ $usernames[$i]['photo'] }}</td>
            <td><a href="{{ route('usernames.show', ['id'=>$usernames[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('usernames.edit', ['id'=>$usernames[$i]['id']]) }}">修改</a></td>
            <td>刪除</td>
        </tr>
    @endfor
    <table>
@endsection