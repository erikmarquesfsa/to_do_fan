<?php
include "config.php";

$tarefa = $_POST['cad_tarefa'];
$dt_conclusao = $_POST['dt_conclusao'];
$criticidade = $_POST['criticidade'];
$responsavel = $_POST['responsavel'];

$sql = "INSERT INTO tarefas (nome_tarefa, data_conclusao,criticidade, responsavel) VALUES ('$tarefa','$dt_conclusao','$criticidade','$responsavel')";
$query = $mysqli->query($sql);
if($query){
    echo "ok";
}else{
    echo "n ok";
}


?>