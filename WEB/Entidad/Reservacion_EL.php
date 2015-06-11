<?php 
/**
* Code By CJ
*/
class Reservacion_EL 
{
	
	//Atributos
	private $_idreservacion;
	private $_estado;
	private $_fecha;
	private $_hora;
	private $_costototal;
	private $_fechaconsumo;
	private $_horaconsumo;
	private $_descripcion;
	private $_idcliente;
	private $_idsucursal;
	private $_est;

	//Constructor
	function __construct()
	{
		
	}
	//Metodos GET y SET
	public  function idreservacion(){
		return $this->_idreservacion;
	}
	public  function estado(){
		return $this->_estado;
	}
	public  function fecha(){
		return $this->_fecha;
	}
	public  function hora(){
		return $this->_hora;
	}
	public  function costototal(){
		return $this->_costototal;
	}
	public  function fechaconsumo(){
		return $this->_fechaconsumo;
	}
	public  function horaconsumo(){
		return $this->_horaconsumo;
	}
	public  function descripcion(){
		return $this->_descripcion;
	}
	public  function idcliente(){
		return $this->_idcliente;
	}
	public  function idsucursal(){
		return $this->_idsucursal;
	}
	public  function est(){
		return $this->_est;
	}



	public  function sidreservacion($valor){
		$this->_idreservacion=$valor;
	}
	public  function sestado($valor){
		$this->_estado=$valor;
	}
	public  function sfecha($valor){
		$this->_fecha=$valor;
	}
	public  function shora($valor){
		$this->_hora=$valor;
	}
	public  function scostototal($valor){
		$this->_costototal=$valor;
	}
	public  function sfechaconsumo($valor){
		$this->_fechaconsumo=$valor;
	}
	public  function shoraconsumo($valor){
		$this->_horaconsumo=$valor;
	}
	public  function sdescripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function sidcliente($valor){
		$this->_idcliente=$valor;
	}
	public  function sidsucursal($valor){
		$this->_idsucursal=$valor;
	}
	public  function sest($valor){
		$this->_est=$valor;
	}

}
 ?>