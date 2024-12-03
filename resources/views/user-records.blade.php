<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Records</title>
	@livewireStyles
</head>
<body>
@yield('content')
<div class="container mt-5">
	<h1>User Records</h1>

	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
		Add User
	</button>
	<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					@livewire('add-user')
				</div>
			</div>
		
		</div>		
	</div>		


	<div class="mt-4">
	
		<livewire:records />
	</div>
</div>
	
	@livewireScripts
	<script>
		window.addEventListener('close-modal', () => {
			const modalElement = document.getElementById('addUserModal');
			if(modalElement){
				console.log("Modal found, hiding now");
				const modal = bootstrap.Modal.getInstance(modalElement);
				modal.hide();
			} else {
				console.log('Modal element not found');
			}
		});
	
		window.addEventListener('open-edit-modal', () => {
			const modal = new bootstrap.Modal(document.getElementById('editUserModal'));
			modal.show();
		});

		window.addEventListener('close-edit-modal', () => {
			const modal = bootstrap.Modal.getInstance(document.getElementById('editUserModal'));
			modal.hide();
		});
	</script>
	
</body>
</html>
