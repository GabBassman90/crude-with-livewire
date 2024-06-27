<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customers;

class Create extends Component
{

    //campi da riempire

    public $name = '';
    public $email = '';

    public function render()
    {
        return view('livewire.create');
    }


    public function save()
    {
        $validate = $this->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:70|unique:customers,email'
        ]);
        Customers::create($validate);

        $this->reset();
    }
}