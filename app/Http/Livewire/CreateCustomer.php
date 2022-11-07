<?php

namespace App\Http\Livewire;

use App\Helpers\CommonGeneric;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCustomer extends Component
{
    use WithFileUploads;

    public $name, $phone, $image;


    protected $rules = [
        'name' => 'required|max:255',
        'phone' => 'required|max:13|unique:customers,phone',
        'image' => 'image|max:3072'
    ];

    public function store()
    {
        $this->validate();

        try {
            $path = $this->image->storeAs('/images', CommonGeneric::generateImageName($this->name, "png"));

            $customer = Customer::create([
                'name' => $this->name,
                'phone' => $this->phone,
                'image' => $path,
            ]);

            if ($customer != null) {
                return redirect('/');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function render()
    {
        $this->pathImage = [
            "path" => asset('images/default-image.png'),
        ];
        return view('livewire.create-customer', $this->pathImage);
    }
}
