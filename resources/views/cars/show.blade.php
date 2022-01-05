<!--<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一汽車的詳細資料</title>
</head>
<body>-->
@extends('app')
@section('title', '顯示一筆汽車詳細資料')

@section('car_contents')
    <h3>顯示單一汽車的詳細資料</h3>

        <input type ="button" onclick="history.back()" value="顯示所有車輛資料"></input>

    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$car->id}}</td>
        </tr>
        <tr>
            <td>汽車</td>
            <td>{{$car->car}}</td>
        </tr>
        <tr>
            <td>廠牌</td>
            <td>{{$car->vid}}</td>
        </tr>
        <tr>
            <td>售價</td>
            <td>{{$car->selling_price}}</td>
        </tr>
        <tr>
            <td>排氣量</td>
            <td>{{$car->displacement}}</td>
        </tr>
        <tr>
            <td>能耗</td>
            <td>{{$car->energy_consumption}}</td>
        </tr>
    </table>
@endsection
<!--
</body>
</html>
-->
