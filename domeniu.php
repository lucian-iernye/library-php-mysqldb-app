<?php
session_start();
include("conectare.php");
include("page_top.php");
include("meniu.php");
?>
<?php
$id_domeniu = $_GET['id_domeniu'];
$sqlNumeDomeniu = "SELECT nume_domeniu FROM domenii WHERE id_domeniu=".$id_domeniu;
$resursaNumeDomeniu = mysql_query($sqlNumeDomeniu);
$numeDomeniu = mysql_result ($resursaNumeDomeniu, 0, "nume_domeniu");
?>
<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" valign="top" width="767px">
<?php
print '<b>Carti in domeniul
<u><i>'.$numeDomeniu.'</i></u>:</b>';
?>
<table cellpadding="4" border="0">
<?php
$sql = "SELECT * FROM carti, autori, domenii WHERE carti.id_domeniu=domenii.id_domeniu AND carti.id_autor=autori.id_autor AND domenii.id_domeniu=".$id_domeniu['id_domeniu'];
$resursa = mysql_query($sql);
while($row = mysql_fetch_array($resursa))
{
?>
<tr>
<td align="center">
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
