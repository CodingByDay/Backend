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
require_once ('../../emmares/config.php');

//Login/Register Module Initialization, Set Session
$token = app('register')->socialToken();
ASSession::set('as_social_token', $token);
app('register')->botProtection();

//Check Login Status & Redirect
if (! app('login')->isLoggedIn()) {
    //redirect("login.php");
    redirect('login.php');
} else {
    require_once('app/models/main_users.php');
    $GetCurrentUser = app('current_user');
    $CurrentUserId = e($GetCurrentUser->id);
    $User = UserDetails::GetUserDetailsSingle($CurrentUserId);
    //fix this logic :)
    $UserRoleText = "";
    if ($User->user_role == 1) { $UserRoleText = "User"; } else { $UserRoleText = "Admin"; }
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

//Database connect
class db {
    private static $instance = NULL;
    private function __construct() {}
    private function __clone() {}
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS,$pdo_options);
      }
      return self::$instance;
    } 
}
