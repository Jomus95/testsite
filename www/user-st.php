<!DOCTYPE HTML>
<Html>
<head>
<title>mysite</title>
<meta http-equiv="Content-Type" content="text/html"; charset="windows-1251">
<link rel="stylesheet" type="text/css" href="css/style.css" />
 <style>
   input[type="password"]::-ms-reveal {
    background: #c00;
    color: #fff;
   }
  </style>
</head>
<body>
<div class="wrapper">
<div class="header" >
<img src="img/logo.png" />
</div>
<div class="menu">

<div class="center_menu">

<a href="/">Главная</a>
<a href="#">Статьи</a>
<a href="#">Фотографии</a>
<a href="#">Видео</a>
<a href="#">Обратная связь</a>
<div class="user"><a href="user-st.php">Вход</a>|<a href="register-st.php">Регистрация</a></div>
</div>
</div>
<div style="clear:both;"></div>
<div class="content">

<div class="register">
	<?php 
    include("user.php");
    
    ?>
</div>

<div style="clear:both;"></div>
</div>
<div class="footer">
<p>Мусаев Джохар(c)2015</p></div>
</div>
</body>
</Html>