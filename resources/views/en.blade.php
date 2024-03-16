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
    <link rel="stylesheet" type="text/css" href="incept/css/principal-en.css">
    <link rel="stylesheet" href="incept/css/personalizados.css">
    <link rel="stylesheet" href="incept/css/galeria.css">
    <link rel="stylesheet" href="incept/css/loading.scss">

    <!-- Jss -->
    <!-- <script defer src="loading.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/three@0.134.0/build/three.min.js"></script> -->

    <!-- Icones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Incept Desing</title>
    <link rel="shortcut icon" type="imagex/png" href="/incept/img/logo-icon.ico">
  </head>

  <body>

  <script>
      // Função para redirecionar com base na localização do usuário
      function redirecionarPorLocalizacao() {
        // Verifica se o navegador suporta a geolocalização
        if (navigator.geolocation) {
            // Obtém a posição do usuário
            navigator.geolocation.getCurrentPosition(function(position) {
                // Obtém as coordenadas de latitude e longitude
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                // Verifica se as coordenadas estão dentro da América do Norte
                if (latitude > 25 && latitude < 60 && longitude > -170 && longitude < -50) {
                    // Redireciona para a versão em inglês
                    window.location.href = '/en';
                } else if (latitude > -35 && latitude < 5 && longitude > -75 && longitude < -35) {
                    // Redireciona para a versão em português (Brasil)
                    window.location.href = '/pt';
                } else {
                    // Redireciona para a versão em inglês para qualquer outro lugar do mundo
                    window.location.href = '/en';
                }
            });
        } else {
            // Navegador não suporta geolocalização, redireciona para a versão em inglês por padrão
            window.location.href = '/en';
        }
    }

    // Chama a função para redirecionar
    redirecionarPorLocalizacao();
  </script> 


    <!-- Tela de carregamento -->
    <div class="tela-carregamento" id="telaCarregamento"> 
      <img class="img-fluid" style="width: 100px; height: 100px;" src="incept/img/giphy.gif">
    </div>
    <div class="container-fluid mx-auto flex-column" style="padding: 0px !important;" id="conteudoPagina">
    <div class="interface fixed-top mx-5" id="menu-menor">
        <!-- Desktop Menu -->
        <nav id="menu" class="menu-desktop navbar bg-transparent fixed-top navbar-expand-lg navbar-dark mb-4 fall">
            <div class="container">
                <a href="/">
                    <img class="logopersona" src="incept/img/incept-ligth.png" alt="Incept Design">
                </a> 
                <ul id="ulnav" class="esconder-mobile padding-nav" style="margin-bottom: 0px;">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#oquefazemos">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#portifolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#olanoseprecos">Plans and Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#quemsomos">About us</a>
                    </li>
                    <li class="nav-item dropdown-persona">
                        <a class="nav-link dropbtn">Contact</a>
                        <ul class="dropdown-content">
                            <li><a class="nav-link" href="https://www.instagram.com/incep.design/">Instagram</a></li>
                            <li><a class="nav-link" href="https://api.whatsapp.com/send/?phone=5538998604242&text&type=phone_number&app_absent=0">Whatsapp</a></li>
                            <li><a class="nav-link" href="#contactus">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="btn-abrir-menu" id="btn-menu">
                    <i class="bi bi-list"></i>
                </div>
            </div>
        </nav>
        <!-- Mobile Menu -->
        <nav class="menu-mobile" id="menu-mobile">
            <div class="btn-fechar">
                <i class="bi bi-x-lg"></i>
            </div> 
            <ul id="menu-menor">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#whatwedo">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#plansandpricing">Plans and Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#aboutus">About us</a>
                </li>
                <li class="nav-item" id="contact">
                    <a class="nav-link"></i>Contact: </i></a>              
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
                            <a class="nav-link" href="#contactus">
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
        <!-- Home -->
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
                    <span class="somos-incept my-4 mr-4" id="prefix">We are </span>
                    <span class="somos-incept my-4" id="typing"></span>
                </h1> -->
                <h1 class="somos">We are Incept</h1>
                <div class="col-lg-4 mx-auto">
                    <p class="txt-init">Creative and socially conscious, we specialize in strategic and business design.</p>
                </div>
                
                </div>
            </div>
            <div class="deslizeposition">
                <div class="deslizecont">
                <p class="deslize">SLIDE</p>
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

        <!-- Wave svg -->
        <div class="onda-position">
          <svg class="onda-light ondasvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill = "#fff" fill-opacity="1" 
              d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,160C960,181,1056,203,1152,186.7C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
          </svg>
        </div>

        <!-- What we do -->
        <div id="oquefazemos">
            <div class="nocturne container title-inner my-5 py-5">
                <div class="row flex-lg-row g-5">
                    <div class="col-lg-3 p-4 m-0">
                        <p class="pretitulo">WHAT WE DO?</p>
                        <h2 class="titulo-left">WE OFFER CREATIVE SERVICES</h2>
                        <p class="subtitulo-left">Tailor-made solutions that drive your business forward. We combine creativity and technique to build strong brands, impactful campaigns, and effective digital solutions.</p>
                    </div>
                    <div class="col-lg-9 col-sm-12 col-12" style="margin: 0px !important;">
                        <div class="container">
                            <div class="row">
                                <div class="row ">
                                    <div class="col-lg-6 col-sm-12 d-flex align-items-start p-3 mb-6">
                                        <img src="incept/img/inspiracao.png" class="imgservicos">
                                        <div class="pl-2">
                                            <h5 class="tituloservicos">STRATEGY</h5>
                                            <p class="descricaoservicos">Creative and intelligent design is not enough. It needs to be complemented with strategy and reach techniques. We carefully analyze demographic, behavioral, and customer preference data...</p>                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 d-flex align-items-start p-3 mb-6">
                                        <img src="incept/img/codificacao.png" class="imgservicos">
                                        <div class="pl-2">
                                            <h5>DEVELOPMENT</h5>
                                            <p class="descricaoservicos">Corporate websites, online stores, and Business Management Systems. We offer the complete package to make your company take off. We prioritize the creation of intuitive platforms that offer an exceptional user experience...</p>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 d-flex align-items-start p-3 mb-6">
                                        <img src="incept/img/vetor.png" class="imgservicos">
                                        <div class="pl-2">
                                            <h5>WEB DESIGN</h5>
                                            <p class="descricaoservicos">Maintaining your Visual Identity is our specialty. We offer innovative and customized templates to enhance the online presence of our clients. When creating visual identities, we seek to convey...</p>                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 d-flex align-items-start p-3 mb-6">
                                        <img src="incept/img/lancamento.png" class="imgservicos">
                                        <div class="pl-2">
                                            <h5>DIGITAL MARKETING</h5>
                                            <p class="descricaoservicos">We help you boost your brand from scratch. Reach customers with current resources, online and professional consultancy. We believe that marketing goes far beyond simply promoting products or services...</p>                                           
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

            <div class="container">
              <div class="pt-5 my-5 py-5 text-center controlers">
              <h2>RECENT PROJECTS</h2>
              <ul>
                <li class="list active" data-filter="tudo"><i class="bi bi-star-fill"></i>
                  ALL
                </li>
                <li class="list" data-filter="design"><i class="bi bi-vector-pen"></i>
                  CREATIVE DESIGN
                </li>
                <li class="list" data-filter="dev"><i class="bi bi-code-slash"></i>
                  DEVELOPMENT
                </li>
                <li class="list" data-filter="ads"><i class="bi bi-rocket-takeoff-fill"></i>
                  ADS
                </li>
              </ul>
      
                <div class="projetos mt-5">
                  
                  <div class="projeto image" data-item="design" style="background-image: url(incept/img/8.jpeg);"onclick="openProductPage('Mother s Day Campaign', 'R. Prates', 'incept/img/8.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Mother's Day Campaign</h1>
                              <p class="pauthor">R. Prates</p>
                          </div>
                      </div>
                  </div>
                  <div class="projeto image" data-item="dev" style="background-image: url(incept/img/principal-lj.png);"onclick="openProductPage('Campaign Against Racial Discrimination', 'R. Prates', 'incept/img/1.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Furniture Store E-commerce</h1>
                              <p class="pauthor">E. Sousa</p>
                          </div>
                      </div>
                  </div>
                  <div class="projeto image" data-item="design" style="background-image: url(incept/img/5.jpeg);"onclick="openProductPage('Holy Week Celebration', 'R. Prates', 'incept/img/5.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Holy Week Celebration</h1>
                              <p class="pauthor">R. Prates</p>
                          </div>
                      </div>
                  </div>
                  <div class="projeto image" data-item="dev" style="background-image: url(incept/img/principal-mc.png);"onclick="openProductPage('Blood Donation Campaign', 'R. Prates', 'incept/img/7.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Women's Accessories E-commerce</h1>
                              <p class="pauthor">E. Sousa</p>
                          </div>
                      </div>
                  </div>

                  <div class="projeto image" data-item="ads" style="background-image: url(incept/img/13.jpg);"onclick="openProductPage('Tiradentes Day', 'R. Prates', 'incept/img/13.jpg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Tiradentes Day</h1>
                              <p class="pauthor">R. Prates</p>
                          </div>
                      </div>
                  </div>
                  <div class="projeto image" data-item="dev" style="background-image: url(incept/img/principal-rr.png);"onclick="openProductPage('Product Promotion', 'R. Prates', 'incept/img/11.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Women's Clothing E-commerce</h1>
                              <p class="pauthor">E. Sousa</p>
                          </div>
                      </div>
                  </div>
                  <div class="projeto image" data-item="design" style="background-image: url(incept/img/12.jpg);"onclick="openProductPage('Holy Week', 'R. Prates', 'incept/img/12.jpg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Holy Week</h1>
                              <p class="pauthor">R. Prates</p>
                          </div>
                      </div>
                  </div>
                  <div class="projeto image" data-item="ads" style="background-image: url(incept/img/3.jpeg);"onclick="openProductPage('Product Promotion', 'R. Prates', 'incept/img/3.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Product Promotion</h1>
                              <p class="pauthor">R. Prates</p>
                          </div>
                      </div>
                  </div>

                  <div class="projeto image" data-item="ads" style="background-image: url(incept/img/4.jpeg);"onclick="openProductPage('Road Safety Campaign', 'R. Prates', 'incept/img/4.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Road Safety Campaign</h1>
                              <p class="pauthor">R. Prates</p>
                          </div>
                      </div>
                  </div>
                  <div class="projeto image" data-item="ads" style="background-image: url(incept/img/6.jpeg);"onclick="openProductPage('Discovery of Brazil', 'R. Prates', 'incept/img/6.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Discovery of Brazil</h1>
                              <p class="pauthor">R. Prates</p>
                          </div>
                      </div>
                  </div>
                  <div class="projeto image" data-item="dev" style="background-image: url(incept/img/principal-pb.png);"onclick="openProductPage('Product Promotion', 'R. Prates', 'incept/img/2.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Gas Station Institutional</h1>
                              <p class="pauthor">E. Sousa</p>
                          </div>
                      </div>
                  </div>
                  <div class="projeto image" data-item="design" style="background-image: url(incept/img/9.jpeg);"onclick="openProductPage('Valentine's Day Campaign', 'R. Prates', 'incept/img/9.jpeg')">
                      <div class="gobody overlay">
                          <div class="relative">
                              <h1 class="ptitle">Valentine's Day Campaign</h1>
                              <p class="pauthor">R. Prates</p>
                          </div>
                      </div>
                  </div>

                </div>
              </div>
            </div>            
          </div>
          
        </section>

        <!-- Plans and Prices -->
        <section id="planoseprecos" class="container-fluid planosbk img-fluid cover py-lg-10 hcf-bp-center hcf-bs-cover hcf-overlay">
            <div class="container py-5">
                <div class="text-center">
                    <div class="sectionplanos">
                        <div class="contplanos">
                            <div class="infoplanos efeito-card1 col-lg-3 col-md-12 col-sm-12 mb-5">           
                                <p class="pretitulo-ligth"><b>PLANS AND PRICES</b></p>
                                <h5 class="oferecemosservicos">WE OFFER AFFORDABLE AND FLEXIBLE PLANS.</h5>
                                <p style="color: #fff;">For a customized plan, contact us through the <span class="span-dec">link:</span></p>
                                <a rel="noopener noreferrer" href="https://api.whatsapp.com/send/?phone=5538998604242&text=Hi! I'd like a customized plan&type=phone_number&app_absent=0" target="_blank">
                                    <button class="btnpersona btn-highligth btn" style="width: 250px;"><b>CONTACT</b></button>
                                </a>
                            </div>

                            <div class="plano cardplanos efeito-card2">
                                <div class="card-header headplanos">
                                    <h3 class="nomeplanos">$300</h3>
                                    <p class="precoplanos">Basic</p>
                                    <p class="tipoplanos">monthly fee</p>
                                </div>
                                <ol class="card-body contentplanos">
                                    <li>Social media management;</li>
                                    <li>Visual Identity;</li>
                                    <li>Content creation;</li>
                                    <li>Social media;</li>
                                    <li>First Ad campaign.</li>
                                </ol>
                                <div class="rodapeplanos">
                                    <div class="button-group">
                                        <a rel="noopener noreferrer" href="https://api.whatsapp.com/send/?phone=5538998604242&text=Hi! I'm interested in the Basic Plan, can you tell me more about it?&type=phone_number&app_absent=0" target="_blank">
                                            <button class="other-buttonn">Hire</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="plano cardplanos efeito-card3">
                                <div class="card-header headplanos">
                                    <h3 class="nomeplanos">$500</h3>
                                    <p class="precoplanos">Intermediate</p>
                                    <p class="tipoplanos">monthly fee</p>
                                </div>
                                <ol class="card-body contentplanos">
                                    <li>Social media management and administration;</li>
                                    <li>Meetings and support;</li>
                                    <li>Unlimited posts;</li>
                                    <li>Google Business maintenance;</li>
                                    <li>Client acquisition through WhatsApp Business;</li>
                                    <li>Creation and management of ads (Facebook, Instagram, and Google ADS);</li>
                                    <li>Social media.</li>
                                </ol>                      
                                <div class="rodapeplanos">
                                    <div class="button-group">
                                        <button class="read-more botao-pulsante" id="meuBotao">See more</button>
                                        <a rel="noopener noreferrer" href="https://api.whatsapp.com/send/?phone=5538998604242&text=Hi! I'm interested in the Intermediate Plan, can you tell me more about it?&type=phone_number&app_absent=0" target="_blank">
                                            <button class="other-button">Hire</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="plano cardplanos efeito-card4">
                                <div class="card-header headplanos">
                                    <h3 class="nomeplanos">$1.000</h3>
                                    <p class="precoplanos">Complete</p>
                                    <p class="tipoplanos">monthly fee</p>
                                </div>
                                <ol class="card-body contentplanos">
                                    <li>Website creation (institutional);</li>
                                    <li>Website assistance, maintenance, and administration;</li>
                                    <li>Social media management and administration;</li>
                                    <li>Meetings and support;</li>
                                    <li>Unlimited posts;</li>
                                    <li>Google Business maintenance;</li>
                                    <li>Client acquisition through WhatsApp Business;</li>
                                    <li>Creation and management of ads (Facebook, Instagram, and Google ADS);</li>
                                    <li>Social media.</li>
                                </ol>                     
                                <div class="rodapeplanos">
                                    <div class="button-group">
                                        <button class="read-more">See more</button>
                                        <a rel="noopener noreferrer" href="https://api.whatsapp.com/send/?phone=5538998604242&text=Hi! I'm interested in the Complete Plan, can you tell me more about it?&type=phone_number&app_absent=0" target="_blank">
                                            <button class="other-button">Hire</button>
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

        <!-- About Us -->
        <div id="quemsomos" class="container-fluid">
          <div class="container">
            <div class="row container nocturne my-5 p-5">
              <h2 class="titulos text-center mb-5 fall">FOUNDERS</h2>

              
              <div class="pr-2 mb-4 col-lg-6 esquerda-direita">
                <div class="row g-0 sobre-container">
                  <div class="col-md-6 col-sm-6">
                    <div style="padding: 5px;">
                      <img src="/incept/img/rodrigo.png" class="rounded-2 quemsomosimg image-container" alt="...">                      
                    </div> 
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="">
                      <h5 class="card-title">Rodrigo Prates
                        <p><small><em>Graphic Designer</em></small></p>
                      </h5> 
                      <p class="card-text sobre-nos" id="texto1">Graphic Designer since 2016, I work with clients in the North of Minas 
                        through digital marketing strategies, transforming their ideas into powerful visual connections. 
                        My goal as a designer is to go beyond the conventional, developing communicative designs that captivate 
                        your clients, thus establishing a striking and memorable visual presence for your brand.
                      </p>
                      <a class="lerMaisBtn lerMaisSobre" data-target="texto1"><p>Read more</p></a>
                      <!-- <button >Read More</button> -->
                      <h3 class="icone-ancora"><a href="https://www.behance.net/inceptdesign"><i class="bi bi-behance"></i></a></h3>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="pr-2 mb-4 col-lg-6 direita-esquerda">
                <div class="row g-0 sobre-container">
                  <div class="col-md-6 col-sm-6">
                    <div style="padding: 5px;">
                      <img src="/incept/img/emily.png" class=" rounded-2 quemsomosimg" alt="...">
                      
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class=" text-lg-start mb-2">
                      <h5 class="card-title">Emily Sousa
                        <p><small><em>Programmer</em></small></p>
                      </h5>                      
                      <p class="card-text sobre-nos" id="texto2"> Since 2019, I have specialized in creating institutional websites and e-commerce platforms. 
                        My work consists of bringing my clients' visions to life in the digital scene and I am committed to offering not only an online presence, 
                        but also platforms that drive the success and growth of companies in the digital environment.
                      </p>
                      <a class="lerMaisBtn lerMaisSobre" data-target="texto2"><p>Read more</p></a>
                      <!-- <h3 class="icone-ancora"><a href="https://www.behance.net/inceptdesign"><i class="bi bi-github"></i></a></h3> -->
                      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
            
        <!-- Contact Us Form -->
        <div id="faleconosco" class="container-fluid contfaleconosco hcf-bp-center hcf-bs-cover">
          <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-lg-2 py-5 nocturne">
              <!-- <div class="col-lg-6">
                <div class="slider-thumb"></div>
              </div> -->
              <div class="col-md-10 mx-auto col-lg-5">
                <form rel="noopener noreferrer" action="https://formsubmit.co/inceptfaleconosco@gmail.com" method="POST" class="formulario-email p-4 p-md-5 rounded-3">
                  <h2>CONTACT US</h2>
                  <p>Send us a contact request and we'll get back to you the same day.</p>
                  <div class="form-floating mb-3 fall-email">
                    <input type="email" name="email" id="email" class="form-control" required placeholder="Enter your email">
                    <label for="floatingInput">Email for contact</label>
                  </div>
                  <div class="form-floating mb-3 fall-name">
                    <input type="text" name="name" id="name" class="form-control" required placeholder="Your name">
                    <label for="floatingInput">Your Name</label>
                  </div>
                  <div class="form-floating mb-3 fall-mensagem">
                    <textarea name="message" class="form-control" rows="10" required placeholder="How can we help you?"></textarea>
                    <label for="floatingInput" id="message">Message</label>
                  </div>

                  <input type="hidden" name="_subject" value="Contact Request!">
                  <input type="hidden" name="_captcha" value="false">
                  <input type="text" name="_honey" style="display:none">
                  <input type="hidden" name="_next" value="https://inceptdesign.com.br/obrigado.html">

                  <button class="w-100 btn btn-lg btnpersona btn-pdark btn fall-env" type="submit">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="espaco-vertical"></div>
        <!-- Gallery -->
        <section id="galeria" class="container my-5 col-xxl-8 pt-5 mt-5" style="align-items: center !important;">
          <div class="row nocturne flex-lg-row-reverse align-items-center g-5 py-5 container">
            <div class="col-sm-12 col-md-12 col-lg-4 mb-2 px-4">
              <p class="pretitulo">BEFORE YOU GO...</p>
              <h2 class="titulo-left">CHECK OUT OUR GALLERY</h2>
              <p class="subtitulos" style="max-width: 280px;">We've reserved a special space for our latest creative arts.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="https://www.behance.net/inceptdesign">
                  <button type="button" class="btnpersona btn-yellow btn " style="width: 270px;">SEE</button>
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-sm-12 col-md-12 mx-auto">
              <div class="rowpersona">
                <div class="column coluna1" id="row-galeria">
                  <img src="/incept/img/1.jpeg" class="cardsgaleria">
                  <img src="/incept/img/2.jpeg" class="cardsgaleria">
                  <img src="/incept/img/3.jpeg" class="cardsgaleriavari">
                </div>
                <div class="column custom-offset coluna2" id="row-galeria">
                  <img src="/incept/img/3.jpeg" class="cardsgaleria">
                  <img src="/incept/img/4.jpeg" class="cardsgaleriavari">
                  <img src="/incept/img/6.jpeg" class="cardsgaleria">
                </div>
                <div class="column coluna3" id="row-galeria">
                  <img src="/incept/img/7.jpeg" class="cardsgaleria">
                  <img src="/incept/img/8.jpeg" class="cardsgaleriavari">
                  <img src="/incept/img/9.jpeg" class="cardsgaleria">
                </div>
              </div>
            </div>
          </div>
        </section>   
      </main>
    
    <!-- Footer -->
    <div id="Rodapé" class="container-fluid rodapestyle">
      <div class="fixos fixed-bottom mr-4">
        <div class="mb-5">
          <a href='#topo'>
            <button type="button" class="btn btn-light voltar-topo">                
              <h5><i class="bi bi-chevron-double-up"></i></h5>
            </button>
          </a>
        </div>

        <!-- Dark mode toggle button -->

        <!-- <div class="rail mb-4" id="rail">
          <div class="indicator">                
          </div> 
          <div class="icon-container">
            <h5>
              <i class="bi bi-sun-fill sun"></i>
              <i class="bi bi-moon-fill moon"></i>
            </h5>
          </div>
        </div> -->
      </div>
      <footer class="pt-5 ">
        <div class="border-top">
          <div class="container">
            <div class="row py-6">
              <div class="mx-4 col-lg-2 col-md-12 my-4" >              
                <img src="/incept/img/incept-ligth.png" style="width: 50px;" class="img-fluid">
              </div>
        
              <div class="col-lg-2 col-md-3 col-sm-3 my-3 pl-5">
                <h5>HOME</h5>
                <ul class="nav flex-column my-3">
                  <li class="nav-item mb-2"><a href="pages/pages.html#aboutus" class="nav-link p-0 text-muted"  target="_blank">About us</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#serv" class="nav-link p-0 text-muted">Services</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#port" class="nav-link p-0 text-muted">Portfolio</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#orcament" class="nav-link p-0 text-muted">Quotes</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#prazos" class="nav-link p-0 text-muted">Deadlines and prices</a></li>
                </ul>
              </div>
        
              <div class="col-lg-2 col-md-3 col-sm-3 my-3 pl-5">
                <h5>DEVELOPMENT</h5>
                <ul class="nav flex-column my-3">
                  <li class="nav-item mb-2"><a href="pages/pages.html#ecommerce" class="nav-link p-0 text-muted">E-commerces</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#insti" class="nav-link p-0 text-muted">Institutional</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#templates" class="nav-link p-0 text-muted">Templates</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#implement" class="nav-link p-0 text-muted">Implementation</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#rights" class="nav-link p-0 text-muted">Copyrights</a></li>
                </ul>
              </div>
    
              <div class="col-lg-2 col-md-3 col-sm-3 my-3 pl-5">
                <h5>HELP</h5>
                <ul class="nav flex-column my-3">
                  <li class="nav-item mb-2"><a href="pages/pages.html#contact" class="nav-link p-0 text-muted">Contact us</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#report" class="nav-link p-0 text-muted">Report error</a></li>
                  <li class="nav-item mb-2"><a href="pages/pages.html#feedback" class="nav-link p-0 text-muted">Feedback</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-2 col-sm-3 my-3 pl-5">
                <h5>CONTACT CHANNELS</h5>
                <ul class="nav flex-column my-3 ">
                  <li class="nav-item mb-2"><a href="#faleconosco" class="nav-link p-0 text-muted"><span><i class="bi bi-envelope"></i>inceptfaleconosco@gmail.com</span></a></li>
                  <li class="nav-item mb-2"><a href="https://api.whatsapp.com/send/?phone=5538998604242&text&type=phone_number&app_absent=0" class="nav-link p-0 text-muted"><span><i class="bi bi-telephone"></i>(38) 99860-4242</span></a></li>               
                </ul>
                <h5 class="mt-5">FIND US HERE</h5>
                <ul class="list-unstyled d-flex my-3 icon-social">
                  <li class="">
                    <a href="https://www.instagram.com/incept.design/">
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
          <p class="mt-4"><span class="incept">@2023 INCEPT DESIGN </span> <span class="allrightsreserved">| ALL RIGHTS RESERVED.</span> </p>
        </div>
        
      </footer>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- JS PErsolalizado -->
    <script defer src="/incept/js/index.js"></script>
    <script defer src="/incept/js/nav.js"></script>
    <script defer src="/incept/js/verifica-localizacao.js"></script>
    

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