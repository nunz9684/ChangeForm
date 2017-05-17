<?php /*
require_once('mpdf/mpdf.php'); //ที่อยู่ของไฟล์ mpdf.php ในเครื่องเรานะครับ
ob_start(); // ทำการเก็บค่า html นะครับ */
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<style type="text/css">
@media print{
#no_print{display:none;}
}
body{font-size : 14px}
</style>
</meta>
<body>
<?
// Header
?>
<table border="1" align="center" width ="992">
<tr>
	<td>DOC ID  : </td>
	<td align="center">A-HOST Company Limited</td>
	<td rowspan = "3"> A-HOST </td>
</tr>
<tr>
	<td>Version :</td>
	<td rowspan="2" align="center">Request for Change form</td>
</tr>
<tr>
	<td>Last Update :</td>
</tr>
</table>
<br>
<table border="1" align=center width ="992" bgcolor="#000000">
<tr>
<td align="center"><font color="#FFFFF" size='5'>REQUEST FOR CHANGE FORM</font></td>
</tr>
</table>
<br size='1'>
<table border="1" align=center width ="992" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section A : Request Information</font></td>
</tr>
</table>

<table border="1" align="center" width ="992">
<tr>
	<td>Change ID  : </td>
	<td></td>
	<td>Create Date/Time : </td>
	<td></td>
</tr>
<tr>
	<td>Request by:</td>
	<td><TEXTAREA rows="1" cols="30" name="Requester" form="usrform"></TEXTAREA></td>
	<td>Requester Phone No : </td>
	<td><TEXTAREA rows="1" cols="10" name="PhoneNum" form="usrform">0xxxxxxx</TEXTAREA></td>
</tr>
<tr>
	<td>Site :</td>
	<td><TEXTAREA rows="1" cols="30" name="Site" form="usrform"> </TEXTAREA></td>
	<td>Affected Service(s) : </td>
	<td><TEXTAREA rows="1" cols="30" name="AffectedServices" form="usrform"> </TEXTAREA></td>
</tr>
</table>

<br>

<table border="1" align=center width ="992" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section B : Change Detail Information</font></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Change Type : <Input type="checkbox" name="ChangeType" value="Normal">Normal <Input type="checkbox" name="ChangeType" value="Standard">Standard <Input type="checkbox" name="ChangeType" value="Major">Major<Input type="checkbox" name="ChangeType" value="Emergency">Emergency </td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Reason to Change : <Input type="checkbox" name="Reason2Change" value="NewAddition">New/Addition <Input type="checkbox" name="Reason2Change" value="UpgradeMigrate">Upgrade/Migrate <Input type="checkbox" name="Reason2Change" value="Adjustment">Adjustment<Input type="checkbox" name="Reason2Change" value="Replacement">Replacement <br> Solve Incident/Problem No. # <TEXTAREA rows="1" cols="30" name="SolveIPNo" form="usrform"> </TEXTAREA>  </td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>รายละเอียดเหตุผลของการ Change :</td>
<td><TEXTAREA rows="5" cols="80" name="WhyChange" form="usrform"> </TEXTAREA></td>
</tr>
<tr>
<td>Relationship with orther changes'Incident/problem : </td>
<td><TEXTAREA rows="5" cols="80" name="RelationshipChangeange" form="usrform"> </TEXTAREA></td>
</tr>
<tr>
<td>Change Descriptoin (รายละเอียดการ Change) :</td>
<td><TEXTAREA rows="5" cols="80" name="ChangeDes" form="usrform"> </TEXTAREA></td>
</tr>
<tr>
<td>Requester/Change Owner :</td>
<td><TEXTAREA rows="1" cols="30" name="ChangeOwner" form="usrform"> </TEXTAREA></td>
</tr>
<tr>
<td colspan =2>Affected Area : <Input type="checkbox" name="AffectedArea" value="SystemInfra">System/Infra <Input type="checkbox" name="AffectedArea" value="Capacity">Capacity <Input type="checkbox" name="AffectedArea" value="Security">Security<Input type="checkbox" name="AffectedArea" value="DatabaseData">Database/Data <Input type="checkbox" name="AffectedArea" value="Resources">Resources <Input type="checkbox" name="AffectedArea" value="Process">Process <Input type="checkbox" name="AffectedArea" value="Document">Document </td>
</tr>
<tr>
<td colspan =2>Risk or Impact of implementing the change : <Input type="checkbox" name="RiskOrImpact" value="High">High <Input type="checkbox" name="RiskOrImpact" value="Medium">Medium <Input type="checkbox" name="RiskOrImpact" value="Low">Low</td>
</tr>
<tr>
<td>Impact Analysis Description (or attachment) :</td>
<td><TEXTAREA rows="5" cols="80" name="ImpactAnalyDes" form="usrform"> </TEXTAREA></td>
</tr>
<tr>
<td colspan =2>Risk or Impact of Not implementing the change : <Input type="checkbox" name="RiskOrNotImpact" value="High">High <Input type="checkbox" name="RiskOrNotImpact" value="Medium">Medium <Input type="checkbox" name="RiskOrNotImpact" value="Low">Low</td>
</tr>
<tr>
<td>Please explain or attachment :</td>
<td><TEXTAREA rows="3" cols="80" name="RiskAttach" form="usrform"> </TEXTAREA></td>
</tr>
<tr>
<td>Completion Criteria or Expected Results:(Please Explain)</td>
<td><TEXTAREA rows="3" cols="80" name="Criteria" form="usrform"> </TEXTAREA></td>
</tr>
<tr>
<td>Financial Requirement:</td>
<td>Quantity:<br><TEXTAREA rows="2" cols="40"> </TEXTAREA><br><Input type="checkbox" name="Quantity" value="Baht">Baht<Input type="checkbox" name="Quantity" value="Manday">Man-day<Input type="checkbox" name="Quantity" value="Point">Point<Input type="checkbox" name="Quantity" value="Request">Request (select only one)</td>
</tr>
<tr>
<td>Other Terms & Conditions : </td>
<td><TEXTAREA rows="3" cols="80"> </TEXTAREA></td>
</tr>
<tr>
<td>Assets Involved : (Configuration Items,i.e HW,SW,Network,Document,Resources,etc.)</td>
<td>Verified by (CFM) : <br><TEXTAREA rows="1" cols="30"> </TEXTAREA></td>
</tr>
<tr>
<td colspan=2> 1) <TEXTAREA rows="1" cols="30"></TEXTAREA> 2) <TEXTAREA rows="1" cols="30"></TEXTAREA> 3) <TEXTAREA rows="1" cols="30"></TEXTAREA><br> 4) <TEXTAREA rows="1" cols="30"></TEXTAREA> 5) <TEXTAREA rows="1" cols="30"></TEXTAREA> 6) <TEXTAREA rows="1" cols="30"> </TEXTAREA></TEXTAREA></td>
</tr>
<tr>
<td colspan=2>All Dependencies of other components : (ความเกี่ยวข้องกับระบบอื่น ๆ เช่น Network,Servers,Application,etc.) <Input type="checkbox" name="AllDepenofCom" value="Yes">Yes<Input type="checkbox" name="AllDepenofCom" value="No">No</td>
</tr>
<td>Please explain or attachment :</td>
<td><TEXTAREA rows="3" cols="80"> </TEXTAREA></td>
</tr>
</tr>
<td>Requester Manager :<br><TEXTAREA rows="1" cols="30"> </TEXTAREA><br>date:<br><TEXTAREA rows="1" cols="30"> </TEXTAREA></td>
<td><Input type="checkbox" name="StatusAnswer" value="Approve">Approve<Input type="checkbox" name="StatusAnswer" value="Reject">Reject<br> Reason for Rejection: <br><TEXTAREA rows="2" cols="60"> </TEXTAREA></td>
</tr>
</table>
<br>
<br>
<br>

<?// 2nd Page ?>
<table border="1" align="center" width ="992">
<tr>
	<td>DOC ID  : </td>
	<td align="center">A-HOST Company Limited</td>
	<td rowspan = "3"> A-HOST </td>
</tr>
<tr>
	<td>Version :</td>
	<td rowspan="2" align="center">Request for Change form</td>
</tr>
<tr>
	<td>Last Update :</td>
</tr>
</table>
<?
// Section C :release Information
?>
<br>
<table border="1" align=center width ="992" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section C : Release Information</font></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Release Unit : <Input type="checkbox" name="check" value="System">System <Input type="checkbox" name="check" value="Suite">Suite <Input type="checkbox" name="check" value="ApplicationProgram">Application/Program <Input type="checkbox" name="check" value="Module">Module </td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Release Type : <td><Input type="checkbox" name="check" value="MajorRelease">Major release <br><Input type="checkbox" name="check" value="NormalRelease">Normal Release <br><Input type="checkbox" name="check" value="EmergencyRelease">Emergency Release<br></td></td>
<td><font color="#00000" >Release <br>Description :  </font></td>
<td><TEXTAREA rows="5" cols="90"> </TEXTAREA></td></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Release Build Schedule :<br>  From : date <select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
			
time : 			
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
To : 
date <select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
			
time : 			
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
			</td>
<td>Accepted by : <input type="text" name="AcceptedBy" size=13></td>
</tr>


<tr>
<td>Release Test Schedule : <br>From : date <select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
			
time : 			
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
To : 
date <select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
			
time : 			
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
			</td>
<td>Deployed by : <input type="text" name="AcceptedBy" size=13></td>
</tr>
</table>
<?// section D xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx?>
<br>
<table border="1" align=center width ="992" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section D : Deployment Information</font></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Reference to Acceptance Test Environment(or attachment) : </td>
<td rowspan ="3"><TEXTAREA rows="5" cols="100"> </TEXTAREA></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Acceptance Test Pass Criteria(or attachment) :</td>
<td rowspan ="3"><TEXTAREA rows="5" cols="100"> </TEXTAREA></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Fallback Plan : (Please define or attach Fallback Plan and Precedures in detail,if change deployment does not succeed or the result is not OK)</td>
<td rowspan ="3"><TEXTAREA rows="5" cols="100"> </TEXTAREA></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Acceptance Test Schedule :<br>From : date <select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
			
time : 			
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
To : 
date <select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
			
time : 			
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
			</td>
<td>Accepted by : <input type="text" name="AcceptedBy" size=13></td>
</tr>


<tr>
<td>Deployment Schedule    :<br>From : date <select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
			
time : 			
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
To : 
date <select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
			
time : 			
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
			</td>
<td>Deployed by : <input type="text" name="AcceptedBy" size=13></td>
</tr>
</table>

<?// section E xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx?>
<br>
<table border="1" align=center width ="992" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section E : Release and Deployment Review</font></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>Change Owner : <br><input type="text" name="CAB1" size=10> <br> Date : <br><select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select width="3" name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
					
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
			</td>
			<td> 
			<Input type="checkbox" name="check" value="Approve">Approve <br><Input type="checkbox" name="check" value="Reject">Reject
			</td>
			<td>Reason for Rejection : </td>
			<td>
			<TEXTAREA rows="5" cols="80"> </TEXTAREA>
			</td>
</tr>
</table>
<br>
<?// section F xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx?>

<table border="1" align=center width ="992" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section F : CAB Approval</font></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td>CAB # 1 : <br><input type="text" name="CAB1" size=10> <br> Date : <br><select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select width="3" name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
					
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
			</td>
			<td> 
			<Input type="checkbox" name="check" value="Approve">Approve <br><Input type="checkbox" name="check" value="Reject">Reject
			</td>
			<td>Reason for Rejection : </td>
			<td>
			<TEXTAREA rows="5" cols="80"> </TEXTAREA>
			</td>
</tr>
<tr>
<td>CAB # 2 : <br><input type="text" name="CAB1" size=10> <br> Date : <br><select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select width="3" name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
					
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
			</td>
			<td> 
			<Input type="checkbox" name="check" value="Approve">Approve <br><Input type="checkbox" name="check" value="Reject">Reject
			</td>
			<td>Reason for Rejection : </td>
			<td>
			<TEXTAREA rows="5" cols="80"> </TEXTAREA>
			</td>
</tr>
<tr>
<td>CAB # 3 : <br><input type="text" name="CAB1" size=10> <br> Date : <br><select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select width="3" name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
					
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
			</td>
			<td> 
			<Input type="checkbox" name="check" value="Approve">Approve <br><Input type="checkbox" name="check" value="Reject">Reject
			</td>
			<td>Reason for Rejection : </td>
			<td>
			<TEXTAREA rows="5" cols="80"> </TEXTAREA>
			</td>
</tr>
<br>
</table>

<?// section G xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx?>

<br>
<table border="1" align=center width ="992" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section G : Release and Deployment Review</font></td>
</tr>
</table>
<table border="1" align=center width ="992">
<tr>
<td> Change Successful : <br> <Input type="checkbox" name="ChangeSuccessful" value="Yes">Yes <Input type="checkbox" name="ChangeSuccessful" value="No">No</td>
<td colspan="2"> If not successful,please explain or attachment : </td>
<td><TEXTAREA rows="5" cols="80"> </TEXTAREA></td>
</tr>
<tr>
<td>Create Incident for <br>Investigation :  <br>
<Input type="checkbox" name="CreateIncidentForInvestigation" value="Yes">Yes <Input type="checkbox" name="CreateIncidentForInvestigation" value="No">No</td> </td>
<td> Incident No. : <input type="text" name="IncidentNo" size=13> </td>
<td> Change Review By  : <input type="text" name="IncidentNo" size=13> </td>
<td colspan="2"> Date : <select name='sD1' id='sD1'>
<?php								
			for($i=1;$i<=31;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
			 
?>
			</select>
			 <select name="sM1" id="sM1">
            <option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="Apr">Apr</option>
			<option value="May">May</option>
			<option value="Jun">Jun</option>
			<option value="Jul">Jul</option>
			<option value="Aug">Aug</option>
			<option value="Sep">Sep</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name='sY1' id='sY1'>
<?php
			for($i=2017;$i<=2100;$i++){
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
?>
			</select>
					
			<select name='sHr1' id='sHr1'>
<?php
			for($i=0;$i<=23;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select>
						<select name='sMi1' id='sMi1'>
<?php
			for($i=0;$i<=59;$i++){
				$i2=sprintf("%02d",$i); 
				echo '<option value="'.$i2.'">'.$i2.'</option>';
			 }
?>
			</select></td>
</tr>
</table>
<div id="no_print">
<button type="button" value="Print" onclick="window.print();" media="noprint"> Click </button>
</div>
</body>
</html>
<?Php /*
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4', '0', 'THSaraban');
$pdf->SetAutoFont();
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);
$pdf->Output();
?>    
ดาวโหลดรายงานในรูปแบบ PDF <a href="MyPDF/MyPDF.pdf">คลิกที่นี้</a> */