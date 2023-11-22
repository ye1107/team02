<html>

<head>
    <title>列出所有鑰匙編號和地點</title>
</head>
<h1>列出所有鑰匙編號和地點</h1>

@for($i=0; $i<count($keys);$i++)
    {{$keys[$i]['key']}}<br/>
    {{$keys[$i]['room']}}<br/><br/>
@endfor

</body>
</html>