<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
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
	<form method="get" action="{{URL::to('/loginUserChecking')}}">
		<h1 align="center">Log In</h1>
		<table align="center">
			<tr>
				<td>User Email : </td>
				<td><input type="text" name="login_email"></td>
			</tr>
			<tr>
				<td>User Password :</td>
				<td><input type="Password" name="login_password"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type = 'submit' name='LogIn'>
				</td>
			</tr>
			<tr>
				<td>
					 <a href = 'http://localhost:8000/registrationPage'>Go Back To Registration</a>
				</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td>
					 <a href = 'http://localhost:8000'>Go Back To Home</a>
				</td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>