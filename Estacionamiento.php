<?php
require_once "Auto.php";

class Estacionamiento

private $_nombre;
private $_autos[];

function __construct($nombre)
	{
		this->_nombre = $nombre;
	}

	public function getNombre()
	{
		return $this->_nombre;
	} 

		public function getAutos()
	{
		return $this->_autos[];
	} 

		public function ToString()
	{
		return $this->_nombre."-".$this->_autos[];
	}

	public function AgregarAuto($auto)
	{
		array_push($_autos,$auto);
		$ar = fopen("./autos.txt", "a");
		$cant = fwrite($ar, $auto->ToString());
	}

	public function MostrarString()
	{
	$longitud = count($_autos);

	  for($i=0; $i<$longitud; $i++)
      {
	  echo $_autos[$i];
	  echo "<br>";
      }
	}

	public function MostrarTabla()
	{
		echo "<table><tr><td>patente</td>";
	}


?>