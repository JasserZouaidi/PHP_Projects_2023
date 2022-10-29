<?php

// CONNECTION
mysql_connect('localhost','root','','db_lycee');

// VERIFICATION FUNCTION
// if (mysqli_connect('localhost','root','')) {
//     echo 'successfully';
// }

// GET THE INFORMATIONS FROM THE FORM
$n = $_POST['nom'];
$p = $_POST['prenom'];
$c = $_POST['classe'];
$s = $_POST['sexe'];
$o = $_POST['musique'].$_POST['dessin'].$_POST['scientifique'];
$j = $_POST['journee'];

// INSERT THE INFORMATIONS IN eleves 
$req = "INSERT INTO eleves VALUES('$n','$p','$c','$s','$o','$j')";
$result = mysql_query($req);

// VERIFIVATION FUNCTION
if (mysql_affected_rows() != 0) {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("successfully")';
    echo '</script>';
}else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("failed")';  
    echo '</script>';
}

// CLOSE FROM THE DB
mysql_close();

// RETURN TO FORM.HTML
header("Location: form.html");

?>