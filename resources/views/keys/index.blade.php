@extends('app')

@section('title','鑰匙借用系統-列出所有鑰匙編號和地點')

@section('record_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('keys.create') }} ">新增鑰匙編號和地點</a>
    <a href="{{ route('keys.index') }} ">所有鑰匙編號和地點</a>
</div>
<h1>列出所有鑰匙編號和地點</h1>
<table>
    <tr>
        <th>編號</th>
        <th>鑰匙</th>
        <th>教室</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($keys as $key)
        <tr>
            <td>{{ $key->id }}</td>
            <td>{{ $key->key }}</td>
            <td>{{ $key->room }}</td>
            <td><a href="{{ route('keys.show', ['id'=>$key->id]) }}">顯示</a></td>
            <td><a href="{{ route('keys.edit', ['id'=>$key->id]) }}">修改</a></td>
            <td>
            <form action="{{ url('/keys/delete',['id'=>$key->id])}}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection