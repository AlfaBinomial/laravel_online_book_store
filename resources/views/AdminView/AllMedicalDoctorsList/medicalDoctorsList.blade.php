<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medical Doctors List</title>
</head>
<body>
	<table align="right">
			<tr>
				<td><b> <a href = 'http://localhost:8000/registerList/medicalDoctorsList'>All Medical Doctors List</a></b></td>
				<td></td>
				<td></td>
				<td><b><a href = 'http://localhost:8000/registerList/officeStuffList'>All Office Stuff  List</a></b></td>
				<td></td>
				<td></td>
				<td><b> <a href = 'http://localhost:8000/registerList/patientList'>All Patient List</a></b></td>
				<td></td>
				<td></td>
				<td><b> <a href = 'http://localhost:8000/registerList/OnNoticeOperation'>Notice Section</a></b></td>
				<td></td>
				<td><b><a href = 'http://localhost:8000/registerList/live_search'>Search SomeOne</a></b></td>
				
			</tr>
		</table>
	<form action="{{URL::to('/registerList/medicalDoctorsList')}}" method="get">
		<h1>Medical Doctors !</h1>
		<h2 align="right"> <a href = 'http://localhost:8000/registerList'>Back</a></h2>
		<table align="center" border="1px" cellspacing="0">
			<tr>
				<td> <b>User Id</b></td>
				<td> <b>User Name</b></td>
				<td><b>User Email</b> </td>
				<td> <b>Contact Number</b></td>
				<td><b>User Type</b></td>
			</tr>
		@foreach($doctorsList as $eachDoctor)
			<tr>
				<td><b>{{$eachDoctor->id}}</b></td>
				<td><b>{{$eachDoctor->userName}}</b></td>
				<td><b>{{$eachDoctor->userEmail}}</b></td>
				<td><b>{{$eachDoctor->userContact}}</b></td>
				<td><b>{{$eachDoctor->userType}}</b></td>

			</tr>
		@endforeach
		</table>
	</form>
	<form action="{{URL::to('/registerList/medicalDoctorsList/deleteDoctors')}}" method="get">
		<h1>Delete A Doctors Information</h1>
		<table>
			<tr>
				<td>
					<b>Doctor's Id :</b>
				</td>
				<td>
					<input type="text" name="Doctors_userId">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit" name="Doctors_info_delete_btn">
				</td>
			</tr>
		</table>
		<div>
			@if(count($errors)>0)
				<ul>
						@foreach($errors->all() as $error)
						<li>
							{{$error}}
						</li>  
						@endforeach
				</ul>
			@endif
		</div>
	</form>
	<form action="{{URL::to('/registerList/medicalDoctorsList/doctorInfo')}}" method="get">
		<h1>Update Doctors Information</h1>
		<table>
			<tr>
				<td>
					<b>Doctors Id:</b> 
					
					

				</td>
				<td>
					<input type="text" name="doctorId" value="">
				</td>
			</tr>
			<tr>
				<td>
				
				</td>
				<td>
					<input type="submit" name="doctorId_toSearchBtn" value="Search">
				</td>
		</form>
			</tr>
			<tr>
		<form action="{{URL::to('/registerList/medicalDoctorsList/doctorUpdateLink')}}" method= "get">
				<td><b>Doctor Email</b></td>
				<td>
					
					<input type="text" value='<?php if(!empty($doctorInformation)){print_r($doctorInformation);}else echo "";?>' name="doctor_mail">
				</td>
			</tr>
			
			<tr>
				<td>
					<b>Doctor Contact Number</b>
					
				</td>
				<td>
					<input type="text" value='<?php if(!empty($doctorInformation)){print_r($doctorInformation);}else echo "";?>'  name="doctorContact">
				</td>
			</tr>
			<tr>
				<td>
					<b>Change Profession</b>
				</td>
				<td>
					<select name="user_type">
						<option>Doctors</option>
						<option>Stuff</option>
						<option>Patient</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit"  name="update_doctor_info">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>