<?php 
/**
* Code By CJ
*/
class Cliente_EL 
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
	private $_idsucursal;
	private $_idtipoempleado;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idempleado(){
		return $this->_idempleado;
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
	public  function direccion(){
		return $this->_direccion;
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
	public  function idsucursal(){
		return $this->_idsucursal;
	}
	public  function idtipoempleado(){
		return $this->_idtipoempleado;
	}




	public  function idempleado($valor){
		$this->_idempleado=$valor;
	}
	public  function nombre($valor){
		$this->_nombre=$valor;
	}
	public  function apellido($valor){
		$this->_apellido=$valor;
	}
	public  function dni($valor){
		$this->_dni=$valor;
	}
	public  function direccion($valor){
		$this->_direccion=$valor;
	}
	public  function telefono($valor){
		$this->_telefono=$valor;
	}
	public  function email($valor){
		$this->_email=$valor;
	}
	public  function usuario($valor){
		$this->_usuario=$valor;
	}
	public  function contrasenia($valor){
		$this->_contrasenia=$valor;
	}
	public  function idsucursal($valor){
		$this->_idsucursal=$valor;
	}
	public  function idtipoempleado($valor){
		$this->_idtipoempleado=$valor;
	}
	
}
 ?>