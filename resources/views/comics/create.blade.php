@extends('layouts.app')

@section('main')
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Comic Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Comic Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Comic Thumb link</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Thumb">
        </div>


        <div class="mb-3">
            <label for="price" class="form-label">Comic Price </label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Comic Series </label>
            <input type="text" class="form-control" name="series" id="series" placeholder="Series">
        </div>


        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Sale Date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Comic Type </label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Comic type">
        </div>



        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">Add</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
            
            <a href="{{ route('comics.index') }}" class="btn btn-danger">Home</a>
        </div>
    </form>
@endsection
