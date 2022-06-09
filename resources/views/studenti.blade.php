<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Studenti</title>
</head>
<body>
@include('navbar')
<h1 class="text-center my-5">Lista Studenti</h1>
<ul class="text-center display-4 list-unstyled">
    @foreach ($lista_studenti as $studente)
        <li>{{$studente}}</li>
    @endforeach
</ul>
</body>
</html>