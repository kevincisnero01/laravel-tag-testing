<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h4>Crear Etiqueta</h4>
    <form action="tags" method="POST">
        @csrf
        <input type="text" name="name" id="name">
        <input type="submit" value="Agregar">
    </form>
    <h4>Listado de Etiquetas</h4>
    <table border=1>
        @forelse($tags as $tag)
        <tr>
            <td>{{ $tag->name }}</td>
            <td>
                <form action="tags/{{$tag->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
        @empty 
            <tr>
                <td>No hay etiquetass</p></td>
            </tr>
        @endforelse
    </table>
</body>
</html>