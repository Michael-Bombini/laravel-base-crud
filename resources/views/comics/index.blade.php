@extends('layouts.app')



@section('main')
<div class="container">
    <div class="row">
      <div class="col-12">
          <table class="table table-image">
            <thead>
                <tr>
                    <td class="">ID</td>
                    <td class="">Image</td>
                    <td class="">Title</td>
                    <td class="">Series</td>
                    <td class="">Price</td>
                    <td class="">Release</td>
                    <td class="">More</td>

                </tr>
            </thead>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic["id"]}}</th>
                    <td class="w-25">
                        <img src="{{$comic["thumb"]}}" class="img-fluid img-thumbnail" alt="Comic">
                    </td>
                    <td>{{$comic["title"]}}</td>
                    <td>{{$comic["series"]}}</td>
                    <td>{{$comic["price"]}}</td>
                    <td>{{$comic["sale_date"]}}</td>
                    <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success"><i class="fa-solid fa-arrow-pointer"></i></a></td>
                  </tr>
                @endforeach
            </tbody>
          </table>   
      </div>
    </div>
  </div>



        
@endsection