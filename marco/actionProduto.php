<?php include "header.php" ?>

<div class='container mt-3 mb-3'>

<?php

   
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $fotoProduto = $nomeProduto = $descricadoProduto = $valorProduto = "";
        $erroPreenchimento = false;

     
        if(empty($_POST["nomeProduto"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>NOME</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            
            $nomeProduto = testar_entrada($_POST["nomeProduto"]);
        }

       
        if(empty($_POST["descricaoProduto"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>DESCRIÇÃO</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            
            $descricaoProduto = testar_entrada($_POST["descricaoProduto"]);
        }

       
        if(empty($_POST["valorProduto"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>VALOR</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            //Armazena o valor na variável
            $valorProduto = testar_entrada($_POST["valorProduto"]);
        }

        
        $diretorio    = "img/"; 
        $fotoProduto  = $diretorio . basename($_FILES["fotoProduto"]["name"]); 
        $erroUpload   = false; 
        $tipoDaImagem = strtolower(pathinfo($fotoProduto, PATHINFO_EXTENSION));
       
        if ($_FILES['fotoProduto']['size'] != 0){

           
            if($_FILES['fotoProduto']['size'] > 5000000){
                echo "<div class='alert alert-warning text-center'>
                        A <strong>FOTO</strong> não deve possuir mais do que 5MB!
                    </div>";
                $erroUpload = true;
            }

            
            if($tipoDaImagem != "jpg" && $tipoDaImagem != "jpeg" && $tipoDaImagem != "png" && $tipoDaImagem != "webp"){
                echo "<div class='alert alert-warning text-center'>
                    A <strong>FOTO</strong> deve estar no formato JPG, JPEG, PNG ou WEBP!
                </div>";
                $erroUpload = true;
            }

        
            if($erroUpload){
                echo "<div class='alert alert-warning text-center'>
                    Erro ao tentar fazer o upload da <strong>FOTO</strong>!
                </div>";
                $erroUpload = true;
            }
            else{
             
                if(!move_uploaded_file($_FILES['fotoProduto']['tmp_name'], $fotoProduto)){
                    echo "<div class='alert alert-warning text-center'>
                        Erro ao tentar mover a <strong>FOTO</strong> para o diretório $diretorio!
                    </div>";
                $erroUpload = true;
                }
            }

        }

        if(!$erroPreenchimento && !$erroUpload){

            $inserirProduto= "INSERT INTO Produtos (fotoProduto, nomeProduto, descricaoProduto, valorProduto, statusProduto)
                                VALUES ('$fotoProduto', '$nomeProduto', '$descricaoProduto', $valorProduto, 'disponivel') ";

            include "conexaoBD.php";

            if(mysqli_query($conn, $inserirProduto)){

                echo "<div class='alert alert-success text-center'>Produto(a) cadastrado(a) com sucesso!</div>";
                
                echo "<div class='container mt-3'>
                        <div class='mt-3 text-center'>
                            <img src='$fotoProduto' style='width:150px' title='Foto de $nomeProduto'>
                        </div>
                        <div class='table-responsive'>
                            <table class='table'>
                                <tr>
                                    <th>NOME</th>
                                    <td>$nomeProduto</td>
                                </tr>
                                <tr>
                                    <th>DESCRIÇÃO PRODUTO</th>
                                    <td>$descricaoProduto</td>
                                </tr>
                                <tr>
                                    <th>VALOR</th>
                                    <td>$valorProduto</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                
                ";
                mysqli_close($conn); 
            }
            
            else{
                echo "<div class='alert alert-danger text-center'>
                            Erro ao tentar inserir dados do <strong>Produto</strong> na base de dados!
                        </div>";
            }
        }
    }
    else{
        
        header("location:formProduto.php");
    }

    function testar_entrada($dado){
        $dado = trim($dado);
        $dado = stripslashes($dado); 
        $dado = htmlspecialchars($dado); 

        return($dado);
    }

?>

</div>

<?php include "footer.php" ?>