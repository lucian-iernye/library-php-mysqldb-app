<?php

if($_POST['user_name'] == ""
|| $_POST['email_address'] == ""
|| $_POST['comment'] == "") {
print "You need to fill in all fields !";
exit;
}
include("connect_to_db.php");
$nameWithoutTags = strip_tags($_POST['user_name']);
$emailWithoutTags = strip_tags($_POST['email_address']);
$commentWithoutTags = strip_tags($_POST['comment']);
$sql = "INSERT INTO comentarii(id_carte, nume_utilizator, adresa_email, comentariu) VALUES(".$_POST['id_carte'].", '".$numeFaraTags."', '".$emailFaraTags."', '".$comentariuFaraTags."')";
mysqli_query(OpenCon(), $sql);
$inapoi = "carte.php?id_carte=".$_POST['id_carte'];
header("location: $inapoi");
?>
