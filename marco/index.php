<?php include "header.php"; ?>
    <?php 
    include("conexaoBD.php"); ?>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Shop Homepage - Start Bootstrap Template</title>
            
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
           
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
            
            <link href="css/styles.css" rel="stylesheet" />
        </head>
        <body>
            
            
            <header class="bg-dark-brown py-4 ">
             <header style="background-image: url('img/tipos-de-graos-de-cafe.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;" class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white" style="background-color: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
            <h1 class="display-4 fw-bolder">Tech Brew</h1>
            <p class="lead fw-normal text-white-50 mb-0">Onde o café compila melhor</p>
        </div>
    </div>
</header>
            </header>
            
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                
                                <img class="card-img-top" src="data:image/jpeg;base64,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" alt="capuccino" />
                                
                                <div class="card-body p-4">
                                    <div class="text-center">
                                      
                                        <h5 class="fw-bolder">Americano</h5>
                                       
                                        $40.00 - $80.00
                                    </div>
                                </div>
                                
                                
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="formLogin.php">Visualizar</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                               
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                               
                                <img class="card-img-top" src="img/produto6.jpg" alt="..." />
                                
                                <div class="card-body p-4">
                                    <div class="text-center">
                                     
                                        <h5 class="fw-bolder">Irish </h5>
                                        <!--adiciona o icone de estrela-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                   
                                        <span class="text-muted text-decoration-line-through">R$20.00</span>
                                        R$18.00
                                    </div>
                                </div>
                                
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="formLogin.php">Visualizar</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                                
                                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRW6wo_QA3APNLowmvSyvXTbHrsdXghiTmhg&s" alt="..." />
                               
                                <div class="card-body p-4">
                                    <div class="text-center">
                                       
                                        <h5 class="fw-bolder">Café com Leite</h5>
                                        
                                        <span class="text-muted text-decoration-line-through">R$5.00</span>
                                        R$2.50
                                    </div>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                           
                                        </div>
                                </div> 
                                
                               
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="formLogin.php">Visualizar</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                               
                                <img class="card-img-top" src="img/produto8.jpg" alt="..." />
                               
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        
                                        <h5 class="fw-bolder">Cappuccino</h5>
                                       
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                      
                                        $30.00
                                    </div>
                                </div>
                                
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="formLogin.php">Visualizar</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                              
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                                
                                <img class="card-img-top" src="img/produto5.jpg" alt="..." />
                                <
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        
                                        <h5 class="fw-bolder">Macchiato</h5>
                                        
                                        <span class="text-muted text-decoration-line-through">R$25.00</span>
                                        R$20.00
                                    </div>
                                </div>
                               
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="FormLogin.php">Visualizar</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                
                                <img class="card-img-top" src="img/produto4.jpg" alt="..." />
                                
                                <div class="card-body p-4">
                                    <div class="text-center">
                                      
                                        <h5 class="fw-bolder">Latte</h5>
                                        
                                        $18.00 - $28.00
                                    </div>
                                </div>
                               
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="FormLogin.php">visualizar</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                               
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">promoção</div>
                               
                                <img class="card-img-top" src="img/tipos-de-graos-de-cafe.jpg" alt="café especial" />
                                
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        
                                        <h5 class="fw-bolder">café especial</h5>
                                        
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        
                                        <span class="text-muted text-decoration-line-through">$20.00</span>
                                        $18.00
                                    </div>
                                </div>
                               
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="FormLogin.php">Visualizar</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                
                                <img class="card-img-top" src="img/produto3.jpg" alt="mais pedido" />
                                
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <
                                        <h5 class="fw-bolder">expresso</h5>
                    
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                       
                                        $40.00
                                    </div>
                                </div>
                                
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="formLogin.php">Visualizar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
           
            <script src="js/scripts.js"></script>
        </body>
    </html>
<?php include "footer.php" ?>
