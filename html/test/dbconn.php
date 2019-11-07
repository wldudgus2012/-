<?php
$con = mysql_connect("localhost","chpago","test1234") or die("MYSQL Connection Error........");
$db = mysql_select_db("chpago",$con) or die ("MYSQL DB ERROR");
mysql_set_charset('utf8',$con);
?>
