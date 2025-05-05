<?php
$servidor = 'localhost'; 
$usuario = 'root';
$senha = '';
$banco = 'to_do_fan';

$mysqli = new mysqli($servidor,$usuario,$senha,$banco,3307);
if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());

?>