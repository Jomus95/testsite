<?PHP
$db = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("tutorial",$db);
mysql_set_charset("utf8",$db);
?>
