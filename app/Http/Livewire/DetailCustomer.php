<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class DetailCustomer extends Component
{
    private $customer;

    public function mount(Customer $customer){
        $this->customer = $customer;
    }

    public function render()
    {
        $data = [
            "customer" => $this->customer,
        ];
        return view('livewire.detail-customer', $data);
    }
}
