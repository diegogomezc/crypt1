<?
 class paginas{

     public function enlacesPaginasModel($enlaces){

        if($enlaces == "ingresar"||
           $enlaces == "usuario"||
           $enlaces == "editar"||
           $enlaces == "salir"){

            $module = "views/modulos/".$enlaces.".php";
           }
           else if ($enlaces == "index"){

            $module = "views/modulos/registro.php";

           }
           else if ($enlaces === "ok"){
               $module = "views/modulos/registro.php";
           }
           else if ($enlaces == "fallo"){
               $module = "views/modulos/ingresar.php";
           }

           else if ($enlaces == "cambio"){
               $module = "views/modulos/usuario.php";

           }
           else{
               $module="views/modulos/registro.php";
           }
           return $module;
     }
 }
?>