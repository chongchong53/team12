<html>
<head>
    <meta charset="UTF-8"/>
    <title>新增單一汽車的表單</title>
</head>
<body>
<h1>新增單一汽車的表單</h1>
<input type ="button" onclick="history.back()" value="顯示所有車輛資料"></input>
<form method="post" action="/cars">
    @csrf
    <table border="1">
        <tr>
            <td>汽車</td>
            <td><input type="text" name="car" required/> </td>
        </tr>
        <tr>
            <td>廠牌</td>
            <td><input type="text" name="vid"/> </td>
        </tr>
        <tr>
            <td>售價</td>
            <td><input type="number" name="selling_price" required default value="200"/> </td>
        </tr>
        <tr>
            <td>排氣量</td>
            <td><input type="number" name="displacement" required default value="3000"/> </td>
        </tr>
        <tr>
            <td>能耗</td>
            <td><input type="number" name="energy_consumption"/> </td>
        </tr>
    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>

</form>
</body>
</html>
