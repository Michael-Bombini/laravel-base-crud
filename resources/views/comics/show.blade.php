@extends('layouts.app')


@section('main')
<tr>
    <th scope="row">{{$comic["id"]}}</th>
    <td class="w-25">
        <img src="{{$comic["thumb"]}}" class="img-fluid img-thumbnail" alt="Comic">
    </td>
    <td>{{$comic["title"]}}</td>
    <td>{{$comic["series"]}}</td>
    <td>{{$comic["price"]}}</td>
    <td>{{$comic["sale_date"]}}</td>

  </tr>
@endsection