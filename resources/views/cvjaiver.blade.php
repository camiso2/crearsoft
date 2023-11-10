<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="cv Jaiver Andrés Ocampo">
    <meta name="author" content="Jaiver Ocampo">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jaiver Ocampo</title>

    <!-- Bootstrap core CSS -->
    <link href="cv/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="cv/assets/css/fontawesome.css">
    <link rel="stylesheet" href="cv/assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="cv/assets/css/animated.css">
    <link rel="stylesheet" href="cv/assets/css/owl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    @include('sections.error_sweet')
    @include('sections.preload')


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

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <h4>Jaiver<span> Ocampo</span></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                            <li class="scroll-to-section"><a href="#about">Tecnologías</a></li>
                            <li class="scroll-to-section"><a href="#services">Experiencia</a></li>
                            <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
                            <li class="scroll-to-section"><a href="#blog">Sobre mi</a></li>
                            <li class="scroll-to-section">
                                <div id='google_translate_element'></div>
                            </li>
                            <li class="scroll-to-section">
                                <div class="main-red-button"><a href="#contact">Contactame</a></div>
                            </li>
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

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <h6>Desarrollador <span id="respon">de sistemas</span> <span style="color: black">
                                        <b> Full Stack</b> </span></h6>
                                <h2>Desarrolle <em>Sus Ideas</em> <i
                                        class="fa fa-assistive-listening-systems"></i><span>Con Un</span> Profesional
                                </h2>
                                <p style="text-transform: capitalize;">Experto en desarrollo de plataformas virtuales IT
                                    (<b>API, CRM, LMS</b>), integraciones con APIs externas
                                    (<b>Google, HubSpot, Twilio...</b>), Cloud Architect Jr AWS (<b>evaluación,
                                        tratamiento y mitigación de riesgos</b> )
                                    <br>
                                    @include('sections.cv.social_networks')
                                    {{--  <br><a rel="nofollow" href="#portfolio" target="_parent" style="font-size: 22px; font-weight:800; color: #03a4ed"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Ver Más </a>.</p> --}}
                                    <br>

                                    <a rel="nofollow" href="#portfolio" target="_parent"><button class="btn btn-primary"
                                            style="font-size: 22px; font-weight:800;background-color: #03a4ed;border:0;margin:10px;"><i
                                                class="fa fa-plus-circle"></i>&nbsp;&nbsp;Ver Más </button></a>
                                    <a rel="nofollow" href="/cv/jaiver.pdf" target="_blank"><button
                                            class="btn btn-success"
                                            style="font-size: 22px; font-weight:800;border:0;margin:10px;background-color:#17a2b8"><i
                                                class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Descargar CV </button></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="cv/assets/images/banner-right-image.png" class="rounded-circle"
                                    alt="team meeting">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="cv/assets/images/banner-right-image.png" class="img-thumbnail" alt="Jaiver Ocampo">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="services">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="icon">
                                        <img src="cv/assets/images/service-icon-01.png" alt="reporting">
                                    </div>
                                    <div class="right-text">
                                        <h4>PHP (Laravel)</h4>
                                        <p>+9 Años de experiencia en areas de investigación y desarrollo (APIs)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                    <div class="icon">
                                        <img src="cv/assets/images/service-icon-04.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>PYTHON(Flask)</h4>
                                        <p>+3 Años de expriencia en el área financiera y analisis de datos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="icon">
                                        <img src="cv/assets/images/service-icon-04.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>AWS(Cloud Architect Jr)</h4>
                                        <p>+2 Años en diseño de infraestructura enfocada a la seguridad de datos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                    <div class="icon">
                                        <img src="cv/assets/images/service-icon-04.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>VUE, JQUERY, TYPESCRIPT</h4>
                                        <p>+3 Años, desarrollo de interfaces enfocadas a UX/UI funcionales.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                    <div class="icon">
                                        <img src="cv/assets/images/service-icon-04.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>JAVA (Android Studio)</h4>
                                        <p>+6 años en desarrollo de app nativas con enfoque de comunicación.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                    <div class="icon">
                                        <img src="cv/assets/images/service-icon-04.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>C, C++ (Arduino)</h4>
                                        <p>+7 Años en desarrollo de prototipos electrónicos aplicados a la industria.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image">
                        <img src="cv/assets/images/services-left-image.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="section-heading">
                        <h2>Desarrollador FULL STACK <em>INNOVADOR</em>, PROACTIVO &amp; <span>APASIONADO</span> por las
                            Nuevas Tecnologías.</h2>
                        <p>
                            @foreach ($technologies as $technology)
                            <div >
                                <span class="experience-a">{{ $technology['experience'] }}</span>
                                <b><u>{{ $technology['technology'] }}</u></b>
                               &nbsp;<i
                                    class="fa fa-check" style="color: #17a2b8"></i>&nbsp;
                            </div>

                                <div style=" margin-left: 15px;margin-bottom:15px">
                                    @for ($i = 0; $i < sizeof($technology['sub-technologies']['type']); $i++)
                                        <span
                                            class="sub-technologies">{{ $technology['sub-technologies']['type'][$i] }}</span>
                                    @endfor
                                </div>
                            @endforeach
                            .
                        </p>

                    </div>
                    <hr>
                    <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#experience"style="font-size: 22px; font-weight:800;background-color: #03a4ed;border:0;margin:10px;"><i
                            class="fa fa-plus-circle"></i>&nbsp;&nbsp;Ver Más </button>
                    <a rel="nofollow" href="/cv/jaiver.pdf" target="_blank"><button class="btn btn-success"
                            style="font-size: 22px; font-weight:800;border:0;margin:10px;background-color:#17a2b8;"><i
                                class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Descargar CV </button></a>


                </div>
            </div>
        </div>
    </div>
    @include('sections.cv.modal_experience')
    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>Estos son Algunos de Mis <em> Desarrollos</em> &amp;T <span>Con Diferentes
                                Tecnologías</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($project as $projects)
                    @if ($projects['state'] == 'OFF-LINE')
                        <div class="col-lg-3 col-sm-6" style="margin-bottom: 19px !important">

                            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="hidden-content">

                                    <h4>{{ $projects['title'] }}</h4>
                                    <p>{{ $projects['description'] }}</p>
                                </div>

                                <div class="showed-content">
                                    <a id="new_video" data-id="{{ $projects['id'] }}"
                                        data-url="{{ $projects['url'] }}" data-title="{{ $projects['title'] }}"
                                        data-description="{{ $projects['description'] }}"
                                        data-fetch="{{ $projects['fetch'] }}"
                                        data-technologies="{{ implode(',', $projects['technologies']['items']) }}"
                                        data-requirements="{{ implode(',', $projects['requirements']['items']) }}"
                                        href="#videos" data-bs-toggle="modal" style="cursor:pointer;">
                                        <h4 style="text-transform: uppercase; font-weight:700;color:#fe3f40;"> <u>
                                                {{ $projects['title'] }}</u></h4>
                                        <p style="font-weight:600;">{{ $projects['state'] }}  </p>
                                        <img src="cv/assets/images/portfolio-image.png" alt="">
                                        <button class="btn btn-primary"
                                            style=" font-weight:800;background-color: #03a4ed;border:0;margin:10px;"><i
                                                class="fa fa-plus-circle"></i>&nbsp;&nbsp;Ver Video</button>
                                    </a>
                                </div>

                            </div>

                        </div>
                    @else
                        <div class="col-lg-3 col-sm-6" style="margin-bottom: 19px !important">



                            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="hidden-content">

                                    <h4>{{ $projects['title'] }}</h4>
                                    <p>{{ $projects['description'] }}</p>
                                </div>
                                <div class="showed-content">
                                    <a href="{{ $projects['url'] }}" target="_blank">
                                        <h4 style="text-transform: uppercase; font-weight:700;color:#fe3f40;"> <u>
                                                {{ $projects['title'] }}</u></h4>
                                        <p style="font-weight:600;color:#17a2b8">{{ $projects['state'] }}&nbsp;<i
                                            class="fa fa-check"></i>&nbsp;&nbsp;</p>
                                        <img src="cv/assets/images/portfolio-image.png" alt="">
                                        <button class="btn btn-success"
                                            style=" font-weight:800;border:0;margin:10px;background-color:#17a2b8 !important;">Visitar Web&nbsp;&nbsp;<i
                                            class="fa fa-sign-in"></i></button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

    @include('sections.cv.modal_videos')
    <script>
        $(document).on("click", "#new_video", function() {

            var id = $(this).data('id');
            var url = $(this).data('url');
            var title = $(this).data('title');
            var description = $(this).data('description');
            var fetch = $(this).data('fetch');
            var technologies = $(this).data('technologies');
            var requirements = $(this).data('requirements');
            var description = $(this).data('description');


            $("#title").html("");
            $("#technologies").html("");
            $("#description-project").html("");

            $('#title').append(title);
            $('#technologies').append(technologies);
            $('#description-project').append(description);

            document.getElementById("src_video").src = url;





        });
    </script>
    <!-- Scripts -->

    <div id="blog" class="our-blog section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Desarrollador <em>FULL STACK</em> Profesional <span>Experimentado.</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="top-dec">
                        <img src="cv/assets/images/blog-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="left-image">
                        <a href="#"><img src="cv/assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
                        <div class="info">
                            <div class="inner-content">
                                <ul>
                                    <li><i class="fa fa-calendar"></i> IT</li>
                                    <li><i class="fa fa-users"></i> Equipo</li>
                                    <li><i class="fa fa-folder"></i> UX/UI</li>
                                </ul>
                                <a href="#">
                                    <h4>Rapidez &amp; Buen Gusto</h4>
                                </a>
                                <p>Con un alto nivel de profesionalismo, buen gusto y una basta experiencia en IT.</p>
                                <div class="main-blue-button">
                                    <a href="/cv/jaiver.pdf" target="_blank"><i
                                            class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;Descargar CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="right-list">
                        <ul>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> Industria</span>
                                    <a href="#">
                                        <h4>INNOVADOR </h4>
                                    </a>
                                    <p> Dispuesto a aprender, con gran capacidad de trabajo en equipo y perseverancia,
                                        capaz de reinventarse a sí mismo.</p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="cv/assets/images/innovador.jpg" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i>Nuevas Tecnologías</span>
                                    <a href="#">
                                        <h4>APASIONADO</h4>
                                    </a>
                                    <p>Soy intenso y permanente que domina tanto a la razón como a la voluntad.</p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="cv/assets/images/apasionado.jpg" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> Grandes Desafíos</span>
                                    <a href="#">
                                        <h4>PROACTIVO</h4>
                                    </a>
                                    <p>Resuelvo problemas con mayor facilidad, cumplo mis propósitos y enfrento eventos
                                        estresantes con una mentalidad más calmada.</p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="cv/assets/images/proactivo.jpg" alt=""></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s"
                    data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>No Dude En contactarme, Sería un Placer conocerlo/a. </h2>
                        <p> Me encantaría recibir su mensaje para conocer más sobre Las necesidades de su proyecto,
                            reconorlas y definirlas se convierten en algo más estructurado y bien entendido, para
                            proceder entonces a su formulación como objetivo.</p>
                        <div class="phone-info">
                            @include('sections.cv.social_networks')
                            <h4>Para Cualquier Consulta, Comunícate : <span> <a href="tel:{{ env('TEL') }}"><i
                                            class="fa fa-phone"></i> +57 {{ env('TEL') }}</a></span></h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action={{ route('contact_cv') }} method="post"
                        onsubmit="return miFuncion()">



                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    @if ($errors->has('name'))
                                        <p class="error-form">{{ $errors->first('name') }}</p>
                                    @endif
                                    <input type="name"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name" id="name" placeholder="Nombre" autocomplete="on"
                                        value="{{ old('name') }}" maxlength="50" autofocus required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    @if ($errors->has('name'))
                                        <p class="error-form">{{ $errors->first('company') }}</p>
                                    @endif
                                    <input type="text"
                                        class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}"
                                        name="company" id="company" placeholder="Compañia"
                                        value="{{ old('company') }}" maxlength="50" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    @if ($errors->has('email'))
                                        <p class="error-form">{{ $errors->first('company') }}</p>
                                    @endif
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Email" maxlength="50" required=""
                                        value="{{ old('email') }}" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <p class="error-form">{{ $errors->first('mensaje') }}</p>
                                <textarea class="form-control" id="write_suggestions" onKeyDown="kotoba_suggestions()"
                                    onKeyUp="kotoba_suggestions()" name="mensaje" rows="3" required="true" maxlength="200">{{ old('mensaje') ? old('mensaje') : '' }} </textarea>
                                <small id="emailHelp" class="form-text text-muted">
                                    <div id="mensaje" readonly></div>
                                </small>

                            </div>

                            <script>
                                function kotoba_suggestions() {
                                    if ($("#write_suggestions").val().length == "200") {
                                        $("#mensaje").text("Máximo Dígitos Permitidos (200)");
                                        $(document).on('keypress', 'input[type="number"][maxlength]', function() {
                                            return this.value.length < +this.attributes.maxlength.value;
                                        });
                                        return;
                                    } else {
                                        $("#mensaje").text($("#write_suggestions").val().length + " Carácteres");
                                    }
                                }

                                function miFuncion() {
                                    var response = grecaptcha.getResponse();

                                    if (response.length == 0) {
                                        Swal.fire({

                                            text: "Por Favor, Verifique Que Es Un Humano(ReCaptcha)!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: "Intentarlo de Nuevo",
                                            cancelButtonText: "Cancelar Envío",
                                        });

                                        return false;
                                    }
                                    preload();
                                    return true;



                                }
                            </script>

                            <div class="col-lg-12" id="g-recaptcha">
                                {!! ReCaptcha::render(['theme' => 'dark']) !!}
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <br>
                                    <button type="submit" id="form-submit" class="main-button ">Enviar Mensaje
                                        &nbsp;&nbsp;<i class="fa fa-external-link-square"></i> </button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="cv/assets/images/contact-decoration.png" alt="">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>© Copyright 2023 Desarrollo : Jaiver Ocampo, Todos Los Derechos Reservados.

                        <br><a rel="nofollow" href="https://templatemo.com"
                            style="color: white !important">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="cv/vendor/jquery/jquery.min.js"></script>
    <script src="cv/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="cv/assets/js/owl-carousel.js"></script>
    <script src="cv/assets/js/animation.js"></script>
    <script src="cv/assets/js/imagesloaded.js"></script>
    <script src="cv/assets/js/templatemo-custom.js"></script>
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'es',
                    includedLanguages: 'en,es',
                    autoDisplay: 'true',
                    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
                },
                'google_translate_element'
            );
        }
    </script>

</body>

</html>
