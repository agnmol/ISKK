@extends('layouts.main')

@section('left')
    @include('layouts.leftContent')
@endsection
@section('right')
    <div id="contentRight">
        <div class="book">
            <h2 id="pageTitle">{{$book->pavadinimas}}</h2>
            <p>Išleista: {{$book->data}}</p>
            <p>Puslapiai: {{$book->puslapiai}}</p>
            <h3>Aprašymas</h3>
            <p>{{$book->aprasymas}}</p>
            <h3>Apie autorių:</h3>
            <p>{{$book->author->apie}}</p>
        </div>
        <button onclick="window.location='{{ route('editBook', $book->id) }}'" class="btn">Redaguoti</button>
        <button class="btn" onclick="javascript:if (confirm('Ar tikrai norite pašalinti knygą?'))
                window.location='{{route('deleteBook', $book->id)}}' ">Naikinti</button>
        <p></p>
        @foreach($book->reviews as $r)
            <div class="review">
                <h3>{{$r->vardas}}</h3>
                <p>{{$r->data}}</p>
                <h4>Įvertinimas: {{$r->zvaigzdutes}}</h4>

                @if($r->komentaras != "")
                    <h4>Atsiliepimas: </h4>
                    <p>{{$r->komentaras}}</p>
                @endif
                <button class="btn" style="float: right;  margin: 15px 15px 15px 15px;" onclick="javascript:if (confirm('Ar tikrai norite pašalinti atsiliepimą?'))
                    window.location='{{route('deleteComment', $r->id)}}' ">Naikinti</button>
                <p></p>

            </div>
        @endforeach
        @include('comment')
    </div>

@endsection

