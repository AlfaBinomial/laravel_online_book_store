<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Notice	
	</title>
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
				<td></td>
				
			</tr>
		</table>
	<div>
		<h1 align="center">
			<a href = 'http://localhost:8000/noticeView'>ALL NOTICES</a>
		</h1>
	</div>
	<h2 align="right"> <a href = 'http://localhost:8000/registerList'>Back</a></h2>
		<div>
				<form method = 'get' action = "{{URL::to('/registerList/OnNoticeOperation/noticeInsertion')}}" > 
		@if(count($errors)>0)
		<ul>
				@foreach($errors->all() as $error)
				<li>
					{{$error}}
				</li>  
				@endforeach
		</ul>
		@endif
		<table>
			<tr>
				<td><h1>Create Notice</h1></td><td></td>
			</tr>
			<tr>
				<td><b>Select User Type</b></td><td></td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<select name = 'user_Type_Notice'>
						<option>Doctors</option>
						<option>Stuff</option>
						<option>Patient</option>
						<option>All</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Date </td>
				<td>
					<input type="text" name='notice_date' placeholder="Date">
				</td>
			</tr>
			<tr>
				<td><b>Notice_discription</b></td>
				<td>
					<textarea rows=10 cols = 100 name='Notice_discription'>
					</textarea><br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="notice_button" value = 'Hit Notice'>
				</td>
			</tr>
		</table>
	</form>
		</div>
	<form action="{{URL::to('/registerList/OnNoticeOperation/delete_notice')}}" method="get">
		<table>
			<tr>
				<td>
					<h2>Delete A Notice</h2>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					<b>Notice Id No : </b>
				</td>
				<td>
					<input type="text" name="delete_notice">
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" name="delete_Button">
				</td>
			</tr>
		</table>
	</form>
	<form action="{{URL::to('/registerList/OnNoticeOperation/update_notice')}}" method="get">
		<table>
			<tr>
				<td>
					<h2>Update A Notice</h2>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					<b>Notice Id No: </b>
				</td>
				<td>
					<input type="text" name="update_noticeId">
				</td>
			</tr>
			<tr>
				<td>
					<b>Notice Discription</b>
				</td>
				<td>
					<textarea rows=10 cols = 100 name='update_Notice_discription'>
					</textarea><br>
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit" name="update_noticeBtn" value='Update'>
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
