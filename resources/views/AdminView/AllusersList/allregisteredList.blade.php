<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>showing information</title>
</head>
<body>
	<div align="right">

		<h3>View User As Type</h3>
	</div>
	<h1 align="center">Admin Section</h1>
	<h3 align="center">Register Information</h3>
	<table align = "right">
		<tr>
				<td>
							<h2><a href = 'http://localhost:8000/adminProfilePage'>Back</a></h2>
				</td>
		</tr>

	</table>
	<table align="center" border="1px" cellspacing="0">
		<tr>
			<td> <b>User Name</b></td>
			<td><b>User Email</b> </td>
			<td> <b>Contact Number</b></td>
			<td><b>User Type</b></td>
		</tr>
	@foreach($registers as $eachRegister)
		<tr>
			<td><b>{{$eachRegister->userName}}</b></td>
			<td><b>{{$eachRegister->userEmail}}</b></td>
			<td><b>{{$eachRegister->userContact}}</b></td>
			<td><b>{{$eachRegister->userType}}</b></td>

		</tr>
	@endforeach
	</table>
</body>
</html>
