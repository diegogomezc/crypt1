<h1>INGRESAR</h1>

<form method="post">
<input type="text" placeholder="usuario" name="usuarioIngreso" required>

<input type="password" placeholder="contraseña" name="passwordIngreso" required>

<input type="submit" values="enviar" >


</form>
<?php

$ingreso=new MvcController();
$ingreso->ingresarUsuarioController();

if(isset($_GET["action"])){

    if($_GET["action"]== "fallo"){

        echo"fallo al ingresar";
    }
}
?>