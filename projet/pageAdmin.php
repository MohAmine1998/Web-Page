<?php
echo("<link rel='stylesheet' href='style.css' type='text/css'>");
echo "bienvenue ";
echo $_SESSION['user'];
$pdo = new PDO('mysql:host=localhost;dbname=bdd','root',''); 
$pdostat = $pdo->query("select * from emploi limit 10");
echo ("<table width=100% border=1 >");
echo ("<tr>
<th> jours
<th> module
<th> groupe
<th> enseignant

</tr>");
while ($ligne=$pdostat->fetch(PDO::FETCH_NUM)) {
 echo ("<tr>");
 echo("<td >$ligne[1]");
 echo("<td >$ligne[2] ");
 echo("<td >$ligne[3]");
 echo("<td >$ligne[4]");
 echo("<td ><form method='post' action='modifier.php'><input type='hidden' name='jours' value='$ligne[1]'><input type='submit' value='Modifier'></form>");
 echo("<td ><form method='post' action='supprimer.php'><input type='hidden' name='jours' value='$ligne[1]'><input type='submit' value='Supprimer'></form>");
}
echo ("</tr>");
echo ("</table>");

?>