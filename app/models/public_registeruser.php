<?php
/*
 * Public register module
 */
$GoRoot = realpath("./../../../");
require_once $GoRoot."./../../emmares/config.php";
require_once($GoRoot."./app/ASEngine/ASConfig.php");
require_once($GoRoot."./app/ASEngine/ASPasswordHasher.php");
require_once($GoRoot."./app/ASEngine/ASUser.php");

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

$Db = db::getInstance();

$Name = $_POST['name'];
$Lastname = $_POST['lastname'];
$Email = $_POST['email'];
$Password = $_POST['password'];

$QGetUserId = "SELECT user_id FROM as_users WHERE email='$Email' ORDER BY user_id DESC LIMIT 1";
$RGetUserId = $Db->query($QGetUserId);
$GetUserId = $RGetUserId->fetch();

if ($GetUserId == null) {
$PasswordHash = hash("sha512", $Password);
$AuthPassword = (new ASPasswordHasher())->hashPassword($PasswordHash);

$QAuth = "INSERT INTO as_users (email, username, password, confirmation_key, confirmed, password_reset_key, password_reset_confirmed, register_date, user_role,"
        . "banned) VALUES ('$Email', '$Email', '$AuthPassword', '', 'Y', '', 'N', CURDATE(), '1', 'N')";
$RAuth = $Db->query($QAuth);

$QGetUserId = "SELECT user_id FROM as_users WHERE email='$Email' ORDER BY user_id DESC LIMIT 1";
$RGetUserId = $Db->query($QGetUserId);
$GetUserId = $RGetUserId->fetch();
$UserId = $GetUserId['user_id'];

$QUserDetails = "INSERT INTO as_user_details (user_id, first_name, last_name, email, user_role) VALUES ('$UserId', '$Name', '$Lastname', '$Email', '1')";
$RUserDetails = $Db->query($QUserDetails);
} else {
    //this email already exists or token expired
}

