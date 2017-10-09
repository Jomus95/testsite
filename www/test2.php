<?PHP
include("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $result = mysql_query("SELECT * FROM data")or die(mysql_error());

    $max_posts = 10;
    $num_posts = mysql_num_rows($result);

    $num_pages = intval(($num_posts-1) / $max_post)+1;

    for($i=1; $i<=$num_pages;$i++)
        echo "<a href='test2.php?page=$i'>$i</a>";
     if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page<1)
            $page=1;
     
        elseif ($page > $num_pages);
            $page=$num_pages;
     }
    else {
        $page=1;
    }
    $data= mysql_fetch_array($result);
    while($data = mysql_fetch_array($result)){
        if(($data['id']>($page * $max_posts - $max_posts)) && ($data['id'] <= $page * $max_posts))
            {
printf('
	 <div class="article">
	    <img src="img/foto.jpg" />
	    <a class="title" href="#"><h2>%s</h2></a>
	    <p>%s <a href="view.php?id=%s">Показать полностью</a></p>
		
	    <div style="clear:both;"></div>
		</div>
	 ',$data['title'],$data['m_desk'], $data['id']);
	 }
    }
            
            
?>
</body>
</html>
//*//
<?php
    $max_posts=2;                                                                                    //максимум материалов на странице
    $num_posts=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM data")) or die(mysql_error());    //считаем количество записей в таблице
    $num_posts = $num_posts["COUNT(*)"];                                                            //считаем значение столбца
    $num_pages=ceil($num_posts/$max_posts);                                                            //находим количество страниц
    for($i=1;$i <=$num_pages; $i++)    echo "<a href='/test/index.php?page=$i'> $i </a>";                //выводим ссылки на страницы
    if (isset($_GET['page']))                                                                        //проверка правильности ввода страниц
    {$page=$_GET['page'];}                                                                            //ставим указанную страницу
    else {$page=1;}                                                                                    //если не указана страница то 1
    if ($page>$num_pages) {$page=$num_pages;}                                                        //если страница больше максимальной
    if ($page<1) {$page=1;}                                                                            //если страница меньше 1
    $result=mysql_query("SELECT * from data LIMIT ".($page-1)*$max_posts.",". $max_posts );            //читаем нужный диапазон из базы
    $data = mysql_fetch_array($result);
//обработка материалов
    do{
        printf('
            <div class="article">
                <img src="fon3.png" />
                <a class="title" href="#"><H2>%s</H2></a>
                <p>%s<a href="view.php?id=%s">read more</a></p>
                <div style="clear:both"></div>
            </div>
            ',$data["title"],$data["micro"],$data["id"]);
    }
    while($data = mysql_fetch_array($result));
?>
//*//