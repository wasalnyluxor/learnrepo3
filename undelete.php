<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#00FF33">
<a href="index.php">index</a>

<a href="stselect.php">SELECT</a>


<?php
$HostName="localhost";
$db_name="learndb";
$LoginName="root";
$LoginPassword="";   
?>
<?php

	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$un_id= $_GET[u_id] ;
	
	$sql = "DELETE FROM  university WHERE un_id ='$u_id'" ;
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?>

</body>
</html>