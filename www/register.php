<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db('tutorial');



if(isset($_POST['submit'])){
$username = $_POST['username'];
$login = $_POST['login'];
$password = $_POST['password'];
$r_password = $_POST['r_password'];
if ($password == $r_password){
$query = mysql_query("INSERT INTO users VALUES ('','$username','$login','$password')") or die(mysql_error());
}
else{
die("Пароль не совпадает!");
}
}

?>
Регистрация
<form method="post" action="register.php">
<input type="text" name="username" placeholder="| Имя" required/><br>
<input type="text" name="login" placeholder="| Логин" required/><br>
<input type="password" name="password" placeholder="| Пароль" required/><br>
<input type="password" name="r_password" placeholder="| Повторите пароль" required/><br>
<input type="submit" name="submit" value="Register" /><br>
</form>
