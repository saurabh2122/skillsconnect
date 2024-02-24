<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use CodeIgniter\Controller;

class EmployeeController extends Controller
{
    public function index(){
        return view("employee_form");
    }
    public function create()
    {
        $model = new EmployeeModel();

        $data = [
            'fname' => $this->request->getPost('fname'),
            'mname' => $this->request->getPost('mname'),
            'lname' => $this->request->getPost('lname'),
            'Gender' => $this->request->getPost('Gender'),
            'mail' => $this->request->getPost('mail'),
            'mobile_no' => $this->request->getPost('mobile_no'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'photograph' => $this->request->getPost('photograph'),
            'status' => $this->request->getPost('status'),
        ];

        $model->insert($data);

        return redirect()->to('/employee/list'); // Redirect to employee listing page after insertion
    }
}
