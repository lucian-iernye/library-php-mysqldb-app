<?php
session_start();
include "db_connection.php";
include "page_top.php";
include "menu.php";
?>
<link href="style.css" rel="stylesheet" type="text/css" />

<td style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" valign="top" width="767px">
<div align="center" style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Shopping cart</div><br />
<table border="0" style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" width="600px" align="center">
<tr>
<td><b>Quantity</b></td>
<td><b>Book</b></td>
<td><b>Price</b></td>
<td><b>Total</b></td>
</tr>
<?php
$totalGeneral = 0;
for ($i = 0; $i < count($_SESSION['id_carte']); $i++) {
    if ($_SESSION['nr_buc'][$i] != 0) {
        print '<tr><td>' . $_SESSION['nr_buc'][$i] . '</td>
  <td><b>' . $_SESSION['titlu'][$i] . '</b> by ' . $_SESSION['nume_autor'][$i] . '</td>
  <td align="right">
  ' . $_SESSION['pret'][$i] . ' pounds.</td>
  <td align="right">
  ' . ($_SESSION['pret'][$i] * $_SESSION['nr_buc'][$i]) . ' pounds.</td></tr>';
        $totalGeneral = $totalGeneral + ($_SESSION['pret'][$i] * $_SESSION['nr_buc'][$i]);
    }
}
//si totalul general
print '<tr>
<td align="right" colspan="3">
<b>Total to pay</b></td>
<td align="right">
<b>' . $totalGeneral . '</b> pounds.</td>
</tr>';
?>
</table>
<br /><br />

<div align="center" style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Delivery informations:
</div><br />
<form action="processing.php" method="post">
<table align="center" border="0" style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" width="600px">
<tr>
<td>
<!--aici tabel-->
<table border="0">
<tr align="right">
<td><b>First Name:<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="first-name" /></td>
</tr>

<tr align="right">
<td><b>Last Name:<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="last-name" /></td>
</tr>

<tr align="right">
<td><b>Email:<font color="#FF0000">*</font></b></td>
<td><input type="text" name="email" /></td>
</tr>

<tr align="right">
<td><b>Phone number:<font color="#FF0000">*</font></b></td>
<td><input type="text" name="phone" /></td>
</tr>
</table>
<!--aici tabel-->
</td>
<td>



<!--aici tabel-->
<table border="0">
<tr align="right">
<td><b>Address:<font color="#FF0000">*</font>:</b></td>
<td>
<select name="city">

    <option value="city" selected="selected">Select a city:</option>
    <option value="city">Aberdeen</option>
    <option value="city">Armagh</option>
    <option value="city">Bangor</option>
    <option value="city">Bath</option>
    <option value="city">Belfast</option>
    <option value="city">Birmingham</option>
    <option value="city">Bradford</option>
    <option value="city">Brighton & Hove</option>
    <option value="city">Bristol</option>
    <option value="city">Cambridge</option>
    <option value="city">Canterbury</option>
    <option value="city">Cardiff</option>
    <option value="city">Carlisle</option>
    <option value="city">Chelmsford</option>
    <option value="city">Chester</option>
    <option value="city">Chichester</option>
    <option value="city">Coventry</option>
    <option value="city">Derby</option>
    <option value="city">Derry</option>
    <option value="city">Dundee</option>
    <option value="city">Durham</option>
    <option value="city">Edinburgh</option>
    <option value="city">Ely</option>
    <option value="city">Exeter</option>
    <option value="city">Glasgow</option>
    <option value="city">Gloucester</option>
    <option value="city">Hereford</option>
    <option value="city">Inverness</option>
    <option value="city">Kingston upon Hull</option>
    <option value="city">Lancaster</option>
    <option value="city">Leeds</option>
    <option value="city">Leicester</option>
    <option value="city">Lichfield</option>
    <option value="city">Lincoln</option>
    <option value="city">Lisburn</option>
    <option value="city">Liverpool</option>
    <option value="city">London</option>
    <option value="city">Manchester</option>
    <option value="city">Newcastle upon Tyne</option>
    <option value="city">Newport</option>
    <option value="city">Newry</option>
    <option value="city">Norwich</option>
    <option value="city">Nottingham</option>
    <option value="city">Oxford</option>
    <option value="city">Perth</option>
    <option value="city">Peterborough</option>
    <option value="city">Plymouth</option>
    <option value="city">Preston</option>
    <option value="city">Ripon</option>
    <option value="city">St Albans</option>
    <option value="city">St Asaph</option>
    <option value="city">St Davids</option>
    <option value="city">Salford</option>
    <option value="city">Salisbury</option>
    <option value="city">Sheffield</option>
    <option value="city">Southampton</option>
    <option value="city">Stirling</option>
    <option value="city">Stoke-on-Trent</option>
    <option value="city">Sunderland</option>
    <option value="city">Swansea</option>
    <option value="city">Truro</option>
    <option value="city">Wakefield</option>
    <option value="city">Wells</option>
    <option value="city">Westminster</option>
    <option value="city">Winchester</option>
    <option value="city">Wolverhampton</option>
    <option value="city">Worcester</option>
    <option value="city">York</option>
  </select>
</td>
</tr>

<tr align="right">
<td><b>Address Line 1<font color="#FF0000">*</font>:</b></td>
<td><input type="text" name="address-one" /></td>
</tr>

<tr align="right">
<td><b>Address Line 2</b></td>
<td><input type="text" name="scara" /></td>
</tr>

<tr align="right">
<td><b>Post Code</b></td>
<td><input type="text" name="apart" /></td>
</tr>
</table>
<!--aici tabel-->

</td>
</tr>
</table>
<center><input type="submit" value="Send the order !" style="background-color:#000096; color:#E6F3FF" /></center>
</form>
</div>
All fields with (*) need to be completed !
</td>
<?php
include "page_bottom.php";
?>