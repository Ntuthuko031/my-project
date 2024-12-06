<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		<meta charset="UTF-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@livewireStyles
	<title>Login</title>	
	</head>	
	<body>
			<div class="container">
				<h2>Login</h2>
				
				@if ($errors->any())
					<div>
						@foreach($errors->all() as $error)

							<p>{{ $error }}</p>
						@endforeach
					</div>
				@endif

				<form action="{{ route('login') }}" method="POST">
					@csrf
				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="email" name="email" class="form-control" value="{{ old('email') }}" required />
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" required />
				</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>

				<a href="#">Don't have an acount? Register</a>

			</div>
	@livewireScripts
	</body>
</html>
