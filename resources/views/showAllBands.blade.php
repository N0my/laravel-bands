<nav>
    <a href="{{ url('/show-all') }}">Všetky skupiny</a>
    <a href="{{ url('/insert-form') }}">Pridať skupinu</a>
</nav>
<table>
    @foreach($bands as $band)
        <tr>
            <td>{{ $band->nazov }}</td>
            <td>{{ $band->pocet_clenov }}</td>
            <td>{{ $band->zaner }}</td>
            <td>
                <a href="{{ action('BandController@showAction',['id'=>$band->id]) }}">editovať</a>
            </td>
            <td>
                <a href="{{ action('BandController@deleteAction',['id'=>$band->id]) }}">zmazať</a>
            </td>
        </tr>
    @endforeach
</table>
