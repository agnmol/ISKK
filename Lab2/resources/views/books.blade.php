@extends('layouts.main')

@section('left')
@include('layouts.leftContent')
    @endsection

@section('right')

    <div id="contentRight">


        <h2 id="pageTitle">{{session('category') == "" ? "visos knygos" : session('category')}}</h2>

        @foreach($books as $book)
            <div class="bookItem">
                <p class="title"><a href="{{url('books/category/'.$book->grupe.'/book/'.$book->books->id)}}">{{$book->books->pavadinimas}}</a></p>
                <p class="description" >{{ Str::limit($book->books->aprasymas, $limit = 150, $end = '...') }}</p>
            </div>
        @endforeach
        <div class="pagination">
            {{ $books->links('vendor.pagination.semantic-ui') }}
        </div>
    </div>


@endsection

