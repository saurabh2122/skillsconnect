<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressModel extends Model
{
    protected $table = 'address';
    protected $primaryKey = 'aid';
    protected $allowedFields = ['employee_id', 'add_line1', 'add_line2', 'Country', 'state', 'pincode'];
}
