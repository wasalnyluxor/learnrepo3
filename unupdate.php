<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#3399CC">
<a href="index.php"><input type="button" size="15px" value="index" style="background:#96F" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="uninsert.php"><input type="button" size="15px" value=" university insert" style="background:#96F" /> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="unselect.php"><input type="button" size="15px" value="select" style="background:#96F" /></a>&nbsp;&nbsp;&nbsp;&nbsp;


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
	$sql = "SELECT * FROM university " ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form  method="get" >
 <input type="hidden" name="u_id" value="<?php echo "$row[un_id]"?>" />
         <input type="text" name="u_name" value="<?php echo "$row[un_name]"?>" />
            <input type="text" name="u_city" value="<?php echo "$row[un_city]"?>" />
              <input type="text" name="u_status" value="<?php echo "$row[un_status]"?>" /> free or paid
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
	$un_id= $_GET[u_id] ;
	$sql = "UPDATE university SET un_name= '$_GET[u_name]',un_status='$_GET[u_status]',un_city='$_GET[u_city]' WHERE  un_id= '$_GET[u_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);
  


?>
</body>
</html>