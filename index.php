<?php
include_once("conexao.php");
print_r($_POST);
if (isset($_POST['gravar']))
{
    $sql = "INSERT INTO viagem(Modelo,Placa,Nome,LocaldeOrigem,LocaldeDestino,KM,LitrosGastos,ValorGasolina) values (:Modelo,:Placa,:Nome,:LocaldeOrigem,:LocaldeDestino,:KM,:LitrosGastos,:ValorGasolina)";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute(array("Modelo"=>$_POST['modelo'],"Placa"=>$_POST['placa'],
                                          "Nome"=>$_POST['nome'],"LocaldeOrigem"=>$_POST['origem'],
                                          "LitrosGastos"=>$_POST['ltr'],"KM"=>$_POST['percorrido'],"LocaldeDestino"=>$_POST['destino'],
                                          "ValorGasolina"=>$_POST['valor']));
    $_POST = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <form action="" method="post" style="text-align:center;">
        <h1>Cadastro</h1>
        <hr>
        Carro/Modelo: <input type="text" id="modelo" name="modelo" required>
        <hr>
        Carro/Placa: <input type="text" id="placa" name="placa" required>
        <hr>
        Nome: <input type="text" id="nome" name="nome" required>
        <hr>
        Local de Origem: <input type="text" id="origem" name="origem" required>
        <hr>
        Local de Destino: <input type="text" id="destino" name="destino" required>
        <hr>
        KM/Percorridos: <input type="text" id="percorrido" name="percorrido" required>
        <hr>
        LTR/Usados: <input type="text" id="ltr" name="ltr" required>
        <hr>
        Valor Gasolina: <input type="text" id="valor" name="valor" required>
        <hr>
        <input type="submit" name="gravar" id="gravar" value="Gravar">
    </form>
</body>
</html>