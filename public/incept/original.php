<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap 5.2 e 5.2  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- Css 3.0 -->
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/personalizados.css">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="css/loading.scss">

    <!-- Jss -->
    <!-- <script defer src="loading.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/three@0.134.0/build/three.min.js"></script> -->

    <!-- Icones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Incept Desing</title>
    <link rel="shortcut icon" type="imagex/png" href="img/logo-icon.ico">
  </head>

  <body>
    <!-- Tela de carregamento -->
    <div class="tela-carregamento" id="telaCarregamento"> 
      <img class="img-fluid" style="width: 100px; height: 100px;" src="img/giphy.gif">
    </div>
    <div class="container-fluid mx-auto flex-column" style="padding: 0px !important;" id="conteudoPagina">
      <div class="interface fixed-top mx-5" id="menu-menor">
        <!-- Menu Desktop -->
        <nav id="menu" class="menu-desktop navbar bg-transparent fixed-top navbar-expand-lg navbar-dark mb-4 fall">
          <div class="container">
            <a href="/index.html">
              <img class="logopersona" src="img/incept-ligth.png" alt="Incept Design">
            </a> 
            <ul id="ulnav" class="esconder-mobile padding-nav" style="margin-bottom: 0px;">
              <li class="nav-item">
                <a class="nav-link active"  href="index.html">Início</a>
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
    
      <main>
        <!-- Inicio -->        
        <section id="Inicio" class="herobk text-center img-fluid hcf-bp-center hcf-bs-cover hcf-overlay">          
          <div class="ondas" id="topo">
            <div class="onda1" id="onda1"></div>
            <div class="onda4" id="onda2"></div>
            <div class="onda2" id="onda3"></div>
            <div class="onda3" id="onda4"></div>
          </div>
          
          <div class="vertical nocturne">
            <div class="visit-card">
              <!-- <h1>
                <span class="somos-incept my-4 mr-4" id="prefix">Somos </span>
                <span class="somos-incept my-4" id="typing"></span>
              </h1> -->
              <h1 class="somos">Somos Incept</h1>
              <div class="col-lg-4 mx-auto">
                <p class="txt-init">Criativa e socialmente consciente, 
                  somos especializados em design estratégico e empresarial.</p>
              </div>
              
            </div>
          </div>
          <div class="deslizeposition">
            <div class="deslizecont">
              <p class="deslize">DESLIZE</p>
              <svg class="seta" xmlns="http://www.w3.org/2000/svg" width="16" height="152" viewBox="0 0 16 152" fill="none">
                <g >
                <circle cx="8.06769" cy="6.36603" r="4.51095" stroke="white" stroke-width="1.8"/>
                  <g style="mix-blend-mode:difference">
                  <path style="mix-blend-mode:difference;" d="M7.36028 150.85C7.7508 151.24 8.38397 151.24 8.77449 150.85L15.1385 144.486C15.529 144.095 15.529 143.462 15.1385 143.072C14.7479 142.681 14.1148 142.681 13.7242 143.072L8.06738 148.729L2.41053 143.072C2.02 142.681 1.38684 142.681 0.996315 143.072C0.605791 143.462 0.605791 144.095 0.996315 144.486L7.36028 150.85ZM7.06738 11.777L7.06738 150.143H9.06738L9.06738 11.777H7.06738Z" fill="white"/>
                  </g>
                </g>
              </svg>
            </div>
          </div>
        </section>

        <!-- O que fazemos -->
        <div class="onda-position">
          <svg class="onda-light ondasvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill = "#fff" fill-opacity="1" 
              d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,160C960,181,1056,203,1152,186.7C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
          </svg>
        </div>

        <div id="oquefazemos">
          <div class="nocturne container title-inner my-5 py-5">
            <div class="row flex-lg-row g-5">
              <div class="col-lg-3 p-4 m-0">
              <p class="pretitulo">O QUE FAZEMOS?</p>
              <h2 class="titulo-left"> OFERECEMOS SERVIÇOS CRIATIVOS</h2>
              <p class="subtitulo-left">Soluções <span class="span-dec">sob medida</span> que impulsionam sua empresa. 
                Combinamos criatividade e técnica para construir <span class="span-dec">marcas fortes</span>, 
                campanhas impactantes e soluções digitais eficazes.
              </p>
              </div>
              <div class="col-lg-9 col-sm-12 col-12" style="margin: 0px !important;">
                <div class="container">
                  <div class="row">
                    <div class="row ">
                      <div class="col-lg-6 col-sm-12 d-flex align-items-start p-3 mb-6">
                        <img src="img/inspiracao.png" class="imgservicos">
                        <div class="pl-2">
                          <h5 class="tituloservicos">ESTRATÉGIA</h5>
                          <p class="descricaoservicos">Design criativo e inteligente não é o suficiente. 
                            É preciso complementa-lo com estratégia e técnicas de alcance. Analisamos cuidadosamente 
                            dados demográficos, comportamentais e preferências de clientes...
                          </p>
                          <a class="btn btn-reedmore fw-bold">
                            <span><i class="bi bi-arrow-return-right"></i>Ler mais</span>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-12 d-flex align-items-start p-3 mb-6">
                        <img src="img/codificacao.png" class="imgservicos">
                        <div class="pl-2">
                          <h5>DESENVOLVIMENTO</h5>
                          <p class="descricaoservicos">Sites institucionais, lojas online e sistemas de Gestão de Negócios. 
                            Oferecemos o pacote completo para que sua empresa decole. Priorizamos a criação de plataformas 
                            intuitivas, que ofereçam uma experiência de usuário excepcional...
                          </p>
                          <a class="btn btn-reedmore fw-bold">
                            <span><i class="bi bi-arrow-return-right"></i>Ler mais</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 col-sm-12 d-flex align-items-start p-3 mb-6">
                        <img src="img/vetor.png" class="imgservicos">
                        <div class="pl-2">
                          <h5>WEB DESING</h5>
                          <p class="descricaoservicos">Manter sua Identidade Visual é nossa especialidade.
                            Oferecemos templates inovadores e personalizados para aprimorar a presença online de nossos clientes. Ao criar identidades visuais, buscamos transmitir...
                          </p>
                          <a class="btn btn-reedmore fw-bold">
                            <span><i class="bi bi-arrow-return-right"></i>Ler mais</span>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-12 d-flex align-items-start p-3 mb-6">
                        <img src="img/lancamento.png" class="imgservicos">
                        <div class="pl-2">
                          <h5>MARKETING DIGITAL</h5>
                          <p class="descricaoservicos">Nós te ajudamos a impulsionar sua marca do zero. 
                            Alcance clientes com recursos atuais, consultoria online e profissional. 
                            Acreditamos que o marketing vai muito além de simplesmente promover 
                            produtos ou serviços...
                          </p>
                          <a class="btn btn-reedmore fw-bold">
                            <span><i class="bi bi-arrow-return-right"></i>Ler mais</span>
                          </a>
                        </div>
                      </div>
                    </div>                           
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
        
        <!-- Projetos/Portifolio -->
        <section id="portifolio" class="sectionprojetos textura container-fluid img-fluid cover py-lg-2 hcf-bp-center hcf-bs-cover">
          <div class="nocturne">

            <!-- <div class="container">
              <div class="pt-5 my-5 py-5 text-center controlers">
                <h2>PROJETOS RECENTES</h2>
                <ul>
                  <li class="list active" data-filter="tudo"><i class="bi bi-star-fill"></i>
                    TODOS
                  </li>
                  <li class="list" data-filter="design"><i class="bi bi-vector-pen"></i>
                    DESIGN CRIATIVO
                  </li>
                  <li class="list" data-filter="dev"><i class="bi bi-code-slash"></i>
                    DESENVOLVIMENTO
                  </li>
                  <li class="list" data-filter="anuncios"><i class="bi bi-rocket-takeoff-fill"></i>
                    ANUNCIOS
                  </li>
                </ul>
      
      
                <div class="projetos mt-5">
                  <div class="projeto image" data-item="dev" style="background-image: url(img/7.jpeg);">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Campanha Doação de Sangue</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="container">
              <div class="pt-5 my-5 py-5 text-center controlers">
                <h2>PROJETOS RECENTES</h2>
                <ul>
                  <li class="list active" data-filter="tudo"><i class="bi bi-star-fill"></i>
                    TODOS
                  </li>
                  <li class="list" data-filter="design"><i class="bi bi-vector-pen"></i>
                    DESIGN CRIATIVO
                  </li>
                  <li class="list" data-filter="dev"><i class="bi bi-code-slash"></i>
                    DESENVOLVIMENTO
                  </li>
                  <li class="list" data-filter="anuncios"><i class="bi bi-rocket-takeoff-fill"></i>
                    ANUNCIOS
                  </li>
                </ul>
      
                <div class="projetos mt-5">
                  <div class="projeto image" data-item="dev" style="background-image: url(img/7.jpeg);"
                  onclick="openProductPage('Campanha Doação de Sangue', 'R. Prates', 'img/7.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                        <h1 class="ptitle">Campanha Doação de Sangue</h1>
                        <p class="pauthor">R. Prates</p>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="projeto image" data-item="dev" style="background-image: url(img/7.jpeg);">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Campanha Doação de Sangue</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div> -->
                  <div class="projeto image" data-item="dev" style="background-image: url(img/2.jpeg);" 
                  onclick="openProductPage('Promoção de Produtos', 'R. Prates', 'img/2.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                        
                          <h1 class="ptitle">Promoção de Produtos</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="design" style="background-image: url(img/8.jpeg);"
                  onclick="openProductPage('Campanha Dia das Mães', 'R. Prates', 'img/8.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Campanha Dia das Mães</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="dev" style="background-image: url(img/11.jpeg);"
                  onclick="openProductPage('Promoção de Produtos', 'R. Prates', 'img/11.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Promoção de Produtos</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="anuncios" style="background-image: url(img/4.jpeg);"
                  onclick="openProductPage('Campanha Responsabilidade no Transito', 'R. Prates', 'img/4.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Campanha Responsabilidade no Transito</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="design" style="background-image: url(img/5.jpeg);"
                  onclick="openProductPage('Comemoração Semana Santa', 'R. Prates', 'img/5.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Comemoração Semana Santa</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="anuncios" style="background-image: url(img/13.jpg);"
                  onclick="openProductPage('Dia de Tiradentes', 'R. Prates', 'img/13.jpg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Dia de Tiradentes</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="design" style="background-image: url(img/12.jpg);"
                  onclick="openProductPage('Semana Santa', 'R. Prates', 'img/12.jpg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Semana Santa</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="anuncios" style="background-image: url(img/3.jpeg);"
                  onclick="openProductPage('Promoção de Produtos', 'R. Prates', 'img/3.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Promoção de Produtos</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="dev" style="background-image: url(img/1.jpeg);"
                  onclick="openProductPage('Campanha Contra a Discriminação Racial', 'R. Prates', 'img/1.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Campanha Contra a Discriminação Racial</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="anuncios" style="background-image: url(img/6.jpeg);"
                  onclick="openProductPage('Descobrimento do Brasil', 'R. Prates', 'img/6.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Descobrimento do Brasil</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                  <div class="projeto image" data-item="design" style="background-image: url(img/9.jpeg);"
                  onclick="openProductPage('Campanha Mês dos Namorados', 'R. Prates', 'img/9.jpeg')">
                    <div class="gobody overlay" style="cursor: pointer;">
                      <div class="relative">
                          
                          <h1 class="ptitle">Campanha Mês dos Namorados</h1>
                          <p class="pauthor">R. Prates</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>            
          </div>
          
        </section>

        <!-- Planos e Preços -->
        <section id="planoseprecos" class="container-fluid planosbk img-fluid cover py-lg-10 hcf-bp-center hcf-bs-cover hcf-overlay">
          <div class="container py-5">
            <div class="text-center">
              <div class="sectionplanos">
                <div class="contplanos">
                  <div class="infoplanos efeito-card1 col-lg-3 col-md-12 col-sm-12 mb-5">           
                    <p class="pretitulo-ligth">PLANOS E PREÇOS</p>
                    <h5 class="oferecemosservicos">OFERECEMOS PLANOS ACESSIVEIS E FLEXÍVEIS.</h5>
                    <p style="color: #fff;">Para um plano personalizado, fale conosco através do <span class="span-dec">link:</span></p>
                    <a rel="noopener noreferrer" href="https://api.whatsapp.com/send/?phone=5538998604242&text=Olá! Gostaria de um plano personalizado&type=phone_number&app_absent=0" target="_blank">
                      <button class="btnpersona btn-highligth btn" style="width: 250px;">ENTRAR EM CONTATO</button>
                    </a>
                  </div>

                  <div class="plano cardplanos efeito-card2">
                    <div class="card-header headplanos">
                      <h3 class="nomeplanos">Básico</h3>
                      <p class="precoplanos">R$ 349,90</p>
                      <p class="tipoplanos">mensalidade</p>
                    </div>
                    <ol class="card-body contentplanos">
                      <li>Organização das redes sociais;</li>
                      <li>Identidade Visual;</li>
                      <li>Criação de conteúdo;</li>
                      <li>Social media;</li>
                      <li>Primeira campanha de anúncios.</li>
                    </ol>
                    <div class="rodapeplanos">
                      <div class="button-group">
                        <!-- <button class="read-more">Ver mais</button> -->
                        <a rel="noopener noreferrer" href="https://api.whatsapp.com/send/?phone=5538998604242&text=Olá! Tenho interesse no Plano Básico, pode me falar mais sobre ele?&type=phone_number&app_absent=0" target="_blank">
                          <button class="other-buttonn">Contratar</button>
                        </a>
                      </div>
                    </div>
                    <!-- <button class="button-rodape text-center">Contratar</button> -->
                    
                  </div>

                  <div class="plano cardplanos efeito-card3">
                    <div class="card-header headplanos">
                      <h3 class="nomeplanos">Intermediário</h3>
                      <p class="precoplanos">R$ 599,90</p>
                      <p class="tipoplanos">mensalidade</p>
                    </div>
                    <ol class="card-body contentplanos">
                      <li>Gestão e gerenciamento das redes sociais;</li>
                      <li>Reuniões e suporte;</li>
                      <li>Posts ilimitados;</li>
                      <li>Manutenção do Google Empresas;</li>
                      <li>Captação de clientes pelo WhatsApp Business;</li>
                      <li>Criação e gestão de anúncios (Facebook, Instagram e Google ADS);</li>
                      <li>Social media.</li>
                    </ol>                      
                    <div class="rodapeplanos">
                      <div class="button-group">
                        <button class="read-more botao-pulsante" id="meuBotao">Ver mais</button>
                        <a rel="noopener noreferrer" href="https://api.whatsapp.com/send/?phone=5538998604242&text=Olá! Tenho interesse no Plano Intermediário, pode me falar mais sobre ele?&type=phone_number&app_absent=0" target="_blank">
                          <button class="other-button">Contratar</button>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="plano cardplanos efeito-card4">
                    <div class="card-header headplanos">
                      <h3 class="nomeplanos">Completo</h3>
                      <p class="precoplanos">R$ 1.499,90</p>
                      <p class="tipoplanos">mensalidade</p>
                    </div>
                    <ol class="card-body contentplanos">
                      <li>Criação de sites (institucional, e-commerce);</li>
                      <li>Assistência no site, manutenção e administração;</li>
                      <li>Gestão e gerenciamento das redes sociais;</li>
                      <li>Reuniões e suporte;</li>
                      <li>Posts ilimitados;</li>
                      <li>Manutenção do Google Empresas;</li>
                      <li>Captação de clientes pelo WhatsApp Business;</li>
                      <li>Criação e gestão de anúncios (Facebook, Instagram e Google ADS);</li>
                      <li>Social media.</li>
                    </ol>                     
                    <div class="rodapeplanos">
                      <div class="button-group">
                        <button class="read-more">Ver mais</button>
                        <a rel="noopener noreferrer" href="https://api.whatsapp.com/send/?phone=5538998604242&text=Olá! Tenho interesse no Plano Completo, pode me falar mais sobre ele?&type=phone_number&app_absent=0">
                          <button class="other-button">Contratar</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="espaco-vertical"></div>

        <!-- Quem Somos -->
        <div id="quemsomos" class="container-fluid">
          <div class="container">
            <div class="row container nocturne my-5 p-5">
              <h2 class="titulos text-center mb-5 fall">FUNDADORES</h2>
          
              
              <div class="pr-2 mb-4 col-lg-6 esquerda-direita">
                <div class="row g-0 sobre-container">
                  <div class="col-md-6 col-sm-6">
                    <div style="padding: 5px;">
                      <img src="img/rodrigo.png" class="rounded-2 quemsomosimg image-container" alt="...">                      
                    </div> 
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="">
                      <h5 class="card-title">Rodrigo Prates
                        <p><small><em>Designer Gráfico</em></small></p>
                      </h5> 
                      <p class="card-text sobre-nos" id="texto1">Designer Gráfico desde 2016, atuo com clientes no Norte de Minas 
                        por meio de estratégias de marketing digital, transformando suas ideias em poderosas conexões visuais. 
                        Meu objetivo como designer é ir além do convencional, desenvolvendo designs comunicativos que cativam 
                        seus clientes, estabelecendo assim uma presença visual impactante e memorável para sua marca.
                      </p>
                      <a class="lerMaisBtn lerMaisSobre" data-target="texto1"><p>Ler mais</p></a>
                      <!-- <button >Ler Mais</button> -->
                      <h3><a href="https://www.behance.net/inceptdesign" ></a><i class="bi bi-behance"></i></h3>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="pr-2 mb-4 col-lg-6 direita-esquerda">
                <div class="row g-0 sobre-container">
                  <div class="col-md-6 col-sm-6">
                    <div style="padding: 5px;">
                      <img src="img/emily.png" class=" rounded-2 quemsomosimg" alt="...">
                      
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class=" text-lg-start mb-2">
                      <h5 class="card-title">Êmily Sousa
                        <p><small><em>Programadora</em></small></p>
                      </h5>                      
                      <p class="card-text sobre-nos" id="texto2"> Desde 2019, me especializei na criação de sites institucionais e plataformas 
                        de comércio eletrônico. Meu trabalho consiste em dar vida às visões dos meus clientes 
                        no cenário digital e comprometo-me em oferecer não apenas uma presença online, 
                        mas também plataformas que impulsionem o sucesso e o crescimento das empresas no ambiente digital. 
                      </p>
                      <a class="lerMaisBtn lerMaisSobre" data-target="texto2"><p>Ler mais</p></a>
                      <h3><i class="bi bi-github"></i></h3>
                      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
            
        <!-- Formulario Fale conosco -->
        <div id="faleconosco" class="container-fluid contfaleconosco hcf-bp-center hcf-bs-cover">
          <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-lg-2 py-5 nocturne">
              <!-- <div class="col-lg-6">
                <div class="slider-thumb"></div>
              </div> -->
              <div class="col-md-10 mx-auto col-lg-5" >
                <form rel="noopener noreferrer" action="https://formsubmit.co/inceptfaleconosco@gmail.com" method="POST" class="formulario-email p-4 p-md-5 rounded-3">
                  <h2>FALE CONOSCO</h2>
                  <p>Nos envie uma solicitação de contato que te retornamos no mesmo dia.</p>
                  <div class="form-floating mb-3 fall-email">
                    <input type="email" name="email" id="email" class="form-control" required placeholder="Insira seu email">
                    <label for="floatingInput">Email para contato</label>
                  </div>
                  <div class="form-floating mb-3 fall-name">
                    <input type="text" name="name" id="name" class="form-control" required placeholder="Seu nome">
                    <label for="floatingInput">Seu Nome</label>
                  </div>
                  <div class="form-floating mb-3 fall-mensagem">
                    <textarea name="message" class="form-control"  rows="10" required placeholder="Em que podemos te ajudar?"></textarea>
                    <label for="floatingInput" id="message">Mensagem</label>
                  </div>

                  <input type="hidden" name="_subject" value="Solicitação de Contato!">
                  <input type="hidden" name="_captcha" value="false">
                  <input type="text" name="_honey" style="display:none">
                  <input type="hidden" name="_next" value="https://inceptdesign.com.br/obrigado.html">

                  <button class="w-100 btn btn-lg btnpersona btn-pdark btn fall-env" type="submit">Enviar</button>
                  
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="espaco-vertical"></div>

        <!-- Galeria -->
        <section id="galeria" class="container my-5 col-xxl-8 pt-5 mt-5" style="align-items: center !important;">
          <div class="row nocturne flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-sm-12 col-md-12 col-lg-4  mb-6" >
              <p class="pretitulo">ANTES DE IR...</p>
              <h2 class="titulo-left">CONHEÇA NOSSA GALERIA</h2>
              <p class="subtitulos" style="max-width: 280px;">Reservamos um espaço especial para nossas artes criativas mais recentes.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="https://www.behance.net/inceptdesign">
                  <button type="button" class="btnpersona btn-yellow btn " style="width: 270px;">VER</button>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-sm-12 col-md-12 mx-auto">
              <div class="rowpersona" >
                <div class="column coluna1" id="row-galeria">
                  <img src="img/1.jpeg" class="cardsgaleria">
                  <img src="img/2.jpeg" class="cardsgaleria">
                  <img src="img/3.jpeg" class="cardsgaleriavari">                    
                </div>
                <div class="column custom-offset coluna2" id="row-galeria">
                  <img src="img/3.jpeg" class="cardsgaleria">
                  <img src="img/4.jpeg" class="cardsgaleriavari">
                  <img src="img/6.jpeg" class="cardsgaleria">                    
                </div>
                <div class="column coluna3" id="row-galeria">
                  <img src="img/7.jpeg" class="cardsgaleria">
                  <img src="img/8.jpeg" class="cardsgaleriavari">
                  <img src="img/9.jpeg" class="cardsgaleria">
                </div>
                <div class="column custom-offset coluna4" id="row-galeria">
                  <img src="img/11.jpeg" class="cardsgaleria">
                  <img src="img/12.jpg" class="cardsgaleriavari">
                  <img src="img/13.jpg" class="cardsgaleria">
                </div>
                <div class="column coluna5" id="row-galeria">
                  <img src="img/4.jpeg" class="cardsgaleriavari">
                  <img src="img/2.jpeg" class="cardsgaleria">
                  <img src="img/5.jpeg" class="cardsgaleria">
                </div>
              </div>  

            </div>
          </div>
        </section>    
      </main>
    
    <!-- Rodapé -->
    <div id="Rodapé" class="container-fluid rodapestyle">
      <div class="fixos fixed-bottom mr-4">
        <div class="mb-5">
          <a href='#topo'>
            <button type="button" class="btn btn-light voltar-topo">                
              <h5><i class="bi bi-chevron-double-up"></i></h5>
            </button>
          </a>
        </div>

        <!-- Botão modo escuro/dark -->

        <!-- <div class="trilho mb-4" id="trilho">
          <div class="indicador">                
          </div> 
          <div class="iconcont">
            <h5>
              <i class="bi bi-sun-fill sol"></i>
              <i class="bi bi-moon-fill lua"></i>
            </h5>
          </div>
        </div> -->
      </div>
      <footer class="pt-5 ">
        <div class="border-top">
          <div class="container">
            <div class="row py-6">
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

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- JS PErsolalizado -->
    <script defer src="js/index.js"></script>
    <script defer src="js/nav.js"></script>
    

    <!-- Jquery 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Masony -->
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

    <!-- Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>


  </body>

</html>