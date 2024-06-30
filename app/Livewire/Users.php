<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\customers;

class Users extends Component
{

    public $customers = [];

    public function mount()
    {
        $this->customers = Customers::all();
    }

    public function render()
    {
        return view('livewire.users');
    }

    public function deleteCustomer(customers $customer)
    {
        $customer->delete();
        return $this->redirect('/users', navigate: true);
    }
}