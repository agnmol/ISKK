@extends('layouts.main')

@section('left')
    @include('layouts.leftContent')
@endsection

@section('right')
    <div id="contentRight">
        <h2 id="pageTitle">Kategorijos</h2>
        <table id="table">
            <tr>
                <th>Pavadinimas</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($groups as $group)
                <tr>
                    <td>{{$group->pavadinimas}}</td>
                    <td><button onclick="window.location='{{ route('editGroup', $group->id) }}'" class="btn">Redaguoti</button></td>
                    <td><button class="btn" onclick="javascript:if (confirm('Ar tikrai norite pašalinti grupę?'))
                            window.location='{{route('deleteGroup', $group->id)}}' ">Naikinti</button></td>
                </tr>
            @endforeach
        </table>
        <p></p>
        <button onclick="window.location='{{ route('addGroup') }}'" class="btn">Pridėti</button>
    </div>
@endsection

