<?php
include 'conectare.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>