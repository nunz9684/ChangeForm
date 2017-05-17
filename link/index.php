<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=Content-Type 
 			content="text/html";
 			charset="tis-620">
	</head>
	<body>
<?php
	$host = "localhost";
	$user = "root"; //ชื่อเข้าใช้ฐานข้อมูล
	$pass = "";	//รหัสผู้เข้าใช้ฐานข้อมูล
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("test_xampp") //ชื่อฐานข้อมูล
	or die(mysql_error());
	mysql_query("SET NAMES TIS620");
?>
<a href="insert.php">new player</a>
	<table>
		<tr>
			<th>No.</th>
			<th>PY_ID</th>
			<th>PY_FName</th>
			<th>PY_LName</th>
			<th>TM_Name</th>
			<th>Date_Signed</th>
		</tr>
<?php
	$sql = "SELECT py.PY_ID PY_ID, PY_FName, PY_LName, TM_Name, Date_Signed";
	$sql.= " FROM player py";
	$sql.= " JOIN team t ON py.TM_ID = t.TM_ID";
	$sql.= " JOIN register r ON py.PY_ID = r.PY_ID";
	$count=0;
	
 	$result = mysql_query($sql);
	while($row = mysql_fetch_array ($result) )
	{
		$count++;
?>
		<tr>
			<td><?=$count?></td>
			<td><?=$row['PY_ID']?></td>
			<td><?=$row['PY_FName']?></td>
			<td><?=$row['PY_LName']?></td>
			<td><?=$row['TM_Name']?></td>
			<td><?=$row['Date_Signed']?></td>
			<td><a href="update.php?PY_ID=<?=$row['PY_ID']?>">Update</a></td>
			<td><a href="delete.php?PY_ID=<?=$row['PY_ID']?>">Delete</a></td>
			<td><a href="more.php?PY_ID=<?=$row['PY_ID']?>">More</a></td>
		</tr>
<?php
	}
?>
	</table>
	</body>
</html>
