<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一廠牌的編輯表單</title>
</head>
<body>
<h1>顯示單一廠牌的表單</h1>
<form method="post" action="/vendors/{{$vendor->id}}">
    @csrf
    @method("put")
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$vendor->id}}</td>
        </tr>
        <tr>
            <td>廠牌</td>
            <td><input type="text" name="vendor" value="{{$vendor->vendor}}" /> </td>
        </tr>
        <tr>
            <td>國家</td>
            <td><input type="text" name="country" value="{{$vendor->country}}" /> </td>
        </tr>
        <tr>
            <td>創立時間</td>
            <td><input type="text" name="founded_time" value="{{$vendor->founded_time}}" /> </td>
        </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>

</form>
</body>
</html>
