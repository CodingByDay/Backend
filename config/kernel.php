<?php
/*
 *---------------------------------------------------------------------
 * EMMARES
 * Copyright 2021 Emmares.com
 * Ori-on
 *---------------------------------------------------------------------
 */

//Login/Register Module
include('app/ASEngine/AS.php');

//Login/Register Module Initialization, Set Session
$token = app('register')->socialToken();
ASSession::set('as_social_token', $token);
app('register')->botProtection();

//Check Login Status & Redirect
if (! app('login')->isLoggedIn()) {
    //redirect("login.php");
    redirect('login.php');
} else {
    require_once(view_templates_resources.'main-layout-app.php');
}

//Check If Controller/Action is set, otherwise redirect to Main page - Dashboard
if (isset($_GET['page']) && isset($_GET['action'])) {
    $controller = $_GET['page'];
    $action     = $_GET['action'];
    
  } else {
    $controller = 'main';
    $action     = 'home';
  }
