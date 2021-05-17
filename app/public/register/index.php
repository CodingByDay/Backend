<?php 
$GoRoot = realpath("./../../../");
require_once $GoRoot."./../../emmares/config.php";
include $GoRoot."./app/ASEngine/AS.php";

if (isset($_GET['Register']) && isset($_POST['email'])) {
    require_once $GoRoot."./app/models/public_registeruser.php";
} 

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
    <link rel="apple-touch-icon" href="../../view_templates/emmares/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../view_templates/emmares/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/app-assets/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../view_templates/emmares/assets/css/style.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
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
                            <img style="width:300px; height:auto;" class="img-fluid" src="../../view_templates/emmares/app-assets/images/logo/EmmaresLogo.svg" alt="EMMARES - Future of marketing" />
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-left" style="margin-top:-10%;">
                                <h1 style="font-size:32px; font-weight: 900; font-style: italic;">Personalization - it is not about first<br>and last name.<br><br><span style="color:#fff;">It’s about relevant content.<span><br><span style="font-size:10px; color:#d0d2d6;">Dan Jak</span></h1>
                            </div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <?php if (isset($_GET['Register']) && isset($_POST['email'])) { ?>
                                <h2 class="card-title font-weight-bold mb-1">Ready to go! 🚀</h2>
                                <br>
                                <p class="text-center mt-2">
                                    <h3>We have sent a confirmation email to your email address.</h3>
                                    <br>
                                    <span>After confirming your email, set your password and join next generation marketing.</span>
                                    <br><br><br>
                                    <span># todo: option to resend confirmation email #</span>
                                </p>
                                <?php } else { ?>
                                <h2 class="card-title font-weight-bold mb-1">Adventure starts here 🚀</h2>
                                <p class="card-text mb-2">Next generation marketing.</p>
                                <form id="RegisterForm" class="auth-register-form mt-2" action="?Register" method="POST">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name</label>
                                        <input class="form-control" id="name" type="text" name="name" placeholder="John" aria-describedby="name" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="lastname">Last name</label>
                                        <input class="form-control" id="lastname" type="text" name="lastname" placeholder="Doe" aria-describedby="lastname" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" id="email" type="text" name="email" placeholder="john@example.com" aria-describedby="email" tabindex="2" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="············" aria-describedby="register-password" tabindex="3" />
                                            <!--<div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                            <label class="custom-control-label" for="register-privacy-policy">I agree to<a href="javascript:void(0);">&nbsp;privacy policy & terms</a></label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="<?= ASCsrf::getTokenName() ?>" value="<?= ASCsrf::getToken() ?>">
                                    <button class="btn btn-primary btn-block" tabindex="5">Sign up</button>
                                </form>
                                <p class="text-center mt-2"><span>Already have an account?</span><a href="../../login.php"><span>&nbsp;Sign in instead</span></a></p>
                                <div class="divider my-2">
                                    <div class="divider-text">or</div>
                                </div>
                                <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="javascript:void(0)"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="javascript:void(0)"><i data-feather="twitter"></i></a><a class="btn btn-google" href="javascript:void(0)"><i data-feather="mail"></i></a><a class="btn btn-github" href="javascript:void(0)"><i data-feather="github"></i></a></div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /Register-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <!-- BEGIN: Vendor JS-->
    <script src="../../view_templates/emmares/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!--<script src="../../view_templates/emmares/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../view_templates/emmares/app-assets/js/core/app-menu.js"></script>
    <script src="../../view_templates/emmares/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../assets/js/vendor/sha512.js"></script>
    <script src="../../assets/js/vendor/jquery.min.js"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../assets/js/vendor/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="../../assets/js/app/bootstrap.php"></script>
    <script src="../../assets/js/app/common.js"></script>
    <?php if (ASLang::getLanguage() != DEFAULT_LANGUAGE) : ?>
        <script src="../../assets/js/vendor/jquery-validate/localization/messages_<?= ASLang::getLanguage() ?>.js"></script>
    <?php endif; ?>
    
    <script type="text/javascript" src="../../assets/js/app/login.js"></script>
    <script type="text/javascript" src="../../assets/js/app/passwordreset.js"></script>
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
    <script type="text/javascript">
        (function($,W,D)
        {
            var JQUERY4U = {};

            JQUERY4U.UTIL =
            {
                setupFormValidation: function()
                {
                    $("#RegisterForm").validate({
                        rules: {
                            name: {
                                required: true,
                                minleght: 3
                            },
                            lastname: {
                                required: true
                            },
                            email: {
                                required: true,
                                email: true
                            },
                            password: {
                                required: true,
                                minlength: 6
                            }
                        },
                        messages: {
                            name: {
                                required: "<p class=\"text-danger\">This field is required.</p>",
                                minlenght: "<p class=\"text-danger\">Minimum lenght is 3 charachters.</p>"
                            },
                            lastname: {
                                required: "<p class=\"text-danger\">This field is required.</p>"
                            },
                            email: {
                                required: "<p class=\"text-danger\">This field is required.</p>",
                                email: "<p class=\"text-danger\">Please input correct email address.</p>"
                            },
                            password: {
                                required: "<p class=\"text-danger\">This field is required.</p>",
                                minlength: "<p class=\"text-danger\">Minimum lenght is 6 charachters.</p>"
                            }
                        },
                        submitHandler: function(form) {
                            form.submit();
                        }
                    });
                }
            }
            $(D).ready(function($) {
                JQUERY4U.UTIL.setupFormValidation();
            });
        })(jQuery, window, document);
    </script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>