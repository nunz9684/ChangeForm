<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<?php
date_default_timezone_set('Asia/Bangkok');
header("content-type:application/json");

$Template = $_POST['Template'];
$Workflow = $_POST['Workflow'];
$ChangeRequester = $_POST['ChangeRequester'];
$Group = $_POST['Group'];
$ChangeType = $_POST['ChangeType'];
$ChangeOwner = $_POST['ChangeOwner'];
$ChangeManager = $_POST['ChangeManager'];
$Impact = $_POST['Impact']; //ไม่มี
$Urgency = $_POST['Urgency'];
$Stage = $_POST['Stage'];
$Priority = $_POST['Priority'];
$Status = $_POST['Status'];
$Risk = $_POST['Risk'];
$StatusComments = $_POST['StatusComments']; //ต้องทำเพิ่มยังไม่เสร็จ
$ServicesAffected = $_POST['ServicesAffected'];
$Title = $_POST['Title'];
$ReasonForChange = $_POST['ReasonForChange'];
$Description = $_POST['Description']; // ไม่มี

$StM = $_POST['sM1'];
$StD = $_POST['sD1'];
$StY = $_POST['sY1'];
$StHr = $_POST['sHr1'];
$StMi = $_POST['sMi1'];

$EtM = $_POST['eM1'];
$EtD = $_POST['eD1'];
$EtY = $_POST['eY1'];
$EtHr = $_POST['eHr1'];
$EtMi = $_POST['eMi1'];

$ScheduleEnd = $EtD.' '.$EtM.' '.$EtY.','.$EtHr.':'.$EtMi.':00';
$ScheduleStart = $StD.' '.$StM.' '.$StY.','.$StHr.':'.$StMi.':00';


$data = array(
	"operation" => [
        "details"=> [
			"title"=> $Title ,
			"stagename"=> $Stage,
			"statusname"=> $Status ,
			"priority"=> $Priority ,
			"scheduledstarttime" => $ScheduleStart ,
			"templatename" => $Template,
			"workflowname" => $Workflow,
			"completedtime" => "" ,
			"requestedby" => $ChangeRequester,
			"technician" => $ChangeOwner,
			"changemanager" => $ChangeManager,
			"risk" => $Risk ,
			"category" => "",
			"subcategory" => "",
			"servicesaffected" =>$ServicesAffected ,
			"item" => "",
			"groupname" =>$Group ,
			"reasonforchange" => $ReasonForChange ,
			"scheduledendtime" => "",
			"changetype" => $ChangeType,
			"urgency" => $Urgency ,
			"assets" => ""
        ]
    ]
);
$date_for_folder = date("dmY");
$location = "C:/xampp/htdocs/JSONchange/".$date_for_folder;
$files = scandir($location,SCANDIR_SORT_DESCENDING);
$countfiles = count($files)-1;
$file_name ="/".$date_for_folder."/".$ChangeRequester.".json";
if(file_exists($location)==0){
	echo "no folder";
	mkdir($location);
	}
//echo json_encode($data);
$date = date("d m Y , h:i:s");


 //open file for writng and place pointer at the end
 $handle = fopen($_SERVER['DOCUMENT_ROOT']."/JSONchange/".$date_for_folder."/".$ChangeRequester.".json", 'a+');
 if(!$handle)
 {
  die("couldn't open file"." ".$file_name);
 }
 
 //place pointer at the beginning of the file.
 rewind($handle);

 //write to file
 if(fwrite($handle,json_encode($data))==FALSE){
	 echo "Cannot open file ($filename)";
         exit;
 }
 else{
	echo nl2br("success writing to file ".$_SERVER['DOCUMENT_ROOT']."".$file_name);
	echo nl2br("as ".$file_name);
 }
 fclose($handle);

 $data_for_exec = "python C:/ManageEngine/ServiceDesk/integration/custom_scripts/TriggerChange.py ".$_SERVER['DOCUMENT_ROOT']."/JSONchange/".$date_for_folder."/".$ChangeRequester.".json";
 exec($data_for_exec);
 echo nl2br("DONE - ".$data_for_exec);
 
?>
</html>