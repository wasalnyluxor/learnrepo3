<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="index.php">index</a>

<a href="stselect.php">index</a>




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
	
	$st_id= $_POST[s_id] ;
	if ( isset($_POST['s_id'])) {
	$sql = "DELETE FROM student WHERE st_id ='$s_id'" ;}
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?>
</body>
</html>