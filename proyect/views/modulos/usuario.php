<?php
session_start();
if(!$_SESSION["validar"]){
      header("location:index.php?action=ingresar");
      exit();
}
?>
<h1>USUARIOS</h1>


<table border="1">
      <thead>
            <tr>
               <th>Usuarios</th>
               <th>Contraseña</th>
               <th>Email</th>
               <th></th>
               <th></th>
            
            </tr>
      
      </thead>
      <tbody>
      <?php

      $vista=new MvcController();
      $vista->vistaUsuarioController();
      ?>
      </tbody>

</table>

