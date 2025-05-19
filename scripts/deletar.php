<?php

include "config.php";

$id = $_GET['id'];
$sql = "DELETE FROM tarefas WHERE id = '$id'";
$query = $mysqli->query($sql);

if($query){
    echo "Deletado com sucesso";
}else{
    echo "Houve um erro";
}




?>