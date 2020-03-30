<?php

function OpenCon()
 {
 $dbhost = "eu-cdbr-west-02.cleardb.net";
 $dbuser = "b3461b48a181c6";
 $dbpass = "81177506";
 $db = "heroku_95c542f92fb9408";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>