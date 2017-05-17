<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?
// Header
?>
<table border="1" align="center" width ="80%">
<tr>
	<td>DOC ID  : </td>
	<td>Test</td>
	<td rowspan = "3"> test</td>
</tr>
<tr>
	<td>Version :</td>
	<td rowspan="2">Request for Change form</td>
</tr>
<tr>
	<td>Last Update :</td>
</tr>
</table>
<?
// Section C :release Information
?>
<br>
<table border="1" align=center width ="80%" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section C : Release Information</font></td>
</tr>
</table>
<table border="1" align=center width ="80%">
<tr>
<td>Release Unit : <Input type="checkbox" name="check" value="System">System <Input type="checkbox" name="check" value="Suite">Suite <Input type="checkbox" name="check" value="ApplicationProgram">Application/Program <Input type="checkbox" name="check" value="Module">Module </td>
</tr>
</table>
<table border="1" align=center width ="80%">
<tr>
<td>Release Type : <td><Input type="checkbox" name="check" value="MajorRelease">Major release <br><Input type="checkbox" name="check" value="NormalRelease">Normal Release <br><Input type="checkbox" name="check" value="EmergencyRelease">Emergency Release<br></td></td>
<td><font color="#00000">Release Description :  </font></td>
<td><TEXTAREA rows="5" cols="90"> </TEXTAREA></td></td>
</tr>
</table>
<table border="1" align=center width ="80%">
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
<table border="1" align=center width ="80%" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section D : Deployment Information</font></td>
</tr>
</table>
<table border="1" align=center width ="80%">
<tr>
<td>Reference to Acceptance Test Environment(or attachment) : </td>
<td rowspan ="3"><TEXTAREA rows="5" cols="100"> </TEXTAREA></td>
</tr>
</table>
<table border="1" align=center width ="80%">
<tr>
<td>Acceptance Test Pass Criteria(or attachment) :</td>
<td rowspan ="3"><TEXTAREA rows="5" cols="100"> </TEXTAREA></td>
</tr>
</table>
<table border="1" align=center width ="80%">
<tr>
<td>Fallback Plan : (Please define or attach Fallback Plan and Precedures in detail,if change deployment does not succeed or the result is not OK)</td>
<td rowspan ="3"><TEXTAREA rows="5" cols="100"> </TEXTAREA></td>
</tr>
</table>
<table border="1" align=center width ="80%">
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
<table border="1" align=center width ="80%" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section E : Release and Deployment Review</font></td>
</tr>
</table>
<table border="1" align=center width ="80%">
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

<table border="1" align=center width ="80%" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section F : CAB Approval</font></td>
</tr>
</table>
<table border="1" align=center width ="80%">
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
<table border="1" align=center width ="80%" bgcolor="#000000">
<tr>
<td><font color="#FFFFF">Section G : Release and Deployment Review</font></td>
</tr>
</table>
<table border="1" align=center width ="80%">
<tr>
<td> Change Successful :  <Input type="checkbox" name="ChangeSuccessful" value="Yes">Yes <Input type="checkbox" name="ChangeSuccessful" value="No">No</td>
<td colspan="2"> If not successful,please explain or attachment : </td>
<td><TEXTAREA rows="5" cols="80"> </TEXTAREA></td>
</tr>
<tr>
<td>Create Incident for Investigation :  <br>
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
<button type="button" value="Print" onclick="window.print();" media="noprint"></button>

</body>
</html>