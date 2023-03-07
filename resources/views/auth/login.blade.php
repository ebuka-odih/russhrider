
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ env('APP_NAME') }} | Dashbord</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">

</head>
<body>
<!-- Page Container -->

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo19@2x.jpg');">
            <div class="row g-0 justify-content-center bg-primary-dark-op">
                <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
                    <!-- Sign In Block -->
                    <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                        <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                            <!-- Header -->
                            <div class="mb-2 text-center">
                                <a class="link-fx fw-bold fs-1" href="index.html">
                                    <span class="text-dark">Bay</span><span class="text-primary">Shipment</span>
                                </a>
                                <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="mb-4">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" id="login-username" name="email" placeholder="Email">
                                        <span class="input-group-text">
                                      <i class="fa fa-user-circle"></i>
                                    </span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group input-group-lg">
                                        <input type="password" class="form-control" id="login-password" name="password" placeholder="Password">
                                        <span class="input-group-text">
                                      <i class="fa fa-asterisk"></i>
                                    </span>
                                    </div>
                                </div>
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="login-remember-me" name="login-remember-me" checked>
                                        <label class="form-check-label" for="login-remember-me">Remember Me</label>
                                    </div>
                                    <div class="fw-semibold fs-sm py-1">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                {{ __('Forgot Password?') }}
                                            </a>
                                        @endif

                                    </div>
                                </div>
                                <div class="text-center mb-4">
                                    <button type="submit" class="btn btn-hero btn-primary">
                                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                                    </button>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                        <div class="block-content bg-body">
                            <div class="d-flex justify-content-center text-center push">
                                <a class="item item-circle item-tiny me-1 bg-default" data-toggle="theme" data-theme="default" href="#"></a>
                                <a class="item item-circle item-tiny me-1 bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#"></a>
                                <a class="item item-circle item-tiny me-1 bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#"></a>
                                <a class="item item-circle item-tiny me-1 bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#"></a>
                                <a class="item item-circle item-tiny me-1 bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#"></a>
                                <a class="item item-circle item-tiny me-1 bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#"></a>
                                <a class="item item-circle item-tiny me-1 bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#"></a>
                                <a class="item item-circle item-tiny me-1 bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#"></a>
                                <a class="item item-circle item-tiny bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <!-- END Sign In Block -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->


<script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script>

<!-- jQuery (required for jQuery Validation plugin) -->
<script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('assets/js/pages/op_auth_signin.min.js') }}"></script>
</body>
</html>
