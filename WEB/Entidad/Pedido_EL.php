<?php 
/**
* Code By CJ
*/
class Pedido_EL 
{
	
	//Atributos
	private $_idpedido;
	private $_estado;
	private $_fecha;
	private $_hora;
	private $_costototal;
	private $_fechaconsumo;
	private $_horaconsumo;
	private $_descripcion;
	private $_idcliente;
	private $_idsucursal;

	//Constructor
	function __construct()
	{
		
	}
	
	//Metodos GET y SET
	public  function idpedido(){
		return $this->_idpedido;
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




	public  function idpedido($valor){
		$this->_idpedido=$valor;
	}
	public  function estado($valor){
		$this->_estado=$valor;
	}
	public  function fecha($valor){
		$this->_fecha=$valor;
	}
	public  function hora($valor){
		$this->_hora=$valor;
	}
	public  function costototal($valor){
		$this->_costototal=$valor;
	}
	public  function fechaconsumo($valor){
		$this->_fechaconsumo=$valor;
	}
	public  function horaconsumo($valor){
		$this->_horaconsumo=$valor;
	}
	public  function descripcion($valor){
		$this->_descripcion=$valor;
	}
	public  function idcliente($valor){
		$this->_idcliente=$valor;
	}
	public  function idsucursal($valor){
		$this->_idsucursal=$valor;
	}

}
 ?>