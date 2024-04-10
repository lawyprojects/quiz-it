<!DOCTYPE html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from laravelui.spruko.com/adminor/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Feb 2024 15:31:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    @include('common.meta')
	<body class="main-body bg-light login-img">

		<!--- GLOBAL LOADER -->
		{{-- <div id="global-loader" >
			<img src="{{ asset('assets/img/loaders/loader-4.svg') }}" class="loader-img" alt="loader">
		</div> --}}
		<!--- END GLOBAL LOADER -->

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

            <!-- MAIN-SIGNIN-WRAPPER -->
            <div class="">
                <div class="my-auto page page-h">
                        <div class="main-signin-wrapper">
                           
                            @yield('content')
							
                        </div>

                    </div>
                </div>

            </div>
            <!-- END MAIN-SIGNIN-WRAPPER -->
        

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->
		@include('common.scripts')


	</body>

<!-- Mirrored from laravelui.spruko.com/adminor/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Feb 2024 15:31:27 GMT -->
</html>
