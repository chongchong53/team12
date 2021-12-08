<html>
<head>
    <meta charset="UTF-8/">
    <title>顯示所有廠牌資料</title>
</head>
<body>
<h1>顯示所有廠牌資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>廠牌</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($vendors as $vendor)
        <tr>
            <td>{{$vendor->id}}</td>
            <td>{{$vendor->vendor}}</td>
            <td>
                <a href = "vendors/{{$vendor -> id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href = "vendors/{{$vendor -> id}}/edit">
                    修改
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
