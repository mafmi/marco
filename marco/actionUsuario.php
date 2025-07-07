<?php include "header.php" ?>

<div class='container mt-3 mb-3'>

<?php

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $fotoUsuario = $nomeUsuario = $dataNascimentoUsuario = $cidadeUsuario = $telefoneUsuario =
        $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
        $erroPreenchimento = false;

        
        if(empty($_POST["nomeUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>NOME</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
           
            $nomeUsuario = testar_entrada($_POST["nomeUsuario"]);
            
            if(!preg_match('/^[\p{L} ]+$/u', $nomeUsuario)){
                echo "<div class='alert alert-warning text-center'>
                    O <strong>NOME</strong> deve conter apenas letras!
                </div>";
                $erroPreenchimento = true;
            }
        }

       
        if(empty($_POST["dataNascimentoUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>DATA DE NASCIMENTO</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
          
            $dataNascimentoUsuario = testar_entrada($_POST["dataNascimentoUsuario"]);

            
            if(strlen($dataNascimentoUsuario) == 10){
                /
                $dia = substr($dataNascimentoUsuario, 8, 2);
                $mes = substr($dataNascimentoUsuario, 5, 2);
                $ano = substr($dataNascimentoUsuario, 0, 4);

                
                if(!checkdate($mes, $dia, $ano)){
                    echo "<div class='alert alert-warning text-center'>
                    <strong>DATA DE NASCIMENTO INVÁLIDA</strong>!
                    </div>";
                    $erroPreenchimento = true;
                }
            }
            else{
                echo "<div class='alert alert-warning text-center'>
                    <strong>DATA DE NASCIMENTO INVÁLIDA</strong>!
                </div>";
                $erroPreenchimento = true;
            }
        }

        
        if(empty($_POST["cidadeUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>CIDADE</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            
            $cidadeUsuario = testar_entrada($_POST["cidadeUsuario"]);
        }

        
        if(empty($_POST["telefoneUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>TELEFONE</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            
            $telefoneUsuario = testar_entrada($_POST["telefoneUsuario"]);
        }

        
        if(empty($_POST["emailUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>EMAIL</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            
            $emailUsuario = testar_entrada($_POST["emailUsuario"]);
        }

        
        if(empty($_POST["senhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>SENHA</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
         /
            $senhaUsuario = md5(testar_entrada($_POST["senhaUsuario"]));
        }

        
        if(empty($_POST["confirmarSenhaUsuario"])){
            echo "<div class='alert alert-warning text-center'>
                    O campo <strong>CONFIRMAR SENHA</strong> é obrigatório!
                </div>
            ";
            $erroPreenchimento = true;
        }
        else{
            
            $confirmarSenhaUsuario = md5(testar_entrada($_POST["confirmarSenhaUsuario"]));
            if($senhaUsuario != $confirmarSenhaUsuario){
                echo "<div class='alert alert-warning text-center'>
                        As <strong>SENHAS</strong> não conferem!
                    </div>";
                $erroPreenchimento = true;
            }
        }

        
        $diretorio    = "img/"; 
        $fotoUsuario  = $diretorio . basename($_FILES["fotoUsuario"]["name"]); 
        $erroUpload   = false; 
        $tipoDaImagem = strtolower(pathinfo($fotoUsuario, PATHINFO_EXTENSION));

      
        if ($_FILES['fotoUsuario']['size'] != 0){

          
            if($_FILES['fotoUsuario']['size'] > 5000000){
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
              
                if(!move_uploaded_file($_FILES['fotoUsuario']['tmp_name'], $fotoUsuario)){
                    echo "<div class='alert alert-warning text-center'>
                        Erro ao tentar mover a <strong>FOTO</strong> para o diretório $diretorio!
                    </div>";
                $erroUpload = true;
                }
            }

        }

        
        if(!$erroPreenchimento && !$erroUpload){

            
            $inserirUsuario = "INSERT INTO Usuarios (tipoUsuario, fotoUsuario, nomeUsuario, dataNascimentoUsuario, cidadeUsuario, telefoneUsuario, emailUsuario, senhaUsuario)
                                VALUES ('cliente', '$fotoUsuario', '$nomeUsuario', '$dataNascimentoUsuario', '$cidadeUsuario', '$telefoneUsuario', '$emailUsuario', '$senhaUsuario') ";

            
            include "conexaoBD.php";

            
            if(mysqli_query($conn, $inserirUsuario)){

                echo "<div class='alert alert-success text-center'>Usuário(a) cadastrado(a) com sucesso!</div>";
                
                echo "<div class='container mt-3'>
                        <div class='mt-3 text-center'>
                            <img src='$fotoUsuario' style='width:150px' title='Foto de $nomeUsuario'>
                        </div>
                        <div class='table-responsive'>
                            <table class='table'>
                                <tr>
                                    <th>NOME</th>
                                    <td>$nomeUsuario</td>
                                </tr>
                                <tr>
                                    <th>DATA DE NASCIMENTO</th>
                                    <td>$dia/$mes/$ano</td>
                                </tr>
                                <tr>
                                    <th>CIDADE</th>
                                    <td>$cidadeUsuario</td>
                                </tr>
                                <tr>
                                    <th>TELEFONE</th>
                                    <td>$telefoneUsuario</td>
                                </tr>
                                <tr>
                                    <th>EMAIL</th>
                                    <td>$emailUsuario</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                ";
                mysqli_close($conn); 
            }
            /
            else{
                echo "<div class='alert alert-danger text-center'>
                            Erro ao tentar inserir dados do <strong>Usuário</strong> na base de dados!
                        </div>";
            }
        }
    }
    else{
       
        header("location:formUsuario.php");
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