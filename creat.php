CREATE DATABASE database_name
<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("data", $con);
$result1 = mysql_query("SELECT * FROM form WHERE name='$_past[name]'");
if(!$result1){
     echo"没有用户信息，请注册";
     exit();
}
else{
   $result2 = mysql_query("SELECT * FROM form WHERE password='$_past[password]'");
   if($result2)
   {
    echo"密码错误";
   }
   else {
      header("Location: login.php");
      exit();
   }
   while(){
  echo $row['name'] . " " . $row['password'];
  echo "<br />";
  }
 }
   ?>
