<?php

namespace App\Controllers;

use App\Models\AddressModel;
use CodeIgniter\Controller;

class AddressController extends Controller
{ 
    public function index(){
        return view('Address_form');
    }
    public function addAddress()
    {
        $addressModel = new AddressModel();

        // Assuming you get data from a form, adjust accordingly
        $data = [
            'employee_id' => $this->request->getPost('employee_id'),
            'add_line1' => $this->request->getPost('add_line1'),
            'add_line2' => $this->request->getPost('add_line2'),
            'Country' => $this->request->getPost('Country'),
            'state' => $this->request->getPost('state'),
            'pincode' => $this->request->getPost('pincode')
        ];

        // Insert the data
        $addressModel->insert($data);

        // Optionally, you can redirect or do something else after insertion
        return redirect()->to('/success');
    }
}
