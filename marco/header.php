<!DOCTYPE html>
<html lang="pt-br">
    <?php
      
        date_default_timezone_set('America/Sao_Paulo');
    ?>
    <head>
        <title>Tech Brew</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        
      
        <script>
            $(document).ready(function(){
                $("#telefoneUsuario").mask("(00) 00000-0000");
            });
        </script>

           
    

    </head>
    <body>

        <div class="p-3 text-center">
            <a href="index.php" title="Clique no logo para retornar ao início">
                <img src="img/152760.png" alt="Logotipo" style='width: 150px;'>
            </a>

        </div>
        <head>
           
        <?php
            error_reporting(0); 
            session_start(); 

            if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){ /
                $idUsuario    = $_SESSION['idUsuario'];
                $tipoUsuario  = $_SESSION['tipoUsuario'];
                $nomeUsuario  = $_SESSION['nomeUsuario'];
                $emailUsuario = $_SESSION['emailUsuario'];

                $nomeCompleto = explode(' ', $nomeUsuario); 
                $primeiroNome = $nomeCompleto[0];
            }
        ?>

        <nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color: #4B2E2E;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Início</a>
                        </li>
                        <?php
                          
                            if($tipoUsuario == 'administrador'){
                                echo "
                                    <li class='nav-item'>
                                        <a class='nav-link' href='formProduto.php'>Cadastrar Produto</a>
                                    </li>
                                ";
                            }
                           
                            if($tipoUsuario == 'cliente'){
                                echo "
                                    <li class='nav-item'>
                                        <a class='nav-link' href='visualizarPedidos.php'>Visualizar Pedidos</a>
                                    </li>
                                ";
                            }
                            if(isset($_SESSION['logado']) && $_SESSION['logado'] === true){ //Verifica se há sessão ativa
                                //correção do problema
                                echo "
                                    <li class='nav-item'>
                                        <a class='nav-link' href='logout.php?pagina=formLogin'>Sair</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' style='color:lightblue'>Olá, <strong>$primeiroNome</strong>! <i class='bi bi-emoji-smile'></i></a>
                                    </li>
                                ";
                            }
                            else{
                                 echo "
                                    <li class='nav-item'>
                                        <a class='nav-link' href='formLogin.php?pagina=formLogin'>Login</a>
                                    </li>
                                ";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class='container mt-5 mb-5'>