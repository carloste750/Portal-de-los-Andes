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
	public  function idcliente(){
		return $this->_idcliente;
	}
	public  function nombre(){
		return $this->_nombre;
	}
	public  function apellido(){
		return $this->_apellido;
	}
	public  function dni(){
		return $this->_dni;
	}
	public  function telefono(){
		return $this->_telefono;
	}
	public  function email(){
		return $this->_email;
	}
	public  function usuario(){
		return $this->_usuario;
	}
	public  function contrasenia(){
		return $this->_contrasenia;
	}
	public  function est(){
		return $this->_est;
	}




	public  function sidcliente($valor){
		$this->_idcliente=$valor;
	}
	public  function snombre($valor){
		$this->_nombre=$valor;
	}
	public  function sapellido($valor){
		$this->_apellido=$valor;
	}
	public  function sdni($valor){
		$this->_dni=$valor;
	}
	public  function stelefono($valor){
		$this->_telefono=$valor;
	}
	public  function semail($valor){
		$this->_email=$valor;
	}
	public  function susuario($valor){
		$this->_usuario=$valor;
	}
	public  function scontrasenia($valor){
		$this->_contrasenia=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}
	
}
 ?>