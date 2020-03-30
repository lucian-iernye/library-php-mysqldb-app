<?php
session_start();
include("db_connection.php");
include("page_top.php");
include("menu.php");
$actiune = $_GET['actiune'];
if(isset($_GET['actiune'])&& $_GET['actiune'] == "adauga")
{
$_SESSION['id_carte'][]=$_POST['id_carte'];
$_SESSION['nr_buc'][]=1;
$_SESSION['pret'][]=$_POST['pret'];
$_SESSION['titlu'][]=$_POST['titlu'];
$_SESSION['nume_autor'][]=$_POST['nume_autor'];
}
if(isset($_GET['actiune'])&& $_GET['actiune'] == "modifica")
{
for($i=0; $i<count($_SESSION['id_carte']); $i++)
   {
    $_SESSION['nr_buc'][$i] = $_POST['noulNrBuc'][$i];
   }
}


?>
<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" valign="top" width="767px">
<div style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold" align="center">Cosul de cumparaturi</div>
<form action="shopping_cart.php?action=modifica" method="post">
<table align="center" style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" border="0" cellpadding="4" width="600">
<tr>
<td><b>Nr. buc</b></td>
<td><b>Carte</b></td>
<td><b>Pret</b></td>
<td><b>Total</b></td>
</tr>
<?php
$totalGeneral = 0;
for ($i=0; $i<count($_SESSION['id_carte']); $i++)
{
if ($_SESSION['nr_buc'][$i] != 0)
//doar daca numarul de bucati nu e 0, afiseaza randul
{
print '<tr>
<td><input type="text" name="noulNrBuc['.$i.']" size="1" value="'.$_SESSION['nr_buc'][$i].'">
</td>
<td><b>'.$_SESSION['titlu'][$i].'</b> de '.$_SESSION['nume_autor'][$i].'
</td>
<td align="right">'.$_SESSION['pret'][$i].' lei</td>
<td align="right">'.($_SESSION['pret'][$i] * $_SESSION['nr_buc'][$i]).' lei</td></tr>';
$totalGeneral = $totalGeneral + ($_SESSION['pret'][$i] * $_SESSION['nr_buc'][$i]);
}
}
print '<tr><td align="right" colspan="3"><b>Total in cos</b></td><td align="right"><b>'.$totalGeneral.'</b> lei</td></tr>';
?>
</table>
<div align="center">Introduceti <b>0</b> pentru cartile ce doriti sa le scoateti din cos!</div>
<center><input type="submit" value="Modificati" style="background-color:#000096; color:#E6F3FF" /></center>
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />

<div style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold" align="center">Continuare</div>
<table align="center" style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" border="0" width="600">
<tr><td align="left" width="300">
<center><img src="buttons/cos2.jpg" height="34" width="70" /><br />
<a href="index.php">Continuati Cumparaturile</a></center></td>
<td align="left" width="300">
<center><img src="buttons/cos1.jpg" height="34" width="70" /><br />
<a href="shopping_checkout.php">Mergeti la Casa</a></center></td>
</tr>
</table>
<?php
include("page_bottom.php");
?>
