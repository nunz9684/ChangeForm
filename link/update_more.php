<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=Content-Type
			content="text/html";
			charset="tis-620">
	</head>
<?php
		$host = "localhost";
	$user = "root"; //ชื่อเข้าใช้ฐานข้อมูล
	$pass = "";	//รหัสผู้เข้าใช้ฐานข้อมูล
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("test_xampp") //ชื่อฐานข้อมูล
	or die(mysql_error());
	mysql_query("SET NAMES TIS620");
	
	$player = $_GET['PY_ID'];
	$sql = "SELECT * FROM player WHERE PY_ID = '".$player."'";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array ($result) )
	{
		echo "PY_ID : ".$player."<br>";
?>
	<table>
			<form action="update_data_more.php" method="get">
				First name:<input type="text" name="PY_FName" value="<?=$row['PY_FName']?>"><br>
				Last name:<input type="text" name="PY_LName" value="<?=$row['PY_LName']?>"><br>
				Team ID:<input type="text" name="TM_ID" value="<?=$row['TM_ID']?>"><br>
				Age:<input type="text" name="PY_Age" value="<?=$row['PY_Age']?>"><br>
<?php
	echo " "."<br>";
	echo " "."<br>";
	echo "Parent : "."<br>";	
	$sql_parent = "SELECT * FROM parent pa join register re using(PR_ID) where re.PY_ID='".$player."'";
	
	$sql_call_PRID = "select PR_ID from register re join player pl using(PY_ID)";
	$sql_call_PRID.= " join parent pa using(PR_ID)";
	$sql_call_PRID.= " where PY_ID = '".$player."';";
	
	$result_PRID = mysql_query($sql_call_PRID);
	while ($show = mysql_fetch_array($result_PRID) ){
		echo 'PR_ID : '.$show[0]."<br>";
	};
		
	$result_pa = mysql_query($sql_parent);
		while($row2 = mysql_fetch_array ($result_pa))
		{
?>
		
				First name:<input type="text" name="PR_FName" value="<?=$row2['PR_FName']?>"><br>
				Last name:<input type="text" name="PR_LName" value="<?=$row2['PR_LName']?>"><br>
				Street : <input type="text" name="PR_Street" value="<?=$row2['PR_Street']?>"><br>
				State : <input type="text" name="PR_State" value="<?=$row2['PR_State']?>"><br>
				City : <input type="text" name="PR_City" value="<?=$row2['PR_City']?>"><br>
				Zip : <input type="text" name="PR_Zip" value="<?=$row2['PR_Zip']?>"><br>
				<input type="submit" value="Submit">
			</form>
<?php
		}
	}
?>
