<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" >
		<meta name="viewport" content="width=device-width, intial-scale=1.0" >
		<title>Register</title>
	</head>
	<body> 
		<div>
			<h2>Register</h2>
			
			<form action="{{ route('register') }}" method="POST">
				@csrf


				<label for="name">Name </label> 
				<input type="name" name="name" value="{{ old('name') }}" />

				<label for="email">Email </label> 
				<input type="email" name="email" value="{{ old('email') }}" />


				<label for="password">Password </label> 
				<input type="password" name="password" required />


				<label for"password_confirmation">Confirm Password</label> 
				<input type="password" name="password_confirmation" required />

				<button type="submit">Register</button>
			</form>

			<a href="/login">Already have an account? Login</a>
		</div>
	</body>
</html>

	
