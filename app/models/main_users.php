<?php
/*
 * Main user model
 */
require_once(password_hash);
require_once(auth_user);

class AuthUsers {
    public $user_id;
    public $email;
    public $username;
    public $password;
    public $confirmation_key;
    public $confirmed;
    public $password_reset_key;
    public $password_reset_confirmed;
    public $password_reset_timestamp;
    public $register_date;
    public $user_role;
    public $last_login;
    public $banned;
    
    public function __construct($user_id, $email, $username, $password, $confirmation_key, $confirmed, $password_reset_key, $password_reset_confirmed, $password_reset_timestamp,
                                $register_date, $user_role, $last_login, $banned) {
        $this->user_id = $user_id;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->confirmation_key = $confirmation_key;
        $this->confirmed = $confirmed;
        $this->password_reset_key = $password_reset_key;
        $this->password_reset_confirmed = $password_reset_confirmed;
        $this->password_reset_timestamp = $password_reset_timestamp;
        $this->register_date = $register_date;
        $this->user_role = $user_role;
        $this->last_login = $last_login;
        $this->banned = $banned;
    }
    
    //Register New User
    public static function RegisterUserAuth() {
        
    }
}

class UserDetails {
    public $id_user_details;
    public $user_id;
    public $first_name;
    public $last_name; 
    public $email;
    public $phone;
    public $address;
    public $user_role;
    
    public function __construct($id_user_details, $user_id, $first_name, $last_name, $email, $phone, $address, $user_role) {
        $this->id_user_details = $id_user_details;
        $this->user_id = $user_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->user_role = $user_role;
    }
    
    //Register New User
    public static function GetUserDetailsAll() {
        $UsersAll = [];
        $Db = db::getInstance();
      
        $DbRequest = $Db->query("SELECT * FROM as_user_details");

        foreach($DbRequest->fetchAll() as $User) {
            $UsersAll[] = new UserDetails($User['id_user_details'], $User['user_id'], $User['first_name'], $User['last_name'], $User['email'], $User['phone'], $User['address'],
                                          $User['user_role']);
      }

      return $UsersAll;
    }
    
    public static function GetUserDetailsSingle($IdUser) {
        $Db = db::getInstance();
        
        $DbRequest = $Db->query("SELECT * FROM as_user_details WHERE user_id = '$IdUser'");
        $User = $DbRequest->fetch();

        return new UserDetails($User['id_user_details'], $User['user_id'], $User['first_name'], $User['last_name'], $User['email'], $User['phone'], $User['address'],
                               $User['user_role']);
    }
}

