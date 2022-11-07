<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCustomer extends Component
{
    use WithFileUploads;

    private $customer;

    public $name, $phone, $image;

    public function mount($id)
    {
        $this->customer = Customer::where('id', $id)->first();
        $this->name = $this->customer->name;
        $this->phone = $this->customer->phone;
        $this->image = $this->customer->image;
    }

    public function render()
    {
        $data = [
            "customer" => $this->customer,
        ];
        return view('livewire.edit-customer', $data);
    }
}
