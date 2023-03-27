<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserSearch extends Component
{
    use WithPagination;


    public string $search = '';

    protected $queryString = ['search'];

    public function render()
    {
        $query = User::query();
        if ($this->search) {
            $query->where('id', 'like', "%{$this->search}%")
                ->orWhere('name', 'like', "%{$this->search}%")
                ->orWhere('email', 'like', "%{$this->search}%")
                ->orWhere('email_verified_at', 'like', "%{$this->search}%");

        }

        $users = $query->paginate(20);

        return view('livewire.user-search', [
            'users' => $users
        ]);
    }

    public function updated($property)
    {
        if ($property === 'search') {
            $this->resetPage();
        }
    }
}