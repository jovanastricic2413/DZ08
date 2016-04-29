<?php
include("funtions.php");
if(isset($_POST['submit'])){
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
if(!empty($ime) && !empty($prezime) && !empty($email) && !empty($username) && !empty($password)){
dodajKorisnik($ime,$prezime,$email,$username,$password);
echo "Uspešna registracija";

} else{
echo "Niste popunili sva polja";
}
}
?>