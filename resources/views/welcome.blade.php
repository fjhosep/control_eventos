<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('./css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('./css/carrousel.css') }}" rel="stylesheet" /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css')}}" /> -->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">

    <title>VENEZUELA LATIN DANCE CUP.</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body>

    <!-- ================================================= -->
    <!-- =                   Encabezado                  = -->
    <!-- ================================================= -->
    <header class="container-fluid bg-primary d-flex justify-content-center">
        <!-- mb-0, p-2, fs-6 hace referencia al margen al pading y al tamo de la fuente respectivamente -->
        <p class="text-light mb-0 p-2 fs-6">Contactanos al 0426-3208106</p>

    </header>
    <nav class="navbar navbar-expand-lg bg-light p-3" id="menu">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span class="text-primary fs-5 fw-bold"> VENEZUELA LATIN DANCE CUP.</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registro</a>
                    </li>
                    @endif
                    @endif
                </ul>

                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="email" placeholder="Correo Electrónico" aria-label="email">
                    <button class="btn btn-primary btn-primary-outline-success" type="button">Suscribete</button>
                </form> -->
            </div>
            @endif
        </div>
    </nav>

    <!-- ================================================= -->
    <!-- =            Slider de Imagenes                 = -->
    <!-- ================================================= -->
    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="{{asset('./img/slide_01.jpg')}}" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{asset('./img/slide_02.jpg')}}" class="d-block w-100" alt="slide2">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{asset('./img/slide_03.jpg')}}" class="d-block w-100" alt="slide3">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div> -->

    <!-- ---------------------------------------------------------- -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('./img/slide_01.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('./img/slide_02.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('./img/slide_03.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- ================================================= -->
    <!-- =                    Intro                      = -->
    <!-- ================================================= -->

    <section class="w-50 mx-auto text-center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">El Evento que reune a los mejores exponentes del baile en una <span class="text-primary"> Competencia Única</span></h1>
        <p class="p-3 fs-4"><span class="text-primary">Venezuela Latin Dance Cup.</span> Inscribite y participa en uno de los eventos de mas prestigio de la región.
        </p>
    </section>

    <!-- ================================================= -->
    <!-- =                    Servicio                   = -->
    <!-- ================================================= -->
    <section class="container-fluid">

        <div class="row w-75 mx-auto  servicio-fila">

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex  my-5 icono-wrap">
                <img src="{{asset('./img/dibujo_01.png')}}" alt="desarrollo" width="180" height="160">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Competencias</h3>
                    <p class="px-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem nobis ullam a debitis? Tenetur, a adipisci hic sed perspiciatis animi distinctio optio velit nobis eos, et, dolor quibusdam laboriosam esse?</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex  my-5 icono-wrap">
                <img src="{{asset('./img/dibujo_02.png')}}" alt="desarrollo" width="180" height="160">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Exibiciones</h3>
                    <p class="px-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima hic labore ad expedita dolores. Placeat eveniet dignissimos voluptates iste. Consequuntur, suscipit labore. Repellat, eius. Unde id assumenda odio sit magni.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex  my-5 icono-wrap">
                <img src="{{asset('./img/dibujo_03.png')}}" alt="desarrollo" width="180" height="160">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Clases</h3>
                    <p class="px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, nam! Consectetur quam tempora, officia libero architecto dolorem minus perferendis eius a odit earum iusto illo ullam doloremque fugit facilis ipsam!</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex  my-5 icono-wrap">
                <img src="{{asset('./img/dibujo_04.png')}}" alt="desarrollo" width="180" height="160">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Fiesta</h3>
                    <p class="px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem libero veniam velit nemo soluta? Dolores aperiam iure minus in officia alias nobis error. Dolorem dolor voluptatum modi, distinctio enim aliquid.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================= -->
    <!-- =             Acerca de nosotros                = -->
    <!-- ================================================= -->
    <section>
        <!-- <div class="w-50 m-auto text-center" id="equipo">
            <h1 class="mb-5 fs-2">Equipo pequeño<span class="text-primary"> con resultados grandes</span></h1>
            <p class="fs-4">Siempre buscando las personas adecuadas para que trabajen
                con nosotros. Si te sientes listo para el reto te espermos
                para que trabajes con nosotros
            </p>
        </div>
        <div class="mt-5 text-center">
            <img id="img-equipo" src="./img/equipo.jpg" alt="equipo">
        </div> -->

        <!-- --------------------------------------- album ----------------------------- -->

        <!-- Carousel wrapper -->
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
            <!-- Controls -->
            <!-- <div class="d-flex justify-content-center mb-4">
                <button class="carousel-control-prev position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
            <!-- Inner -->
            <div class="carousel-inner py-4">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp" class="card-img-top" alt="Waterfall" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp" class="card-img-top" alt="Sunset over the Sea" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp" class="card-img-top" alt="Storm Clouds" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/186.webp" class="card-img-top" alt="Hot Air Balloons" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp" class="card-img-top" alt="Peaks Against the Starry Sky" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp" class="card-img-top" alt="Bridge Over Water" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                                <div class="card">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp" class="card-img-top" alt="Purbeck Heritage Coast" />
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <a href="#!" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->
        </div>
        <!-- Carousel wrapper -->
        <!-- <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" data-src="{{asset('./img/foto_01.png')}} alt=" Card image cap">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

        <!-- <div id="local" class="border-top border-2">
                    <div class="mapa"></div> -->

        <div id="local" class="border-top border-2">
            <!-- <div class="wrapper-local">
                        <h2>Ubicado en Miami Florida</h2>
                        <h2 class="text-primary mb-4" id="typewriter"></h2>
                        <p class="fs-5 text-body">Elegimos Miami para nuestra oficina con el objetivo
                            de estar cerca de nuestros clientes. Estamos ubicados
                            en Brickell, el corazón y centro financiero de Miami,
                            cerca de los mejores restaurantes, tiendas y a tan
                            solo 15 minutos de la playa ¡Visitenos y no se arrepentira!</p>

                        <section class="d-flex" id="numeros-local">
                            <div>
                                <p class="text-primary fs-5">248</p>
                                <p>Días de Sol</p>
                            </div>
                            <div>
                                <p class="text-primary fs-5">100%</p>
                                <p>Aprobado</p>
                            </div>
                            <div>
                                <p class="text-primary fs-5">24°</p>
                                <p>Temperatura</p>
                            </div>
                        </section>
                    </div> -->
        </div>
    </section>

    <!-- ================================================= -->
    <!-- =                  Contacto                     = -->
    <!-- ================================================= -->

    <section id="seccion-contacto" class="border-bottom border-secondary border-2">
        <div id="bg-contactos">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            </svg>
        </div>


        <!--========================================================== -->
        <!-- CONTENEDOR DEL FORMULARIO -->
        <!--========================================================== -->
        <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
            <div class="text-center mb-4" id="titulo-formulario">
                <div><img src="./img/support.png" alt="" class="img-fluid ps-5"></div>
                <h2>Contactanos</h2>
                <!-- <p class="fs-5">Estamos aqui para hacer realidad de tus proyectos</p> -->
            </div>



            <form method="POST" data-netlify="true" action="#">
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
                </div>


                <div class="mb-3">
                    <input type="input" class="form-control" id="name" name="name" placeholder="John Doe">
                </div>


                <div class="mb-3">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono">
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class=" btn btn-primary w-100 fs-5">Enviar Mensaje</button>
                </div>
            </form>

        </div>
    </section>

    </section>
    <!--========================================================== -->
    <!--Pie de página-->
    <!--========================================================== -->


    <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">ExpertD. &copy; Todos Los Derechos Reservados 2021</p>
        <div id="iconos">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('js/carrousel.js') }}"></script> -->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    -->
</body>

</html>