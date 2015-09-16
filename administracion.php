<?php
	require_once"Auto.php";
	var_dump($_POST);
	$obj=new Auto($_POST["Pat"],$_POST["foto"]);
	echo $obj->ToString();


	$ar = fopen("./autos.txt", "a");
	$cant = fwrite($ar, $obj->ToString());


?>