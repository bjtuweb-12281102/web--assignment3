
<form  method="post">
name: <input type="text" name="name" />
password: <input type="text" name="password" />
<input type="submit" value="确定"/>
</form>



<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("data", $con);

mysql_query("INSERT INTO form(name,password)VALUES('name','password')");
header("Location: index.php");
mysql_close($con);
?>

