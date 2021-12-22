<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一汽車的表單</title>
</head>
<body>
<h1>顯示單一汽車的表單</h1>
<input type ="button" onclick="history.back()" value="顯示所有車輛資料"></input>
<form method="post" action="/cars/{{$car->id}}">
    @csrf
    @method("put")
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$car->id}}</td>
        </tr>
        <tr>
            <td>汽車</td>
            <td><input type="text" name="car" value="{{$car->car}}" required/> </td>
        </tr>
        <tr>
            <td>廠牌</td>
            <td><input type="text" name="vid" value="{{$car->vid}}"  required/> </td>
        </tr>
        <tr>
            <td>售價</td>
            <td><input type="number" name="selling_price" value="{{$car->selling_price}}" required/> </td>
        </tr>
        <tr>
            <td>排氣量</td>
            <td><input type="number" name="displacement" value="{{$car->displacement}}" /> </td>
        </tr>
        <tr>
            <td>能耗</td>
            <td><input type="number" name="energy_consumption" value="{{$car->energy_consumption}}" /> </td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>

</form>
</body>
</html>
