<?php

if($_POST['nume_utilizator'] == ""
|| $_POST['adresa_email'] == ""
|| $_POST['comentariu'] == "") {
print "You need to fill in all fields !";
exit;
}
include("db_connection.php");
$nameWithoutTags = strip_tags($_POST['nume_utilizator']);
$emailWithoutTags = strip_tags($_POST['adresa_email']);
$commentWithoutTags = strip_tags($_POST['comentariu']);
$sql = "INSERT INTO comentarii(id_carte, nume_utilizator, adresa_email, comentariu) VALUES(".$_POST['id_carte'].", '".$numeFaraTags."', '".$emailFaraTags."', '".$comentariuFaraTags."')";
mysqli_query(OpenCon(), $sql);
$inapoi = "book.php?id_carte=".$_POST['id_carte'];
header("location: $inapoi");
?>
