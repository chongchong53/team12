<!--<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一廠牌的詳細資料</title>
</head>
<body>-->
@extends('app')
@section('title', '顯示一筆廠牌資料')

@section('car_contents')
    <h3>顯示單一廠牌的詳細資料</h3>
    <input type ="button" onclick="history.back()" value="顯示所有廠牌資料"></input>

    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$vendor->id}}</td>
        </tr>
        <tr>
            <td>廠牌</td>
            <td>{{$vendor->vendor}}</td>
        </tr>
        <tr>
            <td>國家</td>
            <td>{{$vendor->country}}</td>
        </tr>
        <tr>
            <td>創立時間</td>
            <td>{{$vendor->founded_time}}</td>
        </tr>
    </table>
@endsection
<!--</body>
</html>
-->
