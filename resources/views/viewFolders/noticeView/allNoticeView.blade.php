<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notices</title>
</head>
<body>
	
	<h1>All Notices List :</h1>
	<h2 align="right"> <a href = 'http://localhost:8000/registerList'>Back</a></h2>
	<table align="center" border="1px" cellspacing="0">
		<tr>
			<td> <b>Notice No:</b></td>
			<td><b>Notice Post Date</b> </td>
			<td> <b>Notice Type</b></td>
			<td><b>Notice Description</b></td>
		</tr>
	@foreach($notices as $eachNotice)
		<tr>
			<td><b>{{$eachNotice->id}}</b></td>
			<td><b>{{$eachNotice->Date}}</b></td>
			<td><b>{{$eachNotice->userType}}</b></td>
			<td><b>{{$eachNotice->notice_Description}}</b></td>
		</tr>
	@endforeach
	</table>
</body>
</html>