<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class ShowCustomer extends Component
{
    private $data;

    public $search;

    protected $queryString = ['search'];

    protected $listeners = ['emitData'];

    public function emitData()
    {
    }

    public function render()
    {
        $this->data = [
            "customers" => Customer::where('name', 'like', '%' . $this->search . '%')->get(),
        ];
        return view('livewire.show-customer', $this->data);
    }

    public function deleteCustomer($id)
    {
        try {
            Customer::where('id', $id)->delete();
        } catch (\Throwable $th) {
            logger($th);
        }
    }
}
