<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Obra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            margin-bottom: 10px;
        }
        .details {
            margin-top: 30px;
        }
        .details p {
            margin-bottom: 5px;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles de la Obra</h1>
        <div class="details">
            <p><strong>Título:</strong> {{ $obra->titulo }}</p>
            <p><strong>Autor:</strong> {{ $obra->autor }}</p>
            <p><strong>Descripción:</strong> {{ $obra->descripcion }}</p>
            <!-- Agrega más detalles de la obra según tus necesidades -->
            <p><strong>Formato:</strong> {{ $obra->subcategoria->categoria->formato }}</p>
            <p><strong>Tipo:</strong> {{ $obra->subcategoria->tipo }}</p>
            <p><strong>Publicado por:</strong> {{ $obra->usuario->nombre }} {{ $obra->usuario->apellidos }}</p>
            <p><strong>Fecha de Publicación:</strong> {{ $obra->created_at->format('d/m/Y') }}</p>
            <!-- Agrega más detalles si es necesario -->
        </div>
    </div>
</body>
</html>
