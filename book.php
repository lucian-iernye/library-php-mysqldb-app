<?php
session_start();
include("db_conection.php");
include("page_top.php");
include("menu.php");
?>
<?php
$id_carte = $_GET['id_carte'];
$sql = "SELECT * FROM carti, autori WHERE id_carte=".$id_carte." AND carti.id_autor=autori.id_autor";
$resursa = mysqli_query(OpenCon(), $sql);
$row = mysqli_fetch_array($resursa);
?>
<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" valign="top" width="767px">
<table border="0">
<tr>
<td valign="top">
<?php
$adresaImagine = "covers/".$id_carte.".jpg";
/*daca avem imagine pentru coperta, o afisam, iar daca nu avem, nu afisam nimic:*/
if (file_exists($adresaImagine))
{
print '<img src="'.$adresaImagine.'" width="200" height="230" hspace="10"><br>
<form action="shopping_cart.php?actiune=adauga" method="post">
<input type="hidden" name="id_carte" value="'.$id_carte.'" />
<input type="hidden" name="titlu" value="'.$row['titlu'].'" />
<input type="hidden" name="nume_autor" value="'.$row['nume_autor'].'" />
<input type="hidden" name="pret" value="'.$row['pret'].'" />
<center><input type="submit" value="Buy Now !" style="background-color:#000096; color:#E6F3FF" /></center>
</form>';
}
?>
</td>
<?php 
print '<td valign="middle">
<div style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">'.$row['titlu'].'</div>
<i>de <b>'.$row['nume_autor'].'</b></i>
<p>Anul aparitiei: '.$row['an_aparitie'].'</p>
<p><i>'.$row['descriere'].'</i></p>
<p>Pret: '.$row['pret'].' lei</p>
</td>';
?>
</tr>
</table>
<br /><br />

<center>
<div style="width:600px; height:50px; border:1px solid #632415; background-color:#E6F3FF; padding:5px">
<div style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Opiniile cititorilor:</div>
</div>
</center>

<?php
$sqlComentarii = "SELECT * FROM comentarii WHERE id_carte=".$id_carte;
$resursaComentarii = mysqli_query(OpenCon(), $sqlComentarii);
while($row = mysqli_fetch_array($resursaComentarii))
{
print '<div style="width: 400px; border: 1px solid #ffffff; background-color:#E6F3FF; padding:5px">
<a href="mailto:'.$row['adresa_email'].'">'.$row['nume_utilizator'].'</a><br>'.$row['comentariu'].'</div>';
}
?>
</div>
<br /><br />

<center>
<div style="width:600px; border:1px solid #632415; background-color:#E6F3FF; padding:5px">
<div style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Opinia dvs.:</div>
<form action="add_comment.php" method="post">
Nume: <input type="text" name="nume_utilizator" /><br /><br />
Email: <input type="text" name="adresa_email" /><br /><br />
Comentariu:<br />
<textarea name="comentariu" cols="45"></textarea><br /><br />
<input type="hidden" name="id_carte" value="<?=$id_carte?>" />
<center><input type="submit" value="Adauga" style="background-color:#000096; color:#E6F3FF" /></center>
</form>
</div>
</center>
</td>
<?php
include("page_bottom.php");
?>



