<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class senderEmail{
    public $id; 
    public $id_user; 
    public $name; 
    public $status; 
    
    
     public function __construct($id, $id_user, $name, $status){
         $this->id = $id; 
         $this->id_user = $id_user; 
         $this->name = $name; 
         $this->status = $stauts; 
     }
     
     public function addNewSenderEmail($userId, $address){

        $Db = db::getInstance();
      
     $sql = "INSERT INTO as_user_email (id_user, name, status) VALUES ('$userId','$address', '0')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
	 mysqli_close($conn);


     }
     
     
     public function getUserEmails($userId){
        $emailsAll = [];
        $Db = db::getInstance();
      
        $DbRequest = $Db->query("SELECT * FROM as_user_emails where id_user = '$userId'");

        foreach($DbRequest->fetchAll() as $Email) {
            $emailsAll[] = new senderEmail($Email['id'], $Email['id_user'], $Email['name'], $Email['status']);
      }

      return $UsersAll;
    }
     
    
    
}