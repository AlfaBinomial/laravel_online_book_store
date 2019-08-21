<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
</head>
<body>
	@if(count($errors)>0)
		<ul>
				@foreach($errors->all() as $error)
				<li>
					{{$error}}
				</li>
				@endforeach
		</ul>
	@endif
	<form  method='get' action = "{{URL::to('/registrationProcess')}}">
		<h1 align="center">Free Online Registration</h1>
		<table align="center">
			<tr>
				<td>
					User Name
				</td>
				<td>
					<input type = 'text' name = 'user_Name'>
				</td>
			</tr>
			<tr>
				<td>
					Contact Email
				</td>
				<td>
					<input type = 'text' name = 'user_Email'>
				</td>
			</tr>
			<tr>
				<td>Contact Number </td>
				<td>
					<input type = 'text' name = 'user_Contact'>
				</td>
			</tr>
			<tr>
				<td> Password </td>
				<td> <input type = 'Password' name = 'user_password'> </td>
			</tr>
			<tr>
				<td> Confirm Password </td>
				<td><input type = 'Password' name = 'user_Confirm_password'> </td>
			</tr>
			<tr>
				<td> </td>
				<td> <input type = 'hidden' name = 'token' value = "{{csrf_token()}}">  </td>
			</tr>
			<tr>
				<td> </td>
				<td> <input type="submit" name="user_sumbit" value = 'Register'> </td>
			</tr>
			<tr>
				<td> <a href = 'http://localhost:8000'>Go Back To Home</a></td>
				<td> </td>
			</tr>
			<tr>

				<td>
					<a href = 'http://localhost:8000/logPage'>Go To Log In</a>
				</td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>
