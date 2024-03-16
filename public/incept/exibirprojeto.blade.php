<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 
    <!--Css  -->
    <link rel="stylesheet" href="css/projetos.css">
    <link rel="stylesheet" href="css/personalizados.css">

    <!-- Bootstrap 5.2 e 5.2  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  

    <!-- Icones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <title>Incept | </title>
  <link rel="shortcut icon" type="imagex/png" href="img/logo-icon.ico">

</head>
<body>

    <!-- Tela de carregamento -->
    <div class="tela-carregamento" id="telaCarregamento"> 
        <img class="img-fluid" style="width: 100px; height: 100px;" src="img/giphy.gif">
      </div>

    <div class="container-fluid mx-auto flex-column" style="padding: 0px !important;" id="conteudoPagina" >
        <div class="interface fixed-top" id="menu-menor">
          <!-- Menu Desktop -->
          <nav id="menu" class="menu-desktop navbar fixed-top navbar-expand-lg navbar-dark mb-4 fall">
            <div class="container">
              <a href="/index.html">
                <img class="logopersona" src="img/incept-ligth.png" alt="Incept Design">
              </a> 
              <ul id="ulnav" class="esconder-mobile padding-nav" style="margin-bottom: 0px;">
                <li class="nav-item">
                  <a class="nav-link active"  href="/">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/pag/galeria.html">Galeria</a>
                </li>
                <li class="nav-item dropdown-persona">
                  <a class="nav-link dropbtn">Contato</a>
                  <ul class="dropdown-content">
                    <li><a class="nav-link"href="https://www.instagram.com/incep.design/">Instagram</a></li>
                    <li><a class="nav-link" href="https://api.whatsapp.com/send/?phone=5538998604242&text&type=phone_number&app_absent=0">Whatsapp</a></li>
                    <li><a class="nav-link" href="#faleconosco">Fale Conosco</a></li>
                  </ul>
                </li>
              </ul>
  
              <div class="btn-abrir-menu" id="btn-menu">
                <i class="bi bi-list"></i>
              </div>
            </div>
          </nav>
          <!-- Menu Mobile -->
          <nav class="menu-mobile" id="menu-mobile">
            <div class="btn-fechar">
              <i class="bi bi-x-lg"></i>
            </div> 
            <ul id="menu-menor">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#oquefazemos">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#portifolio">Portifólio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#planoseprecos">Planos e Preços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#quemsomos">Quem somos</a>
              </li>
              <li class="nav-item" id="contato">
                <a class="nav-link"></i>Contatos: </i></a>              
                <ul id="drop-mobile">
                  <li>
                    <a class="nav-link" href="https://www.instagram.com/incep.design/">
                      <h5><i class="bi bi-instagram"></i></h5>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link" href="https://api.whatsapp.com/send/?phone=5538998604242&text&type=phone_number&app_absent=0">
                      <h5><i class="bi bi-whatsapp"></i></h5>
                    </a>
                  </li>
                  <li>
                    <a class="nav-link" href="#faleconosco">
                      <h5><i class="bi bi-envelope"></i></h5>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <div class="overlay-menu" id="overlay-menu"></div>
        </div>

        <div class="breathe"></div>

        <div class="product-display ">
            <div class="container-fluid">
                <div class="">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12 py-3">
                            <div class="container-img">
                                <img class="img-fluid projeto-img" style="border-radius: 10px;" id="product-image" src="" alt="Imagem do Produto">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                            <div class="container-infoprojeto">
                            <h1 class="projeto-titulo">{{ $projeto->nome }}</h1>
                            <p class="projeto-autor">{{ $projeto->autor }}</p>
                              
                              
                              <!-- <h4>Outros trabalhos</h4>
                              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="/img/13.jpg" alt="Primeira Imagem">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="/img/5.jpeg" alt="Segunda Imagem">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="/img/8.jpeg" alt="Terceira Imagem">
                                  </div>
                                  
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Próximo</span>
                                </a>
                              </div> -->
                              

                              <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-title="Título 1" data-author="Autor 1" data-image="/img/13.jpg">
                                    <img class="d-block w-100" src="/img/13.jpg" alt="Primeira Imagem">
                                  </div>
                                  <div class="carousel-item" data-title="Título 2" data-author="Autor 2" data-image="/img/5.jpeg">
                                    <img class="d-block w-100" src="/img/5.jpeg" alt="Segunda Imagem">
                                  </div>
                                  <div class="carousel-item" data-title="Título 3" data-author="Autor 3" data-image="/img/8.jpeg">
                                    <img class="d-block w-100" src="/img/8.jpeg" alt="Terceira Imagem">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Próximo</span>
                                </a>
                              </div> -->
                            </div>                            
                        </div>                    
                    </div>
                </div>
                <!-- Outros detalhes ou informações do produto podem ser adicionados aqui -->
        
            </div>
        </div>


        

        <!-- Rodapé -->
        <div id="Rodapé" class="container-fluid rodapestyle">
            <footer class="pt-5">
            <div class="border-top">
                <div class="container">
                    <div class="row pt-5 pb-5">
                        <div class="mx-4 col-lg-2 col-md-12 my-4" >              
                        <img src="img/incept-ligth.png" style="width: 50px;" class="img-fluid">
                        </div>
                
                        <div class="col-lg-2 col-md-3 col-sm-3 my-3 pl-5">
                        <h5>INICIO</h5>
                        <ul class="nav flex-column my-3">
                            <li class="nav-item mb-2"><a href="pag/paginas.html#sobrenos" class="nav-link p-0 text-muted"  target="_blank">Sobre nós</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#serv" class="nav-link p-0 text-muted">Serviços</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#port" class="nav-link p-0 text-muted">Portifólio</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#orcament" class="nav-link p-0 text-muted">Orçamentos</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#prazos" class="nav-link p-0 text-muted">Prazos e preços</a></li>
                        </ul>
                        </div>
                
                        <div class="col-lg-2 col-md-3 col-sm-3 my-3 pl-5">
                        <h5>DESENVOLVIMENTO</h5>
                        <ul class="nav flex-column my-3">
                            <li class="nav-item mb-2"><a href="pag/paginas.html#ecommerce" class="nav-link p-0 text-muted">E-commerces</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#insti" class="nav-link p-0 text-muted">Institucionais</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#templates" class="nav-link p-0 text-muted">Templates</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#implemen" class="nav-link p-0 text-muted">Implementação</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#direitos" class="nav-link p-0 text-muted">Direitos Autorais</a></li>
                        </ul>
                        </div>
            
                        <div class="col-lg-2 col-md-3 col-sm-3 my-3 pl-5">
                        <h5>AJUDA</h5>
                        <ul class="nav flex-column my-3">
                            <li class="nav-item mb-2"><a href="pag/paginas.html#fale" class="nav-link p-0 text-muted">Fale conosco</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#reportar" class="nav-link p-0 text-muted">Reportar erro</a></li>
                            <li class="nav-item mb-2"><a href="pag/paginas.html#feedback" class="nav-link p-0 text-muted">Feedback</a></li>
                        </ul>
                        </div>
            
                        <div class="col-lg-3 col-md-2 col-sm-3 my-3 pl-5">
                        <h5>CANAIS DE ATENDIMENTO</h5>
                        <ul class="nav flex-column my-3 ">
                            <li class="nav-item mb-2"><a href="#faleconosco" class="nav-link p-0 text-muted"><span><i class="bi bi-envelope"></i>inceptfaleconosco@gmail.com</span></a></li>
                            <li class="nav-item mb-2"><a href="https://api.whatsapp.com/send/?phone=5538998604242&text&type=phone_number&app_absent=0" class="nav-link p-0 text-muted"><span><i class="bi bi-telephone"></i>(38) 99860-4242</span></a></li>               
                        </ul>
                        <h5 class="mt-5">NOS ENCONTRE AQUI</h5>
                        <ul class="list-unstyled d-flex my-3 icon-social">
                            <li class="">
                            <a href="https://www.instagram.com/incep.design/">
                                <h2><i class="bi bi-instagram"></i></h2>
                            </a>
                            </li>
                            <li class=""><a href="#">
                            <h2><i class="bi bi-facebook"></i></h2>
                            </a>
                            </li>
                            <li class=""><a href="https://api.whatsapp.com/send/?phone=5538998604242&text&type=phone_number&app_absent=0">
                            <h2><i class="bi bi-whatsapp"></i></h2>
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            
            </div>
            
            <div class="text-center border-top pb-3">
                <p class="mt-4"><span class="incept">@2023 INCEPT DESIGN </span> <span class="direitosreservados">| TODOS OS DIREITOS RESERVADOS.</span> </p>
            </div>
            
            </footer>
        </div>
    </div>
    

    <script defer src="/js/projetos.js"></script>

    <!-- Bootstrap JS, jQuery e Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>