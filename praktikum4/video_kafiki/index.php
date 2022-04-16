<?php
include_once "ayang.php";
//membuat objek ayang
$suga = new Ayang("Suga", 30, "BTS");
$jhope = new Ayang("Jhope", 29,"BTS"); 

echo $suga->konser(), "<br/>";
echo  $suga->dancer(), "<br/> ";
echo $suga->membaca(), "<br><br/> ";

echo $jhope->konser(), "<br/>";
echo  $jhope->dancer(), "<br/> ";
echo $jhope->membaca(), "<br/> ";

?>