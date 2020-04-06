<?php

if ($_POST['first-name'] == "") {
    print 'You need to fill in the first name !<a href="shopping_checkout.php">Back</a>';
    exit;
}

if ($_POST['last-name'] == "") {
    print 'You need to fill in the last name !<a href="shopping_checkout.php">Back</a>';
    exit;
}

if ($_POST['email'] == "") {
    print 'You need to fill in the email address !<a href="shopping_checkout.php">Back</a>';
    exit;
}

if ($_POST['phone'] == "") {
    print 'You need to fill in the phone number !<a href="shopping_checkout.php">Back</a>';
    exit;
}

if ($_POST['city'] == "") {
    print 'You need to select a city !<a href="shopping_checkout.php">Back</a>';
    exit;
}
//
if ($_POST['address-one'] == "") {
    print 'You need to fill in the address details !<a href="shopping_checkout.php">Back</a>';
    exit;
}
//
if ($_POST['address-two'] == "") {
    print 'You need to fill in the address details !<a href="shopping_checkout.php">Inapoi</a>';
    exit;
}

if ($_POST['post-code'] == "") {
    print 'You need to fill in the post-code !<a href="shopping_checkout.php">Back</a>';
    exit;
}

session_start();
$nrCarti = array_sum($_SESSION['nr_buc']);

if ($nrCarti == 0) {
    print 'You need to buy at least one book !<a href="shopping_checkout.php">Back</a>';
    exit;
}

include "db_connection.php";

$sqlTranzactie = "INSERT INTO tranzactii(nume, prenume, cnp, email, telefon, judet, localitate, strada, numar, bloc, scara, etaj, apart, cod_postal) values ('" . $_POST['nume'] . "','" . $_POST['prenume'] . "','" . $_POST['cnp'] . "','" . $_POST['email'] . "','" . $_POST['telefon'] . "','" . $_POST['judet'] . "','" . $_POST['localitate'] . "','" . $_POST['strada'] . "','" . $_POST['numar'] . "','" . $_POST['bloc'] . "','" . $_POST['scara'] . "','" . $_POST['etaj'] . "','" . $_POST['apart'] . "','" . $_POST['cod_postal'] . "')";

$resursaTranzactie = mysqli_query(OpenCon(), $sqlTranzactie);

$id_tranzactie = mysqli_insert_id();

for ($i = 0; $i < count($_SESSION['id_carte']); $i++) {
    if ($_SESSION['nr_buc'][$i] > 0) {
//cream interogarea
        $sqlVanzare = "INSERT INTO vanzari values ('" . $id_tranzactie . "','" . $_SESSION['id_carte'][$i] . "','" . $_SESSION['nr_buc'][$i] . "')";
//si o rulam
        mysqli_query($sqlVanzare);
    }
}

$emailDestinatar = "lucian.iernye@gmail.com";
$subiect = "A new order !";
$mesaj = "A new order from<b>" . $_POST['nume'] . "</b><br>";
$mesaj .= "Ordered books:<br><br>";
$mesaj .= "<table border='2' cellspacing='0' cellpadding='4'>";
for ($i = 0; $i < count($_SESSION['id_carte']); $i++) {
    if ($_SESSION['nr_buc'][$i] > 0) {
        $mesaj .= "<tr><td>" . $_SESSION['titlu'][$i] . " by " . $_SESSION['nume_autor'][$i] . "</td><td>" . $_SESSION['nr_buc'][$i] . " pcs.</td></tr>";
        $totalGeneral = $totalGeneral + ($_SESSION['nr_buc'][$i] * $_SESSION['pret'][$i]);
    }
}
$mesaj .= "</table>";
$mesaj .= "Total:<b>" . $totalGeneral . "</b>";
$headers = "MIME-Version 1.0\r\nContent-type: text/html; charset=iso-8859-2\r\n";
mail($emailDestinatar, $subiect, $mesaj, $headers);
session_unset();
session_destroy();
include "page_top.php";
include "menu.php";
?>
<td valign="top">
<h1>Thanks !</h1>
Thank you for buying from us ! You will receive your order shortly.
</td>
<?php
include "page_bottom.php";
?>

