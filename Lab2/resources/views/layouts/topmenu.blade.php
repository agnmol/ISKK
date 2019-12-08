<div id="topMenu">
    <ul>
        <li><a href="{{url('about')}}" class="{{Request::is('about') ? 'active' : ''}}" title="Apie mus">Apie mus</a></li>
        <li><a href="{{url('books')}}" class="{{Request::is('books*') || Request::is('/') ? 'active' : ''}}" title="Knygos">Knygos</a></li>
        <li><a href="{{url('authors')}}" class="{{Request::is('authors*') ? 'active' : ''}}" title="Autoriai">Autoriai</a></li>
        <li><a href="{{url('groups')}}" class="{{Request::is('groups*') ? 'active' : ''}}" title="Kategorijos">Kategorijos</a></li>
        <li><a href="{{url('contacts')}}" class="{{Request::is('contacts') ? 'active' : ''}}" title="Kontaktai">Kontaktai</a></li>
    </ul>
</div>
