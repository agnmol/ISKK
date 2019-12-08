@extends('layouts.main')

@section('left')
    @include('layouts.leftContent')
@endsection

@section('right')

    <div id="contentRight">
        <h2 id="pageTitle">Pridėti knygą</h2>
        <form method="post" action="{{route('insertBook')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="leftcol">
                    <label for="person">Knygos pavadinimas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="pavadinimas" value="" >
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="person">Autorius</label>
                </div>
                <div class="rightcol">
                    <select class="field" name="autorius">
                        <option value=""></option>
                        @foreach($authors as $a)
                            <option value="{{$a->id}}">{{$a->vardas_pavarde}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="person">Kategorija</label>
                </div>
                <div class="rightcol">
                    <select class="field" name="grupe">
                        <option value=""></option>
                        @foreach($groups as $g)
                            <option value="{{$g->id}}">{{$g->pavadinimas}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="address">Metai</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="data" value="">
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="tab">Puslapiai</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="psl" value="" >
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="tab">Aprašymas</label>
                </div>
                <div class="rightcol">
                    <textarea type="text" name="apie" rows="10" cols="50"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Pridėti">
            </div>
        </form>
    </div>
@endsection

