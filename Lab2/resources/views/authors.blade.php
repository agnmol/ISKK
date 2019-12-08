@extends('layouts.main')

@section('left')
    @include('layouts.leftContent')
@endsection

@section('right')
    <div id="contentRight">
        <h2 id="pageTitle">Autoriai</h2>
        <table id="table">
            <tr>
                <th>Vardas, pavardė</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($authors as $author)
                <tr>
                    <td>{{$author->vardas_pavarde}}</td>
                    <td><button onclick="window.location='{{ route('editAuthor', $author->id) }}'" class="btn">Redaguoti</button></td>
                    <td><button class="btn" onclick="javascript:if (confirm('Ar tikrai norite pašalinti knygą?'))
                            window.location='{{route('deleteAuthor', $author->id)}}' ">Naikinti</button></td>
                </tr>
            @endforeach
        </table>
        <p></p>
        <button onclick="window.location='{{ route('addAuthor') }}'" class="btn">Pridėti</button>
    </div>
@endsection

