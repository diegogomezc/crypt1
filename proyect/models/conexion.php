<? 
 class Conexion{

     public function conectar(){

        $usuario=$_POST["usuario"];
        $contrasenia=$_POST["password"];
        
        $pass_cifrado=password_hash($contrasenia,PASSWORD_DEFAULT);

         $link= new PDO("mysql:host=localhost:3306; dbname=crypt","diego","diego.12");
         #var_dump ($link);

         $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$link->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO USUARIOS (USUARIOS, PASSWORD) VALUES (:usuario, :password)";
		
		$resultado=$link->prepare($sql);		
		
		
		$resultado->execute(array(":usuario"=>$usuario, ":password"=>$pass_cifrado));		
		
		
		echo "Registro insertado";
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$link=null;
		
		
	}

?>
         return $link;



     }
 }
  #$a=new Conexion();
  #$a->conectar();
