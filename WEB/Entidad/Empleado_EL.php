<?php 
/**
* Code By CJ
*/
class Empleado_EL 
{
	
	//Atributos
	private $_idempleado;
	private $_nombre;
	private $_apellido;
	private $_dni;
	private $_direccion;
	private $_telefono;
	private $_email;
	private $_usuario;
	private $_contrasenia;
	private $_idtipoempleado;
	private $_est;
	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function getidempleado(){
		return $this->_idempleado;
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
	public  function getdireccion(){
		return $this->_direccion;
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
	public  function getidtipoempleado(){
		return $this->_idtipoempleado;
	}
	public  function getest(){
		return $this->_est;
	}



	public  function setidempleado($valor){
		$this->_idempleado=$valor;
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
	public  function setdireccion($valor){
		$this->_direccion=$valor;
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
	public  function setidtipoempleado($valor){
		$this->_idtipoempleado=$valor;
	}
	public  function setest($valor){
		$this->_est=$valor;
	}
	
}
 ?>