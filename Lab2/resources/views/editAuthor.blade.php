@extends('layouts.main')

@section('left')
    @include('layouts.leftContent')
@endsection

@section('right')

    <div id="contentRight">
        <h2 id="pageTitle">Redaguoti autorių</h2>
        <form method="post" action="{{route('confirmEditAuthor', $author->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="leftcol">
                    <label for="person">Vardas Pavardė</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="vp" value="{{$author->vardas_pavarde}}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="tab">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea type="text" name="apie" rows="10" cols="50">{{$author->apie}}</textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Redaguoti">
            </div>
        </form>
    </div>
@endsection

