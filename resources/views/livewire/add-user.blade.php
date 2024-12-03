
    {{-- The whole world belongs to you. --}}
	<form wire:submit.prevent="submit">
		<div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input type="text" id="name" class="form-control" wire:model="name" />
			@error('name') <span class="text-danger">{{$message}}</span> @enderror
		</div>
				<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="text" id="email" class="form-control" wire:model="email" />
			@error('email') <span class="text-danger">{{$message}}</span> @enderror
		</div>
		<div class="mb-3">
			<label for="number" class="form-label">Number</label>
			<input type="text" id="number" class="form-control" wire:model="number" />
			@error('number') <span class="text-danger">{{$message}}</span> @enderror
		</div>
		<button type="submit" class="btn btn-primary">Add User</button>
	</form>
