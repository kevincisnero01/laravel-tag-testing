<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 py-10">
<div class="max-w-lg bg-white mx-auto p-5 rounded shadow">

    
    <h4 class="text-l text-center mb-4 font-bold">Crear Etiqueta</h4>
    <form action="tags" method="POST" class="flex mb-4">
        @csrf
        <input type="text" name="name" id="name" class="rounded-l bg-gray-200 p-4 w-full outline-none" placeholder="Nueva Etiqueta...">
        <input type="submit" value="Agregar" class="rounded-r px-8 bg-blue-500 text-white outline-none">
    </form>
    <h4 class="text-l text-center mb-4 font-bold">Listado de Etiquetas</h4>
    <table border=1>
        @forelse($tags as $tag)
        <tr>
            <td class="border px-4 py-2">{{ $tag->name }}</td>
            <td class="px-4 py-2">
                <form action="tags/{{$tag->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="px-3 rounded bg-red-500 text-white" value="Eliminar">
                </form>
            </td>
        </tr>
        @empty 
            <tr>
                <td>No hay etiquetass</p></td>
            </tr>
        @endforelse
    </table>
</div><!--container-->
</body>
</html>