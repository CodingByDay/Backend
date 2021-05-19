<?php
  class MainController {


      public function home() {

          require_once(views."dashboard.php");
      }
      
          public function mycontent() {
          //  $message = $_SESSION['success'];
          //  echo "<script type='text/javascript'>alert('$message');</script>";          // View
            require_once(views."my-content.php");
      }
      
      
       public function useremails() {
           $GetCurrentUser = app('current_user');
           $CurrentUserId = e($GetCurrentUser->id);  
           if(isset($_POST['exampleInputEmail1'])) {
           $test = EmailModel::addNewSenderEmail($CurrentUserId, $_POST['exampleInputEmail1']); // Adding the new insert.
           $RouteRequest = "index.php?page=main&action=mycontent"; // Route request example.
           require_once(views."RouteRequest.php");
          // $_SESSION["success"] = $test;
           }
      }
      
      public function error() {
          echo "Not allowed";
          //view to-do
      }
  }