<?php
session_start();
include("db_conection.php");
include("page_top.php");
include("menu.php");
?>
<?php
$id_domeniu = $_GET['id_domeniu'];
$sqlNumeDomeniu = "SELECT nume_domeniu FROM domenii WHERE id_domeniu=".$id_domeniu;
$resursaNumeDomeniu = mysqli_query(OpenCon(), $sqlNumeDomeniu);
$numeDomeniu = mysqli_fetch_all($resursaNumeDomeniu, 0, "nume_domeniu");
?>
<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" valign="top" width="767px">
<?php
print '<b>Carti in domeniul
<u><i>'.$numeDomeniu.'</i></u>:</b>';
?>
<table cellpadding="4" border="0">
<?php
$sql = "SELECT * FROM carti, autori, domenii WHERE carti.id_domeniu=domenii.id_domeniu AND carti.id_autor=autori.id_autor AND domenii.id_domeniu=".$id_domeniu['id_domeniu'];
$resursa = mysqli_query(OpenCon(), $sql);
while($row = mysqli_fetch_array($resursa))
{
?>
<tr>
<td align="center">
<?php
$adresaImagine = "covers/".$row['id_carte'].".jpg";
if(file_exists($adresaImagine))
{
print '<img src="'.$adresaImagine.'" width="200" height="230"><br>';
}
else
{
print '<div style="width:200px; height:230px; border : 1px black solid; background-color:#cccccc">Without image</div>';
}

print '</td>
<td>
<b><a href="book.php?id_carte='.$row['id_carte'].'">'.$row['titlu'].'</a></b><br />
<i>de '.$row['nume_autor'].'</i>
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

