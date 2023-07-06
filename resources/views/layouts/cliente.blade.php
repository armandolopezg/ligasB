<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>DSports</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <!-- owl css -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="" /></div>
    </div>

    <div class="wrapper">
        <!-- end loader -->

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li 
                        @if(Route::is('games'))
                            class="active"
                        @endif
                    >
                        <a href="{{ route('games')}}">Inicio</a>
                    </li>
                    <li
                        @if(Route::is('players'))
                            class="active"
                        @endif
                    >
                        <a href="{{ route('players')}}">Jugadores</a>
                    </li>
                    <li
                        @if(Route::is('standings'))
                            class="active"
                        @endif
                    >
                        <a href="{{ route('standings')}}">Clasificaciones</a>
                    </li>
                    @if(Route::is('games'))
                        <li>
                            <a href="#about">Acerca De</a>
                        </li>
                        <li>
                            <a href="#training">Inscripción</a>
                        </li>
                        <li>
                            <a href="#games">Juegos</a>
                        </li>
                        <li>
                            <a href="#contact">Ubicación</a>
                        </li>
                    @endif
                </ul>

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <div class="container">
                    <div class="row bor_bottom">
                        <div class="col-md-3">
                            <div class="full">
                                <a class="logo" href="{{ route('games')}}"><img src="{{asset('images/logo2.png')}}" alt="logo" width="100px"/></a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="full">
                                <div class="right_header_info">
                                    <ul>
                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="{{asset('images/menu_icon.png')}}" alt="#">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
            <!-- start slider section -->
            <div class="slider_section banner_main" style="background: url('../public/images/R.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main_text">
                                <h1>Bienvenido a<br><strong class="bold_text">I</strong><strong class="bold_text_black">BIME</strong></h1>
                                <span>El talento gana partidos, pero el trabajo en equipo y la inteligencia ganan campeonatos. (Michael Jordan)</span>
                                <a href="{{route('games')}}">Leer más <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider section -->

            <!-- six_box-->
            @if(Route::is('games'))
            <div class="container">
                <div class="six_box">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                            <div class="black_box yellow_box">
                                <h3>CATEGORÍAS: </h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                            <div class="black_box">
                                <h3>Micro</h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                            <div class="black_box yellow_box">
                                <h3>Mini</h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                            <div class="black_box">
                                <h3>Pasarela</h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                            <div class="black_box yellow_box">
                                <h3>Cadete</h3>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 pppp">
                            <div class="black_box">
                                <h3>Juvenil</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- end six_box-->

            <!-- about -->
            @if(Route::is('games'))
            <div id="about" class="about">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="about_img">
                                <figure><img src="{{asset('images/about-img.jpg')}}" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa-ing">
                            <div class="about_text">
                                <div class="about_text_box">
                                    <h2>Acerca de <strong class="black_white">IBIME</strong></h2>
                                    <p>Bienvenid@ a nuestra página web, tu fuente confiable para estar al tanto de los partidos de baloncesto de las ligas juveniles. Nuestro objetivo es proporcionar a los aficionados del baloncesto y a las familias una plataforma fácil de usar donde puedan acceder a información actualizada sobre los partidos de las ligas juveniles clasificadas en diferentes categorías.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- end about -->

            <!-- training -->
            @if(Route::is('games'))
            <div id="training" class="training">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Cuota de <strong class="black"> Inscripción</strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="training_packages_bg">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="training_packages_box">
                                    <h3>Categorías - Micro y Mini</h3>
                                    <span>$<strong class="white_bold">1500</strong></span>
                                    <p>único</p>
                                    <a class="BookNow">Más Información...</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="training_packages_box">
                                    <h3>Categoría - Pasarela</h3>
                                    <span>$<strong class="white_bold">2500</strong></span>
                                    <p>único</p>
                                    <a class="BookNow">Más Información...</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="training_packages_box">
                                    <h3>Categorías - Cadete y Juvenil</h3>
                                    <span>$<strong class="white_bold">3500</strong></span>
                                    <p>único</p>
                                    <a class="BookNow">Más Información...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- end training -->

            <!-- Games -->
            <div id="games" class="Gallery">
                <div class="container">
                    
                    @yield('content')                   

                </div>
            </div>
            <!-- end Gallery -->

            <div class="contact">
            </div>

            <!-- footer -->
            @if(Route::is('games'))
            <div id="contact" class="container-fluid padddd">
                <div class="col-md-12">                       
                    <div class="title">
                        <h2>Ubicación</h2>
                        <span>Francisco Sarabia Mz. 034, Col. San Isidro Atleuntenco, C.P. 55064, Ecatepec de Morelos, Estado de México</span>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
                    <div class="map_section">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7516.6865363913685!2d-98.990806!3d19.612617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1efddf2ea30b7%3A0x1dcec4434b8d228b!2sCentro%20Cultural%20Ibime!5e0!3m2!1ses-419!2smx!4v1687377769929!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>

        <footer>
            <div class="footer">
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10">
                                <p>© 2023 Creada por AGADJEI</a></p>  
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10">
                                <p>
                                    <i class='fa fa-phone'></i>
                                    <a href="tel:55-4370-5605">55-4370-5605</a>
                                </p>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-1">
                                <p>
                                    <i class='fa fa-phone'></i>
                                    <a href="tel:56-3028-9595">56-3028-9595</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>