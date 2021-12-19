<?php
session_start();
echo("<link rel='stylesheet' href='style.css' type='text/css'>");
echo "bienvenue ";
echo $_SESSION['user'];
$jours=$_POST['jours'];

$pdo = new PDO('mysql:host=localhost;dbname=bdd','root',''); 
$pdostat = $pdo->query("select * from emploi where jours='$jours'");
echo ("<table width=100% border=1 >");
echo ("<tr>
<th> jours
<th> module
<th> groupe
<th> enseignant
</tr>");
echo "<form method='post' action='enregistrer.php'>";
while ($ligne=$pdostat->fetch(PDO::FETCH_NUM)) {
 echo ("<tr>");
  echo("<td ><input type='hidden' name='jours' value='$ligne[1]'> $ligne[1]");
 echo("<td ><input type='text' name='module' value='$ligne[2]'> ");
 echo("<td ><input type='groupe' name='groupe' value='$ligne[3]'>");
 echo("<td ><input type='text' name='enseignant' value='$ligne[4]'>");
 echo("<td ><input type='submit' value='Enregistrer'>");
}
 echo "</form>";
echo ("</tr>");
echo ("</table>");

?>