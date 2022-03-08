<?php

namespace App\Http\Livewire;

use App\Models\Customer as ModelsCustomer;
use Livewire\Component;

class Customer extends Component
{
    // public $name = [];
    // public $email = [];
    // public $phone = [];
    // public $about = [];

    // public function save()
    // {
    //     dd(request());
    //     $validatedData = request()->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'phone' => 'required',
    //         'about' => 'required',
    //     ]);

    //     ModelsCustomer::create($validatedData);
    // }

    public $name;

    public $email;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'about' => 'required',
    ];


    public function save()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        ModelsCustomer::create([

            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'about' => $this->about,

        ]);

    }

    public function render()
    {
        return view('livewire.customer');
    }
}
