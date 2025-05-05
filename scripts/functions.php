<?php

function listaItens(){
    include "config.php";
    $sql = "SELECT * FROM tarefas";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $query;
}

?>