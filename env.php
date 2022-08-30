<?php

include_once("cone.php");

$sql = "INSERT INTO viagem(Modelo,Placa,Nome,LocaldeOrigem,LocaldeDestino,KM,LitrosGastos,ValorGasolina)
values (:Modelo,:Placa,:Nome,:LocaldeOrigem,:LocaldeDestino,:KM,:LitrosGastos,:ValorGasolina)";

$data =  $conn->prepare($sql);

$data->execute(array(

    "Modelo"=>$_POST['modelo'],"Placa"=>$_POST['placa'],
    "Nome"=>$_POST['nome'],"LocaldeOrigem"=>$_POST['origem'],
    "LitrosGastos"=>$_POST['ltr'],"KM"=>$_POST['percorrido'],
    "LocaldeDestino"=>$_POST['destino'],"ValorGasolina"=>$_POST['valor']

));

    header("list.php");

?>