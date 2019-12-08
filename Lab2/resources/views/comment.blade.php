    <div id="contentRight">
        <h2 id="pageTitle">Palikti atsiliepimą</h2>
        <form method="post" action="{{route('insertComment', $book->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="leftcol">
                    <label for="person">Vardas</label>
                </div>
                <div class="rightcol">
                    <input type="text" name="vardas" value="" >
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="person">įvertinimas</label>
                </div>
                <div class="rightcol">
                    <select class="field" name="points">
                        <option value=""></option>
                        @for($i = 0; $i <= 5; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="leftcol">
                    <label for="tab">Atsiliepimas</label>
                </div>
                <div class="rightcol">
                    <textarea type="text" name="atsiliepimas" rows="10" cols="50"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Pridėti">
            </div>
        </form>
    </div>

