@extends('layouts.app')

@section('main')
    <form action="{{ route('comics.update' , $comic->id) }}" method="post">
        @csrf

        @method('PATCH')

        <div class="mb-3">
            <label for="title" class="form-label">Comic Title</label>
            <input type="text" class="form-control" name="title" id="title"  value="{{$comic["title"]}}" >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Comic Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"  >{{$comic["description"]}}</textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Comic Thumb link</label>
            <input type="text" class="form-control" name="thumb" id="thumb" value="{{$comic["thumb"]}}" >
        </div>


        <div class="mb-3">
            <label for="price" class="form-label">Comic Price </label>
            <input type="text" class="form-control" name="price" id="price" value="{{$comic["price"]}}" >
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Comic Series </label>
            <input type="text" class="form-control" name="series" id="series"  value="{{$comic["series"]}}"">
        </div>


        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{$comic["sale_date"]}}" >
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Comic Type </label>
            <input type="text" class="form-control" name="type" id="type"  value="{{$comic["type"]}}">
        </div>



        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
            
            <a href="{{ route('comics.index') }}" class="btn btn-danger">Home</a>
        </div>
    </form>
@endsection
