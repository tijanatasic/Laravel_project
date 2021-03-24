<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
    body{
        background-color: #343a40;
        text-align: center;
    }
</style>

</head>

<body>
    <table class='table  table-info'>
        <thead class='thead-dark'>
            <tr>
                <th>Ime i prezime</th>
                <th>Broj telefona</th>
                <th>Vreme rezervacije</th>
                <th>Broj stola </th>
                <th>Broj mesta </th>
                <th>Obrisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rezervacije AS $rez)
            <tr>
                <td>{{$rez->gost->ime_gost}}</td>
                <td>{{$rez->gost->broj_telefona}}</td>
                <td>{{ date('m.d.Y H:i:s',$rez->timestamp_rezervacije)}}</td>
                <td>{{$rez->sto->id}}</td>
                <td>{{$rez->sto->broj_mesta}}</td>
                <td><a href={{"http://127.0.0.1:8000/rezervacije/brisanje?id=".$rez->id}} class="btn btn-danger">Obrisi</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a style="color:white; padding-bottom:15px;" href="http://127.0.0.1:8000/">Povratak na početu stranu</a>
    <script src="../js/app.js"></script>
</body>

</html>
