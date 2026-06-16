<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRM AMIGOS</title>
</head>
<body>
<h1>FRM NUMEROS AMIGOS</h1>

<form action="{{route('amigos.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Numero 1:
    <br>
    <input type="number" name="numero1">
</label>
<br>
<label>
    Numero 2:
    <br>
    <input type="number" name="numero2">
</label>
<br>
<br>

<button type="submit">Verificar:</button>
</form>
</body>
</html>
