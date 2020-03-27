<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" bgcolor="#E6F3FF" valign="top" width="223px">
<center><b>Domenii</b></center>
<hr size="1" color="#000033">

<?php
$sql = "SELECT * FROM domenii";
$resursa = mysql_query($sql);
while($row =
   mysql_fetch_array($resursa))
   {
	   print '<a href="domeniu.php?id_domeniu='.$row['id_domeniu'].'">'.$row['nume_domeniu'].'</a><br>';
   }
?>
<hr size="1" color="#000033">
<br /><br />

<center><form action="cautare.php" method="get">
<b>Cautare</b><br>
<hr size="1" color="#000033">
<input type="text" name="cuvant" size="30"><br>
<input type="submit" value="Cauta" size="20" style="background-color:#FF9966" />
</form></center>
<hr size="1" color="#000033">
<br /><br />

<center><b>Cos</b>
<hr size="1" color="#000033">
<?php
$nrCarti = 0;
$totalValoare = 0;
if (isset($_SESSION['titlu'])) {
for($i = 0; $i < count($_SESSION['titlu']); $i++)
  {
  $nrCarti = $nrCarti + $_SESSION['nr_buc'][$i];
  $totalValoare = $totalValoare + ($_SESSION['nr_buc'][$i] * $_SESSION['pret'][$i]);
  }
}
?>
<?php
print '
Aveti <b>'.$nrCarti.'</b> carti in cos, in valoare totala de <b>'.$totalValoare.'</b> lei.<br>
<div id="simplu">
<a href="cos.php?actiune=adaugare">Click aici pentru a vedea continutul cosului!</a>
<div>';
?>
</center>
<hr size="1" color="#000033">
</td>
 
