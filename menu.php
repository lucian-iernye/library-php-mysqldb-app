
<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" bgcolor="#E6F3FF" valign="top" width="223px">
<center><b>Genre</b></center>
<hr size="1" color="#000033">

<?php
$sql = "SELECT * FROM domenii";
$resursa = mysqli_query(OpenCon(), $sql);
while($row =
   mysqli_fetch_array($resursa))
   {
	   print '<a href="genre.php?id_domeniu='.$row['id_domeniu'].'">'.$row['nume_domeniu'].'</a><br>';
   }
?>
<hr size="1" color="#000033">
<br /><br />

<center><form action="search.php" method="get">
<b>Search</b><br>
<hr size="1" color="#000033">
<input type="text" name="word" size="30"><br>
<input type="submit" value="search" size="20" style="background-color:#FF9966" />
</form></center>
<hr size="1" color="#000033">
<br /><br />

<center><b>Shopping Cart</b>
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
You have <b>'.$nrCarti.'</b> books in your cart, with total cost of <b>'.$totalValoare.'</b> pounds.<br>
<div id="simplu">
<a href="shopping_cart.php?action=add">Click here to see your shopping cart!</a>
<div>';
?>
</center>
<hr size="1" color="#000033">
</td>
 
