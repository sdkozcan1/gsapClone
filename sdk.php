<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./sdk.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <style>
        #dropUl {
            list-style: none !important;
            overflow: hidden !important;
            text-align: left !important;
            width: 100px !important;
            max-height: 0 !important;
            opacity: 0 !important;
            -webkit-transition: all .5s ease-in-out 0s !important;
            transition: all .5s ease-in-out 0s !important;
        }

        #dropUl.open {
            max-height: 500px !important;
            opacity: 1 !important;
            z-index: 9999 !important;
        }
    </style>

</head>

<body>
    <script>
        function toggleNav() {
            let $menu = $('#indexSideNav'); // Menüyü seç
            let $button = $('#button'); // Butonu seç
            let isOpen = $menu.is(':visible'); // Menünün açık olup olmadığını kontrol et

            if (isOpen) {
                // Menü açıksa kapat
                $menu.fadeOut();
                $("#sideNavFooter").fadeOut();
                $(".navbar").removeClass("yellow-nav");
                $("#logo").removeClass("yellow-nav-text");
                $(".open-menu-btn").removeClass("sidenav-menu-btn");
                // Menü kapalıyken 'Menu' butonunun yanında menuIcon simgesi göster
                $('#menuIcon').removeClass('d-none');
                $('#closeBtn').addClass('d-none');

                document.getElementById("sideNavFooter").style.transform = "translate(100%, 0%)";
                document.getElementById("side-header").style.transform = "translate(-100%, 0%)";
            } else {
                // Menü kapalıysa aç
                $menu.fadeIn();
                $("#sideNavFooter").fadeIn();
                $(".navbar").addClass("yellow-nav");
                $("#logo").addClass("yellow-nav-text");
                $(".open-menu-btn").addClass("sidenav-menu-btn");
                // Menü açıkken 'Menu' butonunun yanında closeBtn simgesi göster
                $('#menuIcon').addClass('d-none');
                $('#closeBtn').removeClass('d-none');
                document.getElementById("sideNavFooter").style.transform = "translate(0%, 0%)";
                document.getElementById("side-header").style.transform = "translate(0%, 0%)";


            }
        }

        $(function() {
            $('#button').click(function() {
                console.log("tiklandi");
                $('#dropUl').toggleClass('open');
            });
        });
    </script>

    <!-- SİDENAV -->

    <div id="indexSideNav" class="sidenav" style="display: none;">
        <div class="sidenav-2 rounded-4" id="sideNav2Id">
            <!-- <button class="rounded-pill d-flex closebtn mt-4">
                <span class="my-auto" style="font-size: 1rem;">Menu</span>
                <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
            </button> -->
            <div id="side-header" class="container-fluid h-100">
                <div>
                    <ul style="list-style-type: none;padding-top: 100px; padding-right: 4rem">
                        <li>
                            <div class="d-flex justify-content-between" id="button">
                                <a href="#" style="font-size: 1.3125rem;font-weight: 600;">
                                    Tools
                                </a>
                                <svg id="accordion-icon" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none" viewBox="0 0 10 10">
                                    <path fill="#000" fill-rule="evenodd" d="M4 10V0h2v10H4Z" clip-rule="evenodd" style="translate: none; rotate: none; scale: none; transform-origin: 0px 0px;" data-svg-origin="5 5" transform="matrix(1,0,0,1,0,0)"></path>
                                    <path fill="#000" fill-rule="evenodd" d="M0 4h10v2H0V4Z" clip-rule="evenodd" style="translate: none; rotate: none; scale: none; transform-origin: 0px 0px;" data-svg-origin="5 5" transform="matrix(1,0,0,1,0,0)"></path>
                                </svg>
                            </div>
                            <ul id="dropUl">
                                <li>
                                    <a href="#" style="font-size: 1.3125rem;   font-weight: 600;">Core</a>
                                </li>
                                <li>
                                    <a href="#" style="font-size: 1.3125rem;  font-weight: 600;">Scroll</a>
                                </li>
                                <li>
                                    <a href="#" style="font-size: 1.3125rem;   font-weight: 600;">SVG</a>

                                </li>
                                <li>
                                    <a href="#" style="font-size: 1.3125rem;   font-weight: 600;">UI</a>
                                </li>
                                <li>
                                    <a href="#" style="font-size: 1.3125rem; font-weight: 600;">Text</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" style="font-size: 1.3125rem; font-weight: 600;">
                                Pricing</a>
                        </li>
                        <li>
                            <a href="#" style="font-size: 1.3125rem;  font-weight: 600;">
                                Showcase</a>

                        </li>
                        <li>
                            <a href="#" style="font-size: 1.3125rem;   font-weight: 600;">
                                Resources</a>

                        </li>
                        <li>
                            <a href="#" style="font-size: 1.3125rem; font-weight: 600;">
                                Community</a>

                        </li>
                        <li>
                            <a href="#" style="font-size: 1.3125rem; font-weight: 600;">
                                Docs</a>
                        </li>

                    </ul>
                    <ul style="list-style-type: none; font-size: 1rem; font-weight: 600;">
                        <li><a href="#">Login/Create Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="sideNavFooter" class="side-footer rounded-4 position-absolute bottom-0 start-0 end-0 py-4">
            <ul>
                <li><a href="#" style="font-size: 1rem;  font-weight: 600;">CodePen</a></li>
                <li><a href="#" style="font-size: 1rem;  font-weight: 600;">GitHub</a></li>
                <li><a href="#" style="font-size: 1rem;  font-weight: 600;">Facebook</a></li>
                <li><a href="#" style="font-size: 1rem; font-weight: 600;">LinkedIn</a></li>
                <li><a href="#" style="font-size: 1rem;  font-weight: 600;">X</a></li>
            </ul>
        </div>
    </div>

    <!-- ................................................... -->

    <nav class="navbar navbar-expand-lg sticky-top align-content-center " style="visibility: visible;">
        <div class="container-fluid mx-5">
            <a class="navbar-brand logo" id="logo" href="#" style="font-style: italic;font-weight: 900;font-size: 2rem;">GSAP</a>

            <button class="navbar-toggler rounded-pill open-menu-btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleNav()">
                <span class="my-auto p-1 mt-0" style="font-size: 1rem;">Menu</span>
                <!-- Kapatma simgesi (başlangıçta gizli) -->
                <svg id="closeBtn" class="w-6 h-6 text-gray-800 dark:text-white; d-none closebtn" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                </svg>
                <!-- Açma simgesi (başlangıçta görünür) -->
                <svg id="menuIcon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                </svg>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Showcase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Docs</a>
                    </li>
                </ul>
                <div class="d-flex login-link">
                    <a href="#" class="navbar-text me-4 text-decoration-none">
                        Login/Create Account
                    </a>
                    <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">Login/Create Account</li>
            </ul> -->
                    <!-- <div class="align-middle">
                        Login/Create Account
                    </div> -->
                    <button id="header-btn" class="btn btn-white rounded-pill fw-medium">
                        Get GSAP
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div id="entrance">
        <div class="container">
            <!-- header top -->
            <div class="row justify-content-center" id="header-top">
                <div class="col-md-12">
                    <h1 class="heading-xl text-start">Animate</h1>
                    <h1 class="heading-xl text-end">anything</h1>
                </div>
                <div class="col-md-11 mt-3 d-flex justify-content-between mt-5">
                    <div class="d-flex">
                        <!-- <div><svg xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FFFCE1" d="M26.52 77.21h-5.75c-6.83 0-12.38-5.56-12.38-12.38V48.38C8.39 43.76 4.63 40 .01 40v-4c4.62 0 8.38-3.76 8.38-8.38V12.4C8.38 5.56 13.94 0 20.77 0h5.75v4h-5.75c-4.62 0-8.38 3.76-8.38 8.38V27.6c0 4.34-2.25 8.17-5.64 10.38 3.39 2.21 5.64 6.04 5.64 10.38v16.45c0 4.62 3.76 8.38 8.38 8.38h5.75v4.02Z"></path>
                              </svg>
                              </div> -->
                        <h3>
                            GSAP – A wildly robust JavaScript animation
                            <br />
                            library built for professionals
                        </h3>
                        <!-- <div style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg); opacity: 1;">
                                <svg xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FFFCE1" d="M26.52 77.21h-5.75c-6.83 0-12.38-5.56-12.38-12.38V48.38C8.39 43.76 4.63 40 .01 40v-4c4.62 0 8.38-3.76 8.38-8.38V12.4C8.38 5.56 13.94 0 20.77 0h5.75v4h-5.75c-4.62 0-8.38 3.76-8.38 8.38V27.6c0 4.34-2.25 8.17-5.64 10.38 3.39 2.21 5.64 6.04 5.64 10.38v16.45c0 4.62 3.76 8.38 8.38 8.38h5.75v4.02Z"></path>
                              </svg>
                              </div> -->
                    </div>
                    <div>
                        <button id="entrance-btn" class="fw-medium">Get
                            GSAP</button>
                    </div>
                </div>
            </div>
            <!-- header top end -->
            <hr />
            <!-- header 2 -->
            <div class="row" id="header-2">
                <div class="col-md-12">
                    <div class="header-prt">
                        <span></span>
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 27 78" aria-hidden="true">
                                <path fill="#FFFCE1" d="M26.52 77.21h-5.75c-6.83 0-12.38-5.56-12.38-12.38V48.38C8.39 43.76 4.63 40 .01 40v-4c4.62 0 8.38-3.76 8.38-8.38V12.4C8.38 5.56 13.94 0 20.77 0h5.75v4h-5.75c-4.62 0-8.38 3.76-8.38 8.38V27.6c0 4.34-2.25 8.17-5.64 10.38 3.39 2.21 5.64 6.04 5.64 10.38v16.45c0 4.62 3.76 8.38 8.38 8.38h5.75v4.02Z"></path>
                              </svg> -->
                        <h5>Why GSAP®</h5>
                    </div>
                    <h1 class="mt-5 header2-mb" id="header2-text">
                        GSAP allows you to effortlessly animate anything JS
                        can touch.
                        Delivering silky-smooth performance and unmatched
                        support so you
                        can focus on the fun stuff.
                    </h1>
                </div>
            </div>
            <hr />
            <!-- header 2 end -->


            <!-- tools area start -->
            <div class="container">
                <div>
                    <div class="row">
                        <div class="col-md-12 fw-medium mb-4">
                            GSAP® Tools
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <svg width="100%" height="100%" viewBox="0 0 380 332" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M190 171.267C200.346 171.267 208.733 179.654 208.733 190V246.197C208.733 293.491 247.072 331.83 294.366 331.83C341.66 331.83 380 293.491 380 246.197V190C380 85.0658 294.934 0 190 0C85.0663 0 0.000549316 85.0658 0.000549316 190V246.197C0.000549316 293.491 38.34 331.83 85.6342 331.83C132.928 331.83 171.268 293.491 171.268 246.197V190C171.268 179.654 179.655 171.267 190 171.267Z" fill="url(#paint0_linear_1790_33970)"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M190 171.267C200.346 171.267 208.733 179.654 208.733 190V246.197C208.733 293.491 247.072 331.83 294.366 331.83C341.66 331.83 380 293.491 380 246.197V190C380 85.0658 294.934 0 190 0C85.0663 0 0.000549316 85.0658 0.000549316 190V246.197C0.000549316 293.491 38.34 331.83 85.6342 331.83C132.928 331.83 171.268 293.491 171.268 246.197V190C171.268 179.654 179.655 171.267 190 171.267Z" fill="url(#pattern-home-tools-scroll-0)" fill-opacity="0.6" style="mix-blend-mode:multiply"></path>
                            </g>
                            <path d="M 85 246.1967 V 190.83 C 85 132.66 131.66 85.5 189.83 85.5 C 248 85.5 294.5 132.66 294.5 190.83 V 246.1967">
                            </path>
                            <path d="M 84.5 246.1967 V 190.83 C 84.5 132.66 131.66 85.5 189.83 85.5 C 248 85.5 295.16 132.66 295.16 190.83 V 333" stroke="var(--color-just-black)" stroke-width="175" stroke-miterlimit="10" style="stroke-dashoffset: -449.112; stroke-dasharray: 79.2728px, 449.412px;"></path>
                            <g transform="matrix(1,0,0,1,209.23199,-0.36636)" style="translate: none; rotate: none; scale: none; transform-origin: 0px 0px;">
                                <rect width="172" height="172" rx="85.6337" transform="matrix(-1 0 0 1 171.268 160.563)" fill="url(#paint1_linear_1790_33970)"></rect>
                                <rect width="172" height="172" rx="85.6337" transform="matrix(-1 0 0 1 171.268 160.563)" fill="url(#pattern-home-tools-scroll-1)" fill-opacity="0.6" style="mix-blend-mode:multiply"></rect>
                            </g>
                            <defs>
                                <pattern id="pattern-home-tools-scroll-0" patternContentUnits="objectBoundingBox" width="0.526317" height="0.602717">
                                    <use xlink:href="#svg-noise" transform="scale(0.00105263 0.00120543)"></use>
                                </pattern>
                                <pattern id="pattern-home-tools-scroll-1" patternContentUnits="objectBoundingBox" width="1.16776" height="1.16776">
                                    <use xlink:href="#svg-noise" transform="scale(0.00233553)"></use>
                                </pattern>
                                <lineargradient id="paint0_linear_1790_33970" x1="412.458" y1="-10.4465" x2="100.768" y2="481.138" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.26957" stop-color="#FEC5FB"></stop>
                                    <stop offset="0.838196" stop-color="#00BAE2"></stop>
                                </lineargradient>
                                <lineargradient id="paint1_linear_1790_33970" x1="-14.6291" y1="-5.39174" x2="154.494" y2="227.531" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.26957" stop-color="#FEC5FB"></stop>
                                    <stop offset="0.838196" stop-color="#00BAE2"></stop>
                                </lineargradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="col-md-7 mb-5">
                        <ul class="tools-scroll">
                            <li class="mb-5"><a href="#" id="scroll-tools" class="fw-medium">Scroll</a></li>
                            <li class="mb-5 tools-text-size"><a href="#" class="font-color">Turn scrolling into
                                    silky-smooth storytelling.</a></li>
                            <li><button type="button" id="tools-btn" class="btn btn-white rounded-pill fw-medium">Explore
                                    Scroll</button></li>
                        </ul>
                    </div>
                </div>
                <hr />
                <div class="row mt-5">
                    <div class="col-md-5">

                        <svg width="100%" height="100%" viewBox="0 0 372 370" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true">
                            <g filter="url(#goo)">
                                <g fill="url(#paint0_radial_1655_45341)">
                                    <path d="M190 275C190 327.467 147.467 370 95 370C42.5329 370 0 327.467 0 275C0 222.533 42.5329 180 95 180C147.467 180 190 222.533 190 275Z" data-svg-origin="152 218" transform="matrix(1,0,0,1,0,0)" style="translate: none; rotate: none; scale: none; transform-origin: 0px 0px;">
                                    </path>
                                    <path d="M190 275C190 327.467 147.467 370 95 370C42.5329 370 0 327.467 0 275C0 222.533 42.5329 180 95 180C147.467 180 190 222.533 190 275Z" fill="url(#pattern-home-tools-svg-0)" style="mix-blend-mode:multiply"></path>

                                    <path d="M85 7.99999C85 3.58172 88.5817 0 93 0H363.884C368.302 0 371.884 3.58172 371.884 8V277C371.884 281.418 368.302 285 363.884 285H93C88.5817 285 85 281.418 85 277V7.99999Z" data-original="M190 275C190 327.467 147.467 370 95 370C42.5329 370 0 327.467 0 275C0 222.533 42.5329 180 95 180C147.467 180 190 222.533 190 275Z">
                                    </path>
                                    <path d="M85 7.99999C85 3.58172 88.5817 0 93 0H363.884C368.302 0 371.884 3.58172 371.884 8V277C371.884 281.418 368.302 285 363.884 285H93C88.5817 285 85 281.418 85 277V7.99999Z" fill="url(#pattern-home-tools-svg-0)" style="mix-blend-mode:multiply" data-original="M190 275C190 327.467 147.467 370 95 370C42.5329 370 0 327.467 0 275C0 222.533 42.5329 180 95 180C147.467 180 190 222.533 190 275Z">
                                    </path>
                                </g>
                            </g>

                            <path d="M85 7.99999C85 3.58172 88.5817 0 93 0H363.884C368.302 0 371.884 3.58172 371.884 8V277C371.884 281.418 368.302 285 363.884 285H93C88.5817 285 85 281.418 85 277V7.99999Z">
                            </path>

                            <defs>
                                <pattern patternContentUnits="objectBoundingBox" width="0.261429" height="0.263158">
                                    <use xlink:href="#svg-noise" transform="scale(0.000522859 0.000526316)"></use>
                                </pattern>

                                <radialgradient id="paint0_radial_1655_45341" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-4.01487e-06 268.924) rotate(-48.1016) scale(361.295 241.508)">
                                    <stop stop-color="#FFD9B0"></stop>
                                    <stop offset="0.807292" stop-color="#FD9F3B"></stop>
                                    <stop offset="1" stop-color="#FF8709"></stop>
                                </radialgradient>

                                <filter id="goo">
                                    <fegaussianblur in="SourceGraphic" stdDeviation="6" result="blur"></fegaussianblur>
                                    <fecolormatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                                    </fecolormatrix>
                                    <fecomposite in="SourceGraphic" in2="goo" operator="atop"></fecomposite>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="col-md-7 mb-5">
                        <ul class="tools-scroll">
                            <li class="mb-5"><a href="#" id="svg-tools" class="fw-medium">SVG</a></li>
                            <li class="mb-5 tools-text-size"><a href="#" class="font-color">Move, morph and much
                                    more
                                    with our SVG plugins</a></li>
                            <li><button type="button" id="tools-btn" class="btn btn-white rounded-pill fw-medium">Explore
                                    Scroll</button></li>
                        </ul>
                    </div>
                </div>
                <hr />
                <div class="row mt-5">
                    <div class="col-md-5 align-content-center">
                        <div>
                            <div class="grid-container">
                                <div class="grid-item">
                                    <svg viewBox="0 0 191 190" fill="none" id="home-tools-text-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" style="translate: none; rotate: none; scale: none; transform-origin: 50% 50%; transform: translate(0px, 0px);">
                                        <rect x="0.751099" y="190.001" width="190" height="190" rx="95" transform="rotate(-90 0.751099 190.001)" fill="url(#home-tools-text-circle-radial)"></rect>
                                        <rect x="0.751099" y="190.001" width="190" height="190" rx="95" transform="rotate(-90 0.751099 190.001)" fill="url(#home-tools-text-circle-pattern)" fill-opacity="0.6"></rect>

                                        <defs>
                                            <pattern id="home-tools-text-circle-pattern" patternContentUnits="objectBoundingBox" width="0.526316" height="0.526316">
                                                <use xlink:href="#svg-noise" transform="scale(0.00105263)"></use>
                                            </pattern>

                                            <radialGradient id="home-tools-text-circle-radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(230.59 344.759) rotate(-142.224) scale(310.168 148.907)">
                                                <stop offset="0.270833" stop-color="#DFDCFF"></stop>
                                                <stop offset="1" stop-color="#A69EFF"></stop>
                                            </radialGradient>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="grid-item">
                                    <svg id="home-tools-text-te" viewBox="0 0 134 91" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="translate: none; rotate: none; scale: none; transform-origin: 50% 50%; transform: translate(0px, 0px);">
                                        <path d="M45.3424 88.5169L45.3424 14.1349L74.6177 14.1349V0.565247L0.864014 0.565247L0.864014 14.1349L30.265 14.1349L30.265 88.5169H45.3424Z" fill="#FFFCE1"></path>
                                        <path d="M102.875 90.4015C118.581 90.4015 129.763 81.732 133.156 67.4085H118.706C116.445 74.0677 110.665 77.837 103.001 77.837C91.6927 77.837 84.4053 69.9214 83.4001 58.2364L133.407 58.2364V54.7183C133.03 33.1073 120.465 19.9146 101.619 19.9146C83.0232 19.9146 68.574 33.4843 68.574 55.4722C68.574 75.8267 82.5206 90.4015 102.875 90.4015ZM84.0283 47.8078C86.29 38.2588 92.8235 32.4791 101.619 32.4791C110.288 32.4791 116.194 38.2588 118.078 47.8078L84.0283 47.8078Z" fill="#FFFCE1"></path>
                                    </svg>
                                </div>
                                <div class="grid-item">
                                    <svg id="home-tools-text-xt" viewBox="0 0 113 90" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                        <path d="M16.7684 89.899L32.474 66.9059L48.054 89.899H64.7648L40.7666 56.603L64.3879 23.307L47.8027 23.307L32.474 45.5462L17.0197 23.307L0.434492 23.307L24.0558 56.603L0.0575562 89.899H16.7684Z" fill="#FFFCE1"></path>
                                        <path d="M111.358 89.899L111.358 77.3344H103.819C98.2905 77.3344 95.4006 74.1933 95.4006 68.5393V35.8715L112.614 35.8715L112.614 23.307L95.4006 23.307V0.565247L80.5745 0.565247V23.307L68.8895 23.307L68.8895 35.8715L80.5745 35.8715V69.5444C80.5745 82.7372 88.3645 89.899 102.814 89.899H111.358Z" fill="#FFFCE1"></path>
                                    </svg>

                                </div>
                                <div class="grid-item">
                                    <svg id="home-tools-text-square" viewBox="0 0 191 190" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" style="translate: none; rotate: none; scale: none; transform-origin: 50% 50%; transform: rotate(180deg);">
                                        <rect x="0.751099" y="190.001" width="190" height="190" rx="8" transform="rotate(-90 0.751099 190.001)" fill="url(#home-tools-text-square-radial)"></rect>
                                        <rect x="0.751099" y="190.001" width="190" height="190" rx="8" transform="rotate(-90 0.751099 190.001)" fill="url(#home-tools-text-square-pattern)" fill-opacity="0.6"></rect>

                                        <defs>
                                            <pattern id="home-tools-text-square-pattern" patternContentUnits="objectBoundingBox" width="0.526316" height="0.526316">
                                                <use xlink:href="#svg-noise" transform="scale(0.00105263)"></use>
                                            </pattern>

                                            <radialGradient id="home-tools-text-square-radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(230.59 344.759) rotate(-142.224) scale(310.168 148.907)">
                                                <stop offset="0.270833" stop-color="#DFDCFF"></stop>
                                                <stop offset="1" stop-color="#A69EFF"></stop>
                                            </radialGradient>
                                        </defs>
                                    </svg>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mb-5">
                        <ul class="tools-scroll">
                            <li class="mb-5"><a href="#" id="text-tools" class="fw-medium">Text</a></li>
                            <li class="mb-5 tools-text-size"><a href="#" class="font-color">Leave them lost for
                                    words
                                    with seamless text effects.</a></li>
                            <li><button type="button" id="tools-btn" class="btn btn-white rounded-pill fw-medium">Explore
                                    Scroll</button></li>
                        </ul>
                    </div>
                </div>
                <hr />
                <div class="row mt-5">
                    <div class="col-md-5">
                        <!-- resim -->
                    </div>
                    <div class="col-md-7 mb-5">
                        <ul class="tools-scroll">
                            <li class="mb-5"><a href="#" id="ui-tools" class="fw-medium">UI
                                    Interactions</a></li>
                            <li class="mb-5 tools-text-size"><a href="#" class="font-color">Create polished,
                                    engaging
                                    and accessible interactions.</a>
                            <li><button type="button" id="tools-btn" class="btn btn-white rounded-pill fw-medium">Explore
                                    Scroll</button></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- tools area end -->

            <!-- brands area start -->

            <!-- brands area end -->

            <!-- showcase area start -->
            <!-- showcase area end -->
            <!-- footer-1 area start -->
            <div id="footer-1-area">
                <div class="container">
                    <div class="row" id="footerlist">
                        <div class="col-md-2 footerlistCol">
                            <ul id="gsap-group">
                                <li><a href="#" id="gsap">GSAP</a></li>
                                <li><a href="#">Core</a></li>
                                <li><a href="#">Docs</a></li>
                                <li><a href="#">All Plugins</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 footerlistCol">
                            <ul id="scroll-group">
                                <li><a href="#" id="scroll">Scroll</a></li>
                                <li><a href="#">ScrollTrigger</a></li>
                                <li><a href="#">ScrollSmoother</a></li>
                                <li><a href="#">ScrollTo</a></li>
                                <li><a href="#">Observer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  <div class="container">
                    <div class="row d-flex py-5">
                        <div class="col-md-2 footer-1">
                            <ul id="gsap-group">
                                <li><a href="#" id="gsap">GSAP</a></li>
                                <li><a href="#">Core</a></li>
                                <li><a href="#">Docs</a></li>
                                <li><a href="#">All Plugins</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 footer-1">
                            <ul id="scroll-group">
                                <li><a href="#" id="scroll">Scroll</a></li>
                                <li><a href="#">ScrollTrigger</a></li>
                                <li><a href="#">ScrollSmoother</a></li>
                                <li><a href="#">ScrollTo</a></li>
                                <li><a href="#">Observer</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 footer-1">
                            <ul id="svg-group">
                                <li><a href="#" id="svg">SVG</a></li>
                                <li><a href="#">MorphSVG</a></li>
                                <li><a href="#">DrawSVG</a></li>
                                <li><a href="#">MotionPath</a></li>
                                <li><a href="#">MotionPathHelper</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 footer-1">
                            <ul id="ui-group">
                                <li><a href="#" id="ui">UI</a></li>
                                <li><a href="#">Flip</a></li>
                                <li><a href="#">SplitText</a></li>
                                <li><a href="#">Draggable</a></li>
                                <li><a href="#">Inertia</a></li>
                                <li><a href="#">Observer</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 footer-1">
                            <ul id="text-group">
                                <li><a href="#" id="text">Text</a></li>
                                <li><a href="#">SplitText</a></li>
                                <li><a href="#">ScrambleText</a></li>
                                <li><a href="#">Text</a></li>
                            </ul>
                        </div>

                    </div>

                </div> -->
            </div>
        </div>
        <!-- footer-1 area end -->

        <!-- footer-2 area start -->
        <div class="footer2-area">
            <div class="container footer">
                <div class="row px-5">
                    <div class="col-md-5">
                        <h3 class="footer-subs-header">
                            Subscribe to the GSAP® newsletter to
                            stay
                            up-to-date
                            with the latest
                            releases
                        </h3>
                        <div class="mb-3">
                            <input type="email" class="form-control input-subs" placeholder="Email Address" />
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 footer-links">
                        <div class="row mt-4">
                            <div class="col-md-4 col-sm-12 footer-col">
                                <span class="fw-bold fs-6 col-title">Company</span>
                                <ul class="footer-ul">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-4 footer-col">
                                <span class="fw-bold fs-6 col-title">Company</span>
                                <ul class="footer-ul">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-4 footer-col">
                                <span class="fw-bold fs-6 col-title">Company</span>
                                <ul class="footer-ul">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 footer-banner fw-light fs-8">
                        ©2024 GreenSock, Inc. All rights reserved.
                        Privacy
                        Policy.
                        Terms of
                        Use.
                    </div>
                </div>
            </div>
        </div>

        <!-- footer-2 area end -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
        <script src="./app.js"></script>

</body>

</html>