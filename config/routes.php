<?php
//Check If Controller/Action is set, otherwise redirect to Main page - Dashboard
if (isset($_GET['page']) && isset($_GET['action'])) {
    $controller = $_GET['page'];
    $action     = $_GET['action'];
  } else {
    $controller = 'main';
    $action     = 'home';
  }
  
  function call($controller, $action) {
    require_once(controllers . $controller . '.php');
    
    //Select Controller
    switch($controller) {
      case 'main':
          $controller = new MainController();
          require_once('app/models/main_users.php');
          require_once('app/models/EmailModel.php');
      break;
    }

    // Call Action
    $controller->{ $action }();
  }

  //Allowed Controllers Actions
  $controllers = array('main' => ['home', 'error', 'mycontent', 'useremails']);

  //Not Allowed Action
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('main', 'error');
    }
  } else {
    call('main', 'error');
  }