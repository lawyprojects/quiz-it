<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from laravelui.spruko.com/adminor/landing-page by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Feb 2024 15:33:47 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('common.meta')
@section('css')
    @livewireStyles
@endsection

<body class="main-body app sidebar-mini ltr landing-page horizontalmenu">

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <div class="landing-top-header overflow-hidden">

                <!-- MAIN-SIDEBAR -->
                <div class="top sticky">
                    <div class="landing-app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <div class="landing-app-sidebar bg-transparent">
                        <div class="container">
                            <div class="row">
                                <div class="main-sidemenu navbar px-0">
                                    {{-- <a class="main-logo" href="index-2.html">
                                        <img src="build/assets/img/brand/logo-white.png"
                                            class="header-brand-img desktop-logo" alt="logo">
                                        <img src="build/assets/img/brand/logo.png"
                                            class="header-brand-img desktop-logo-dark" alt="logo">
                                    </a> --}}
                                    <div class="slide-left disabled" id="slide-left"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                        </svg></div>
                                    <ul class="side-menu">
                                        <li class="slide">
                                            <a class="side-menu__item nav-link active" data-bs-toggle="slide" href="{{route('home-page')}}"><span
                                                    class="side-menu__label">Home</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item nav-link" data-bs-toggle="slide" href="{{route('home-quizzes-page')}}"><span
                                                    class="side-menu__label">Quizzes</span></a>
                                        </li>
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
                    <div class="container px-sm-0">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 animation-zidex pos-relative">
                                <h4 class="fw-semibold mt-7">Welcome to QuizIt</h4>
                                <h1 class="text-start fw-bold">Your ultimate destination for fun and challenging
                                    quizzes!</h1>
                                <h6 class="pb-3">
                                    Whether you're a trivia buff, a pop culture enthusiast, or just someone looking to
                                    test their knowledge, QuizMaster has something for everyone.

                                    With a vast array of categories ranging from history and science to movies and
                                    music, there's always a quiz to pique your interest. Dive into topics that intrigue
                                    you or broaden your horizons by exploring new subjects – the choice is yours!
                                </h6>

                                <a href="index-2.html" target="_blank"
                                    class="btn ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                                        class="fe fe-play me-2"></i> Get Started
                                </a>
                                <a href="https://themeforest.net/user/spruko/portfolio"
                                    class="btn ripple btn-min w-lg btn-outline-primary mb-3 me-2" target="_blank"><i
                                        class="fe fe-eye me-2 ms-2"></i>Discover More
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-6 my-auto">
                                <img src="build/assets/landing/images/image-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- END MAIN-SIDEBAR -->

            </div>
            <!-- MAIN-CONTENT -->
            <div class="main-content mt-0 ms-0">
                <div class="side-app ">
                       
                </div>
            </div>
            <!-- END MAIN-CONTENT -->

          
            <!-- MAIN-FOOTER -->
            @include('common.footer-main')
           

        </div>
        <!-- END PAGE-->
    </div>
    @include('common.scripts')
    @livewireScripts

    <!-- SCRIPTS -->

</body>

<!-- Mirrored from laravelui.spruko.com/adminor/landing-page by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Feb 2024 15:34:21 GMT -->

</html>