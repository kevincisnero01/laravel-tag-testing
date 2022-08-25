<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test File</title>
</head>
<body>
    <h1>Test de Cargar Archivot</h1>
    <form action="profile" method="post" enctype="multipart/form-data">
        <label for="photo">Cargar:</label>
        @csrf
        <input type="file" id="photo" name="photo">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>