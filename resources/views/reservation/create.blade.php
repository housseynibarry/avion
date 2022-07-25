<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route ('Reservation.store')}}" method="post">
    @csrf
        <label for="">nom</label>
        <input type="text" name="nom">
        <label for="">prenom</label>
        <input type="text" name="prenom">
        <label for="">num_piece</label>
        <input type="number" name="num_piece">
        <label for="">sexe</label>
        <input type="text" name="sexe">
        <label for="">classe</label>
        <input type="text" name="classe">
        <input type="submit" value="ni reserve">

    </form>

</body>
</html>
