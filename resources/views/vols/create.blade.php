<form action="{{route ('vols.store')}}" method="post">
    @csrf
    <input type="text" name="code_vol">
    <input type="date" name="date_depart">
    <input type="time" name="heure_depart">
    <input type="text" name="destination">
    <input type="number" name="nbre_placeA">
    <input type="number" name="nbre_placeB">
    <input type="number" name="prix_classeA">
    <input type="number" name="prix_classeB">
    <input type="submit" value="ni enregistre">
</form>
