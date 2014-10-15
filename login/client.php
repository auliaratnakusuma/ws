<?php
//memulai 
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
//panggil library 
require_once('nusoap/lib/nusoap.php');

$url = 'http://localhost/ws/login/server.php?wsdl';

//mendefinisikan alamat url service yang disediakan oleh client
$client = new nusoap_client($url, 'WSDL');
$username = isset($_POST["username"]) ?$_POST["username"] : 'admin' ;
$password = isset($_POST["password"]) ?$_POST["password"] : 'admin' ; 
$result = $client->call('login_ws', array('username'=>$username, 'password' =>$password));

if($result == "Login Berhasil"){
$_SESSION['username'] = $username;
//header ("location:index.php");
} else{
header ("location:login.php");
}
?>