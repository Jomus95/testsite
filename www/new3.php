<div class="article">
     <img src="img/foto.jpg" />
	 <a class="title" href="#"><h2>%s</h2></a>
	 <p>%s</p>
      <div style="clear:both;"></div>
</div>

<?PHP
$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("ecrofeg_tutoria");
?>


<div class="article">
            <img src="img/foto.jpg" />
	        <a class="title" href="#"><h2>%s</h2></a>
	        <p>%s</p>
            <div style="clear:both;"></div>
            </div>

<?php
	 $result= mysql_query(" SELECT * FROM data") or die(mysql_error());
	 $data = mysql_fetch_array($result);assoc
	 do(
	 printf("
	 <div class="article">
	    <img src="img/foto.jpg" />
	    <a class="title" href="#"><h2>s</h2></a>
	    <p>%s</p>
	    <div style="clear:both;">
	 </div>
	 ",$data["title"],$data["m_desk"]);
	 
	 while($data = mysql_fetch_array($result));
	 ?>
	 
	 
	  $db = mysql_connect ('localhost','php','12345');
    mysql_select_db('phpsite',$db);
    mysql_query('SET NAMES cp1251',$db);          
    mysql_query('SET CHARACTER SET cp1251',$db);  
    mysql_query('SET COLLATION_CONNECTION="cp1251_general_ci"',$db);
	
	
	$link = mysql_connect('localhost', 'user', 'password');\\КОДИРОВКА БАЗЫ ДАННЫХ
mysql_set_charset('utf8',$link);

	