<html>

<head>
    <title>列出所有鑰匙借用紀錄</title>
</head>
<h1>列出所有鑰匙借用紀錄</h1>

@for($i=0; $i<count($records); $i++)
    {{$records[$i]['uid']}}<br/>
    {{$records[$i]['kid']}}<br/>
    {{$records[$i]['lend_date']}}<br/>
    {{$records[$i]['lend_time']}}<br/>
    {{$records[$i]['back_date']}}<br/>
    {{$records[$i]['back_time']}}<br/><br/>
@endfor

</body>
</html>