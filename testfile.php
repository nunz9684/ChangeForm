<?php
$location = "C:/xampp/htdocs/JSONchange"."/".date("dmY");
$files = scandir($location,SCANDIR_SORT_DESCENDING);
$list = count($files);
echo nl2br("list = ".$list."\n");
//echo $files[$list];
for($i=0;$i<$list;$i++){
echo nl2br($files[$i]." i = ".$i."\n");
}

?>