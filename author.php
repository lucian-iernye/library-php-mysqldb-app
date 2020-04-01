<?php
session_start();
include("db_connection.php");
include("page_top.php");
include("menu.php");
?>
<?php
$id_autor = $_GET['id_autor'];
$sqlNumeAutor = "SELECT nume_autor FROM autori WHERE id_autor=".$id_autor;
$resursaNumeAutor = mysqli_query(OpenCon(), $sqlNumeAutor);
$numeAutor = mysqli_result ($resursaNumeAutor, 0, "nume_autor");
?>
<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" valign="top" width="767px">
<?php
print '<div style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">
<b>Books by 
<u><i>'.$numeAutor.'</i></u>:</b>
</div>';
?>
<table cellpadding="4" border="0">
<?php
$sql = "SELECT * FROM carti, autori, domenii WHERE carti.id_autor=autori.id_autor AND autori.id_autor=".$id_autor['id_autor'];
// $sql = "SELECT * FROM carti WHERE carti.id_autor=".$id_autor;
$resursa = mysqli_query(OpenCon(), $sql);
while($row = mysqli_fetch_array($resursa))
{
?>
<tr>
<td>
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
<i>by '.$numeAutor.'</i>
<br />Price: '.$row['pret'].'pounds.
</td>
</tr>';
}
?>
</table>
</td>
<?php
include("page_bottom.php");
?>

