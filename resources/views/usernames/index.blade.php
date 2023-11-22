<html>

<head>
    <title>列出所有教職員生</title>
</head>
<h1>列出所有教職員生</h1>

@for($i=0; $i<count($usernames);$i++)
    {{$usernames[$i]['number']}}<br/>
    {{$usernames[$i]['name']}}<br/>
    {{$usernames[$i]['photo']}}<br/><br/>
@endfor

</body>
</html>