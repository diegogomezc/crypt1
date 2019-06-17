<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>template</title>
    <link rel="stylesheet" href="views/css/estilos.css">
</head>
<body>
    <?php include "modulos/navegacion.php";?>
    <section>
            <?
              $mvc = new MvcController ();
              $mvc -> enlacesPaginasController();
            ?>
    </section>
</body>
</html>