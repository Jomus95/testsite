<?PHP
include("connect.php");
?>

<!DOCTYPE HTML>
<Html>
<head>
<title>mysite</title>
<meta http-equiv="Content-Type" content="text/html"; charset="windows-1251">
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
<div class="wrapper">
<div class="header" >
    <a href="/"><img src="paris.jpeg"></a>
</div>
<div class="menu">
    <ul class="center_menu">
        <li><a href="/">Главная</a></li>
        <li><a href="#">Статьи</a></li>
        <li><a href="#">Фотографии</a></li>
        <li><a href="#">Видео</a></li>
        <li><a href="#">Обратная связь</a></li>
        <li class="user">
        <a href="user-st.php">Вход </a>|<a href="register-st.php"> Регистрация</a></li>
        <div style="clear:both;"></div>   
    </ul>
</div>
<div style="clear:both;"></div>    
<div class="content">
<div class="left">
	<?php
	 $result= mysql_query(" SELECT * FROM data") or die(mysql_error());

  $max_posts=4;                                                                                    //максимум материалов на странице
    $num_posts=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM data")) or die(mysql_error());    //считаем количество записей в таблице
    $num_posts = $num_posts["COUNT(*)"];                                                            //считаем значение столбца
    $num_pages=ceil($num_posts/$max_posts);                                                            //находим количество страниц
    for($i=1;$i <=$num_pages; $i++)    echo "<a href='index.php?page=$i'> <p class='navig''>$i</p></a>";                //выводим ссылки на страницы
    if (isset($_GET['page']))                                                                        //проверка правильности ввода страниц
    {$page=$_GET['page'];}                                                                            //ставим указанную страницу
    else {$page=1;}                                                                                    //если не указана страница то 1
    if ($page>$num_pages) {$page=$num_pages;}                                                        //если страница больше максимальной
    if ($page<1) {$page=1;}                                                                            //если страница меньше 1
    $result=mysql_query("SELECT * from data LIMIT ".($page-1)*$max_posts.",". $max_posts );            //читаем нужный диапазон из базы
    $data = mysql_fetch_array($result);
//обработка материалов
	 do{
	 printf('<br>
	 <div class="article">
	    <img src="img/foto.jpg" />
	    <a class="title" href="#"><h2>%s</h2></a>
	    <p>%s <a href="view.php?id=%s">Показать полностью</a></p>
		
	    <div style="clear:both;"></div>
		</div>
	 ',$data['title'],$data['m_desk'], $data['id']);
	 }
	 while($data = mysql_fetch_array($result));
for($i=1;$i <=$num_pages; $i++)    echo "<a href='index.php?page=$i'> <p class='navig''>$i</p></a>";
    ?>
    </article>
</div>
<div class="right">
 <div class="right_menu">  
<ul align="center";>
    <li><a href="#">Популярное</a></li>
    <li><a href="#">Фотографии</a></li>
    <li><a href="#">Видео</a></li>
  </ul></div>
 <div class="ssilka">
    <?php
     
    ?>
	
	</div>
</div>
<div style="clear:both;"></div>
</div>
<div class="footer">
<p>Мусаев Джохар(c)2015</p>
</div> 
</div>
</body>
</Html>
