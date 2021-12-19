<?php
echo("<link rel='stylesheet' href='style.css' type='text/css'>");
$jours=$_POST['jours'];
$module=$_POST['module'];
$groupe=$_POST['groupe'];
$enseignant=$_POST['enseignant'];
$pdo = new PDO('mysql:host=localhost;dbname=bdd','root',''); 
$pdostat = $pdo->query("UPDATE `emploi` SET module = '$module', groupe = '$groupe', enseignant = '$enseignant' WHERE `emploi`.`jours` =$jours");
$pdostat2 = $pdo->query("select * from emploi limit 10");
echo ("<table width=100% border=1 >");
echo ("<tr>
<th> jours
<th> module
<th> groupe
<th> enseignant
 
</tr>");
while ($ligne=$pdostat2->fetch(PDO::FETCH_NUM)) {
 echo ("<tr>");
 echo("<td ><center>$ligne[1]</center>");
 echo("<td ><center>$ligne[2]</center>");
 echo("<td ><center>$ligne[3]</center>");
 echo("<td ><center>$ligne[4]</center>");
 echo("<td ><center><br><br><form method='post' action='modifier.php'><input type='hidden' name='jours' value='$ligne[1]'><input type='submit' value='Modifier'></form></center>");
 echo("<td ><center><br><br><form method='post' action='supprimer.php'><input type='submit' value='Supprimer'></form></center>");
}
echo ("</tr>");
echo ("</table>");

?>