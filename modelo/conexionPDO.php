 <?php


require 'configuracion.php';

class Conexion
{
	public $conexion;
      

	public function __construct()
	{
	
        try{
        $this->conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASSWORD);
        $this->conexion -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conexion -> exec ("SET CHARACTER SET utf8");
        return $this->conexion;
        }catch(Exception $e){
           echo "error " . $e->stream_get_line();  
        }
    
	}
}

?>   