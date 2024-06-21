<!-- sidenav -->
<div id="indexSideNav" class="sidenav" style="display: none;">
    <div class="sidenav-2 rounded-4">
        <!-- <button class="rounded-pill d-flex closebtn mt-4">
                <span class="my-auto" style="font-size: 1rem;">Menu</span>
                <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
            </button> -->
        <div class="container-fluid h-100 d-flex flex-column justify-content-between">
            <div class="side-header">
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
                <!-- <ul style="list-style-type: none; font-size: 1rem; font-weight: 600;">
                        <li><a href="#">Login/Create Account</a></li>
                    </ul> -->
            </div>
            <ul style="list-style-type: none; font-size: 1rem; font-weight: 600;">
                <li><a href="#">Login/Create Account</a></li>
            </ul>
        </div>
    </div>
    <div id="sideNavFooter" class="side-footer rounded-4 position-absolute bottom-0 start-0 end-0 py-5">
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
    <div class="container-fluid">
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