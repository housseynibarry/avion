<form action="{{route ('vols.update', $donnef->id)}}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="code_vol" value="{{$donnef->code_vol}}">
    <input type="date" name="date_depart" value="{{$donnef->date_depart}}">
    <input type="time" name="heure_depart" value="{{$donnef->heure_depart}}">>
    <input type="text" name="destination" value="{{$donnef->destination}}">
    <input type="number" name="nbre_placeA" value="{{$donnef->nbre_placeA}}">
    <input type="number" name="nbre_placeB" value="{{$donnef->nbre_placeB}}">
    <input type="number" name="prix_classeA" value="{{$donnef->prix_classeA}}">
    <input type="number" name="prix_classeB" value="{{$donnef->nbre_classeB}}">
    <input type="submit" value="ni enregistre" >
</form>
