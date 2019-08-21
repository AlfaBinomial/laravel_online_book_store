<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hospital Stuff</title>
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
		<form>
		<h1>Hospital Officer Stuff List !</h1>
		<h2 align="right"> <a href = 'http://localhost:8000/registerList'>Back</a></h2>
		<table align="center" border="1px" cellspacing="0">
			<tr>
				<td> <b>User Id</b></td>
				<td> <b>User Name</b></td>
				<td><b>User Email</b> </td>
				<td> <b>Contact Number</b></td>
				<td><b>User Type</b></td>
			</tr>
		@foreach($StuffList as $eachStuff)
			<tr>
				<td><b>{{$eachStuff->id}}</b></td>
				<td><b>{{$eachStuff->userName}}</b></td>
				<td><b>{{$eachStuff->userEmail}}</b></td>
				<td><b>{{$eachStuff->userContact}}</b></td>
				<td><b>{{$eachStuff->userType}}</b></td>
			</tr>
		@endforeach
		</table>
	</form>
	<form action="{{URL::to('/registerList/officeStuffList/deleteStuff_info')}}" method="get">
		<h1>Delete Stuff Information</h1>
		<table>
			<tr>
				<td>
					<b>Stuff's Id :</b>
				</td>
				<td>
					<input type="text" name="Stuff_userId">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit" value="Delete" name="Stuff_info_delete_btn">
				</td>
			</tr>
		</table>
	</form>
	<form action = "{{URL::to('/registerList/officeStuffList/upTodateStuff')}}" method="get">
		<h1>Update Stuff Information</h1>
		<table>
		
			<tr>
		<form >
				<td><b>Stuff Email</b></td>
				<td>
					
					<input type="text" name="stuff_mail">
				</td>
			</tr>
			
			<tr>
				<td>
					<b>Stuff Contact Number</b>
					
				</td>
				<td>
					<input type="text" name="StuffContact">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit"  name="update_stuff_info">
				</td>
			</tr>
		</table>
		@if(count($errors)>0)
		<ul>
				@foreach($errors->all() as $error)
				<li>
					{{$error}}
				</li>  
				@endforeach
		</ul>
	@endif
	</form>
</body>
</html>