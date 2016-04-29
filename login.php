<?php
session_start();
include("funtions.php");
if(isset($_POST['submit'])){
$username = $conn->real_escape_string($_POST['username']);
$password = md5($_POST['password']);
if(!empty($username) && !empty($password)){
if(proveriKorisnika($username,$password)){
$_SESSION['username'] = $username;
}else{
echo "Pogresan username ili password";
}
}else{
echo "Niste uneli sve podatke";
}
}
if(isset($_SESSION['username'])){
echo "Logovan si kao: ".$_SESSION['username'];
}
?>