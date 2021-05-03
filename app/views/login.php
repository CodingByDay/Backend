<?php require_once(view_templates_resources.'header-auth.php'); ?>
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
                            <img style="width:300px; height:auto;" class="img-fluid" src="<?= view_templates ?>emmares/app-assets/images/logo/EmmaresLogo.svg" alt="EMMARES - Future of marketing" />
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
                                <p class="text-center mt-2"><span>New on our platform?</span><a href="page-auth-register-v2.html"><span>&nbsp;Create an account</span></a></p>
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
<?php require_once(view_templates_resources.'footer-auth.php'); ?>