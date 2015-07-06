<?php 
/**
* Code By CJ
*/
class Cliente_EL 
{
	
	//Atributos
	private $_idcliente;
	private $_nombre;
	private $_apellido;
	private $_dni;
	private $_telefono;
	private $_email;
	private $_usuario;
	private $_contrasenia;
	private $_est;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function getidcliente(){
		return $this->_idcliente;
	}
	public  function getnombre(){
		return $this->_nombre;
	}
	public  function getapellido(){
		return $this->_apellido;
	}
	public  function getdni(){
		return $this->_dni;
	}
	public  function gettelefono(){
		return $this->_telefono;
	}
	public  function getemail(){
		return $this->_email;
	}
	public  function getusuario(){
		return $this->_usuario;
	}
	public  function getcontrasenia(){
		return $this->_contrasenia;
	}
	public  function getest(){
		return $this->_est;
	}

	public  function setidcliente($valor){
		$this->_idcliente=$valor;
	}
	public  function setnombre($valor){
		$this->_nombre=$valor;
	}
	public  function setapellido($valor){
		$this->_apellido=$valor;
	}
	public  function setdni($valor){
		$this->_dni=$valor;
	}
	public  function settelefono($valor){
		$this->_telefono=$valor;
	}
	public  function setemail($valor){
		$this->_email=$valor;
	}
	public  function setusuario($valor){
		$this->_usuario=$valor;
	}
	public  function setcontrasenia($valor){
		$this->_contrasenia=$valor;
	}
	public  function setest($valor){
		$this->_est=$valor;
	}
	
}
 ?>