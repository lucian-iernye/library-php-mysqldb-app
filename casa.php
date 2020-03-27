<?php
session_start();
include("conectare.php");
include("page_top.php");
include("meniu.php");
?>
<link href="style.css" rel="stylesheet" type="text/css" />

<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" valign="top" width="767px">
<div align="center" style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Continut cos</div><br />
<table border="0" style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" width="600px" align="center">
<tr>
<td><b>Nr. buc</b></td>
<td><b>Carte</b></td>
<td><b>Pret</b></td>
<td><b>Total</b></td>
</tr>
<?php
$totalGeneral = 0;
for($i = 0; $i < count($_SESSION['id_carte']); $i++)
{
  if ($_SESSION['nr_buc'][$i] != 0)
  {
  print '<tr><td>'.$_SESSION['nr_buc'][$i].'</td>
  <td><b>'.$_SESSION['titlu'][$i].'</b> de '.$_SESSION['nume_autor'][$i].'</td>
  <td align="right">
  '.$_SESSION['pret'][$i].' lei</td>
  <td align="right">
  '.($_SESSION['pret'][$i] * $_SESSION['nr_buc'][$i]).' lei</td></tr>';
  $totalGeneral = $totalGeneral + ($_SESSION['pret'][$i] * $_SESSION['nr_buc'][$i]);
  } 
}
//si totalul general
print '<tr>
<td align="right" colspan="3">
<b>Total de plata</b></td>
<td align="right">
<b>'.$totalGeneral.'</b> lei</td>
</tr>';
?>
</table>
<br /><br />
<div align="center" style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Detalii livrare</div><br />
<form action="prelucrare.php" method="post">
<table align="center" border="0" style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" width="600px">
<tr>
<td>
<!--aici tabel-->
<table border="0">
<tr align="right">
<td><b>Nume<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="nume" /></td>
</tr>

<tr align="right">
<td><b>CNP<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="cnp" /></td>
</tr>

<tr align="right">
<td><b>Email:</b></td>
<td><input type="text" name="email" /></td>
</tr>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr align="right">
<td><b>Judet<font color="#FF0000">*</font>:</b></td>
<td>
<select name="judet">

    <option value="judet" selected="selected">Selectati un judet:</option>
    
    <option value="judet">Alba</option>
    
    <option value="judet">Arad</option>


    <option value="judet">Arges</option>

    <option value="judet">Bacau</option>

    <option value="judet">Bihor</option>

    <option value="judet">Bistrita-Nasaud</option>

    <option value="judet">Botosani</option>

    <option value="judet">Braila</option>

    <option value="judet">Brasov</option>

    <option value="judet">Buzau</option>

    <option value="judet">Caras Severin</option>

    <option value="judet">Calarasi</option>

    <option value="judet">Cluj</option>

    <option value="judet">Constanta</option>

    <option value="judet">Covasna</option>

    <option value="judet">Dambovita</option>

    <option value="judet">Dolj</option>

    <option value="judet">Galati</option>

    <option value="judet">Giurgiu</option>

    <option value="judet">Gorj</option>

    <option value="judet">Harghita</option>

    <option value="judet">Hunedoara</option>

    <option value="judet">Ialomita</option>

    <option value="judet">Iasi</option>

    <option value="judet">Ilfov</option>

    <option value="judet">Maramures</option>

    <option value="judet">Mehedinti</option>

    <option value="judet">Mures</option>

    <option value="judet">Neamt</option>

    <option value="judet">Olt</option>

    <option value="judet">Prahova</option>

    <option value="judet">Satu Mare</option>

    <option value="judet">Salaj</option>

    <option value="judet">Sibiu</option>

    <option value="judet">Suceava</option>

    <option value="judet">Teleorman</option>

    <option value="judet">Timis</option>

    <option value="judet">Tulcea</option>

    <option value="judet">Vaslui</option>

    <option value="judet">Valcea</option>

    <option value="judet">Vrancea</option>

  </select>
</td>
</tr>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<tr align="right">
<td><b>Numar<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="numar" /></td>
</tr>

<tr align="right">
<td><b>Scara:</b></td>
<td><input type="text" name="scara" /></td>
</tr>

<tr align="right">
<td><b>Apart.:</b></td>
<td><input type="text" name="apart" /></td>
</tr>


</table>
<!--aici tabel-->
</td>
<td>
<!--aici tabel-->
<table border="0">
<tr align="right">
<td><b>Prenume<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="prenume" /></td>
</tr>

<tr align="right">
<td><b>Telefon<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="telefon" /></td>
</tr>

<tr align="right">
<td><b>Localitate<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="localitate" /></td>
</tr>

<tr align="right">
<td><b>Strada<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="strada" /></td>
</tr>

<tr align="right">
<td><b>Bloc:</b></td>
<td><input type="text" name="bloc" /></td>
</tr>

<tr align="right">
<td><b>Etaj:</b></td>
<td><input type="text" name="etaj" /></td>
</tr>

<tr align="right">
<td><b>Cod Postal<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="cod_postal" /></td>
</tr>
</table>
<!--aici tabel-->
</td>
</tr>
</table>
<center><input type="submit" value="Trimiteti comanda !" style="background-color:#000096; color:#E6F3FF" /></center>
</form>
</div>
Toate celulele cu steluta (*) sunt obligatorii !
</td>
<?php
include("page_bottom.php");
?>