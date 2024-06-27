<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customers;

class Edit extends Component
{
    public $customer;
    public $name;
    public $email;

    public function mount(Customers $customer)
    {
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->email = $customer->email;
    }

    public function updateUser()
    {
        $validated = $this->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
        ]);

        $this->customer->update($validated);
        session()->flash('success', 'user updated succesfully');
        return $this->redirect('/users', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit');
    }
}