<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=Content-Type
			content="text/html";
			charset="tis-620">
	</head>
	<table>
		<tr>
			<th>PY_ID</th>
			<th>PY_FName</th>
			<th>PY_LName</th>
			<th>TM_Name</th>
			<th>Date_Signed</th>
			<th>PR_ID</th>
		</tr>
<?php
		$host = "localhost";
	$user = "root"; //���������ҹ������
	$pass = "";	//���ʼ�������ҹ������
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("test_xampp") //���Ͱҹ������
	or die(mysql_error());
	mysql_query("SET NAMES TIS620");
	
	$player = $_GET['PY_ID'];
	$sql = "select py.PY_ID PY_ID,PY_FName,PY_LName,TM_Name,Date_Signed,PR_ID";
	$sql.= " from player py";
	$sql.= " join team t on py.TM_ID = t.TM_ID";
	$sql.= " join register r on py.PY_ID = r.PY_ID";
	$sql.= " where py.PY_ID = '".$player."'";
	
	$result = mysql_query($sql);
	while($row = mysql_fetch_array ($result) )
	{
		$count++;
		$player_parent = $row['PR_ID'];
?>
		<tr>
			<td><?=$row['PY_ID']?></td>
			<td><?=$row['PY_FName']?></td>
			<td><?=$row['PY_LName']?></td>
			<td><?=$row['TM_Name']?></td>
			<td><?=$row['Date_Signed']?></td>
			<td><?=$row['PR_ID']?></td>
		</tr>
<?php
	}
?>
	</table>
		<a href="delete_data.php?PY_ID=<?=$player?>&PR_ID<?=$player_parent?>">�׹�ѹ���ź������</a>
	</body>
</html>