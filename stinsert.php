<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="image_1438984274_789.jpg">
<a href="index.php"style="font-size:30px ">index<a>

<h1> Student registeration <h1> <br />
 <h2><form method="post" >
Name: <input type="text" name="s_name" ><br><br />
Age: <input type="text" name="s_age" ><br><br />
City: <input type="text" name="s_city" ><br><br />
<input type="image" src="red-submit-button-hi.png" alt="Submit" width="150" height="60">
</form><h2>

<?php 
$HostName="localhost";
$db_name="learndb";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);


mysql_select_db($db_name , $con);
if ( isset($_POST['s_name']) && isset($_POST['s_age']) ) {
$sql = "INSERT INTO student  (st_name,st_age,st_city) VALUES ('$_POST[s_name]' ,'$_POST[s_age]','$_POST[s_city]' )" ;

} else {
$sql = '';
}
mysql_query($sql,$con) ;

mysql_close($con);

?>
</body>
</html>