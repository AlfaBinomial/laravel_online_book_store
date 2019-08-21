<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patients List</title>
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
	<h1>Patients List !</h1>
	<h2 align="right"> <a href = 'http://localhost:8000/registerList'>Back</a></h2>
	<table align="center" border="1px" cellspacing="0">
		<tr>
			<td> <b>User Name</b></td>
			<td><b>User Email</b> </td>
			<td> <b>Contact Number</b></td>
			<td><b>User Type</b></td>
		</tr>
	@foreach($patientList as $eachPatient)
		<tr>
			<td><b>{{$eachPatient->userName}}</b></td>
			<td><b>{{$eachPatient->userEmail}}</b></td>
			<td><b>{{$eachPatient->userContact}}</b></td>
			<td><b>{{$eachPatient->userType}}</b></td>
		</tr>
	@endforeach
</body>
</html>