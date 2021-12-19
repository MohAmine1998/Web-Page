<?php
session_start();
$user=$_POST["user"];
$pwd=$_POST["pwd"];
$pdo = new PDO('mysql:host=localhost;dbname=bdd','root',''); 
$pdostat = $pdo->prepare("select * from connexion where user=? and pwd=?");
$pdostat->bindParam(1,$user);
$pdostat->bindParam(2,$pwd);
$pdostat->execute();
$compteur=0;
while ($ligne=$pdostat->fetch(PDO::FETCH_NUM)) {
$compteur++;
}
if ($compteur>0){
$_SESSION['user']=$user;
$_SESSION['pwd']=$pwd;	
include ('pageAdmin.php');	
}

?>