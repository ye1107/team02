<html>

<head>
    <title>列出所有鑰匙借用紀錄</title>
</head>
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
    @for($i=0; $i<count($records); $i++)
        <tr>
            <td>{{ $records[$i]['id'] }}</td>
            <td>{{ $records[$i]['uid'] }}</td>
            <td>{{ $records[$i]['kid'] }}</td>
            <td>{{ $records[$i]['lend_date'] }}</td>
            <td>{{ $records[$i]['lend_time'] }}</td>
            <td>{{ $records[$i]['back_date'] }}</td>
            <td>{{ $records[$i]['back_time'] }}</td>
            <td><a href="{{ route('records.show', ['id'=>$records[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('records.edit', ['id'=>$records[$i]['id']]) }}">修改</a></td>
            <td>刪除</td>
        </tr>
    @endfor

</body>
</html>