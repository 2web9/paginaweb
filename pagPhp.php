<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once "cabecera.inc"?>
    <style>
        /*footer{
            margin-top:100px;
        }*/
        .card-img-top{
            width:100px;
            height:100px;
        }
    </style>
</head>
<body>
    <div class="content">
        <?php require_once "barraNav.inc"?>
            <div class="jumbotron">
            <img src="imagenes/PHP.png" class="card-img-top">
                <h1 class="display-4">PHP</h1>
                <p class="lead">PHP, acrónimo recursivo en inglés de PHP: Hypertext Preprocessor 
                (preprocesador de hipertexto), es un lenguaje de programación de propósito
                 general de código del lado del servidor originalmente diseñado para el 
                 desarrollo web de contenido dinámico. Fue uno de los primeros lenguajes
                  de programación del lado del servidor que se podían incorporar 
                  directamente en un documento HTML en lugar de llamar a un archivo externo que procese los datos.
                 El código es interpretado por un servidor web con un módulo de procesador de PHP que genera el HTML resultante. </p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="https://www.youtube.com/watch?v=ZdP0KM49IVk" role="button">Aprender Más</a>
</div>
        <?php require_once "footer.inc" ?>
    </div>
</body>
</html>