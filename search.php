<?php
session_start();
include("db_connection.php");
include("page_top.php");
include("menu.php");
$cuvant = $_GET['cuvant'];
?>
<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" valign="top" width="767px">
<h1>Search results:</h1>
<?php
print '
<p>Textul cautat: <b>'.$cuvant.'</b></p>';
?>
<b>Authors</b>
<blockquote>
<?php
$sql = "SELECT id_autor, nume_autor FROM autori WHERE nume_autor LIKE '%".$cuvant."%'";
$resursa = mysqli_query(OpenCon(), $sql);
if(mysqli_num_rows($resursa) == 0)
 {
 print "<i>Nici un rezultat</i>";
 }
while($row=mysqli_fetch_array($resursa))
 {
 print '<a href="author.php?id_autor='.$row['id_autor'].'">'.$row['nume_autor'].'</a><br>';
 }
?>
</blockquote>
<b>Titles</b>
<blockquote>
<?php
$sql = "SELECT id_carte, titlu FROM carti WHERE titlu LIKE '%".$cuvant."%'";
$resursa = mysqli_query(OpenCon(), $sql);
if(mysqli_num_rows($resursa) == 0)
 {
 print "<i>No results.</i>";
 }
while($row=mysqli_fetch_array($resursa))
 {
 print '<a href="book.php?id_carte='.$row['id_carte'].'">'.$row['titlu'].'</a><br>';
 }
?>
</blockquote>
<b>Descriptions</b>
<blockquote>
<?php
$sql = "SELECT id_carte, titlu, descriere FROM carti WHERE descriere LIKE '%".$cuvant."%'";
$resursa = mysqli_query(OpenCon(), $sql);
if(mysqli_num_rows($resursa) == 0)
 {
 print "<i>No result.</i>";
 }
while($row=mysqli_fetch_array($resursa))
 {
 print '<a href="book.php?id_carte='.$row['id_carte'].'">'.$row['titlu'].'</a><br>'.$row['descriere'].'<br><br>';
 }
?>
</blockquote>
</td>
<?php
include("page_bottom.php");
?>