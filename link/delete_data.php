<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=Content-Type
			content="text/html";
			charset="tis-620">
	</head>
<?php
	$PY_ID = $_GET['PY_ID'];
	$PY_FName = $_GET['PY_FName'];
	$PY_LName = $_GET['PY_LName'];
	$TM_ID = $_GET['TM_ID'];
	$PY_Age = $_GET['PY_Age'];
	
		$host = "localhost";
	$user = "root"; //���������ҹ������
	$pass = "";	//���ʼ�������ҹ������
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("test_xampp") //���Ͱҹ������
	or die(mysql_error());
	mysql_query("SET NAMES TIS620");
	
	$PY_ID = $_GET['PY_ID'];
	$PR_ID = $_GET['PR_ID'];
	
	$sql_delete_register = "DELETE FROM register WHERE PY_ID = '".$PY_ID."'";
	$sql_delete_parent = "DELETE FROM parent WHERE PR_ID = '".$PR_ID."'";
	$sql_delete_player = "DELETE FROM player WHERE PY_ID = '".$PY_ID."'";
	
	//echo $sql_delete_register."br";
	//echo $sql_delete_parent."br";
	//echo $sql_delete_player."br";
	
	$result_delete_register = mysql_query($sql_delete_register);
	$result_delete_parent = mysql_query($sql_delete_parent);
	$result_delete_player = mysql_query($sql_delete_player);
?>
<center>
	<h1>ź���º����</h1><br>
	<a href="index.php">��Ѻ���˹����ѡ</a>
</center>
</html>