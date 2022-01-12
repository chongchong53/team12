@extends('app')
@section('title', '顯示所有廠牌資料')

@section('car_contents')
    <h3>顯示所有廠牌資料</h3>
    <a href="{{ route('vendors.create') }}">新增所有廠牌資料</a></br>
    <a href="{{ route('vendors.italy') }}">義大利</a>
    <a href="{{ route('vendors.uk') }}">英國</a>
    <a href="{{ route('vendors.germany') }}">德國</a>
    <a href="{{ route('vendors.usa') }}">美國</a>
    <a href="{{ route('vendors.japan') }}">日本</a>

    <table border="1">
        <tr>
            <th>編號</th>
            <th>廠牌</th>
            <th>國家</th>
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
        </tr>
        @foreach($vendors as $vendor)
            <tr>
                <td>{{$vendor->id}}</td>
                <td>{{$vendor->vendor}}</td>
                <td>{{$vendor->country}}</td>
                <td>
                    <a href = "vendors/{{$vendor -> id}}">
                        詳細
                    </a>
                </td>
                <td>
                    <a href = "vendors/{{$vendor -> id}}/edit">
                        修改
                    </a>
                </td>
                <td>
                    <form method ="post" action="vendors/{{$vendor->id}}">
                        @csrf
                        @method("delete")
                        <input type="submit" value="刪除"/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
