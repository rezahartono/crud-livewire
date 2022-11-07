<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    private $data;

    public function homepage()
    {
        $this->data = [
            "title" => "Homepage"
        ];
        return view('pages.homepage', $this->data);
    }

    public function createCustomer()
    {
        $this->data = [
            "title" => "Create Customer"
        ];
        return view('pages.create-customer', $this->data);
    }

    public function editCustomer($id)
    {
        $this->data = [
            "title" => "Edit Customer",
            "id" => $id,
        ];
        return view('pages.edit-customer', $this->data);
    }
}
