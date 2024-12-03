<div>
	<div class="modal fade" id="editUserModal" tabIndex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5>Edit User</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form wire:submit.prevent="saveUser">
						<div class="mb-3">
							<label for="name" class="form-label">Name</label><br>
							<input type="text" id="name" wire:model="name" />
						</div>
						
						<div class="mb-3">
							<label for="email" class="form-label">Email</label><br>
							<input type="text" id="email" wire:model="email" />
						</div>
						
						<div class="mb-3">
							<label for="number" class="form-label">Number</label><br>
							<input type="text" id="number" wire:model="number" />
						</div>

						<button type="submit" class="btn btn-primary">Save Changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
    {{-- The Master doesn't talk, he acts. --}}
	
	<table class="table">

	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Number</th>
		</tr>
	</thead>	

	<tbody>
			@foreach ($users as $user) 
			<tr>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->number }}</td>
				<td><button wire:click="userEdit({{ $user->id }})" class="btn btn-warning btn-sm"> Edit </button></td>
				<td><button wire:click="deleteUser({{ $user->id }})" class="btn btn-danger btn-sm"> Delete </button></td>
			</tr>
		@endforeach
	</tbody>
	</table>

	<div class="d-flex justify-content-center">
		{{ $users->links() }}
	</div>
</div>

					
