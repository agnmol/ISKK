@extends('layouts.main')

@section('left')
    @include('layouts.leftContent')
@endsection

@section('right')

    <div id="contentRight">
        <h2 id="pageTitle">Redaguoti kategoriją</h2>
        <form method="post" action="{{route('confirmEditGroup', $group->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="leftcol">
                    <label for="person">Pavadinimas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="pav" value="{{$group->pavadinimas}}">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Redaguoti">
            </div>
        </form>
    </div>
@endsection

