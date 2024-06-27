<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customers;

class User extends Component
{

    public $customer = [];

    public function mount(Customers $customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.user');
    }
}