@extends('app')
@section('title', '新增一筆廠牌資料')

@section('car_contents')
    <h3>新增單一廠牌的表單</h3>
    <input type ="button" onclick="history.back()" value="顯示所有廠牌資料"></input>

    <form method="post" action="/vendors">
        @csrf
        <table border="1">
            <tr>
                <td>廠牌</td>
                <td><input type="text" name="vendor" required/> </td>
            </tr>
            <tr>
                <td>國家</td>
                <td>
                    <select name="country">
                        <option value="義大利">義大利</option>
                        <option value="英國" selected>英國</option>
                        <option value="德國">德國</option>
                        <option value="美國">美國</option>
                        <option value="日本">日本</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>創立時間</td>
                <td><input type="number" name="founded_time" required default value="1900"/> </td>
            </tr>
        </table>
        <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>

    </form>
@endsection
