<html>

<head>
    <title>列出所有鑰匙編號和地點</title>
</head>
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
    @for($i=0; $i<count($keys); $i++)
        <tr>
            <td>{{ $keys[$i]['id'] }}</td>
            <td>{{ $keys[$i]['key'] }}</td>
            <td>{{ $keys[$i]['room'] }}</td>
            <td><a href="{{ route('keys.show', ['id'=>$keys[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('keys.edit', ['id'=>$keys[$i]['id']]) }}">修改</a></td>
            <td>刪除</td>
        </tr>
    @endfor

</body>
</html>
