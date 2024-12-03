<div class="container mt-4">
    {{-- Nothing in the world is as soft and yielding as water. --}}
	<h2>User Details</h2>
	<div class="card">
		<div class="card-body">
			<h5>{{ $user->name }}</h5>
			<p>
			     <strong>Email:</strong> <input type="text" value={{ $user->email }} /><br>
			     <strong>Number:</strong> <input type="text" value={{ $user->number }}
			</p>
		</div>
	</div>
</div>
