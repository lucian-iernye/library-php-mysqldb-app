<?php
if($_POST['nume'] == "")
{
print 'Trebuie sa completati numele !<a href="casa.php">Inapoi</a>';
exit;
}
//
if($_POST['prenume'] == "")
{
print 'Trebuie sa completati prenumele !<a href="casa.php">Inapoi</a>';
exit;
}
//
if($_POST['cnp'] == "")
{
print 'Trebuie sa completati CNP-ul (Codul Numeric Personal) !<a href="casa.php">Inapoi</a>';
exit;
}
//
if($_POST['email'] == "")
{
print 'Trebuie sa completati adresa de mail !<a href="casa.php">Inapoi</a>';
exit;
}
//aici eventual clientul trebuie sa aiba posibilitatea sa nu fie nevoit neaparat sa introduca numarul de telefon. insa nu stiu cum sa fac, eventual sa sterg acest if complet. la fel si cu celelalte randuri care nu vor fi obligatorii
if($_POST['telefon'] == "")
{
print 'Trebuie sa completati numarul de telefon !<a href="casa.php">Inapoi</a>';
exit;
}
//aici in formular va fi optiunea select, in care va selecta un judet din lista, insa nu stiu cum as putea face acest cod de php sa stie sa preia datele selectate nu cele introduse din tastatura
if($_POST['judet'] == "")
{
print 'Trebuie sa selectati un judet !<a href="casa.php">Inapoi</a>';
exit;
}
//aici la fel ca mai sus
if($_POST['localitate'] == "")
{
print 'Trebuie sa selectati localitatea unde locuiti !<a href="casa.php">Inapoi</a>';
exit;
}
//
if($_POST['strada'] == "")
{
print 'Trebuie sa completati strada unde locuiti !<a href="casa.php">Inapoi</a>';
exit;
}
//
if($_POST['numar'] == "")
{
print 'Trebuie sa completati numarul de la strada unde locuiti !<a href="casa.php">Inapoi</a>';
exit;
}
//aici din nou nu trebuie sa fie obligatorie completarea acestui rand. 
if($_POST['bloc'] == "")
{
print 'Trebuie sa completati numarul blocului de pe strada unde locuiti !<a href="casa.php">Inapoi</a>';
exit;
}
//aici din nou nu trebuie sa fie obligatorie completarea acestui rand. 
if($_POST['scara'] == "")
{
print 'Trebuie sa completati scara blocului la care locuiti !<a href="casa.php">Inapoi</a>';
exit;
}
//aici din nou nu trebuie sa fie obligatorie completarea acestui rand.
if($_POST['etaj'] == "")
{
print 'Trebuie sa completati etajul unde locuiti !<a href="casa.php">Inapoi</a>';
exit;
}
//
if($_POST['apart'] == "")
{
print 'Trebuie sa completati apartamentul unde locuiti !<a href="casa.php">Inapoi</a>';
exit;
}
//aici din nou nu trebuie sa fie obligatorie completarea acestui rand.
if($_POST['cod_postal'] == "")
{
print 'Trebuie sa completati codul postal !<a href="casa.php">Inapoi</a>';
exit;
}
session_start();
$nrCarti=array_sum($_SESSION['nr_buc']);
if($nrCarti == 0)
{
 print 'Trebuie sa cumparati cel putin o carte !<a href="casa.php">Inapoi</a>';
 exit;
}
include("conectare.php");
$sqlTranzactie = "insert into tranzactii(nume, prenume, cnp, email, telefon, judet, localitate, strada, numar, bloc, scara, etaj, apart, cod_postal) values ('".$_POST['nume']."','".$_POST['prenume']."','".$_POST['cnp']."','".$_POST['email']."','".$_POST['telefon']."','".$_POST['judet']."','".$_POST['localitate']."','".$_POST['strada']."','".$_POST['numar']."','".$_POST['bloc']."','".$_POST['scara']."','".$_POST['etaj']."','".$_POST['apart']."','".$_POST['cod_postal']."')";
$resursaTranzactie = mysql_query($sqlTranzactie);
$id_tranzactie = mysql_insert_id();
for($i=0; $i<count($_SESSION['id_carte']); $i++)
{
 if($_SESSION['nr_buc'][$i] > 0)
 {
//cream interogarea
  $sqlVanzare = "INSERT INTO vanzari values ('".$id_tranzactie."','".$_SESSION['id_carte'][$i]."','".$_SESSION['nr_buc'][$i]."')";
//si o rulam
  mysql_query($sqlVanzare);
  }
}
$emailDestinatar = "lucian.iernye@gmail.com";
$subiect = "O noua comanda !";
$mesaj = "O noua comanda de la<b>".$_POST['nume']."</b><br>";
$mesaj .= "Cartile comandate:<br><br>";
$mesaj .="<table border='2' cellspacing='0' cellpadding='4'>";
for ($i=0; $i<count($_SESSION['id_carte']); $i++)
 {
  if($_SESSION['nr_buc'][$i] > 0)
  {
  $mesaj .="<tr><td>".$_SESSION['titlu'][$i]." de ".$_SESSION['nume_autor'][$i]."</td><td>".  $_SESSION['nr_buc'][$i]." buc</td></tr>";
  $totalGeneral = $totalGeneral + ($_SESSION['nr_buc'][$i] * $_SESSION['pret'][$i]);
  }
 }
$mesaj .="</table>";
$mesaj .="Total:<b>".$totalGeneral."</b>";
$headers = "MIME-Version 1.0\r\nContent-type: text/html; charset=iso-8859-2\r\n";
mail($emailDestinatar, $subiect, $mesaj, $headers);
session_unset();
session_destroy();
include("page_top.php");
include("meniu.php");
?>
<td valign="top">
<h1>Multumim !</h1>
Va multumim ca ati cumparat de la noi ! Veti primi comanda solicitata in cel mai scurt timp.
</td>
<?php
include("page_bottom.php");
?>

  