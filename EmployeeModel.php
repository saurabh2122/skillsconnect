<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'eid';
    protected $allowedFields = ['fname', 'mname', 'lname', 'Gender', 'mail', 'mobile_no', 'date_of_birth', 'photograph', 'status'];
}
