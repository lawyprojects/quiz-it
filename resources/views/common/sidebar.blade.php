<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="index-2.html"><img src="{{asset('assets/img/brand/logo.png') }}"
                class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="index-2.html"><img src="{{asset('assets/img/brand/logo-white.png') }}"
                class="main-logo" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="index-2.html"><img
                src="{{ asset('assets/img/brand/favicon.png') }}" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="index-2.html"><img
                src="{{ asset('assets/img/brand/favicon-white.png') }}" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="main-sidebar-loggedin">
            <div class="app-sidebar__user">
                <div class="dropdown user-pro-body text-center">
                    
                </div>
            </div>
        </div>
        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                width="24" height="24" viewBox="0 0 24 24">
                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
            </svg></div>
        <ul class="side-menu ">
              <!-- Quiz -->
              <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('quizzes-page')}}"><i
                        class="side-menu__icon  bx bx-landscape"></i><span class="side-menu__label">Quizzes
                        </span></a>
            </li>

             <!-- Questions -->
             <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="{{route('questions-page')}}"><i
                        class="side-menu__icon  bx bx-landscape"></i><span class="side-menu__label">Questions
                        </span></a>
            </li>
        </ul>
        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                width="24" height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
            </svg></div>
    </div>
</aside>
