<h1 style="text-align:center;">Listagem de Clientes</h1>
<?php
    include_once("conexao.php");
    $sql = 'SELECT v.IDCarro,v.Modelo,v.Placa,v.Nome,v.LocaldeOrigem,v.LocaldeDestino,v.KM,v.LitrosGastos,v.ValorGasolina from viagem v';
    $consulta = $conn->prepare($sql);
    $consulta->execute();
?>
<div class="shadow p-3 mb-5 bg-body rounded">
<table class='table'>
    <thead>
        <tr>
            <th scope="col">IDCarro</th>
            <th scope="col">Modelo</th>
            <th scope="col">Placa</th>
            <th scope="col">Nome</th>
            <th scope="col">Local de Origem</th>
            <th scope="col">Local de Destino</th>
            <th scope="col">KM/Percoridos</th>
            <th scope="col">LTR/Usados</th>
            <th scope="col">Valor Gasolina</th>
        </tr>
    </thead>
    <tbody>
            <?php
            while ($linha = $consulta->fetch())
            {
            echo "<tr><td>{$linha['IDCarro']}</td>";
            echo "<td>{$linha['Modelo']}</td>";
            echo "<td>{$linha['Placa']}</td>";
            echo "<td>{$linha['Nome']}</td>";
            echo "<td>{$linha['LocaldeOrigem']}</td>";
            echo "<td>{$linha['LocaldeDestino']}</td>";
            echo "<td>{$linha['KM']}</td>";
            echo "<td>{$linha['LitrosGastos']}</td>";
            echo "<td>{$linha['ValorGasolina']}</td></tr>";
            }
            ?>
    </tbody>
</table>
</div>