<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Untitled Document</title>
</head>

<body background="graduation.jpg" >
<div id="header" >

</div>
<a href="index.php" style="font-size:30px ">index<a>
<h1 style="color:#009"> Universities <h1> <br />
 <h2><form method="post"  style="text-align:center">
Name: <input type="text" name="u_name"  style="size:portrait"><br><br />

<b style="color:#C06">status:</b><input type="radio" name="u_stat" value="free"/> free

<input type="radio" name="u_stat" value="paid" />paid <br /><br />

City: <input type="text" name="u_city" ><br><br />

<input type="image" src="red-submit-button-hi.png" alt="Submit" width="150" height="60">
</form><h2>

<?php 
$HostName="localhost";
$db_name="learndb";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);


mysql_select_db($db_name , $con);
if ( isset($_POST['u_name']) && isset($_POST['u_city']) ) {
$sql = "INSERT INTO university  (un_name,un_status,un_city) VALUES ('$_POST[u_name]' ,'$_POST[u_stat]','$_POST[u_city]' )" ;

} else {
$sql = '';
}
mysql_query($sql,$con) ;

mysql_close($con);

?>
</body>
</html>