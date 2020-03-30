<?php

session_start();
include("db_connection.php");
include("page_top.php");
include("menu.php");
?>


<td valign="top" style="border-color:#CCCCCC; background-color:#E6F3FF; padding:4px; border:solid #000066 1px" width="767px">
<div style="color:#000033; font:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Prima pagina</div><br />
<b> The latest books of Lucian</b>
<table border="0">
<tr>

<?php
$sql = "SELECT * FROM carti, autori WHERE carti.id_autor=autori.id_autor ORDER BY an_aparitie DESC limit 0,3";
$resursa = mysqli_query(OpenCon(), $sql);
while ($row = mysqli_fetch_array($resursa)) {
   /*deschidem celula tabelului HTML*/
   print '<td align="center" width=33%>';
   $adresaImagine = "covers/".$row['id_carte'].".jpg";
   if(file_exists($adresaImagine))
   {
   print '<img src="'.$adresaImagine.'" width="100" height="130"><br>';
   }
   else
   {
   print '<div style="width:100px; height:130px; border: 1px black solid; background-color:#cccccc">Fara imagine</div>';
   }
   print '<b><a href="carte.php?id_carte='.$row['id_carte'].'">'.$row['titlu'].'</a></b><br> by
   <i>'.$row['nume_autor'].'</i><br>
   </td>';
}
   ?>
   
   </tr>
   
   </table>
   
   
   
<hr size="1" color="#000033">
   <b>Top rated books</b>
   <table border="0">
   <tr>
   <?php
   $sqlVanzari = "SELECT id_carte, sum(nr_buc) AS bucatiVandute FROM vanzari GROUP BY id_carte ORDER BY bucatiVandute DESC LIMIT 0,3";
   $resursaVanzari=mysqli_query(OpenCon(), $sqlVanzari);
   while($rowVanzari = mysqli_fetch_array($resursaVanzari))
   {
   $sqlCarte = "SELECT * FROM carti, autori WHERE carti.id_autor=autori.id_autor AND id_carte=".$rowVanzari['id_carte'];
   $resursaCarte=mysqli_query(OpenCon(), $sqlCarte);
   
   while($rowCarte = mysqli_fetch_array($resursaCarte))
   {
   print '<td align="center" width=33%>';
   $adresaImagine = "covers/".$rowVanzari['id_carte'].".jpg";
   if(file_exists($adresaImagine))
   {
   print '<img src="'.$adresaImagine.'" width="100" height="130"><br>';
   }
   else
   {
   print '<div style="width:100px; height:130px; border: 1px black solid; background-color:#cccccc">Without image</div>';
   }
   
   print '<b><a href="book.php?id_carte='.$rowVanzari['id_carte'].'">'.$rowCarte['titlu'].'</a></b><br> by
   <i>'.$rowCarte['nume_autor'].'</i>
   <br></td>';
      }
   }
   ?>
   </tr>
   </table>
   
   
   
   </td>
   </tr>
   
   </table>
   <?php
   include("page_bottom.php");
   ?>
   
   
