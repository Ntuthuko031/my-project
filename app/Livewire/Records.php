<?php



namespace App\Livewire;

use App\Models\UserRecord;
use Livewire\WithPagination;
use Livewire\Component;

class Records extends Component
{
	
    protected $listeners = ['refresh-records' => 'mount'];
    
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $user;

    public $editUser;

    public  $name;

    public $email;

    public $number;

    public $perPage = 5;


    public function mount()
    {
    	$this->users = UserRecord::paginate(5);
    }


    public function refreshRecords(){
	$this->mount();
	$this->resetPage();
    }

    public function userEdit($userId){
	$this->editUser = UserRecord::find($userId);
	$this->name = $this->editUser->name;
	$this->email = $this->editUser->email;
	$this->number = $this->editUser->number;
	
	$this->dispatch('open-edit-modal');
    }

    public function saveUser(){
    	if($this->editUser) {
	   $this->editUser->update([
		'name' => $this->name,
		'email' => $this->email,
		'number' => $this->number
	   ]);
	}
	
	$this->editUser = null;
        $this->reset(['name', 'email', 'number']);
        $this->refreshRecords();

        $this->dispatch('close-edit-modal');
    }

    public function deleteUser($userId)
    {
	UserRecord::destroy($userId);
	$this->refreshRecords();
    }

    public function render()
    {
	$users = UserRecord::paginate($this->perPage);

        return view('livewire.records', ['users' => $users]);
    }
}
