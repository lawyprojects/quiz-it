<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from laravelui.spruko.com/adminor/landing-page by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Feb 2024 15:33:47 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('common.meta')

<body class="main-body app sidebar-mini ltr landing-page horizontalmenu bg-light login-img">
    <div class="square-box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- PAGE -->
    <div class="page login-img">
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
                                            <a class="side-menu__item nav-link" data-bs-toggle="slide" href="{{route('home-page')}}"><span
                                                    class="side-menu__label">Home</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item active" data-bs-toggle="slide" href="{{route('home-quizzes-page')}}"><span
                                                    class="side-menu__label">Quizzes</span></a>
                                        </li>
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
                    <div class="container px-sm-0">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 animation-zidex pos-relative">
                                <h4 class="fw-semibold mt-7 text-white">QuizIt</h4>
                                <h1 class="text-start fw-bold text-white">Your ultimate destination for fun and challenging
                                    quizzes!</h1>
                        
                            </div>
                    
                        </div>
                    </div>
                </div> --}}
               

            </div>
            <!-- MAIN-CONTENT -->
            <div class="main-content mt-0 ms-0">
                <div class="side-app ">
                    <div class="container px-sm-0">
                        <div class="row">
                         @livewire('quiz.quiz',['quizId' => $quizId])

                        </div>
                    </div>

                </div>
            </div>
            <!-- END MAIN-CONTENT -->


        </div>
        <!-- END PAGE-->
    </div>
    @include('common.scripts')
    <!-- SCRIPTS -->

</body>

<!-- Mirrored from laravelui.spruko.com/adminor/landing-page by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Feb 2024 15:34:21 GMT -->

</html>