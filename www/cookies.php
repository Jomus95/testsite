
 <html>
 <head><title>Cookies</title>
 </head>
 <body>
 <?php 
 if(isset($_COOKIE["johar"]));
 echo S_COOKIE["johar"];
 else
 echo "Данной куки не существует";
 ?>
 <form method="post" action="deletecookie.php">
 <input type="submit" name="deletecookie" value="delete"">
 </body>
 </html>