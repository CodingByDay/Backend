<?php
  class MainController {
      public function home() {
          //to-do
          //
          //View
          require_once(views."dashboard.php");
      }
      
      public function error() {
          echo "Not allowed";
          //view to-do
      }
  }