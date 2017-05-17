<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?php

echo 'test';
for($i=1;$i<=31;$i++){
	echo $i;
}
?>

<body>
    <tr>
	<td>
	<select name='sD1' id='sD1'>
	
<?php

for($i=1;$i<=31;$i++){
	$i2=sprintf("%02d",$i);
	echo '<option value="'.$i2.'">'.$i2.'</option>';
}

?>

</select>
</td>
</tr>
</body>
</html>