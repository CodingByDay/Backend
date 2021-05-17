<?php
  class MainController {
      public function home() {
          //to-do
          //
          //View
          require_once(views."dashboard.php");
      }
      
      
          public function mycontent() {
          //to-do
          //
          //View
              
          require_once(views."my-content.php");
      }
      
      public function error() {
          echo "Not allowed";
          //view to-do
      }
  }