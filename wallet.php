<?php
include('db_login.php');
session_start();

$userid=$_SESSION['uname'];
$connection = mysql_connect($db_host, $db_username, $db_password);
mysql_select_db('u676267388_andlg');
	$query1="select wallet from register where userid='".$userid."'";
					$result = mysql_query($query1) or die(mysql_error());
		if($row = mysql_fetch_assoc($result))
		{
    		  $count= $row['wallet'];
		}
		echo $count;
?>