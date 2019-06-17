<h1>REGISTRO DE USUARIO</h1>

<form method="post" action="">

     <input type="text" placeholder="usuario" name="usuarioRegistro" required>

     <input type="password" placeholder="contraseña" name="passwordRegistro" required>

     <input type="email" placeholder="email" name="emailRegistro" required>

     <input type="submit" value="Enviar">


</form>

<?php
$registro =new MvcController();
$registro->registroUsuarioController();
     if (isset($_GET["action"])) {
          
          if ($_GET["action"]=="fallo") {
               echo"fallo al ingresar";
          }
     }
?>
