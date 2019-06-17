<?
class MvcController{
    #llamada ala plantilla
    public function pagina(){

        include "views/template.php";
    }

    public function enlacesPaginasController(){
        if (isset($_GET['action'])){
            $enlaceController = $_GET['action'];
        }
        else{
            $enlaceController="index";
        }

        $respuesta = Paginas::enlacesPaginasModel($enlaceController);

        include $respuesta;
    }

    #registrar usuarios

    public function registroUsuarioController(){
         if(isset($_POST["usuarioRegistro"])){
     $datosController=array("usuario"=>$_POST["usuarioRegistro"],
                            "password"=> $_POST["passwordRegistro"],
                            "email" => $_POST["emailRegistro"]);
        #donde  me carga todoslos registros 
                $respuesta=Datos::registroUsuarioModel($datosController,"usuarios");

                if($respuesta=="success"){
                    header("location:index.php?action=0k");
                }
                else{
                    header("location:index.php");
                }           
        }
    }
   #--------------------------------
   #ingreso login

   public function ingresarUsuarioController(){
       if (isset($_POST["usuarioIngreso"])){
           $datosController=array("usuario"=>$_POST["usuarioIngreso"],
            "password"=>$_POST["passwordIngreso"]);

            $respuesta = Datos::ingresoUsuarioModel($datosController,"usuarios");
            echo $respuesta;
            if($respuesta["usuario"]==$_POST["usuarioIngreso"] &&
              $respuesta["password"]==$_POST["passwordIngreso"]){

                #validacion sesion
                #-------------------------------------
                session_start();
                $_SESSION["validar"]=true;

                header("location:index.php?action=usuario");

            }
            else{
                  header("location:index.php?action=fallo");
            }

            #var_dump($respuesta["usuario"]);
        }
    }

   #------------------------------
   #VISTA DE USUARIO
   public function vistaUsuarioController(){
       $respuesta=Datos::vistaUsuariosModel("usuarios");
       foreach($respuesta as $fila=>$item){
            echo '<tr>
                    <td>'.$item["usuario"].'</td>
                    <td>'.$item["password"].'</td>
                    <td>'.$item["email"].'</td>
                    <td><button>editar</button></td>
                    <td><button>borrar</button></td>
                </tr>'; 
        }
    }
}
#salas,tipos salas ,clases,monitores,monitores por clases
?>
