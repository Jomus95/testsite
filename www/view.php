<?PHP
include("connect.php");
?>

<!DOCTYPE HTML>
<Html>
<head>
<title>mysite</title>
<meta http-equiv="Content-Type" content="text/html"; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div class="wrapper">
<div class="header" >
<img src="img/logo.png" />
</div>
<div class="menu">

<div class="center_menu">

<a href="#">Главная</a>
<a href="#">Статьи</a>
<a href="#">Фотографии</a>
<a href="#">Видео</a>
<a href="#">Обратная связь</a>
<div class="user"><a href="#">Вход</a>|<a href="#">Регистрация</a></div>
</div>
</div>
<div style="clear:both;"></div>
<div class="content">
<div class="left">
	<?php
	if(isset($_GET['id'])){
	$id=$_GET['id'];
	}
	else{
	$id=1;
	}
	 $result= mysql_query(" SELECT * FROM data WHERE id='$id'") or die(mysql_error());
	 $data = mysql_fetch_array($result);
	 do{
	 printf('
	 <div>
	   <h1>%s</h1>
	   <p>%s</p>
	 </div>
	 ',$data['title'],$data['desk']);
	 }
	 while($data = mysql_fetch_array($result));
	 ?>
	 </div>
</div>
<div class="right">
 <div class="right_menu">  
<ul align="center" type=" circle">
    <li><a href="#">Популярное</a></li>
    <li><a href="#">Фотографии</a></li>
    <li><a href="#">Видео</a></li>
  </ul></div>
 <div class="ssilka">
    <?php
     include("right_ban.php") 
    ?>
	
	</div>
</div>
<div style="clear:both;"></div>
</div>
<div class="footer">
<p>Мусаев Джохар(c)2015</p></div>
</div>
</body>
</Html>