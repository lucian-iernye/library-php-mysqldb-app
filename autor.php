<?php
session_start();
include("conectare.php");
include("page_top.php");
include("meniu.php");
?>
<?php
$id_autor = $_GET['id_autor'];
$sqlNumeAutor = "SELECT nume_autor FROM autori WHERE id_autor=".$id_autor;
$resursaNumeAutor = mysqli_query($sqlNumeAutor);
$numeAutor = mysqli_result ($resursaNumeAutor, 0, "nume_autor");
?>
<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" valign="top" width="767px">
<?php
print '<div style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">
<b>Carti de 
<u><i>'.$numeAutor.'</i></u>:</b>
</div>';
?>
<table cellpadding="4" border="0">
<?php
//$sql = "SELECT * FROM carti, autori, domenii WHERE carti.id_autor=autori.id_autor AND autori.id_autor=".$id_autor['id_autor'];
$sql = "SELECT * FROM carti WHERE carti.id_autor=".$id_autor;
$resursa = mysqli_query($sql);
while($row = mysqli_fetch_array($resursa))
{
?>
<tr>
<td>
<?php
$adresaImagine = "coperte/".$row['id_carte'].".jpg";
if(file_exists($adresaImagine))
{
print '<img src="'.$adresaImagine.'" width="200" height="230"><br>';
}
else
{
print '<div style="width:200px; height:230px; border : 1px black solid; background-color:#cccccc">Fara imagine</div>';
}

print '</td>
<td>
<b><a href="carte.php?id_carte='.$row['id_carte'].'">'.$row['titlu'].'</a></b><br />
<i>de '.$numeAutor.'</i>
<br />Pret: '.$row['pret'].'lei
</td>
</tr>';
}
?>
</table>
</td>
<?php
include("page_bottom.php");
?>

