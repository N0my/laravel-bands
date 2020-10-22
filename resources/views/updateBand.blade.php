<nav>
    <a href="{{ url('/show-all') }}">Všetky skupiny</a>
    <a href="{{ url('/insert') }}">Pridať skupinu</a>
</nav>
<form method="post" action="{{ action('BandController@updateAction', ['id' => $band->id]) }}">
    Nazov:<br>
    <input type="text" name="nazov"  value="{{ $band->nazov }}" /><br>
    Počet členov:<br>
    <input type="number" name="pocet_clenov"  value="{{ $band->pocet_clenov }}" /><br>
    Žáner:<br>
    <input type="text" name="zaner"  value="{{ $band->zaner }}" /><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="submit" name="submit" value="Odoslat" /><br>

</form>

