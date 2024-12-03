<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\UserRecord;


class AddUser extends Component
{
	public $name, $email, $number;

	protected $messages = [
		'number.regex' => 'Invalid number entered, phone number must start with 07',
	];

	protected $rules = [
		'name' => 'required|string|max:255',
		'email' => 'required|email|unique:user_records,email',
		'number' => 'required|string|regex:/^07\d{9}$/',
	];	

	public function submit()
	{
		$this -> validate();

		UserRecord::create([
			'name' => $this->name,	
			'email' => $this->email,
			'number' => $this->number,
		]);

		

		$this->reset();
		$this->dispatch('refresh-records');
		$this->dispatch('close-modal');
	}

    public function render()
    {
        return view('livewire.add-user');
    }
}
