<?php include ("header.php") ?>

<div class='container mt-3 mb-3'>

    <?php
        echo "<h3 class='text-center'>Listar registros em uma tabela:</h3>";
        
        
        $listarProdutos = "SELECT * FROM Produtos";

        include("conexaoBD.php");
        
        $res = mysqli_query($conn, $listarProdutos) or die ("Erro ao tentar listar Produtos");

        $totalProdutos = mysqli_num_rows($res); 

        echo "<div class='alert alert-info text-center'>Há <strong>$totalProdutos</strong> produtos cadastrados! </div>";

        echo "
            <table class='table'>
                <thead class='table-dark'>
                    <tr>
                        <th>ID</th>
                        <th>FOTO</th>
                        <th>NOME</th>
                        <th>DESCRIÇÃO</th>
                        <th>VALOR</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
        ";

        while($registro = mysqli_fetch_assoc($res)){
       
            $idProduto        = $registro['idProduto'];
            $fotoProduto      = $registro['fotoProduto'];
            $nomeProduto      = $registro['nomeProduto'];
            $descricaoProduto = $registro['descricaoProduto'];
            $valorProduto     = $registro['valorProduto'];
            $statusProduto    = $registro['statusProduto'];

           
            echo "
                <tr>
                    <td>$idProduto</td>
                    <td><img src='$fotoProduto' title='Foto de $nomeProduto' style='width:50px;'></td>
                    <td>$nomeProduto</td>
                    <td>$descricaoProduto</td>
                    <td>$valorProduto</td>
                    <td>$statusProduto</td>
                </tr>
            ";
        }
        echo "</tbody>";
        echo "</table>";
        mysqli_close($conn);

    ?>

</div>

<?php include ("footer.php") ?>