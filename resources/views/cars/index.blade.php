<html>
<head>
    <meta charset="UTF-8/">
    <title>顯示所有車輛資料</title>
</head>
<body>
<h1>顯示所有車輛資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>汽車</th>
        <th>廠牌</th>
        <th>操作</th>
    </tr>
    @foreach($cars as $car)
        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->car}}</td>
            <td>{{$car->vid}}</td>
           <td>
            <a href = "cars/{{$car -> id}}">
                詳細
            </a>
           </td>
        </tr>
    @endforeach
</table>
</body>
</html>
