<?php

$name = $_POST['name'];
$comments =$_POST['comments'];
$phone = $_POST['contacts'];
$nop = $_POST['nop'];
$todate=$_POST['tdate'];
$eid=$_POST['eid'];

$to = "inquiry@thegrandchetak.com";
$subject ="Inquiry From $eid";
$body = "**    This Is An Automated Mail From The Inquiry Page    ** \n\n --------------- Details --------------- \n\n Name-         $name \n Contact No-   $phone \n Email Id-     $eid \n No Of Person- $nop \n Expected Date (yyyy/mm/dd) - $todate \n\n ---------------------------------- \nMessage - \n--------- \n $comments  ";

mail($to,$subject,$body);

echo "Message Sent <hr> <h2><a href='http://www.thegrandchetak.com/home.html'>Return to home</a</h2> <hr>";
?>