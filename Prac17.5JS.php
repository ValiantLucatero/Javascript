<?php
$datos=array('Andres','Adriana','Diego','Bruce','Lisandro');
$chec=$_REQUEST['r'];
$a=in_array($chec,$datos);
if($a!=0)
	echo 'Ya existe ese nombre';
?>
