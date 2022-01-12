@extends('app')
@section('title', '新增一筆汽車資料')

@section('car_contents')
    <h3>新增單一汽車的表單</h3>
    <input type="button" onclick="history.back()" value="顯示所有車輛資料"></input>
    <form method="post" action="/cars">
        @csrf
        <table border="1">
            <tr>
                <td>汽車</td>
                <td><input type="text" name="car" required/></td>
            </tr>
            <tr>
                <td>廠牌</td>
                <td>
                    <select name="vid">
                        @foreach($vendors as $vendor)
                            <option value={{$vendor->id}} >{{$vendor->vendor}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <!--<td><input type="text" name="vid"/> </td>-->
            <tr>
                <td>售價</td>
                <td><input type="number" name="selling_price" required default value="200"/></td>
            </tr>
            <tr>
                <td>排氣量</td>
                <td><input type="number" name="displacement" required default value="3000"/></td>
            </tr>
            <tr>
                <td>能耗</td>
                <td><input type="number" name="energy_consumption"/></td>
            </tr>
        </table>
        <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>

    </form>
@endsection
