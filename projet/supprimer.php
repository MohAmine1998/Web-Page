<?php
echo("<link rel='stylesheet' href='style.css' type='text/css'>");
$jours=$_POST['jours'];
$pdo = new PDO('mysql:host=localhost;dbname=bdd','root',''); 
$pdostat = $pdo->query("delete from emploi WHERE `emploi`.`jours` =$jours");

include("pageAdmin.php")

?>