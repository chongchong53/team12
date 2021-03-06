@extends('app')
@section('title', '顯示所有汽車資料')

@section('car_contents')
    <h3>顯示所有車輛資料</h3>
    <tr>&emsp13;
        <a href = "{{route('cars.create')}}">新增車輛資料</a></br>         &emsp13;
            <a href = "{{route('cars.senior')}}">售價五百萬元的汽車</a>&emsp13;

    </tr>
    <table border="1">
        <tr>
            <th>編號</th>
            <th>汽車</th>
            <th>廠牌</th>
            <th>售價(萬)</th>
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
        </tr>
        @foreach($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->car}}</td>
                <td>{{$car->vendor->vendor}}</td>
                <td>{{$car->selling_price}}</td>
                <td><a href="{{ route('cars.show',['car'=>$car->id]) }}">詳細</a> </td>
                <td><a href="{{ route('cars.edit',['car'=>$car->id]) }}">修改</a> </td>
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
@endsection
