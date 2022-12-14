<!DOCTYPE html>
<html lang="en">

<head>
  <title>GYMCORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('css/style2.css') }}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><img src="{{ asset ('img/lOGO-GYMCORE.png') }}" alt=""></div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Inicio</a></li>
                <li><a href="#section-heading" class="nav-link">Cuidados</a></li>
                <li><a href="#classes-section" class="nav-link">Clases</a></li>
                <li><a href="#schedule-section" class="nav-link">Rutinas</a></li>
                <li><a href="#trainer-section" class="nav-link">Comentarios</a></li>
                <li><a href="#footer-section" class="nav-link">Contacto</a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      </div>

    </header>

    <a id="bgndVideo" class="player"
      data-property="{videoURL:'https://www.youtube.com/watch?v=w-cRWOjlk8c',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:255, stopAt: 271, opacity:1}">
    </a>

    <div class="intro-section" id="home-section" style="background-color: #ccc;">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
            <h1 class="mb-3">Conoce lo que necesitas</h1>
            <p class="lead mx-auto desc mb-5">Control, Gestion de Rutinas y Maquinas</p>
            <p class="text-center">
              <a href="/login" class="btn btn-outline-white py-3 px-5">Inicia Sesi??n</a>
            </p>
          </div>
        </div>

      </div>
    </div>


    <div class="site-section" id="section-heading">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8 section-heading">
            <h2 class="heading mb-3">Funcion</h2>
            <p>Este software esta enfocado en apoyar en la parte logistica del gimnasio cumpliendo con los modulos de rutinas del entrenador y tambien con el de reportes hacia las maquinas</p>
          </div>
        </div>

        <!-- Slider -->
        <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">
          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-fit"></span>
              <div class="ftco-feature-1-text">
                <h2>Se Fit</h2>
                <p>??Quieres mas motivos? solo entrena</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-gym-1"></span>
              <div class="ftco-feature-1-text">
                <h2>Realiza ejercicio</h2>
                <p>el ejercicio regular te ayuda a prevenir el exceso de peso, tener un vientre m??s plano o incluso puede ayudarte a mantener la p??rdida de peso. Considera el hecho de que cuando realizas una actividad f??sica, quemas calor??as.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-gym"></span>
              <div class="ftco-feature-1-text">
                <h2>Gimnasio</h2>
                <p>Desconectar del ajetreado d??a a d??a es muy importante para combatir el estr??s, e ir al gimnasio es una buena estrategia para conseguirlo. Te ayudar?? al relajamiento tanto mental como f??sico, en definitiva, te har?? sentir mejor.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-vegetables"></span>
              <div class="ftco-feature-1-text">
                <h2>Come vegetales y frutas</h2>
                <p>Todos sabemos las bondades de las frutas y vegetales y lo saludables que son. Estos alimentos proporcionan un sin n??mero de vitaminas y minerales, adem??s de fibra que es ideal para mantener una digesti??n normal.</p>
              </div>
            </div>
          </div>

          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-fruit-juice"></span>
              <div class="ftco-feature-1-text">
                <h2>Jugos de frutas</h2>
                <p>Los jugos de frutas son los mejores ayudantes en infinidades de problemas, son bebidas saludables que nos pueden ayudar en nuestro organismo.</p>
              </div>
            </div>
          </div>
          
          <div class="slide">
            <div class="ftco-feature-1">
              <span class="icon flaticon-stationary-bike"></span>
              <div class="ftco-feature-1-text">
                <h2>Realiza cardio</h2>
                <p>El cardio ayuda a quemar muchas calor??as, acelera nuestro metabolismo y mejora nuestro ??ndice de Masa Corporal. Realizar ejercicios cardio de forma regular nos ayudar?? a mantener nuestro peso ideal. Ayuda a controlar la presi??n arterial y fortalece el sistema inmunol??gico</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="bgimg" style="background-image: url('../img/bg_2.jpg');"  data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">Obtenga el resultado que desea</h2>
            <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, laudantium quia blanditiis ipsum. <a href="/login">Inicia Sesi??n</a></p>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section" id="classes-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <h2 class="heading mb-3">Clases</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{ asset('img/img_1.jpg') }}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_2.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{ asset('img/img_3.jpg') }}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_4.jpg') }}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>

            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_1.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
           
          </div>
          <div class="col-lg-6">
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_1.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_2.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_3.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_4.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
            
            <div class="class-item d-flex align-items-center">
              <a href="single.html" class="class-item-thumbnail">
                <img src="{{asset('img/img_1.jpg')}}" alt="Image">
              </a>
              <div class="class-item-text">
                
                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                <span>By Justin Daniel</span>,
                <span>30 minutes</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bgimg" style="background-image: url('img/bg_3.jpg');"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">Every Step Counts</h2>
            <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ad, reprehenderit enim!
               <a href="/login">Inicia Sesi??n</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="schedule-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8  section-heading">
            <h2 class="heading mb-3">Rutinas</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.
              Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

    <div class="bgimg" style="background-image: url('img/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h2 class="">Revisa tus rutinas</h2>
            <p class="lead mx-auto desc mb-5">Usuarioio inicia sesion y revisa tus rutinas actuales y antiguas con los ejercicios destinados a el musculo a entrenar solo <a href="#" target="_blank">Inicia Sesion</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section" id="trainer-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
          <div class="col-md-8  section-heading">
            <h2 class="heading mb-3">Comentarios</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.
              Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
            <div class="person">
              <img src="img/person_1.jpg" alt="Image" class="img-fluid">
              <h3>Justin Daniel</h3>
              <p class="position">Trainer</p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
              texts.</p>
            </div>
          </div>
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="person">
              <img src="img/person_3.jpg" alt="Image" class="img-fluid">
              <h3>Matthew Davidson</h3>
              <p class="position">Trainer</p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                texts.</p>
            </div>
          </div>
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="person">
              <img src="img/person_2.jpg" alt="Image" class="img-fluid">
              <h3>Matthew Davidson</h3>
              <p class="position">Trainer</p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                texts.</p>
            </div>
          </div>
          <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="person">
              <img src="img/person_4.jpg" alt="Image" class="img-fluid">
              <h3>Matthew Davidson</h3>
              <p class="position">Trainer</p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                texts.</p>
            </div>
          </div>
        
        </div>
      </div>
    </div>


    <footer class="footer-section" id="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-dark">Sobre GYMCORE</h3>
            <p>Software enfocado en el manejo de rutinas y el control de las maquinas</p>
            <div class="footer-social">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href="">Twitter<i class="fab fa-twitter"></i></a>
                    <a href="">Instagram<i class="fab fa-instagram"></i></a>
                    <a href="">TikTok<i class="fab fa-tiktok"></i></a>
                
            </div>
          </div>
         

          <div class="col-md-3 ml-auto">
            <h3 class="text-dark">Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Cuidados</a></li>
              <li><a href="#">Clases</a></li>
              <li><a href="#">Rutinas</a></li>
              <li><a href="#">Trainer</a></li>
              <li><a href="#">Trainer</a></li>

            </ul>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> GYMCORE
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

  </div>
  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

</body>

</html>