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
        background:url(https://www.taquerialascumbres.com/static/media/background2.3fec4658.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #stolovi{
        margin-top: 30px;
    }
    input{
        margin-bottom: 50px;
    }
    .btn{
        border-radius: 50%;
        height: 80px;
        width: 80px;
    }
    .col{
        color:white;
        padding-left:120px;
        font-weight: bold;
        font-style: italic;
        font-size: 18px;
    }
    input{
        margin-left: 8px;
    }
    .rezervacije{
        background-color: black;
        text-align: center;
        padding-top:10px;
        padding-bottom:10px;
    }
    a{
        color:white;
    }
    a:hover{
        color:white;
    }
    #broj{
        margin-left:30px;
    }
</style>

</head>

<body>

    <div class="rezervacije" >
        <a href="http://127.0.0.1:8000/rezervacije/get">Vidi sve rezervacije</a>
    </div>

    <div id="stolovi"></div>
    <script src="../js/app.js"></script>
</body>

</html>
