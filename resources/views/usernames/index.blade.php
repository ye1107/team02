@extends('app')

@section('title','鑰匙借用系統 - 所有教職員生')

@section('record_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('usernames.create') }} ">新增教職員生</a>
    <a href="{{ route('usernames.index') }} ">所有教職員生</a>
</div>
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
    @foreach($usernames as $username)
        <tr>
            <td>{{ $username->id }}</td>
            <td>{{ $username->number }}</td>
            <td>{{ $username->name }}</td>
            <td>{{ $username->photo }}</td>
            <td><a href="{{ route('usernames.show', ['id'=>$username->id]) }}">顯示</a></td>
            <td><a href="{{ route('usernames.edit', ['id'=>$username->id]) }}">修改</a></td>
            <td>
            <form action="{{ url('/usernames/delete',['id'=>$username->id])}}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection