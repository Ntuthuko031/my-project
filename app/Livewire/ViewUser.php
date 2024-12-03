<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserRecord;

class ViewUser extends Component
{
    public $user;

    public function mount($id){
	$this->user = UserRecord::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.view-user');
    }
}
