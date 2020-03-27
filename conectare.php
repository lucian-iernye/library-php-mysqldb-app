<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "id13058381_admin";
 $dbpass = "admin";
 $db = "id13058381_librarie";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>