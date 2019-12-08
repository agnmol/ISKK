<div id="contentLeft">
    <h2>Kategorijos</h2>
    <ul>
        <li><a href="{{url('books')}}" class="{{Request::is('books') || Request::is('/')  ? 'active' : ''}}" >Visos knygos</a></li>
        @foreach(session('categories') as $group)
            <li><a href="{{url('books/group/'.$group->id)}}" class="{{Request::is('books/group/'.$group->id) ? 'active' : ''}}" >{{$group->pavadinimas}}</a></li>
        @endforeach
        <li><a href="{{route('addBook')}}" class="{{Request::is('books/add') ? 'active' : ''}}" >Pridėti knygą</a></li>
    </ul>
</div>
