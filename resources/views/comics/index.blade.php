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
                            <th scope="row">{{ $comic['id'] }}</th>
                            <td class="w-25">
                                <img src="{{ $comic['thumb'] }}" class="comic-img img-fluid img-thumbnail" alt="Comic">
                            </td>
                            <td>{{ $comic['title'] }}</td>
                            <td>{{ $comic['series'] }}</td>
                            <td>{{ $comic['price'] }}</td>
                            <td>{{ $comic['sale_date'] }}</td>
                            <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success"><i
                                        class="fa-solid fa-arrow-pointer"></i></a></td>
                            <td><a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-pencil"></i></a></td>
                            <td>
                                <button type="submit" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    {{-- MODAL BELOW --}}


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Do you want to delete this element?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   Clicking confirm you will delete this comic PERMANENTLY <br>
                   and you will have to recreate <br> by using the Add New Comic option 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close <i class="fa-solid fa-arrow-up-left"></i> </button>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><strong>CONFIRM</strong></button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- MODAL END --}}
@endsection
