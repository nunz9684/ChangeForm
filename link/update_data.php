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
	
	$PR_ID = $_GET['PR_ID'];
	$PR_FName = $_GET['PR_FName'];
	$PR_LName = $_GET['PR_LName'];
	$PR_Street = $_GET['PR_Street'];
	$PR_City = $_GET['PR_City'];
	$PR_State = $_GET['PR_State'];
	$PR_Zip = $_GET['PR_Zip'];
	
		$host = "localhost";
	$user = "root"; //���������ҹ������
	$pass = "";	//���ʼ�������ҹ������
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("test_xampp") //���Ͱҹ������
	or die(mysql_error());
	mysql_query("SET NAMES TIS620");
	
	$sql_update_player = "UPDATE player SET PY_FName='".$PY_FName."',";
	$sql_update_player .= "PY_LName='".$PY_LName."',";
	$sql_update_player .= "PY_Age=".$PY_Age.",";
	$sql_update_player .= "TM_ID='".$TM_ID."'";
	$sql_update_player .= " WHERE PY_ID='".$PY_ID."';";
	
	echo $sql_update_player;
	$result_insert_player=mysql_query($sql_update_player);
?>
<center>
	<h1>�ѹ�֡���������º����</h1><br>
	<a href="index.php">��Ѻ���˹����ѡ</a>
</center>
</html>
