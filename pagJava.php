<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once "cabecera.inc"?>
    <style>
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
            <img src="imagenes/java.png" class="card-img-top">
                <h1 class="display-4">Java</h1>
                <p class="lead">Java es un lenguaje de programación de propósito general,
                                concurrente, orientado a objetos, que fue
                                diseñado específicamente para tener tan
                                pocas dependencias de implementación como 
                                fuera posible. Su intención es permitir que 
                                los desarrolladores de aplicaciones escriban el 
                                programa una vez y lo ejecuten en cualquier 
                                dispositivo (conocido en inglés como WORA, 
                                o "write once, run anywhere"), lo que quiere decir que el código que es ejecutado en una
                                 plataforma no tiene que ser recompilado para correr en otra. Java es, a partir de 2012, uno de los lenguajes de programación 
                                más populares en uso, particularmente para aplicaciones de cliente-servidor de web, 
                                con unos diez millones de usuarios reportados</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="https://www.youtube.com/watch?v=2ZXiuh0rg3M" role="button">Aprender Más</a>
</div>
        <?php require_once "footer.inc" ?>
    </div>
</body>
</html>