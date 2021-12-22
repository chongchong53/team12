<html>
<head>
    <meta charset="UTF-8/">
    <title>顯示所有車輛資料</title>
</head>
<body>
<h1>顯示所有車輛資料</h1>
<tr>

        <a href = "{{route('vendors.index')}}">所有廠牌資料</a>
        &emsp13;
        <a href = "{{route('cars.create')}}">新增車輛資料</a>
        &emsp13;
        <a href = "{{route('cars.senior')}}">售價一千萬元的汽車</a>
        &emsp13;

</tr>
<table border="1">
    <tr>
        <th>編號</th>
        <th>汽車</th>
        <th>廠牌</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($cars as $car)
        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->car}}</td>
            <td>{{$car->vendor->vendor}}</td>
           <td>
            <a href = "cars/{{$car -> id}}">
                詳細
            </a>
           </td>
            <td>
                <a href = "cars/{{$car -> id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method ="post" action="cars/{{$car->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
