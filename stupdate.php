<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#66CCFF">
<a href="index.php"><input type="button" size="15px" value="index" style="background:#F39" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="stinsert.php"><input type="button" size="15px" value=" student insert" style="background:#F39" /> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="stselect.php"><input type="button" size="15px" value="select" style="background:#F39"  /></a>&nbsp;&nbsp;&nbsp;&nbsp;
<br />
<br />
<br />

<?php
$HostName="localhost";
$db_name="learndb";
$LoginName="root";
$LoginPassword="";
   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM student" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form  method="get" >
<input type="hidden" name="s_id" value="<?php echo "$row[st_id]"?>" />
  <input type="text" name="s_name" value="<?php echo "$row[st_name]"?>" />

 <input type="text" name="s_age" value=" <?php echo "$row[st_age]"?>">
 
  <input type="text" name="s_city" value=" <?php echo "$row[st_city]"?>">

  <input type="submit" value="Update" /><hr />
</form>
  <?php
	;}
	 mysql_close($con);
	?>
<?php
$HostName="localhost";
$db_name="learndb";
$LoginName="root";
$LoginPassword="";




	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	$st_id= $_GET[s_id] ;
	$sql = "UPDATE student SET st_name= '$_GET[s_name]',st_age='$_GET[s_age]',st_city='$_GET[s_city]' WHERE  st_id= '$_GET[s_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);
  


?>
</body>
</html>