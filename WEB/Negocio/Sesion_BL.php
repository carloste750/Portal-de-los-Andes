<?php 

$OSesion_BL=new Sesion_BL();

if(isset($_GET["accion"])){
	if($_GET["accion"]=="logout"){
		$OSesion_BL->logout();
		header ("Location: ../Presentacion/Index.php");
	}
}
class Sesion_BL 
{
	
	function __construct()
	{
		
	}
	//Inicializar Clase
	public function insesion(){
		session_start();
	}
	public function closesesion(){
		session_start();
		$_SESSION = array();
		session_destroy();
	}

	public function setsesion($name,$value){
		$_SESSION[$name]=$value;
	}
	public function getsesion($name){
		$this->insesion();
		return $_SESSION[$name];
	}
	

	/*Destruir los datos de sesion*/
	public function logout(){
		$this->closesesion();
	}
}

?>