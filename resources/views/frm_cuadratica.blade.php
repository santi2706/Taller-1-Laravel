<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRM CUADRATICA</title>
</head>
<body>
<h1>FRM FORMULA CUADRATICA</h1>

<form action="{{route('cuadratica.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Variable A:
    <br>
    <input type="number" name="a">
</label>
<br>
<label>
    Variable B:
    <br>
    <input type="number" name="b">
</label>
<br>
<label>
    Variable C:
    <br>
    <input type="number" name="c">
</label>
<br>
<br>

<button type="submit">Calcular:</button>
</form>
</body>
</html>
