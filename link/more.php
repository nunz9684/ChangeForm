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
	
	$PY_IDm = $_GET['PY_ID'];
	/*$PY_FName = $_GET['PY_FName'];
	$PY_LName = $_GET['PY_LName'];
	$PY_Age = $_GET['PY_Age'];
	$TM_ID = $_GET['TM_ID'];
	$TM_Name = $_GET['TM_Name'];
	
	$PR_ID = $_GET['PR_ID'];
	$PR_FName = $_GET['PR_FName'];
	$PR_LName = $_GET['PR_LName'];
	$PR_Street = $_GET['PR_Street'];
	$PR_City = $_GET['PR_City'];
	$PR_State = $_GET['PR_State'];
	$PR_Zip = $_GET['PR_Zip'];*/
	
	$sql_call_PYID = "select PY_ID from player where PY_ID = '".$PY_IDm."';";
	$sql_call_namePY = "SELECT concat(PY_FName,' ',PY_LName) FROM `player` WHERE PY_ID = '".$PY_IDm."';";
	$sql_call_team = "select concat(t.TM_ID,' ',t.TM_Name) from team t join player p on p.TM_ID=t.TM_ID where PY_ID='".$PY_IDm."';";
	$sql_call_age = "select PY_Age from player where PY_ID = '".$PY_IDm."';";
	
	$sql_call_PRID = "select PR_ID from register re join player pl using(PY_ID)";
	$sql_call_PRID.= " join parent pa using(PR_ID)";
	$sql_call_PRID.= " where PY_ID = '".$PY_IDm."';";
	
	$sql_call_PRname = "select concat(PR_FName,' ',PR_LName) from parent pa";
	$sql_call_PRname.= " join register re using(PR_ID) join player on re.PY_ID = player.PY_ID where re.PY_ID='".$PY_IDm."';";
	
	$sql_call_PRadd = "SELECT concat(PR_Street,' ',concat(PR_State,' ',concat(PR_city,' ',PR_Zip))) ";
	$sql_call_PRadd.= " from parent pa join register re using(PR_ID)";
	$sql_call_PRadd.= " join player pl using(PY_ID) where re.PY_ID='".$PY_IDm."';";
	
	$result_PYID = mysql_query($sql_call_PYID);
	$result_PYname = mysql_query($sql_call_namePY);
	$result_team = mysql_query($sql_call_team);
	$result_age = mysql_query($sql_call_age);
	$result_PRID = mysql_query($sql_call_PRID);
	$result_PRname = mysql_query($sql_call_PRname);
	$result_PRadd =  mysql_query($sql_call_PRadd);
	
	while ($show = mysql_fetch_array($result_PYID) ){
		echo "Player ID :  ".$show[0]."<br>" ;
		};
	while ($show = mysql_fetch_array($result_PYname) ){
		echo "ชื่อ  - นามสกุล :  ".$show[0]."<br>" ;
		};
	while ($show = mysql_fetch_array($result_age) ){
		echo "อายุ :  ".$show[0]."<br>" ;
		};
	while ($show = mysql_fetch_array($result_team) ){
		echo "Team :  ".$show[0]."<br>" ;
		};
	echo " "."<br>";
	echo " "."<br>";
	while ($show = mysql_fetch_array($result_PRID) ){
		echo "Parent ID :  ".$show[0]."<br>" ;
		};
	while ($show = mysql_fetch_array($result_PRname) ){
		echo "ชื่อ - นามสกุล ผู้ปกครอง :  ".$show[0]."<br>" ;
		};
	while ($show = mysql_fetch_array($result_PRadd) ){
		echo "ที่อยู่ :  ".$show[0]."<br>" ;
		};
?>
	<a href="update_more.php?PY_ID=<?=$PY_IDm ?>">Update</a><?php echo " "?><a href="delete.php?PY_ID=<?=$PY_IDm ?>">Delete</a>
</html>
	
	