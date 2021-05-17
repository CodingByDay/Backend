<?php 
$GoRoot = realpath("./../");
require_once $GoRoot."./../../emmares/config.php";
include $GoRoot."./app/ASEngine/AS.php";

$token = app('register')->socialToken();
ASSession::set('as_social_token', $token);
app('register')->botProtection();
?>
<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="EMMARES">
    <meta name="keywords" content="EMMARES">
    <meta name="author" content="EMMARES">
    <title>Emmares</title>
    <link rel="apple-touch-icon" href="view_templates/emmares/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="view_templates/emmares/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/app-assets/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="view_templates/emmares/assets/css/style.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="javascript:void(0);">
                            <img style="width:300px; height:auto;" class="img-fluid" src="view_templates/emmares/app-assets/images/logo/EmmaresLogo.svg" alt="EMMARES - Future of marketing" />
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-left" style="margin-top:-10%;">
                                <h1 style="font-size:32px; font-weight: 900; font-style: italic;">Personalization - it is not about first<br>and last name.<br><br><span style="color:#fff;">It’s about relevant content.<span><br><span style="font-size:10px; color:#d0d2d6;">Dan Jak</span></h1>
                            </div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto" id="login">
                                <h2 class="card-title font-weight-bold mb-1">Welcome to Emmares! 👋</h2>
                                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                                <form class="form-horizontal-login auth-login-form mt-2">
                                    <div class="form-group">
                                        <label class="form-label" for="username">Email</label>
                                        <input class="form-control" id="login-username" type="text" name="username" placeholder="john@emmares.com" aria-describedby="login-email" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">Password</label><a href="#"><small>Forgot Password?</small></a>
                                        </div>
                                        <!-- <div class="input-group input-group-merge form-password-toggle"> -->
                                            <input class="form-control" id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" />
                                            <!-- Removed class  form-control-merge on input for eye -->
                                            <!--<div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>-->
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3" />
                                            <label class="custom-control-label" for="remember-me"> Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit"
                                            id="btn-login"
                                            class="btn btn-primary btn-block" tabindex="4"
                                            data-loading-text="Signing in...">
                                            Sign in
                                    </button>
                                </form>
                                <p class="text-center mt-2"><span>New on our platform?</span><a href="public/register/"><span>&nbsp;Create an account</span></a></p>
                                <div class="divider my-2">
                                    <div class="divider-text">or</div>
                                </div>
                                <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="javascript:void(0)"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="javascript:void(0)"><i data-feather="twitter"></i></a><a class="btn btn-google" href="javascript:void(0)"><i data-feather="mail"></i></a><a class="btn btn-github" href="javascript:void(0)"><i data-feather="github"></i></a></div>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <!-- BEGIN: Vendor JS-->
    <script src="view_templates/emmares/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!--<script src="view_templates/emmares/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="view_templates/emmares/app-assets/js/core/app-menu.js"></script>
    <script src="view_templates/emmares/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="assets/js/vendor/sha512.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/js/app/bootstrap.php"></script>
    <script src="assets/js/app/common.js"></script>
    <?php if (ASLang::getLanguage() != DEFAULT_LANGUAGE) : ?>
        <script src="assets/js/vendor/jquery-validate/localization/messages_<?= ASLang::getLanguage() ?>.js"></script>
    <?php endif; ?>
    
    <script type="text/javascript" src="assets/js/app/login.js"></script>
    <script type="text/javascript" src="assets/js/app/passwordreset.js"></script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>