<?php

class Auto
{
	private $_patente;
	private $_foto;
	private $_fechaIngreso;
	private $_fechaSalida;
	
	function __construct($patente,$foto)
	{
		$this->_patente=$patente;
		$this->_fechaIngreso=date("Y-m-d h:i:s");
		$this->_foto=$foto;
		$this->_fechaSalida="";
	}
	public function getPatente()
	{
		return $this->_patente;
	} 
	public function getFoto()
	{
		return $this->_foto;
	} 
	public function getFechaDeIngreso()
	{
		return $this->_fechaIngreso;
	} 
	public function getFechaDeSalida()
	{
		return $this->_fechaSalida;
	} 

	public function ToString()
	{
		return $this->_patente.'-'.$this->_foto.'-'.$this->_fechaIngreso.'-'.$this->_fechaSalida."\r\n";
	}
}

?>

