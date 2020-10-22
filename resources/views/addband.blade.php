<nav>
    <a href="{{ url('/show-all') }}">Všetky skupiny</a>
    <a href="{{ url('/insert-form') }}">Pridať skupinu</a>
</nav>
<form method="post" action="{{ action('BandController@insertAction') }}">
    Nazov:<br>
    <input type="text" name="nazov" placeholder="Meno" value="" /><br>
    Počet členov:<br>
    <input type="number" name="pocet_clenov" placeholder="5" value="" /><br>
    Žáner:<br>
    <input type="text" name="zaner" placeholder="Meno" value="" /><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="submit" name="submit" value="Odoslat" /><br>

</form>

