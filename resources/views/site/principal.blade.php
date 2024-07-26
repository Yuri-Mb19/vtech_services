<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>V-Tech Website</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+258 847976020</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>infocompany@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>Localizaçao Pendente</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="https://m.facebook.com/profile.php/?id=100093676337988"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="https://www.instagram.com/vtech.mz/" target="_blank"><i class="fab fa-instagram"></i></a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ Route('site.index') }}" class="logo">
                        <img src="{{ asset('assets/images/vtech.png')}}" alt="" style="max-width: 112px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#services">Services</a></li>
                      <li class="scroll-to-section"><a href="#projects">Projects</a></li>
                      <li class="has-sub">
                          <a href="javascript:void(0)">Pages</a>
                          <ul class="sub-menu">
                              <li><a href="{{ Route('site.sobre-nos')}}">About Us</a></li>
                              <li><a href="{{ Route('site.faqs')}}">FAQs</a></li>
                          </ul>
                      </li>
                      <li class="scroll-to-section"><a href="#infos">Infos</a></li>
                      <li class="scroll-to-section"><a href="#contact">Contact</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>V-TECK SERVICES</h6>
            <div class="line-dec"></div>
            <h4>Mergulhe  <em>No </em> Mundo <span>Digital</span></h4>
            <p>Descubra o Poder do Design de Web e Marketing Digital: Criando Experiências Únicas para o Seu Sucesso Online <a href="index.html">Home</a>, <a href="about.html">About</a>, and <a href="faqs.html">FAQ</a>.</p>
            <div class="main-button scroll-to-section"><a href="#services">Saiba Mais</a></div>
            <span>Ou</span>
            <div class="second-button"><a href="{{Route('site.faqs')}}">Veja nossas FAQs</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>Fornecemos diferentes Serviços <em>Recursos  </em> &amp;
                  <span>Para</span> sua Empresa</h2>
                  <div class="line-dec"></div>
                  <p>Desfrute da simplicidade, explore a elegância. Encontre o equilíbrio perfeito entre forma e função.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('assets/images/services-01.jpg') }}" alt="discover SEO" class="templatemo-feature">
                </div>
                <h4>Design Grafico</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('assets/images/services-02.jpg') }}" alt="data analysis" class="templatemo-feature">
                </div>
                <h4>Criação de Website</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('assets/images/services-03.jpg')}}" alt="precise data" class="templatemo-feature">
                </div>
                <h4>Crie Seu Software  &amp; Personalizado</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="{{ asset('assets/images/services-04.jpg') }}" alt="SEO marketing" class="templatemo-feature">
                </div>
                <h4>Marketing Digital  &amp; Gestão de Redes Sociais.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Nossos <em>Trabalhos</em> &amp; <span> Projetos</span></h2>
            <div class="line-dec"></div>
            <p>Transforme Ideias em Realidade.</p>
          </div>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel">
            <div class="item">
              <img src="{{ asset('assets/images/projects-01.jpg')}}" alt="">
              <div class="down-content">
                <h4>Digital Agency HTML Templates</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="{{ asset('assets/images/projects-02.jpg')}}" alt="">
              <div class="down-content">
                <h4>Admin Dashboard CSS Templates</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="{{ asset('assets/images/projects-03.jpg')}}" alt="">
              <div class="down-content">
                <h4>Best Responsive Website Layouts</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="{{ asset('assets/images/projects-04.jpg')}}" alt="">
              <div class="down-content">
                <h4>HTML CSS Layouts for your websites</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="{{ asset('assets/images/projects-02.jpg')}}" alt="">
              <div class="down-content">
                <h4>Bootstrap 5 Themes for Free</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="{{ asset('assets/images/projects-03.jpg')}}" alt="">
              <div class="down-content">
                <h4>Mobile Friendly Website Layouts</h4>
                <a href="#"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="infos section" id="infos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="{{ asset('assets/images/left-infos.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2>Saiba Mais <em>Sobre Nós</em> &amp; Nossos<span> Serviços</span></h2>
                  <div class="line-dec"></div>
                  <p>Desenvolvemos websites, sistemas e softwares personalizados para gestão bancária, farmácias e outros setores. Além disso, oferecemos serviços de design gráfico para elevar a presença visual da sua marca. Conheça as soluções que transformarão sua visão em realidade</p>
                </div>
                <div class="skills">
                  <div class="skill-slide marketing">
                    <div class="fill"></div>
                    <h6>Marketing</h6>
                    <span>90%</span>
                  </div>
                  <div class="skill-slide digital">
                    <div class="fill"></div>
                    <h6>Desin Grafico</h6>
                    <span>80%</span>
                  </div>
                  <div class="skill-slide media">
                    <div class="fill"></div>
                    <h6>Social Media Managing</h6>
                    <span>95%</span>
                  </div>
                </div>
                <p class="more-info">Empenhamo-nos em oferecer soluções inovadoras para atender às suas necessidades. Com especialização em design gráfico, desenvolvimento de websites e sistemas personalizados, buscamos proporcionar experiências únicas. Seja para aprimorar a presença online, implementar sistemas eficientes ou criar uma identidade visual envolvente, estamos aqui para transformar sua visão em realidade. Conte conosco para impulsionar o seu sucesso.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center">
          <div class="caption  header-text">
            <h6>SEO DIGITAL AGENCY</h6>
            <div class="line-dec"></div>
            <h4>Descubra Mais <em>Sobre Nós</em></h4>
            <p>Somos uma empresa especializada em proporcionar soluções abrangentes, desde marketing digital e design gráfico até a criação de sistemas e websites, visando impulsionar a presença online e o sucesso de nossos clientes.</p>
            <div class="main-button"><a href="{{Route('site.sobre-nos')}}">Saiba Mais</a></div>
            <span>or</span>
            <div class="second-button"><a href="{{ Route('site.faqs')}}">Check our FAQs</a></div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <img src="{{ asset('assets/images/about-us-image.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </div>


  <div class="happy-clients section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Nossos 4 Passos  <em>Para o Sucesso</em> &amp; <span>Clientes Satisfeitos</span></h2>
            <div class="line-dec"></div>
            <p>Conquistamos o sucesso e clientes satisfeitos seguindo nossos 4 passos:
               compromisso, inovação, colaboração e atendimento excepcional.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="active"><span>Apresentação do Projeto</span></div>
                    <div><span>Desenvolvimento do Trabalho</span></div>
                    <div><span>Data Analysis</span></div>
                    <div class="last-item"><span>Finalização do Projeto</span></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Compreensão Profunda das Necessidades do Cliente</h4>
                            <div class="line-dec"></div>
                            <p>Acreditamos no poder da compreensão profunda das necessidades únicas de cada cliente.
                               Antes de iniciar qualquer projeto,
                               dedicamos tempo para ouvir e entender seus objetivos, desafios e visão de negócios.</p>
                            <div class="info">
                              <span>Personalização</span>
                              <span>Análise de Necessidades</span>
                              <span>Consultoria Especializada</span>
                              <span class="last-span">Soluções Sob Medida</span>
                            </div>
                            <p>Nos dedicamos apaixonadamente a proporcionar soluções 
                              abrangentes e inovadoras para atender às necessidades digitais do seu negócio.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="{{ asset('assets/images/happyclient-01.jpg')}}" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Soluções Personalizadas e Inovadoras</h4>
                            <div class="line-dec"></div>
                            <p>Oferecemos soluções personalizadas e inovadoras que atendem às demandas específicas de cada cliente.
                               Seja na criação de um website envolvente, no desenvolvimento de sistemas sob medida ou na execução de estratégias de marketing digital,
                                nossa abordagem é sempre adaptada às suas metas.</p>
                            <div class="info">
                              <!-- Palavras-chave relacionadas ao título -->
                              <span>Desenvolvimento Web</span>
                              <span>Design Responsivo</span>
                              <span>Estratégias de Marketing</span>
                              <span class="last-span">Inovação Digital</span>
                            </div>
                            <p>Estamos prontos para transformar sua visão em realidade. Entre em contato conosco e descubra como podemos impulsionar o sucesso do seu negócio.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="{{ asset('assets/images/happyclient-01.jpg')}}" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Transparência e Comunicação Eficiente</h4>
                            <div class="line-dec"></div>
                            <p>Acreditamos na transparência e na comunicação eficiente ao longo de todo o processo. Mantemos nossos clientes informados sobre o progresso,
                               prazos e qualquer desenvolvimento relevante.</p>
                            <div class="info">
                                <!-- Palavras-chave relacionadas ao título -->
                                <span>Otimização de Busca (SEO)</span>
                                <span>Estratégias de Marketing</span>
                                <span>Comunicação Transparente</span>
                                <span class="last-span">Desenvolvimento</span>
                            </div>
                            <p>Estamos comprometidos em construir uma parceria sólida baseada na confiança mútua</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="{{ asset('assets/images/happyclient-01.jpg')}}" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="row">
                          <div class="col-lg-7">
                            <h4>Suporte Contínuo e Satisfação do Cliente</h4>
                            <div class="line-dec"></div>
                            <p>Nosso compromisso não termina com a conclusão do projeto. 
                              Oferecemos suporte contínuo para garantir que nossos clientes estejam satisfeitos a longo prazo</p>
                            <div class="info">
                                  <!-- Palavras-chave relacionadas ao título -->
                                  <span>Assistência Personalizada</span>
                                  <span>Resolução Rápida de Problemas</span>
                                  <span>Suporte Proativo</span>
                                  <span class="last-span">Feedback do Cliente</span>
                            </div>
                            <p>Estamos aqui para responder a perguntas, fornecer treinamento e ajustar soluções conforme necessário, contribuindo para o sucesso contínuo do seu negócio.</p>
                          </div>
                          <div class="col-lg-5 align-self-center">
                            <img src="{{ asset('assets/images/happyclient-01.jpg')}}" alt="">
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="most-asked section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Perguntas <em>Mais</em> Frequentemente <span>Feitas</span> ?</h2>
            <div class="line-dec"></div>
            <p>Bem-vindo à nossa seção de Perguntas Frequentemente Feitas (FAQ)!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                  <span>Como o marketing digital pode beneficiar minha empresa?</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>O marketing digital pode aumentar sua visibilidade online,
                         atrair novos clientes, melhorar o engajamento e gerar leads qualificados,
                          contribuindo para o crescimento e sucesso do seu negócio.</p>
                  </div>
              </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Quanto tempo leva para desenvolver um site ou sistema personalizado?</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>O tempo de desenvolvimento varia conforme a complexidade do projeto. 
                      Projetos simples podem ser concluídos em algumas semanas, 
                      enquanto projetos mais complexos podem levar alguns meses. 
                      Nosso objetivo é entregar soluções eficientes e de alta 
                      qualidade no menor tempo possível.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Como o gerenciamento de mídias sociais pode impactar minha presença online?</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>O gerenciamento de mídias sociais é crucial para construir e manter uma presença online forte. 
                      Ele ajuda a interagir com seu público-alvo, promover sua marca, 
                      fornecer suporte ao cliente e impulsionar o reconhecimento da marca.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Quais são os custos envolvidos nos serviços oferecidos?</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                  <p>Os custos variam de acordo com o escopo e a complexidade do projeto.
                     Oferecemos soluções personalizadas para atender às necessidades específicas de cada cliente.
                     Entre em contato para discutir suas metas e receber uma cotação personalizada.</p>
                </div>
            </div>
          </article>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="get-free-quote">
          
        </div>
      </div>
      </div>
    </div>
  </div>


  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-4">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="670px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-8">
                @component('site.layouts._components.form_contato')
                @endcomponent
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4><a href="#">010-020-0340</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="#">info@company.com</a></h4>
                        <h4><a href="#">hello@company.com</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><a href="#">Sunny Isles Beach, FL 33160, United States</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 <a href="#">Tale SEO Agency</a>. All rights reserved. 
        
        <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>
