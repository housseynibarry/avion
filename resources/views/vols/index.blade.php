<table>
    <thead>
        <th>code du vol</th>
        <th>Date depart</th>
        <th>Heure depart</th>
        <th>destination</th>
        <th>Nombre place A</th>
        <th>Nombre place B</th>
        <th>Prix classe A</th>
        <th>Prix classe B</th>
        <th col='3'>action</th>
    </thead>
    <tbody>
        @foreach($avion as $plane)


        <tr>
            <td>{{$plane->code_vol}}</td>
            <td>{{$plane->date_depart }}</td>
            <td>{{$plane->heure_depart }}</td>
            <td>{{$plane->nbre_placeA}}</td>
            <td>{{$plane->nbre_placeB}}</td>
            <td>{{$plane->prix_classeA}}</td>
            <td>{{$plane->prix_classeA}}</td>
            <td></td>
            <td> <a href="{{route('vols.edit',$plane)}}">Modifier</a></td>
            <td>
                <form action="{{route('vols.destroy',$plane)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">adjochi</button>
                </form>

            </td>
            <td><a href="{{route('vols.show',$plane->id)}}">Details</a></td>
        <a href=""></a>
        </tr>
        @endforeach
    </tbody>
</table>
