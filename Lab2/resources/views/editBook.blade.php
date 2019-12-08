@extends('layouts.main')

@section('left')
    @include('layouts.leftContent')
@endsection

@section('right')

    <div id="contentRight">
        <h2 id="pageTitle">Redaguoti knygos duomenis</h2>
        <form method="post" action="{{route('confirmEditBook', $book->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="leftcol">
                    <label for="person">Knygos pavadinimas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="" value="{{$book->pavadinimas}}" readonly>
                    <input type="text" name="pavadinimas" value="" hidden>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="person">Autorius</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="" value="{{$book->author->vardas_pavarde}}" readonly>
                    <input type="text" name="autorius" value="" hidden>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="address">Metai</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="" value="{{date('Y',strtotime($book->data))}}" readonly>
                    <input type="text" name="data" value="{{$book->data}}" hidden>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="tab">Puslapiai</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="psl" value="{{$book->puslapiai}}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="tab">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea type="text" name="apie" rows="10" cols="50">{{$book->aprasymas}}</textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Redaguoti">
            </div>
        </form>
    </div>
@endsection

