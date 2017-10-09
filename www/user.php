<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db('tutorial');
 error_reporting(e_all & ~E_NOTICE);
if(isset($_POST['Enter'])){
$e_login = $_POST['e_login'];
$e_password =$_POST['e_password'];

$query = mysql_query(" SELECT * FROM  `users` WHERE login = '" . $e_login . "' ") or die (mysql_error );
$user_data = mysql_fetch_array($query);
if($user_data['password'] == $e_password ){
session_start();
    $_SESSION['name']= $e_login;
}
else {
echo "Не верно логин или пароль";
}

}

?>



<p>Авторизация</p><br>
<?php
If(isset($_SESSION['name']))
{
    echo "Вы вошли как " . $_POST['e_login'] ."";
	echo "<form method='post' action='user.php'>
<input type='submit' name='logout' value='Выйти' /><br>
</form>";
}
else
{ echo '
<form method="post" action="user.php">
<input type="text" name="e_login" placeholder="| Логин" required/><br>
<input type="password" name="e_password" placeholder="| Пароль" required/><br>
<input type="submit" name="Enter" value="Enter" /><br>
</form>';
}
if(isset($_POST['logout'])){
	unset($_SESSION['NAME']);
	session_destroy();
	
}

?>
